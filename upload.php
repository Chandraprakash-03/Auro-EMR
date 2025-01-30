<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session for potential future use
session_start();

// Include database connection
include("dbconnection.php");

// Check database connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// ImageKit API credentials
$public_key = "public_wMwcf7MANzLfyg2O9VB0BLQf/ZE="; 
$private_key = "private_siIfjzUsfV/wD/CkrU6nexhA6Fo="; 
$url_endpoint = "https://upload.imagekit.io/api/v1/files/upload";

// Function to sanitize input
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Get the original file extension
        $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
        // Get and sanitize the title from the form
        $original_title = sanitize_input($_POST['title']);
        
        // Create a URL-friendly version of the title
        $safe_title = preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($original_title));
        
        // Create the filename using the safe title and original extension
        $file_name = $safe_title . '.' . $file_extension;
        
        $role_id = filter_var($_POST['role_id'] ?? 0, FILTER_VALIDATE_INT);
        $file_type = sanitize_input($_POST['file_type'] ?? '');
        
        if (empty($original_title) || !$role_id || empty($file_type)) {
            throw new Exception("All fields are required");
        }

        // Validate file upload
        if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("File upload error: " . $_FILES['file']['error']);
        }

        $file = $_FILES['file'];
        
        // Validate file size (up to 2GB)
        if ($file['size'] > 2 * 1024 * 1024 * 1024) {
            throw new Exception("File size must be less than 2GB");
        }

        // Define role-to-folder mapping
        $role_folders = [
            1 => 'Admin',
            2 => 'Doctor',
            3 => 'Nurse',
            4 => 'Patient'
        ];

        // Define file type-to-folder mapping
        $file_type_folders = [
            'ppt' => 'PPT',
            'video' => 'Videos',
            'document' => 'Documents'
        ];

        // Validate role and file type
        if (!isset($role_folders[$role_id]) || !isset($file_type_folders[$file_type])) {
            throw new Exception("Invalid role or file type");
        }

        // Construct folder path
        $folder_path = $role_folders[$role_id] . '/' . $file_type_folders[$file_type];
        
        // Generate ImageKit authentication parameters
        $token = bin2hex(random_bytes(16));
        $expire = strtotime('+30 minutes');
        $signature = hash_hmac('sha1', $token . $expire, $private_key);

        // Prepare upload parameters
        $post_fields = [
            'file' => new CURLFile($file['tmp_name'], $file['type'], $file_name),
            'fileName' => $file_name,  // Using the title-based filename
            'folder' => $folder_path,
            'useUniqueFileName' => 'false',  // Set to false to use our custom filename
            'token' => $token,
            'expire' => $expire,
            'signature' => $signature,
            'publicKey' => $public_key
        ];

        // Initialize cURL
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url_endpoint,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $post_fields,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 120, // Increase timeout to 2 minutes (120 seconds)
            CURLOPT_VERBOSE => true // Enable verbose mode for debugging
        ]);

        // Execute upload request
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            throw new Exception("Upload failed: " . curl_error($ch));
        }
        
        curl_close($ch);

        // Parse response
        $response_data = json_decode($response, true);
        
        if (!isset($response_data['url'])) {
            throw new Exception("Upload failed: " . ($response_data['message'] ?? 'Unknown error'));
        }

        // Get the file URL from response
        $file_url = $response_data['url'];

        // Prepare and execute database insertion with error checking
        $sql = "INSERT INTO resources (title, role_id, file_type, file_path) VALUES (?, ?, ?, ?)";
        
        $stmt = $con->prepare($sql);
        if ($stmt === false) {
            throw new Exception("Prepare failed: " . $con->error);
        }

        // Use the original title for database storage
        if (!$stmt->bind_param("siss", $original_title, $role_id, $file_type, $file_url)) {
            throw new Exception("Binding parameters failed: " . $stmt->error);
        }

        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }

        $stmt->close();

        // Success response
        echo "File uploaded successfully! <a href='$file_url'>View File</a>";

    } catch (Exception $e) {
        // Log the error
        error_log("Upload Error: " . $e->getMessage());
        
        // Error response
        echo "Error: " . $e->getMessage();
    }
} else {
    // Invalid request method
    echo "Invalid request method";
}
?>
