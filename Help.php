<?php
// config.php
$videos = [
    ['id' => 1, 'title' => 'Getting Started', 'url' => 'videos/getting-started.mp4'],
    ['id' => 2, 'title' => 'Advanced Features', 'url' => 'videos/advanced-features.mp4'],
    ['id' => 3, 'title' => 'Tips & Tricks', 'url' => 'videos/tips-tricks.mp4'],
    ['id' => 4, 'title' => 'Tutorial', 'url' => 'videos/tutorial.mp4']
];

$documents = [
    ['id' => 1, 'title' => 'User Manual', 'url' => 'docs/user-manual.pdf'],
    ['id' => 2, 'title' => 'Quick Start Guide', 'url' => 'docs/quick-start.pdf'],
    ['id' => 3, 'title' => 'API Documentation', 'url' => 'docs/api-docs.pdf'],
    ['id' => 4, 'title' => 'Best Practices', 'url' => 'docs/best-practices.pdf']
];

$presentations = [
    ['id' => 1, 'title' => 'Product Overview', 'url' => 'ppts/overview.ppt'],
    ['id' => 2, 'title' => 'Feature Walkthrough', 'url' => 'ppts/features.ppt'],
    ['id' => 3, 'title' => 'Training Deck', 'url' => 'ppts/training.ppt'],
    ['id' => 4, 'title' => 'Case Studies', 'url' => 'ppts/cases.ppt']
];

// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets\images\logo2.png">
    <title>Help Center</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .content-grid {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-item:hover {
            transform: translateX(10px);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <nav class="w-64 bg-white shadow-lg p-6">
            <h2 class="text-xl font-bold mb-8">Help Center</h2>
            <ul class="space-y-2">
                <?php
                $sections = [
                    ['id' => 'videos', 'icon' => '📹', 'label' => 'Videos'],
                    ['id' => 'documents', 'icon' => '📄', 'label' => 'Documents'],
                    ['id' => 'presentations', 'icon' => '📊', 'label' => 'Presentations']
                ];

                foreach ($sections as $section) {
                    $activeClass = isset($_GET['section']) && $_GET['section'] === $section['id'] ? 'bg-blue-100' : '';
                    echo "
                    <li class='nav-item'>
                        <a href='?section={$section['id']}' 
                           class='flex items-center p-3 rounded-lg hover:bg-blue-50 {$activeClass}'>
                            <span class='mr-3'>{$section['icon']}</span>
                            <span>{$section['label']}</span>
                        </a>
                    </li>";
                }
                ?>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="content-grid">
                <?php
                $section = $_GET['section'] ?? 'videos';

                switch ($section) {
                    case 'videos':
                        echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-6">';
                        foreach ($videos as $video) {
                            echo "
                            <div class='bg-white p-4 rounded-lg shadow-md'>
                                <iframe 
                                    src='https://via.placeholder.com/560x315'
                                    class='w-full h-48 mb-4 rounded'
                                    frameborder='0'
                                    allowfullscreen
                                ></iframe>
                                <h3 class='text-lg font-semibold'>{$video['title']}</h3>
                            </div>";
                        }
                        echo '</div>';
                        break;

                    case 'documents':
                        echo '<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';
                        foreach ($documents as $doc) {
                            echo "
                            <div class='bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow'>
                                <div class='text-4xl mb-3'>📄</div>
                                <h3 class='text-lg font-semibold'>{$doc['title']}</h3>
                                <a href='{$doc['url']}' 
                                   class='mt-2 inline-block text-blue-500 hover:text-blue-700'>
                                    Download PDF
                                </a>
                            </div>";
                        }
                        echo '</div>';
                        break;

                    case 'presentations':
                        echo '<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';
                        foreach ($presentations as $ppt) {
                            echo "
                            <div class='bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow'>
                                <div class='text-4xl mb-3'>📊</div>
                                <h3 class='text-lg font-semibold'>{$ppt['title']}</h3>
                                <a href='{$ppt['url']}' 
                                   class='mt-2 inline-block text-blue-500 hover:text-blue-700'>
                                    Download PPT
                                </a>
                            </div>";
                        }
                        echo '</div>';
                        break;
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>