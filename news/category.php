<?php
require_once __DIR__ . '/includes/news-data.php';

$categorySlug = isset($_GET['section']) ? strtolower(trim((string) $_GET['section'])) : '';
$categoryName = isset($categories[$categorySlug]) ? $categories[$categorySlug] : '';
$pageTitle = $categoryName !== '' ? $categoryName : 'Section not found';
$activeCategory = isset($categories[$categorySlug]) ? $categorySlug : '';
$sectionStories = [];

if ($categoryName !== '') {
    foreach ($articles as $slug => $story) {
        if ($story['category_slug'] === $categorySlug) {
            $story['slug'] = $slug;
            $sectionStories[] = $story;
        }
    }
} else {
    http_response_code(404);
}

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell">
    <?php if ($categoryName === ''): ?>
        <section class="message-panel">
            <p class="eyebrow">404 · Section not found</p>
            <h1>We couldn't find that section.</h1>
            <p>Choose a topic from the navigation to explore the latest stories.</p>
            <a class="button-link" href="index.php">Back to the home page</a>
        </section>
    <?php else: ?>
        <div class="section-heading category-heading">
            <div>
                <p class="eyebrow">Explore the latest</p>
                <h1><?= e($categoryName) ?></h1>
            </div>
            <p class="heading-note">News and analysis from our <?= e(strtolower($categoryName)) ?> desk.</p>
        </div>
        <?php if (count($sectionStories) > 0): ?>
            <div class="category-grid">
                <?php foreach ($sectionStories as $story): ?>
                    <article class="story-card">
                        <a class="image-link" href="article.php?slug=<?= e($story['slug']) ?>">
                            <img src="<?= e($story['image']) ?>" alt="<?= e($story['image_alt']) ?>" loading="lazy">
                        </a>
                        <div class="story-card-copy">
                            <span class="category-label"><?= e($story['category']) ?></span>
                            <h2><a href="article.php?slug=<?= e($story['slug']) ?>"><?= e($story['title']) ?></a></h2>
                            <p><?= e($story['excerpt']) ?></p>
                            <span class="story-meta"><?= e($story['date']) ?> <span aria-hidden="true">·</span> <?= e($story['read_time']) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-state">There are no stories in this section yet. Please check back soon.</p>
        <?php endif; ?>
    <?php endif; ?>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
