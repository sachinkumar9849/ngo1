<?php include "include/header.php" ?>

<style>
/* ===== CSR page-specific ===== */
.commit-img-wrap { position: relative; border-radius: var(--radius-lg, 20px); overflow: hidden; box-shadow: var(--shadow-lg, 0 20px 50px rgba(0,0,0,.12)); }
.commit-img-wrap img { width: 100%; height: 100%; object-fit: cover; min-height: 340px; }
.commit-badge {
    position: absolute; bottom: 20px; left: 20px; right: 20px;
    background: rgba(255,255,255,.95); border-radius: 16px; padding: 18px 22px;
    display: flex; align-items: center; gap: 14px; box-shadow: 0 12px 30px rgba(0,0,0,.15);
}
.commit-badge .ic { width: 52px; height: 52px; flex: 0 0 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; background: var(--accent); color: var(--primary); font-size: 1.4rem; }
.csr-gallery { display: grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 180px; gap: 16px; }
.csr-gallery .g-item { position: relative; border-radius: 16px; overflow: hidden; cursor: pointer; box-shadow: var(--shadow-sm); }
.csr-gallery .g-item img { width: 100%; height: 100%; object-fit: cover; transition: transform .5s ease; }
.csr-gallery .g-item:hover img { transform: scale(1.08); }
.csr-gallery .g-item::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 50%, rgba(125,15,76,.55)); opacity: 0; transition: opacity .3s; }
.csr-gallery .g-item:hover::after { opacity: 1; }
.csr-gallery .g-cap { position: absolute; left: 14px; bottom: 12px; color: #fff; font-weight: 600; font-size: .85rem; z-index: 2; opacity: 0; transform: translateY(8px); transition: .3s; }
.csr-gallery .g-item:hover .g-cap { opacity: 1; transform: translateY(0); }
.csr-gallery .tall { grid-row: span 2; }
.csr-gallery .wide { grid-column: span 2; }
@media (max-width: 991px){ .csr-gallery { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 575px){ .csr-gallery { grid-template-columns: 1fr; grid-auto-rows: 200px; } .csr-gallery .wide, .csr-gallery .tall { grid-column: auto; grid-row: auto; } }
</style>

<!-- 1. Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <span class="current">CSR</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">Corporate Social Responsibility
        </h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            Building stronger, more inclusive communities through responsible action, lasting partnerships, and a deep
            commitment to social impact.
        </p>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Our Commitment -->
<section id="commitment">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="commit-img-wrap">
                    <img src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?auto=format&fit=crop&w=900&q=80"
                        alt="Community volunteers working together">
                    <div class="commit-badge">
                        <span class="ic"><i class="fa-solid fa-hand-holding-heart"></i></span>
                        <div>
                            <div class="fw-bold text-teal font-outfit" style="font-size:1.1rem;">15+ Years</div>
                            <div class="text-muted small">of community service & impact</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-tag">Our Commitment</span>
                <h2 class="section-title text-teal mb-3" style="text-align:left;">Doing Good, Responsibly</h2>
                <p class="text-muted mb-4">
                    Corporate social responsibility sits at the heart of everything we do. We believe a thriving
                    organization has a duty to give back &mdash; supporting the people, communities, and environment
                    that make our work possible.
                </p>
                <div class="d-flex gap-3 mb-3">
                    <span class="feature-icon-wrapper flex-shrink-0"><i class="fa-solid fa-bullseye"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Our Mission</h5>
                        <p class="text-muted small mb-0">To empower individuals and strengthen communities through
                            inclusive, sustainable, and compassionate programs that create real, measurable change.</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <span class="feature-icon-wrapper flex-shrink-0"><i class="fa-solid fa-people-roof"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Community Impact Focus</h5>
                        <p class="text-muted small mb-0">We invest where it matters most &mdash; education, accessibility,
                            wellbeing, and the environment &mdash; working hand in hand with local partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CSR Initiatives -->
<section class="bg-light-section" id="initiatives">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">What We Do</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Our CSR Initiatives</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            Focused programs designed to create meaningful, long-lasting impact across the communities we serve.
        </p>
        <div class="row g-4">
            <?php
            $initiatives = [
                ['fa-city', 'Community Development', 'Investing in local infrastructure, support networks, and programs that help neighbourhoods grow stronger together.'],
                ['fa-graduation-cap', 'Education Support', 'Scholarships, mentoring, and skill-building workshops that open doors and create lasting opportunity.'],
                ['fa-leaf', 'Environmental Sustainability', 'Reducing our footprint through greener operations, recycling, and community clean-up initiatives.'],
                ['fa-hands-holding-circle', 'Volunteer Programs', 'Mobilising our people and partners to give their time and talent where it truly makes a difference.'],
            ];
            $d = 0;
            foreach ($initiatives as $i): $d += 100; ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="feature-card h-100">
                    <div class="feature-icon-wrapper"><i class="fa-solid <?= $i[0] ?>"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;"><?= $i[1] ?></h4>
                    <p class="text-muted mb-0 small"><?= $i[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Impact Statistics -->
<section id="impact">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">By The Numbers</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Our Impact So Far</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            Every figure represents a life touched and a community made stronger.
        </p>
        <div class="row g-4">
            <?php
            $stats = [
                ['fa-users', '12000', '+', 'People Supported'],
                ['fa-diagram-project', '85', '+', 'Community Projects'],
                ['fa-clock', '40000', '+', 'Volunteer Hours'],
                ['fa-handshake', '60', '+', 'Partner Organizations'],
            ];
            $d = 0;
            foreach ($stats as $s): $d += 100; ?>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="about-stat-card">
                    <div class="feature-icon-wrapper mx-auto mb-3"><i class="fa-solid <?= $s[0] ?>"></i></div>
                    <div class="stat-num"><span class="counter-val" data-target="<?= $s[1] ?>">0</span><?= $s[2] ?></div>
                    <div class="stat-label"><?= $s[3] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Community Gallery -->
<section class="bg-light-section" id="gallery">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">In Action</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Community Gallery</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                Moments from our CSR activities, events, and the people who make it all possible.
            </p>
        </div>
        <div class="csr-gallery" data-aos="fade-up">
            <div class="g-item wide"><img
                    src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=900&q=80"
                    alt="Volunteers at a community event"><span class="g-cap">Community Day</span></div>
            <div class="g-item"><img
                    src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?auto=format&fit=crop&w=600&q=80"
                    alt="Education workshop"><span class="g-cap">Education Workshop</span></div>
            <div class="g-item tall"><img
                    src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=600&q=80"
                    alt="Tree planting drive"><span class="g-cap">Green Drive</span></div>
            <div class="g-item"><img
                    src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=600&q=80"
                    alt="Helping hands"><span class="g-cap">Helping Hands</span></div>
            <div class="g-item"><img
                    src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=600&q=80"
                    alt="Care support"><span class="g-cap">Care Support</span></div>
            <div class="g-item wide"><img
                    src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=900&q=80"
                    alt="Group of volunteers"><span class="g-cap">Our Volunteers</span></div>
        </div>
    </div>
</section>

<!-- 6. Partner With Us CTA -->
<section class="cta-gradient-section text-white text-center">
    <div class="container" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-outfit mb-3 text-white" style="font-size: 2.8rem; line-height: 1.2;">Partner With Us for
                    Good</h2>
                <p class="lead mb-5 text-white-50">Join a network of organizations creating real social change. Together
                    we can do more &mdash; for people, communities, and the planet.</p>
                <a href="contact.php" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold fs-6"><i
                        class="fa-solid fa-handshake-angle me-2"></i>Become a CSR Partner</a>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer.php" ?>
