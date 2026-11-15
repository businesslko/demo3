<?php
require_once __DIR__ . '/includes/news-data.php';

$pageTitle = 'Contact';
$activePage = 'contact';
$name = '';
$email = '';
$subject = '';
$message = '';
$formNotice = '';
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
    $email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim((string) $_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

    if ($name === '' || $subject === '' || $message === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $formError = 'Please complete every field and enter a valid email address.';
    } else {
        $formNotice = 'This demonstration form is not connected to an email service, so your message has not been sent.';
    }
}

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="page-shell">
    <section class="editorial-hero">
        <p class="eyebrow">We'd like to hear from you</p>
        <h1>Contact the team</h1>
        <p class="editorial-intro">Share feedback or ask a question about The Daily Brief.</p>
    </section>
    <div class="contact-layout">
        <section class="contact-copy">
            <h2>Send us a note</h2>
            <p>This sample form shows the contact-page layout. It does not email or save messages.</p>
            <p>For a live site, connect this form to a secure mail or support service before accepting real enquiries.</p>
        </section>
        <form class="contact-form" method="post" action="contact.php">
            <?php if ($formNotice !== ''): ?>
                <p class="form-notice" role="status"><?= e($formNotice) ?></p>
            <?php endif; ?>
            <?php if ($formError !== ''): ?>
                <p class="form-error" role="alert"><?= e($formError) ?></p>
            <?php endif; ?>
            <label for="name">Your name</label>
            <input id="name" name="name" type="text" autocomplete="name" maxlength="100" value="<?= e($name) ?>" required>

            <label for="email">Email address</label>
            <input id="email" name="email" type="email" autocomplete="email" maxlength="254" value="<?= e($email) ?>" required>

            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" maxlength="150" value="<?= e($subject) ?>" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" maxlength="3000" required><?= e($message) ?></textarea>

            <button class="button-link" type="submit">Check form</button>
        </form>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
