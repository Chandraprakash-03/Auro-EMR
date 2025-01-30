<?php
include("adheader.php");
include("dbconnection.php");

session_start();
if(!isset($_SESSION['adminid'])){
    echo "<script>window.location='adminlogin.php';</script>";
}
?>

<div class="container-fluid">
    <div class="block-header">
        <h2>Upload Resource</h2>
        <small class="text-muted">Upload PPT, Video, or Document</small>
    </div>

    <div class="row clearfix">
        <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
            <div class="card">
                <div class="header bg-primary text-white text-center p-3">
                    <h4>Upload Resource</h4>
                </div>
                <div class="body">
                    <form id="uploadForm" action="upload_process.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="role_id">User Role:</label>
                            <select class="form-control" id="role_id" name="role_id" required>
                                <option value="">Select Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Doctor</option>
                                <option value="3">Nurse</option>
                                <option value="4">Patient</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="file_type">File Type:</label>
                            <select class="form-control" id="file_type" name="file_type" required>
                                <option value="">Select Type</option>
                                <option value="ppt">PPT</option>
                                <option value="video">Video</option>
                                <option value="document">Document</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="file">Select File:</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                            <div id="fileDetails" class="text-danger mt-2"></div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Upload File</button>
                        <div id="loading" class="text-center mt-3 text-muted" style="display: none;">Uploading... Please wait...</div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="view_files.php" class="btn btn-secondary">View Files</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
        const fileInput = document.getElementById('file');
        const fileDetails = document.getElementById('fileDetails');
        const loading = document.getElementById('loading');
        
        const maxSize = 2 * 1024 * 1024 * 1024; 
        if (fileInput.files[0].size > maxSize) {
            e.preventDefault();
            fileDetails.textContent = 'File size must be less than 2GB';
            return;
        }
        
        loading.style.display = 'block';
    });
    
    document.getElementById('file').addEventListener('change', function(e) {
        const fileDetails = document.getElementById('fileDetails');
        const file = e.target.files[0];
        
        if (file) {
            const size = (file.size / 1024 / 1024).toFixed(2);
            fileDetails.textContent = `Selected file: ${file.name} (${size} MB)`;
            fileDetails.style.color = 'black';
        }
    });
</script>

<?php
include("adfooter.php");
?>