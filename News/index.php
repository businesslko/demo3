<?php
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$programs = [
    [
        'name' => 'Strength',
        'description' => 'Build confidence with coached lifting and progressive strength sessions.',
        'image' => 'https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=900&q=80',
        'alt' => 'Athlete training with weights',
        'tag' => '01 / Build',
    ],
    [
        'name' => 'Conditioning',
        'description' => 'Move with purpose in energetic sessions for every fitness level.',
        'image' => 'https://images.unsplash.com/photo-1534258936925-c58bed479fcb?auto=format&fit=crop&w=900&q=80',
        'alt' => 'Group fitness class in a studio',
        'tag' => '02 / Move',
    ],
    [
        'name' => 'Mobility',
        'description' => 'Make time for movement, recovery and a stronger everyday routine.',
        'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=900&q=80',
        'alt' => 'Person stretching during a workout',
        'tag' => '03 / Recover',
    ],
];

$schedule = [
    ['time' => '06:30', 'class' => 'Strength Basics', 'coach' => 'Alex Morgan', 'day' => 'Mon / Wed / Fri'],
    ['time' => '07:30', 'class' => 'Start Strong', 'coach' => 'Sam Rivera', 'day' => 'Tue / Thu'],
    ['time' => '12:15', 'class' => 'Express Circuit', 'coach' => 'Taylor Reed', 'day' => 'Mon – Fri'],
    ['time' => '18:00', 'class' => 'Conditioning Club', 'coach' => 'Jordan Blake', 'day' => 'Mon / Wed'],
];

