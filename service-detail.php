<?php include "include/header.php" ?>

<!-- 1. Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <a href="index.php#services">Services</a>
            <span class="sep">/</span>
            <span class="current">Supported Independent Living</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">Supported Independent Living</h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            Live the way you choose, with just the right level of support to help you thrive at home and in your
            community.
        </p>
        <a href="#consult" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold mt-2 btn-support"
            data-aos="fade-up" data-aos-delay="300">Book a Free Consultation</a>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Service Overview -->
<section id="overview">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="story-img-wrap accent-bottom">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=900&q=80"
                        alt="Support worker assisting at home">
                </div>
            </div>
            <div class="col-lg-6 story-content" data-aos="fade-left">
                <span class="section-tag">Service Overview</span>
                <h2 class="story-title font-outfit">Independence, Supported Your Way</h2>
                <p class="story-lead">Supported Independent Living (SIL) helps you build the skills and confidence to
                    live as independently as possible &mdash; whether in your own home or shared accommodation.</p>
                <p class="text-muted mb-4">Our support workers assist with everyday tasks, personal care, and community
                    access, all tailored around your goals. You stay in control; we provide the backup.</p>
                <ul class="story-feature-list">
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-check"></i></span>
                        <div>
                            <p class="feat-title">24/7 or scheduled support</p>
                            <p class="feat-desc">Flexible staffing that scales to exactly what you need.</p>
                        </div>
                    </li>
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-check"></i></span>
                        <div>
                            <p class="feat-title">NDIS-funded &amp; fully managed</p>
                            <p class="feat-desc">We help maximise your funding and handle the paperwork.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 3. Key Features -->
