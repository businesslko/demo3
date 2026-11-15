<?php
require_once __DIR__ . '/includes/news-data.php';

$pageTitle = 'Latest news';
$activePage = 'home';
$featured = $articles['cities-rethink-public-transport'];
$secondaryStories = [
    'small-teams-build-ai-tools' => $articles['small-teams-build-ai-tools'],
    'markets-look-to-next-quarter' => $articles['markets-look-to-next-quarter'],
];
$latestStories = array_slice($articles, 3, 5, true);
$popularStories = [
    'researchers-map-ocean-heat' => $articles['researchers-map-ocean-heat'],
    'independent-cinemas-find-new-audiences' => $articles['independent-cinemas-find-new-audiences'],
    'simple-habits-support-better-sleep' => $articles['simple-habits-support-better-sleep'],
];
include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell">
    <div class="section-heading">
        <div>
            <p class="eyebrow">The stories shaping your day</p>
            <h1>News, with perspective.</h1>
        </div>
        <p class="heading-note">Reporting and ideas from around the world.</p>
    </div>

    <section class="lead-grid" aria-label="Top stories">
        <article class="lead-story">
            <a class="image-link" href="article.php?slug=cities-rethink-public-transport">
                <img src="<?= e($featured['image']) ?>" alt="<?= e($featured['image_alt']) ?>">
            </a>
            <div class="lead-copy">
                <a class="category-label" href="category.php?section=<?= e($featured['category_slug']) ?>"><?= e($featured['category']) ?></a>
                <h2><a href="article.php?slug=cities-rethink-public-transport"><?= e($featured['title']) ?></a></h2>
                <p><?= e($featured['excerpt']) ?></p>
                <span class="story-meta"><?= e($featured['date']) ?> <span aria-hidden="true">·</span> <?= e($featured['read_time']) ?></span>
            </div>
        </article>
        <div class="secondary-stories">
            <?php foreach ($secondaryStories as $slug => $story): ?>
                <article class="compact-story">
                    <a class="image-link" href="article.php?slug=<?= e($slug) ?>">
                        <img src="<?= e($story['image']) ?>" alt="<?= e($story['image_alt']) ?>" loading="lazy">
                    </a>
                    <div>
                        <a class="category-label" href="category.php?section=<?= e($story['category_slug']) ?>"><?= e($story['category']) ?></a>
                        <h2><a href="article.php?slug=<?= e($slug) ?>"><?= e($story['title']) ?></a></h2>
                        <p><?= e($story['excerpt']) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="content-columns">
        <section class="latest-section">
            <div class="section-title-row">
                <h2 class="section-title">More top stories</h2>
                <a class="text-link" href="category.php?section=world">Explore all news <span aria-hidden="true">→</span></a>
            </div>
            <div class="story-grid">
                <?php foreach ($latestStories as $slug => $story): ?>
                    <article class="story-card">
                        <a class="image-link" href="article.php?slug=<?= e($slug) ?>">
                            <img src="<?= e($story['image']) ?>" alt="<?= e($story['image_alt']) ?>" loading="lazy">
                        </a>
                        <div class="story-card-copy">
                            <a class="category-label" href="category.php?section=<?= e($story['category_slug']) ?>"><?= e($story['category']) ?></a>
                            <h3><a href="article.php?slug=<?= e($slug) ?>"><?= e($story['title']) ?></a></h3>
                            <p><?= e($story['excerpt']) ?></p>
                            <span class="story-meta"><?= e($story['date']) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
        <aside class="popular-panel">
            <h2 class="section-title">Worth your time</h2>
            <ol class="popular-list">
                <?php $popularRank = 1; ?>
                <?php foreach ($popularStories as $slug => $story): ?>
                    <li>
                        <span class="popular-number">0<?= e($popularRank++) ?></span>
                        <div>
                            <a class="category-label" href="category.php?section=<?= e($story['category_slug']) ?>"><?= e($story['category']) ?></a>
                            <h3><a href="article.php?slug=<?= e($slug) ?>"><?= e($story['title']) ?></a></h3>
                            <span class="story-meta"><?= e($story['read_time']) ?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </aside>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