$plans = [
    [
        'name' => 'Essential',
        'price' => '$39',
        'description' => 'A simple start to your training routine.',
        'features' => ['Open gym access', 'Fitness orientation', 'Locker room access'],
        'featured' => false,
    ],
    [
        'name' => 'All Access',
        'price' => '$69',
        'description' => 'More coaching, more ways to move.',
        'features' => ['Everything in Essential', 'Group classes included', 'Monthly progress check-in'],
        'featured' => true,
    ],
    [
        'name' => 'Personal Coaching',
        'price' => '$119',
        'description' => 'Focused support for your individual goals.',
        'features' => ['Everything in All Access', 'Two coaching sessions monthly', 'Personal training plan'],
        'featured' => false,
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Train your way at Form House, a friendly fitness club for strength, conditioning and recovery.">
    <meta name="theme-color" content="#111410">
    <title>Form House | Find your strong</title>
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <a class="wordmark" href="#home" aria-label="Form House home"><span class="wordmark-icon">F</span> FORM HOUSE</a>
    <nav class="site-nav" aria-label="Main navigation">
        <a href="#training">Training</a>
        <a href="#schedule">Schedule</a>
        <a href="#coaches">Coaches</a>
        <a href="#membership">Membership</a>
    </nav>
    <a class="header-cta" href="#contact">Come say hello <span aria-hidden="true">↗</span></a>
</header>

<main id="main">
    <section class="hero" id="home">
        <div class="hero-copy">
            <p class="eyebrow"><span class="status-dot"></span> Your neighborhood training club</p>
            <h1>Find your<br><span>strong.</span></h1>
            <p class="hero-intro">Good training changes more than your workout. Build a routine that feels like yours, with people in your corner.</p>
            <div class="hero-actions">
                <a class="button button-lime" href="#membership">Explore memberships <span aria-hidden="true">→</span></a>
                <a class="button button-quiet" href="#training">See what we do</a>
            </div>
            <div class="hero-footnote">
                <span class="mini-mark">FH</span>
                <p>Show up as you are.<br><strong>We'll take it from there.</strong></p>
            </div>
        </div>
        <div class="hero-visual">
            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1500&q=85" alt="Bright, modern gym floor with strength equipment" fetchpriority="high">
            <div class="visual-stamp"><span>MOVE</span><span>WITH</span><strong>INTENT</strong></div>
            <div class="visual-caption"><span>01 — 03</span><span>Training for real life</span></div>
        </div>
        <a class="scroll-cue" href="#training" aria-label="Scroll to training options"><span></span> Scroll to explore</a>
    </section>

    <section class="intro-strip" aria-label="Our approach">
        <p>BETTER IS BUILT<br><strong>TOGETHER.</strong></p>
        <p>Coaching that meets you where you are.</p>
        <p>Progress you can feel, one session at a time.</p>
        <span class="strip-star" aria-hidden="true">✳</span>
    </section>

    <section class="section training-section" id="training">
        <div class="section-topline">
            <p class="eyebrow">01 / Find your format</p>
            <p class="section-note">Different goals. One good place to start.</p>
        </div>
        <div class="section-heading">
            <h2>Training that<br><span>moves with you.</span></h2>
            <p>Whether you're learning the basics or ready to switch things up, there's room to make it your own.</p>
        </div>
        <div class="program-grid">
            <?php foreach ($programs as $program): ?>
                <article class="program-card">
                    <a class="program-image" href="#contact" aria-label="Ask about <?= e($program['name']) ?>">
                        <img src="<?= e($program['image']) ?>" alt="<?= e($program['alt']) ?>" loading="lazy" decoding="async">
                        <span class="program-tag"><?= e($program['tag']) ?></span>
                    </a>
                    <div class="program-copy">
                        <h3><?= e($program['name']) ?></h3>
                        <p><?= e($program['description']) ?></p>
                        <a class="arrow-link" href="#schedule" aria-label="View the <?= e($program['name']) ?> schedule">Explore sessions <span aria-hidden="true">↗</span></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="schedule-section" id="schedule">
        <div class="section schedule-layout">
            <div class="schedule-intro">
                <p class="eyebrow">02 / Make it a date</p>
                <h2>A good time<br>to get <span>going.</span></h2>
                <p>Small-group sessions keep things personal and make it easier to find your rhythm.</p>
                <a class="button button-lime" href="#contact">Ask about a class <span aria-hidden="true">→</span></a>
                <p class="fine-print">Example timetable. Confirm class times with your studio before visiting.</p>
            </div>
            <div class="schedule-table-wrap">
                <div class="table-heading"><span>THIS WEEK AT FORM HOUSE</span><span>45 MIN SESSIONS</span></div>
                <table>
                    <thead>
                    <tr><th scope="col">TIME</th><th scope="col">SESSION</th><th scope="col">COACH</th><th scope="col">DAYS</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($schedule as $session): ?>
                        <tr>
                            <td><?= e($session['time']) ?></td>
                            <td class="session-name"><?= e($session['class']) ?></td>
                            <td><?= e($session['coach']) ?></td>
                            <td><?= e($session['day']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section coaches-section" id="coaches">
        <div class="section-topline">
            <p class="eyebrow">03 / Good people, good energy</p>
            <p class="section-note">Meet you where you are. Help you get where you want to go.</p>
        </div>
        <div class="coach-heading">
            <h2>In your<br><span>corner.</span></h2>
            <p>Great coaching is equal parts know-how and showing up for each other. Meet a few of the folks who make this place feel like yours.</p>
        </div>
        <div class="coach-grid">
            <article class="coach-card">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=700&q=80" alt="Coach Alex Morgan" loading="lazy" decoding="async">
                <div><h3>Alex Morgan</h3><p>Strength coach <span>·</span> The steady one</p></div>
            </article>
            <article class="coach-card">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=700&q=80" alt="Coach Sam Rivera" loading="lazy" decoding="async">
                <div><h3>Sam Rivera</h3><p>Movement coach <span>·</span> The energy bringer</p></div>
            </article>
            <article class="coach-card">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=700&q=80" alt="Coach Taylor Reed" loading="lazy" decoding="async">
                <div><h3>Taylor Reed</h3><p>Performance coach <span>·</span> The detail person</p></div>
            </article>
        </div>
    </section>

    <section class="membership-section" id="membership">
        <div class="section">
            <div class="section-topline">
                <p class="eyebrow">04 / Pick your pace</p>
                <p class="section-note">A plan that works for your life, not the other way around.</p>
            </div>
            <div class="membership-heading">
                <h2>Make room<br>for <span>you.</span></h2>
                <p>Start with what feels right. You can always find a new gear later.</p>
            </div>
            <div class="plan-grid">
                <?php foreach ($plans as $plan): ?>
                    <article class="plan-card <?= $plan['featured'] ? 'plan-featured' : '' ?>">
                        <?php if ($plan['featured']): ?><p class="plan-badge">MEMBER FAVORITE</p><?php endif; ?>
                        <h3><?= e($plan['name']) ?></h3>
                        <p class="plan-description"><?= e($plan['description']) ?></p>
                        <p class="plan-price"><?= e($plan['price']) ?><span>/ month</span></p>
                        <ul>
                            <?php foreach ($plan['features'] as $feature): ?>
                                <li><span aria-hidden="true">+</span> <?= e($feature) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a class="button <?= $plan['featured'] ? 'button-lime' : 'button-outline' ?>" href="#contact">Ask about this plan <span aria-hidden="true">→</span></a>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="fine-print pricing-note">Example plans and prices for this website demo. Update them to match your gym.</p>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="section contact-layout">
            <div>
                <p class="eyebrow">05 / Your next step</p>
                <h2>Curious?<br><span>Come through.</span></h2>
                <p>Drop in, take a look around and tell us what you're working toward. We'll help you find a good place to begin.</p>
                <a class="button button-dark" href="mailto:hello@example.com">Email the studio <span aria-hidden="true">↗</span></a>
            </div>
            <div class="contact-note">
                <span class="contact-icon" aria-hidden="true">FH</span>
                <p class="eyebrow">FIND YOUR FORM</p>
                <p>14 Example Street<br>Your City, ST 00000</p>
                <p><a href="mailto:hello@example.com">hello@example.com</a><br><a href="tel:+15550102048">(555) 010-2048</a></p>
                <small>Sample contact details — replace before publishing.</small>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <a class="wordmark" href="#home"><span class="wordmark-icon">F</span> FORM HOUSE</a>
    <p>Find your strong. Keep your form.</p>
    <div class="footer-bottom">
        <span>&copy; <?= e(date('Y')) ?> Form House</span>
        <a href="#home">Back to top ↑</a>
        <span>Made for moving forward.</span>
    </div>
</footer>
</body>
</html>
