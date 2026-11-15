<?php
$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($requestMethod !== 'GET' || http_response_code() === 404) {
    header('Cache-Control: no-store');
} else {
    header('Cache-Control: public, max-age=60, stale-while-revalidate=300');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clear, independent reporting and the latest stories from around the world.">
    <title><?= e(isset($pageTitle) ? $pageTitle . ' | ' : '') ?>The Daily Brief</title>
    <?php if (isset($preloadImage, $preloadImageSizes)): ?>
        <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
        <link rel="preload" as="image" href="<?= e(image_url($preloadImage, 800)) ?>" imagesrcset="<?= e(image_srcset($preloadImage)) ?>" imagesizes="<?= e($preloadImageSizes) ?>" fetchpriority="high">
    <?php endif; ?>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="site-header">
    <div class="masthead">
        <a class="brand" href="index.php" aria-label="The Daily Brief home">
            <span class="brand-mark">DB</span>
            <span class="brand-name">The Daily Brief</span>
        </a>
        <p class="edition"><?= e(date('l, F j, Y')) ?></p>
    </div>
    <nav class="primary-nav" aria-label="Main navigation">
        <div class="nav-inner">
            <a class="<?= isset($activePage) && $activePage === 'home' ? 'is-active' : '' ?>" href="index.php">Home</a>
            <?php foreach ($categories as $slug => $label): ?>
                <a class="<?= isset($activeCategory) && $activeCategory === $slug ? 'is-active' : '' ?>" href="category.php?section=<?= e($slug) ?>"><?= e($label) ?></a>
            <?php endforeach; ?>
            <a class="<?= isset($activePage) && $activePage === 'about' ? 'is-active' : '' ?>" href="about.php">About</a>
            <a class="<?= isset($activePage) && $activePage === 'contact' ? 'is-active' : '' ?>" href="contact.php">Contact</a>
        </div>
    </nav>
</header>