<section class="bg-light-section">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">What's Included</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Key Features</h2>
        <div class="row g-4">
            <?php
            $feats = [
                ['fa-house-chimney-user', 'Daily Living Support', 'Help with cooking, cleaning, budgeting, and household routines.'],
                ['fa-hand-holding-medical', 'Personal Care', 'Respectful assistance with hygiene, grooming, and wellbeing.'],
                ['fa-people-roof', 'Community Access', 'Support to get out, stay social, and pursue your interests.'],
                ['fa-pills', 'Medication Management', 'Reminders and assistance to stay on top of your health.'],
                ['fa-shield-heart', 'Skill Building', 'Coaching that grows your confidence and independence over time.'],
                ['fa-headset', 'On-call Backup', 'Trained staff available whenever you need reassurance.'],
            ];
            $d = 0;
            foreach ($feats as $f): $d += 80; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="feature-card text-start">
                    <div class="feature-icon-wrapper"><i class="fa-solid <?= $f[0] ?>"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;"><?= $f[1] ?></h4>
                    <p class="text-muted mb-0"><?= $f[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. How It Works -->
<section id="how-it-works">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">The Process</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">How It Works</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            Getting started is simple. Here's what to expect.
        </p>
        <div class="row g-4 mt-2">
            <?php
            $steps = [
                ['1', 'fa-comments', 'Consultation', 'We listen to your goals, needs, and preferences.'],
                ['2', 'fa-clipboard-list', 'Planning', 'We design a personalised support plan around you.'],
                ['3', 'fa-hands-holding-circle', 'Support Delivery', 'Your matched team begins delivering care.'],
                ['4', 'fa-chart-line', 'Progress Review', 'We check in regularly and adapt as you grow.'],
            ];
            $d = 0;
            foreach ($steps as $s): $d += 100; ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="process-step">
                    <div class="step-num"><?= $s[0] ?></div>
                    <div class="step-icon"><i class="fa-solid <?= $s[1] ?>"></i></div>
                    <h5 class="font-outfit"><?= $s[2] ?></h5>
                    <p class="text-muted small m-0"><?= $s[3] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Benefits / Outcomes -->
<section class="bg-light-section">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">Outcomes</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">The Difference It Makes</h2>
        <div class="row g-4">
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit">95%</div>
                    <div class="stat-label">Report greater confidence</div>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit">3x</div>
                    <div class="stat-label">More community participation</div>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit">24/7</div>
                    <div class="stat-label">Support availability</div>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="400">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit">100%</div>
                    <div class="stat-label">Person-centred plans</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Success Stories -->
<section id="stories">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">Success Stories</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Real Participant Stories</h2>
        <div class="swiper stories-swiper pb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card text-start">
                        <i class="fa-solid fa-quote-right quote-icon"></i>
                        <div class="rating-stars mb-3"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-muted mb-4">"Living in a SIL home through Maya has given me my freedom back.
                            I cook my own meals and I'm learning new skills every week."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
                                alt="Marcus Taylor" class="client-avatar">
                            <div>
                                <h5 class="font-outfit text-teal m-0" style="font-size:1.1rem;">Marcus Taylor</h5>
                                <span class="small text-muted">SIL Participant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card text-start">
                        <i class="fa-solid fa-quote-right quote-icon"></i>
                        <div class="rating-stars mb-3"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-muted mb-4">"The team understood exactly what my son needed. The change in his
                            independence and happiness has been incredible to watch."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80"
                                alt="Elena Rostova" class="client-avatar">
                            <div>
                                <h5 class="font-outfit text-teal m-0" style="font-size:1.1rem;">Elena Rostova</h5>
                                <span class="small text-muted">Parent</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card text-start">
                        <i class="fa-solid fa-quote-right quote-icon"></i>
                        <div class="rating-stars mb-3"><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-muted mb-4">"Patient, warm, and professional. My brother now travels independently
                            and has joined local clubs. We couldn't be more grateful."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80"
                                alt="Sarah Jenkins" class="client-avatar">
                            <div>
                                <h5 class="font-outfit text-teal m-0" style="font-size:1.1rem;">Sarah Jenkins</h5>
                                <span class="small text-muted">Family Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- 7. FAQs -->
<section class="bg-light-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">Good to Know</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#sf1">Is SIL covered by my NDIS plan?</button>
                        </h2>
                        <div id="sf1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">In most cases, yes. SIL is a funded support under the NDIS. We'll
                                help you understand your funding and what's included.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#sf2">Can I choose my support workers?</button>
                        </h2>
                        <div id="sf2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Absolutely. We match you with workers based on your needs,
                                interests, and personality &mdash; and you always have a say.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#sf3">Do I have to live in shared
                                accommodation?</button></h2>
                        <div id="sf3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Not at all. SIL can be delivered in your own home or in shared
                                living arrangements &mdash; whatever suits you best.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. Related Services -->
<section id="related">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">You May Also Need</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Related Services</h2>
        <div class="row g-4 text-start">
            <?php
            $rel = [
                ['fa-hands-holding-circle', 'Daily Living Assistance', 'Help with personal care, meals, and household tasks.'],
                ['fa-people-roof', 'Community Participation', 'Support to access social groups and community life.'],
                ['fa-handshake-angle', 'Respite Care Services', 'Short-term care giving primary carers a break.'],
            ];
            $d = 0;
            foreach ($rel as $r): $d += 100; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="service-card">
                    <i class="fa-solid <?= $r[0] ?> service-icon"></i>
                    <h4 class="text-teal font-outfit mb-3"><?= $r[1] ?></h4>
                    <p class="text-muted mb-4"><?= $r[2] ?></p>
                    <a href="service-detail.php"
                        class="btn btn-outline-teal rounded-pill btn-sm px-4 fw-bold">Learn More</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 9. CTA -->
<section id="consult" class="cta-gradient-section text-white text-center">
    <div class="container" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-outfit fw-black mb-3 text-white" style="font-size: 2.8rem; line-height: 1.2;">Ready to
                    Start Living More Independently?</h2>
                <p class="lead mb-5 text-white-50">Book a free, no-obligation consultation with our care coordinators
                    today.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="contact.php" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold fs-6">Book
                        Consultation</a>
                    <a href="contact.php" class="btn btn-outline-light px-5 py-3 rounded-pill fw-bold fs-6"><i
                            class="fa-solid fa-phone me-2"></i>Contact Our Team</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer.php" ?>
