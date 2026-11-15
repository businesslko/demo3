<?php
require_once __DIR__ . '/includes/news-data.php';

$pageTitle = 'Privacy';
include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell">
    <section class="editorial-hero">
        <p class="eyebrow">Your information</p>
        <h1>Privacy</h1>
        <p class="editorial-intro">A straightforward explanation of this sample site's data practices.</p>
    </section>
    <div class="prose-page">
        <p class="updated-note">Last updated: November 15, 2026</p>
        <section>
            <h2>Information on this demo site</h2>
            <p>This sample portal does not use advertising trackers or analytics tools. The contact form posts to this site for basic validation, but the application does not email or save messages.</p>
        </section>
        <section>
            <h2>Third-party images</h2>
            <p>Story photographs are served by Unsplash. When a page loads those images, your browser makes a request to Unsplash and shares standard connection information, such as your IP address. This site does not load external web fonts.</p>
        </section>
        <section>
            <h2>Hosting logs</h2>
            <p>If this site is hosted on a web server, the hosting provider may record standard technical logs, such as a browser's request for a page. How those logs are handled depends on the hosting provider.</p>
        </section>
        <section>
            <h2>Questions</h2>
            <p>For questions about this sample site's privacy information, please use the <a class="inline-link" href="contact.php">contact page</a>.</p>
        </section>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
