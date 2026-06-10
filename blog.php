<?php include "include/header.php" ?>

<!-- 1. Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <span class="current">News &amp; Blog</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">News &amp; Insights</h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            Stories of impact, community events, NDIS guides, and updates from the Maya team.
        </p>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Featured Article -->
<section id="featured">
    <div class="container">
        <span class="section-tag" data-aos="fade-up">Featured Story</span>
        <h2 class="text-teal font-outfit fw-black mb-4" data-aos="fade-up" data-aos-delay="100">Editor's Pick</h2>
        <div class="featured-article" data-aos="fade-up" data-aos-delay="150">
            <div class="fa-img"
                style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=900&q=80');">
            </div>
            <div class="fa-body">
                <span class="badge-category"><i class="fa-solid fa-star"></i>Success Stories</span>
                <div class="fa-meta">
                    <span><i class="fa-solid fa-user me-1 text-teal"></i>By Rachel Green</span>
                    <span><i class="fa-solid fa-calendar me-1 text-teal"></i>June 05, 2026</span>
                    <span><i class="fa-solid fa-clock me-1 text-teal"></i>6 min read</span>
                </div>
                <h3 class="font-outfit">How Marcus Found His Independence Through Supported Living</h3>
                <p class="text-muted mb-4">A year ago, Marcus had never cooked a meal on his own. Today he hosts dinner
                    for friends every Friday. This is the story of how the right support changed everything.</p>
                <a href="blog-detail.php" class="btn btn-coral text-white rounded-pill fw-bold px-4 align-self-start">Read
                    Full Story <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Categories -->
<section class="pt-0">
    <div class="container">
        <div class="cat-filter" data-aos="fade-up">
            <a href="#" class="cat-pill active">All</a>
            <a href="#" class="cat-pill">Community Stories</a>
            <a href="#" class="cat-pill">Events</a>
            <a href="#" class="cat-pill">Success Stories</a>
            <a href="#" class="cat-pill">Volunteer Activities</a>
            <a href="#" class="cat-pill">Health &amp; Wellbeing</a>
            <a href="#" class="cat-pill">Organization Updates</a>
        </div>
    </div>
</section>

<!-- 4. Latest Articles + Sidebar -->
<section class="bg-light-section">
    <div class="container">
        <div class="row g-5">
            <!-- Articles grid -->
            <div class="col-lg-8">
                <span class="section-tag" data-aos="fade-up">Latest Articles</span>
                <h2 class="text-teal font-outfit fw-black mb-4" data-aos="fade-up" data-aos-delay="100">Fresh From the
                    Community</h2>
                <div class="row g-4">
                    <?php
                    $posts = [
                        ['https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80', 'NDIS Guide', 'How to Prepare for Your Next Plan Review', 'Learn the exact documents and goal statements needed to ensure your review covers necessary therapies.', 'June 05, 2026'],
                        ['https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=600&q=80', 'Events', 'Recap: 2026 Community Wellness Picnic', 'Highlights from our annual community picnic featuring inclusive games, fresh foods, and performances.', 'May 28, 2026'],
                        ['https://images.unsplash.com/photo-1508847154043-be12a3b4d69e?auto=format&fit=crop&w=600&q=80', 'Health & Wellbeing', 'Combating Social Isolation in Senior Care', 'Exploring community solutions and creative hobbies that help seniors maintain mental wellness.', 'May 15, 2026'],
                        ['https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=80', 'Volunteer Activities', 'Meet the Volunteers Behind Bridge Connect', 'Our weekly social program runs on the heart of dozens of dedicated community volunteers.', 'May 02, 2026'],
                        ['https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=600&q=80', 'Community Stories', 'A New Chapter: Sarah\'s Journey to Confidence', 'How person-centred support helped Sarah\'s brother travel independently and join local art clubs.', 'April 21, 2026'],
                        ['https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80', 'Organization Updates', 'Maya Expands to Three New Regions', 'We\'re proud to announce expanded coverage bringing care closer to more families this year.', 'April 09, 2026'],
                    ];
                    $i = 0;
                    foreach ($posts as $p):
                        $i += 100;
                    ?>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $i ?>">
                        <div class="blog-card h-100">
                            <div class="blog-img-wrapper">
                                <img src="<?= $p[0] ?>" alt="<?= htmlspecialchars($p[2]) ?>" class="blog-img">
                                <span class="blog-tag"><?= $p[1] ?></span>
                            </div>
                            <div class="p-4">
                                <span class="blog-date"><i class="fa-solid fa-calendar me-2"></i><?= $p[4] ?></span>
                                <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;"><a href="blog-detail.php"
                                        class="text-decoration-none text-teal"><?= htmlspecialchars($p[2]) ?></a></h4>
                                <p class="text-muted small mb-3"><?= htmlspecialchars($p[3]) ?></p>
                                <a href="blog-detail.php" class="text-coral fw-bold text-decoration-none small">Read More
                                    <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination-modern" data-aos="fade-up">
                    <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-card" data-aos="fade-left">
                    <h4 class="font-outfit"><i class="fa-solid fa-fire text-coral me-2"></i>Popular Posts</h4>
                    <?php
                    $pop = [
                        ['https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=150&q=80', 'How to Prepare for Your Next Plan Review', 'June 05, 2026'],
                        ['https://images.unsplash.com/photo-1508847154043-be12a3b4d69e?auto=format&fit=crop&w=150&q=80', 'Combating Social Isolation in Senior Care', 'May 15, 2026'],
                        ['https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=150&q=80', 'A New Chapter: Sarah\'s Journey to Confidence', 'April 21, 2026'],
                        ['https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=150&q=80', 'Maya Expands to Three New Regions', 'April 09, 2026'],
                    ];
                    foreach ($pop as $pp): ?>
                    <a href="blog-detail.php" class="popular-post">
                        <img src="<?= $pp[0] ?>" alt="<?= htmlspecialchars($pp[1]) ?>">
                        <div>
                            <div class="pp-title"><?= htmlspecialchars($pp[1]) ?></div>
                            <div class="pp-date"><i class="fa-solid fa-calendar me-1"></i><?= $pp[2] ?></div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>

                <div class="sidebar-card" data-aos="fade-left" data-aos-delay="100">
                    <h4 class="font-outfit"><i class="fa-solid fa-tags text-coral me-2"></i>Categories</h4>
                    <ul class="footer-links small m-0" style="list-style:none;padding:0;">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Community Stories</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Events</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Success Stories</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Volunteer Activities</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-muted">Health &amp; Wellbeing</a></li>
                        <li><a href="#" class="text-decoration-none text-muted">Organization Updates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "include/footer.php" ?>
