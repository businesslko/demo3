<?php
require_once __DIR__ . '/includes/news-data.php';

$pageTitle = 'About us';
$activePage = 'about';
include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell">
    <section class="editorial-hero">
        <p class="eyebrow">About The Daily Brief</p>
        <h1>Journalism that helps you see the bigger picture.</h1>
        <p class="editorial-intro">We make space for clear reporting, thoughtful context and the stories that matter in everyday life.</p>
    </section>
    <div class="prose-page">
        <section>
            <h2>Our purpose</h2>
            <p>The Daily Brief is a sample independent news portal built to make essential stories easy to find and understand. Our sections cover world affairs, business, technology, science, culture and health.</p>
        </section>
        <section>
            <h2>How we work</h2>
            <p>We aim to distinguish reporting from opinion, explain complex topics in plain language and correct errors when they are identified. The articles on this demonstration site are illustrative sample content.</p>
        </section>
        <section>
            <h2>Get in touch</h2>
            <p>Have a question or feedback about the site? Visit our <a class="inline-link" href="contact.php">contact page</a>.</p>
        </section>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
