<?php include "include/header.php" ?>

<!-- 1. Article Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=1920&q=85'); min-height: 420px;">
    <div class="page-hero-overlay"></div>
    <div class="container text-center" style="max-width: 900px;">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <a href="blog.php">Blog</a>
            <span class="sep">/</span>
            <span class="current">Article</span>
        </nav>
        <div data-aos="fade-up" data-aos-delay="100" class="mb-3">
            <span class="badge-category"><i class="fa-solid fa-star"></i>Success Stories</span>
        </div>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="150"
            style="font-size: clamp(1.9rem, 4vw, 3rem);">How Marcus Found His Independence Through Supported Living</h1>
        <div class="hero-float-badges" data-aos="fade-up" data-aos-delay="200">
            <span class="hero-float-badge"><i class="fa-solid fa-user"></i> Rachel Green</span>
            <span class="hero-float-badge"><i class="fa-solid fa-calendar"></i> June 05, 2026</span>
            <span class="hero-float-badge"><i class="fa-solid fa-clock"></i> 6 min read</span>
        </div>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Article Content -->
<section id="article">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="article-body" data-aos="fade-up">
                    <p class="lead" style="font-size:1.25rem;color:var(--text-dark);">A year ago, Marcus had never
                        cooked a meal on his own. Today he hosts dinner for friends every Friday night. This is the story
                        of how the right support &mdash; delivered with patience and respect &mdash; changed everything.</p>

                    <p>When Marcus first joined Maya, independence felt out of reach. Daily tasks that many
                        take for granted were sources of anxiety. But our team believed, as we always do, that
                        independence isn't something you're given &mdash; it's something you're supported to build, one
                        confident step at a time.</p>

                    <h2>Starting With What Matters</h2>
                    <p>Every plan we create begins with a single question: what does a good day look like for you?
                        For Marcus, the answer was simple but powerful &mdash; to cook for himself, manage his own
                        schedule, and reconnect with friends.</p>

                    <div class="pull-quote">
                        "I didn't just learn to cook. I learned that I could do hard things. That changed how I see
                        myself."
                    </div>

                    <p>Over several months, his support workers focused on practical skills paired with genuine
                        encouragement. Small wins stacked into big ones. The kitchen, once intimidating, became his
                        favourite room in the house.</p>

                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1000&q=80"
                        alt="Cooking session" class="img-fluid w-100">

                    <h2>Independence, Measured in Moments</h2>
                    <p>Progress isn't always linear, and it isn't always loud. Sometimes it's the quiet pride of plating
                        a meal you made yourself. The numbers, though, tell their own story of what consistent,
                        person-centred support can achieve.</p>

                    <div class="article-stats">
                        <div class="stat">
                            <div class="num">12</div>
                            <div class="lbl">New skills mastered</div>
                        </div>
                        <div class="stat">
                            <div class="num">3x</div>
                            <div class="lbl">More social outings</div>
                        </div>
                        <div class="stat">
                            <div class="num">100%</div>
                            <div class="lbl">Self-prepared meals</div>
                        </div>
                    </div>

                    <div class="highlight-box">
                        <h4><i class="fa-solid fa-lightbulb me-2"></i>The Maya Approach</h4>
                        <p>We never do things <em>for</em> the people we support when we can do them <em>with</em> them.
                        Every interaction is an opportunity to build confidence and capability.</p>
                    </div>

                    <p>Today, Marcus mentors newer participants in our community kitchen program &mdash; proof that the
                        support you receive can become the support you give. His Friday dinners are now a fixture, and
                        the guest list keeps growing.</p>
                </article>

                <!-- Social sharing -->
               

                <!-- Author box -->
              
            </div>
        </div>
    </div>
</section>

<!-- 3. Related Articles -->
<section class="bg-light-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">Keep Reading</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Related Articles</h2>
        </div>
        <div class="row g-4">
            <?php
            $rel = [
                ['https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80', 'NDIS Guide', 'How to Prepare for Your Next Plan Review', 'June 05, 2026'],
                ['https://images.unsplash.com/photo-1508847154043-be12a3b4d69e?auto=format&fit=crop&w=600&q=80', 'Health & Wellbeing', 'Combating Social Isolation in Senior Care', 'May 15, 2026'],
                ['https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=80', 'Volunteer Activities', 'Meet the Volunteers Behind Bridge Connect', 'May 02, 2026'],
            ];
            $d = 0;
            foreach ($rel as $r): $d += 100; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="blog-card h-100">
                    <div class="blog-img-wrapper">
                        <img src="<?= $r[0] ?>" alt="<?= htmlspecialchars($r[2]) ?>" class="blog-img">
                        <span class="blog-tag"><?= $r[1] ?></span>
                    </div>
                    <div class="p-4">
                        <span class="blog-date"><i class="fa-solid fa-calendar me-2"></i><?= $r[3] ?></span>
                        <h4 class="text-teal font-outfit mb-3" style="font-size:1.15rem;"><a href="blog-detail.php"
                                class="text-decoration-none text-teal"><?= htmlspecialchars($r[2]) ?></a></h4>
                        <a href="blog-detail.php" class="text-coral fw-bold text-decoration-none small">Read More <i
                                class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cf = document.getElementById('commentForm');
        const cs = document.getElementById('commentSuccess');
        if (cf) cf.addEventListener('submit', function (e) {
            e.preventDefault();
            cs.classList.add('show');
            cf.reset();
            setTimeout(() => cs.classList.remove('show'), 6000);
        });
    });
</script>

<?php include "include/footer.php" ?>
