<?php
require_once __DIR__ . '/includes/news-data.php';

$slug = isset($_GET['slug']) ? trim((string) $_GET['slug']) : '';
$story = isset($articles[$slug]) ? $articles[$slug] : null;
$pageTitle = $story !== null ? $story['title'] : 'Story not found';

if ($story === null) {
    http_response_code(404);
} else {
    $preloadImage = $story['image'];
    $preloadImageSizes = '(max-width: 820px) 100vw, 820px';
}

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell article-shell">
    <?php if ($story === null): ?>
        <section class="message-panel">
            <p class="eyebrow">404 · Story not found</p>
            <h1>This story isn't available.</h1>
            <p>It may have moved, or the link may be incorrect.</p>
            <a class="button-link" href="index.php">Read the latest news</a>
        </section>
    <?php else: ?>
        <article class="article">
            <a class="back-link" href="category.php?section=<?= e($story['category_slug']) ?>">← More in <?= e($story['category']) ?></a>
            <header class="article-header">
                <a class="category-label" href="category.php?section=<?= e($story['category_slug']) ?>"><?= e($story['category']) ?></a>
                <h1><?= e($story['title']) ?></h1>
                <p class="article-deck"><?= e($story['excerpt']) ?></p>
                <div class="byline">
                    <span>By <strong><?= e($story['author']) ?></strong></span>
                    <span><?= e($story['date']) ?></span>
                    <span><?= e($story['read_time']) ?></span>
                </div>
            </header>
            <figure class="article-figure">
                <img src="<?= e(image_url($story['image'], 800)) ?>" srcset="<?= e(image_srcset($story['image'])) ?>" sizes="<?= e($preloadImageSizes) ?>" width="1400" height="800" alt="<?= e($story['image_alt']) ?>" fetchpriority="high" decoding="async">
                <figcaption>Image for illustration. Photograph via Unsplash.</figcaption>
            </figure>
            <div class="article-body">
                <?php foreach ($story['body'] as $paragraph): ?>
                    <p><?= e($paragraph) ?></p>
                <?php endforeach; ?>
                <p class="article-end">— End of report —</p>
            </div>
        </article>
    <?php endif; ?>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
