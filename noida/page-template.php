<?php
$requestedScript = isset($_SERVER['SCRIPT_NAME']) ? basename($_SERVER['SCRIPT_NAME']) : '';
$pageSlug = preg_replace('/\.php$/', '', $requestedScript);

$pages = array(
    'about' => array(
        'title' => 'About Us',
        'intro' => 'Practical safety learning and workplace support, shaped around the people and environments it serves.',
        'sections' => array(
            array(
                'title' => 'A practical approach',
                'body' => 'Clear instruction, useful procedures, and realistic practice can help teams recognize hazards and make safer decisions at work.'
            ),
            array(
                'title' => 'Support for your goals',
                'body' => 'Training and advisory topics can be discussed around your work activities and learning needs. Contact us to talk through a useful starting point.'
            )
        )
    ),
    'training' => array(
        'title' => 'Training',
        'intro' => 'Explore practical learning options that help teams build awareness, confidence, and safe work habits.',
        'sections' => array(
            array(
                'title' => 'Training pathways',
                'body' => 'Choose from general safety, industry-focused, customized, and mock-drill training. The right format depends on your work activities and learning objectives.'
            ),
            array(
                'title' => 'Plan a session',
                'body' => 'Tell us about your team, site, and preferred topics so a suitable training plan can be discussed.'
            )
        )
    ),
    'general-safety-training' => array(
        'title' => 'General Safety Training',
        'intro' => 'Build a shared understanding of workplace hazards and everyday safe work practices.',
        'sections' => array(
            array(
                'title' => 'Core awareness',
                'body' => 'Sessions can cover hazard recognition, safe behavior, clear communication, and the importance of following workplace procedures.'
            ),
            array(
                'title' => 'For every team',
                'body' => 'Content can be adjusted to participants\' roles and the conditions they encounter at work. Contact us to discuss your training objectives.'
            )
        )
    ),
    'industry-specific-training' => array(
        'title' => 'Industry Specific Training',
        'intro' => 'Focus safety learning on the tasks, equipment, and conditions relevant to your workplace.',
        'sections' => array(
            array(
                'title' => 'Relevant to your work',
                'body' => 'A focused session can use your work activities and site conditions as the starting point, helping participants connect safety concepts with their daily responsibilities.'
            ),
            array(
                'title' => 'Define the scope',
                'body' => 'Share the roles, processes, and topics you want to address. Training scope can then be discussed with your organization.'
            )
        )
    ),
    'customized-training' => array(
        'title' => 'Customized Training',
        'intro' => 'Shape a learning session around your team, work environment, and defined safety objectives.',
        'sections' => array(
            array(
                'title' => 'Tailored content',
                'body' => 'Training topics, examples, and session structure can be planned to reflect your priorities and participants experience.'
            ),
            array(
                'title' => 'Start with your needs',
                'body' => 'Discuss the audience, learning goals, and preferred schedule to determine a suitable approach.'
            )
        )
    ),
    'mock-drills-training' => array(
        'title' => 'Mock Drills Training',
        'intro' => 'Practice emergency roles and communication through structured, scenario-based exercises.',
        'sections' => array(
            array(
                'title' => 'Practice and review',
                'body' => 'A mock drill gives participants an opportunity to rehearse agreed procedures, understand their roles, and identify questions for follow-up.'
            ),
            array(
                'title' => 'Plan responsibly',
                'body' => 'The exercise scenario, participants, safety controls, and review process should be agreed with your team before a drill takes place.'
            )
        )
    ),
    'consultancy' => array(
        'title' => 'Consultancy',
        'intro' => 'Discuss workplace safety questions and improvement priorities with a practical, needs-led approach.',
        'sections' => array(
            array(
                'title' => 'Understand the workplace',
                'body' => 'Useful advice starts with a clear view of your activities, existing procedures, and the issues your team wants to address.'
            ),
            array(
                'title' => 'Explore support options',
                'body' => 'Consultancy topics may include expert guidance, audits, and specialized support. Contact us to define the scope and desired outcomes.'
            )
        )
    ),
    'expert-solutions' => array(
        'title' => 'Expert Solutions',
        'intro' => 'Get focused guidance to help your team assess safety questions and consider practical next steps.',
        'sections' => array(
            array(
                'title' => 'Advice for defined needs',
                'body' => 'Bring a specific workplace concern, process, or safety objective for discussion. Recommendations should reflect the context and information available.'
            ),
            array(
                'title' => 'Clear next steps',
                'body' => 'Agree the question to address, the information required, and the form of support before work begins.'
            )
        )
    ),
    'audits' => array(
        'title' => 'Audits',
        'intro' => 'Review workplace practices and procedures to identify observations and opportunities for improvement.',
        'sections' => array(
            array(
                'title' => 'A structured review',
                'body' => 'An audit can examine an agreed set of procedures, records, or work activities. Its scope and criteria should be defined before the review.'
            ),
            array(
                'title' => 'Useful findings',
                'body' => 'Observations can help teams prioritize follow-up actions. Findings should be considered alongside current site conditions and applicable requirements.'
            )
        )
    ),
    'specialised' => array(
        'title' => 'Specialised Support',
        'intro' => 'Discuss focused safety support for a particular activity, risk, or operational need.',
        'sections' => array(
            array(
                'title' => 'Focused on your priorities',
                'body' => 'Specialized support can be scoped around the people, processes, and conditions relevant to the work you want to address.'
            ),
            array(
                'title' => 'Agree the scope',
                'body' => 'Share the context and intended outcome so the appropriate subject area and next steps can be discussed.'
            )
        )
    ),
    'courses' => array(
        'title' => 'Courses',
        'intro' => 'Explore safety learning options for teams and individuals with different experience and objectives.',
        'sections' => array(
            array(
                'title' => 'Learning options',
                'body' => 'Course topics can be selected to support workplace awareness, practical skills, and safety-related responsibilities.'
            ),
            array(
                'title' => 'Find a suitable course',
                'body' => 'Discuss the participants, topic, and preferred schedule with us to understand which course format may be appropriate.'
            )
        )
    ),
    'trending-courses' => array(
        'title' => 'Trending Courses',
        'intro' => 'Browse featured safety-learning topics and ask us about current course availability.',
        'sections' => array(
            array(
                'title' => 'Explore featured topics',
                'body' => 'Course selections can address workplace hazard awareness, emergency readiness, and safe work practices, depending on current offerings.'
            ),
            array(
                'title' => 'Check availability',
                'body' => 'Contact us to discuss current topics, session details, and whether a course fits your learning needs.'
            )
        )
    ),
    'skill-courses' => array(
        'title' => 'Skill Courses',
        'intro' => 'Develop practical skills that support awareness, communication, and safer work routines.',
        'sections' => array(
            array(
                'title' => 'Practice useful skills',
                'body' => 'Skills-focused learning can help participants apply safety concepts to common tasks and workplace situations.'
            ),
            array(
                'title' => 'Match the course to the role',
                'body' => 'Course goals and examples can be discussed in relation to participants responsibilities and experience.'
            )
        )
    ),
    'on-demand-courses' => array(
        'title' => 'On Demand Courses',
        'intro' => 'Discuss flexible learning arrangements for teams with specific timing or training needs.',
        'sections' => array(
            array(
                'title' => 'Flexible planning',
                'body' => 'Share your preferred timing, participant numbers, and subject area so available delivery options can be discussed.'
            ),
            array(
                'title' => 'Plan ahead',
                'body' => 'Course availability and delivery format should be confirmed before a session is scheduled.'
            )
        )
    ),
    'industrial-solutions' => array(
        'title' => 'Industrial Solutions',
        'intro' => 'Consider safety learning and advisory support in the context of your industrial workplace.',
        'sections' => array(
            array(
                'title' => 'Workplace-focused support',
                'body' => 'Discuss the activities, teams, and safety priorities relevant to your site to identify useful areas for support.'
            ),
            array(
                'title' => 'Build a clear plan',
                'body' => 'A defined scope helps align any training or advisory work with operational needs and agreed outcomes.'
            )
        )
    ),
    'gallery' => array(
        'title' => 'Gallery',
        'intro' => 'A place to share approved photos of training activities and workplace safety initiatives.',
        'sections' => array(
            array(
                'title' => 'Safety in practice',
                'body' => 'Gallery images can help visitors understand the kinds of learning activities and workplace environments represented by your organization.'
            ),
            array(
                'title' => 'Add your approved images',
                'body' => 'No photos were supplied for this page. Add images that your organization owns or has permission to publish when they are available.'
            )
        )
    ),
    'careers' => array(
        'title' => 'Careers',
        'intro' => 'Interested in contributing to workplace safety and practical learning?',
        'sections' => array(
            array(
                'title' => 'Career enquiries',
                'body' => 'Send a brief introduction and your area of interest to our email address. We can share any relevant opportunity information directly.'
            ),
            array(
                'title' => 'Get in touch',
                'body' => 'For career enquiries, contact us at sni4732@gmail.com.'
            )
        )
    )
);

if (!isset($pages[$pageSlug])) {
    http_response_code(404);
    exit('Page not found.');
}

$pageTitle = $pages[$pageSlug]['title'];
$pageIntro = $pages[$pageSlug]['intro'];
$pageSections = $pages[$pageSlug]['sections'];

require __DIR__ . '/header.php';
?>
<div class="rs-breadcrumbs img3">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
                <span class="watermark"><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></span>
            </h1>
            <span class="sub-text"><?= htmlspecialchars($pageIntro, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
    </div>
</div>

<section class="rs-contact contact-style1 contact-modify1 gray-bg2 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <?php foreach ($pageSections as $section): ?>
            <div class="row mb-40">
                <div class="col-lg-10">
                    <div class="sec-title2 mb-35">
                        <h2 class="title title-color pb-20"><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                        <p class="description body-color"><?= htmlspecialchars($section['body'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="btn-part">
            <a class="readon details contact" href="contact.php">Contact us</a>
        </div>
    </div>
</section>

</div>
<!-- Main content End -->
<?php require __DIR__ . '/footer.php'; ?>
