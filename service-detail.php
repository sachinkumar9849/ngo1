<?php include "include/header.php" ?>

<style>
/* ===== Service Detail page-specific ===== */
/* Horizontal timeline (How it works) */
.svc-timeline { position: relative; margin-top: 2.5rem; }
.svc-timeline .row { position: relative; }
.svc-timeline::before {
    content: ''; position: absolute; top: 38px; left: 8%; right: 8%; height: 3px;
    background: repeating-linear-gradient(90deg, var(--primary-light) 0 14px, transparent 14px 26px);
    z-index: 0;
}
.svc-step { position: relative; z-index: 1; text-align: center; padding: 0 .5rem; }
.svc-step-num {
    width: 76px; height: 76px; margin: 0 auto 18px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: #fff; border: 3px solid var(--accent); color: var(--primary);
    font-family: var(--font-outfit); font-weight: 700; font-size: 1.6rem;
    box-shadow: var(--shadow-sm); transition: var(--transition-smooth);
    position: relative;
}
.svc-step-num span.pill {
    position: absolute; top: -8px; right: -8px; width: 28px; height: 28px; border-radius: 50%;
    background: var(--secondary); color: #fff; font-size: .8rem; display: flex; align-items: center; justify-content: center;
}
.svc-step:hover .svc-step-num { background: var(--primary); color: #fff; border-color: var(--primary); transform: translateY(-6px); }
.svc-step h5 { font-family: var(--font-outfit); color: var(--primary); margin-bottom: 8px; }
.svc-step p { color: var(--text-muted); font-size: .9rem; margin: 0; }
@media (max-width: 991px) {
    .svc-timeline::before { display: none; }
    .svc-timeline .svc-step { display: flex; text-align: left; gap: 18px; padding: 0; margin-bottom: 1.5rem; }
    .svc-timeline .svc-step-num { margin: 0; flex: 0 0 64px; width: 64px; height: 64px; font-size: 1.3rem; }
}
/* Eligibility checklist */
.elig-card { background: #fff; border: 1px solid rgba(173,23,106,.08); border-radius: var(--radius-lg); padding: 2rem; height: 100%; box-shadow: var(--shadow-sm); }
.elig-list { list-style: none; padding: 0; margin: 0; }
.elig-list li { display: flex; gap: 14px; align-items: flex-start; padding: 12px 0; border-bottom: 1px dashed rgba(173,23,106,.10); }
.elig-list li:last-child { border-bottom: 0; }
.elig-list .ic { flex: 0 0 28px; width: 28px; height: 28px; border-radius: 50%; background: var(--accent); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: .8rem; margin-top: 2px; }
.elig-list .ic.cross { background: #fdeaea; color: #d9534f; }
/* Enquiry form */
.enquiry-card { background: #fff; border-radius: var(--radius-lg); padding: 2.5rem; box-shadow: 0 25px 70px rgba(125,15,76,.10); border: 1px solid rgba(173,23,106,.06); }
.enq-input-group .input-group-text { background: #faf3f8; border-right: 0; color: var(--primary); }
.enq-input-group .form-control { border-left: 0; padding-left: .25rem; }
.enq-input-group .form-control:focus { box-shadow: none; border-color: #ced4da; }
.enq-input-group:focus-within { box-shadow: 0 0 0 .2rem rgba(173,23,106,.12); border-radius: .45rem; }
.enq-success-icon { width: 70px; height: 70px; margin: 0 auto; border-radius: 50%; background: var(--accent); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.8rem; }
/* FAQ accordion */
.faq-accordion .accordion-item { border: 1px solid rgba(173,23,106,.10); border-radius: 14px !important; margin-bottom: 14px; overflow: hidden; }
.faq-accordion .accordion-button { font-family: var(--font-outfit); font-weight: 600; color: var(--primary); background: #fff; padding: 1.1rem 1.25rem; }
.faq-accordion .accordion-button:not(.collapsed) { background: var(--accent); color: var(--primary); box-shadow: none; }
.faq-accordion .accordion-button:focus { box-shadow: none; }
.faq-accordion .accordion-button::after { background-image: none; content: '\2b'; font-family: 'Font Awesome 6 Free'; font-weight: 900; font-size: .9rem; color: var(--primary); transform: none; width: auto; height: auto; }
.faq-accordion .accordion-button:not(.collapsed)::after { content: '\f068'; }
.faq-accordion .accordion-body { color: var(--text-muted); font-size: .95rem; }
</style>

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
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#enquiry" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold"><i
                    class="fa-solid fa-hand-holding-heart me-2"></i>Get Support</a>
            <a href="contact.php" class="btn btn-outline-light px-5 py-3 rounded-pill fw-bold"><i
                    class="fa-solid fa-phone me-2"></i>Contact Us</a>
        </div>
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
                <p class="text-muted mb-4">Designed for people living with disability who want greater autonomy, SIL
                    pairs you with a support team focused on your personal goals &mdash; building daily living skills,
                    staying healthy, and connecting with your community.</p>
                <ul class="story-feature-list">
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-check"></i></span>
                        <div>
                            <p class="feat-title">Who it's for</p>
                            <p class="feat-desc">Adults with disability seeking more independence at home and beyond.</p>
                        </div>
                    </li>
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-check"></i></span>
                        <div>
                            <p class="feat-title">Key objective</p>
                            <p class="feat-desc">Build confidence and life skills with the right level of backup.</p>
                        </div>
                    </li>
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-check"></i></span>
                        <div>
                            <p class="feat-title">The outcome</p>
                            <p class="feat-desc">A safe, supported life lived on your own terms.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 3. Key Benefits -->
<section class="bg-light-section" id="benefits">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">Why It Helps</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Key Benefits</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            Thoughtful, person-centred support designed around your life &mdash; not the other way around.
        </p>
        <div class="row g-4">
            <?php
            $benefits = [
                ['fa-user-gear', 'Personalized Support', 'A plan shaped entirely around your goals, routines, and preferences.'],
                ['fa-user-nurse', 'Experienced Professionals', 'Trained, vetted, and genuinely caring support workers.'],
                ['fa-sliders', 'Flexible Care Plans', 'Scale support up or down as your needs change over time.'],
                ['fa-people-roof', 'Community Engagement', 'Stay social, active, and connected to the things you love.'],
                ['fa-headset', 'Ongoing Assistance', 'Reliable, on-call backup whenever you need reassurance.'],
                ['fa-bullseye', 'Goal-Focused Outcomes', 'Every step is measured against the progress that matters to you.'],
            ];
            $d = 0;
            foreach ($benefits as $b): $d += 80; ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="feature-card text-start h-100">
                    <div class="feature-icon-wrapper"><i class="fa-solid <?= $b[0] ?>"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;"><?= $b[1] ?></h4>
                    <p class="text-muted mb-0"><?= $b[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. Why Choose This Service -->
<section id="why-choose">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">The Maya Difference</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Why Choose This Service</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            Trusted by hundreds of participants and families across the region.
        </p>
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-start h-100">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-award"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;">Registered NDIS Provider</h4>
                    <p class="text-muted mb-0">Fully accredited and compliant, so you can have complete peace of mind.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-start h-100">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;">Person-Centred Care</h4>
                    <p class="text-muted mb-0">Your voice leads every decision. We support, you stay in control.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card text-start h-100">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clock"></i></div>
                    <h4 class="text-teal font-outfit mb-3" style="font-size:1.2rem;">Always Available</h4>
                    <p class="text-muted mb-0">Round-the-clock support and a team that genuinely shows up for you.</p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit"><span class="counter-val" data-target="95">0</span>%</div>
                    <div class="stat-label">Report greater confidence</div>
                </div>
            </div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="about-stat-card">
                    <div class="stat-num font-outfit"><span class="counter-val" data-target="500">0</span>+</div>
                    <div class="stat-label">Participants supported</div>
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
                    <div class="stat-num font-outfit"><span class="counter-val" data-target="100">0</span>%</div>
                    <div class="stat-label">Person-centred plans</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 8. FAQs -->
<section id="faqs">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">Good to Know</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up">
                    <?php
                    $faqs = [
                        ['Is SIL covered by my NDIS plan?', 'In most cases, yes. SIL is a funded support under the NDIS. We\'ll help you understand your funding and exactly what\'s included.', true],
                        ['Can I choose my support workers?', 'Absolutely. We match you with workers based on your needs, interests, and personality &mdash; and you always have a say.', false],
                        ['Do I have to live in shared accommodation?', 'Not at all. SIL can be delivered in your own home or in shared living arrangements &mdash; whatever suits you best.', false],
                        ['How quickly can support start?', 'After your consultation and plan approval, support can often begin within 1&ndash;2 weeks, depending on your needs.', false],
                        ['What if my needs change over time?', 'Your plan is reviewed regularly and is fully flexible. We scale support up or down as your situation evolves.', false],
                        ['Is there a cost if I\'m not NDIS funded?', 'We offer private and alternative funding options too. Reach out and we\'ll walk you through what\'s available.', false],
                    ];
                    $i = 0;
                    foreach ($faqs as $q): $i++; ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header"><button
                                class="accordion-button <?= $q[2] ? '' : 'collapsed' ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#sf<?= $i ?>"><?= $q[0] ?></button></h2>
                        <div id="sf<?= $i ?>" class="accordion-collapse collapse <?= $q[2] ? 'show' : '' ?>"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body"><?= $q[1] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Related Services -->
<section class="bg-light-section" id="related">
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
                        class="btn btn-outline-teal rounded-pill btn-sm px-4 fw-bold">Learn More <i
                            class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<!-- 11. CTA Banner -->
<section id="consult" class="cta-gradient-section text-white text-center">
    <div class="container" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-outfit mb-3 text-white" style="font-size: 2.8rem; line-height: 1.2;">Ready to Get the
                    Support You Need?</h2>
                <p class="lead mb-5 text-white-50">Our team is here to provide compassionate and professional support
                    tailored to your needs.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="contact.php" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold fs-6"><i
                            class="fa-solid fa-comments me-2"></i>Contact Us</a>
                    <a href="#enquiry" class="btn btn-outline-light px-5 py-3 rounded-pill fw-bold fs-6"><i
                            class="fa-solid fa-calendar-check me-2"></i>Book a Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Animate the "Why Choose" counters when scrolled into view
        const counters = document.querySelectorAll('.counter-val');
        if (counters.length) {
            const run = el => {
                const target = +el.dataset.target;
                let n = 0; const inc = Math.max(1, target / 60);
                const tick = () => {
                    n += inc;
                    if (n < target) { el.textContent = Math.ceil(n); requestAnimationFrame(tick); }
                    else el.textContent = target;
                };
                tick();
            };
            const obs = new IntersectionObserver((entries, o) => {
                entries.forEach(e => { if (e.isIntersecting) { run(e.target); o.unobserve(e.target); } });
            }, { threshold: 0.6 });
            counters.forEach(c => obs.observe(c));
        }

        // Enquiry form
        const form = document.getElementById('enquiryForm');
        if (form) {
            const card = form.closest('.enquiry-card');
            const successBox = card.querySelector('.enq-success');
            const submitText = card.querySelector('.enq-submit-text');
            const submitLoading = card.querySelector('.enq-submit-loading');
            form.addEventListener('submit', e => {
                e.preventDefault();
                form.classList.add('was-validated');
                if (!form.checkValidity()) return;
                submitText.classList.add('d-none');
                submitLoading.classList.remove('d-none');
                // Simulate sending (replace with a real fetch() to your endpoint)
                setTimeout(() => {
                    form.classList.add('d-none');
                    successBox.classList.remove('d-none');
                }, 1200);
            });
        }
    });
</script>

<?php include "include/footer.php" ?>
