<?php include "include/header.php" ?>

<style>
/* ===== Feedback page-specific ===== */
.info-pill {
    display: flex; gap: 16px; align-items: flex-start;
    background: #fff; border: 1px solid rgba(173,23,106,.08); border-radius: 16px;
    padding: 22px; height: 100%; box-shadow: var(--shadow-sm); transition: var(--transition-smooth);
}
.info-pill:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); }
.info-pill .ic { width: 52px; height: 52px; flex: 0 0 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; background: var(--accent); color: var(--primary); font-size: 1.35rem; }
.feedback-card {
    background: #fff; border-radius: 22px; padding: 2.5rem; box-shadow: 0 25px 70px rgba(125,15,76,.10);
    border: 1px solid rgba(173,23,106,.06);
}
.fb-label { font-weight: 600; font-size: .85rem; color: #344; margin-bottom: .4rem; }
.fb-input-group .input-group-text { background: #faf3f8; border-right: 0; color: var(--primary); }
.fb-input-group .form-control, .fb-input-group .form-select { border-left: 0; padding-left: .25rem; }
.fb-input-group .form-control:focus, .fb-input-group .form-select:focus { box-shadow: none; border-color: #ced4da; }
.fb-input-group:focus-within { box-shadow: 0 0 0 .2rem rgba(173,23,106,.12); border-radius: .45rem; }
.form-control:focus, .form-select:focus { border-color: var(--primary-light); box-shadow: 0 0 0 .2rem rgba(173,23,106,.12); }
.fb-file-drop { display: flex; align-items: center; gap: .9rem; width: 100%; padding: .9rem 1.2rem; border: 2px dashed #e7c9dd; border-radius: .6rem; background: #fdf7fb; cursor: pointer; transition: .2s; }
.fb-file-drop:hover { border-color: var(--primary); background: #fbeef5; }
.fb-file-drop i { font-size: 1.4rem; color: var(--primary); }
.fb-file-drop input[type=file] { display: none; }
.fb-file-drop.has-file { border-style: solid; border-color: var(--primary); background: #fbeef5; }
.fb-success-icon { width: 76px; height: 76px; margin: 0 auto; border-radius: 50%; background: var(--accent); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 2rem; }
/* FAQ */
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
    style="background-image: url('https://images.unsplash.com/photo-1573497491208-6b1acb260507?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <span class="current">Compliments &amp; Complaints</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">Compliments &amp; Complaints</h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            We value your feedback and are committed to continuously improving our services.
        </p>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Information Section -->
<section id="feedback-info">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag" data-aos="fade-up">How It Works</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Your Voice Matters</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                Whether it's praise, a concern, or an idea &mdash; we read every message and act on it.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-list-check"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Simple Process</h5>
                        <p class="text-muted small mb-0">Fill in the short form below. Your feedback goes straight to the
                            right team for review and action.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-clock-rotate-left"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Quick Response</h5>
                        <p class="text-muted small mb-0">We acknowledge all feedback within 2 business days and aim to
                            resolve complaints within 10 business days.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-shield-halved"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Privacy Assured</h5>
                        <p class="text-muted small mb-0">Your information is kept strictly confidential and handled in
                            line with our privacy policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Feedback Form -->
<section class="bg-light-section" id="feedback-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
                <div class="feedback-card" data-aos="fade-up">
                    <div class="text-center mb-4">
                        <h3 class="font-outfit text-teal mb-2">Share Your Feedback</h3>
                        <p class="text-muted small mb-0">Fields marked <span class="text-danger">*</span> are required.
                        </p>
                    </div>

                    <form id="feedbackForm" novalidate>
                        <h6 class="text-uppercase text-muted fw-bold mb-3" style="letter-spacing:.08em; font-size:.78rem;">
                            <i class="fa-solid fa-user me-2 text-teal"></i>Personal Information</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label class="fb-label">Full Name <span class="text-danger">*</span></label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Jane Doe" required>
                                </div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="fb-label">Email Address <span class="text-danger">*</span></label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="jane@email.com"
                                        required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="fb-label">Phone Number</label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input type="tel" name="phone" class="form-control" placeholder="0400 000 000">
                                </div>
                            </div>
                        </div>

                        <h6 class="text-uppercase text-muted fw-bold mb-3" style="letter-spacing:.08em; font-size:.78rem;">
                            <i class="fa-solid fa-comment-dots me-2 text-teal"></i>Feedback Details</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="fb-label">Feedback Type <span class="text-danger">*</span></label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-tag"></i></span>
                                    <select name="type" class="form-select" required>
                                        <option value="" selected disabled>Select type...</option>
                                        <option value="compliment">Compliment</option>
                                        <option value="complaint">Complaint</option>
                                        <option value="suggestion">Suggestion</option>
                                        <option value="general">General Feedback</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please choose a feedback type.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="fb-label">Service / Department</label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-building-user"></i></span>
                                    <select name="department" class="form-select">
                                        <option value="" selected disabled>Select department...</option>
                                        <option value="care">Care &amp; Support</option>
                                        <option value="clinical">Clinical Services</option>
                                        <option value="community">Community Programs</option>
                                        <option value="admin">Administration</option>
                                        <option value="other">Other / Not Sure</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="fb-label">Subject <span class="text-danger">*</span></label>
                                <div class="input-group fb-input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-heading"></i></span>
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Brief summary of your feedback" required>
                                </div>
                                <div class="invalid-feedback">Please add a subject.</div>
                            </div>
                            <div class="col-12">
                                <label class="fb-label">Message <span class="text-danger">*</span></label>
                                <textarea name="message" class="form-control" rows="5"
                                    placeholder="Tell us what happened or what's on your mind..." required></textarea>
                                <div class="invalid-feedback">Please enter your message.</div>
                            </div>
                            <div class="col-12">
                                <label class="fb-label">Attach a File <small
                                        class="text-muted fw-normal">(optional)</small></label>
                                <label class="fb-file-drop" for="fbFile">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <span class="fb-file-text">Click to attach <small class="text-muted">image, PDF or
                                            document &middot; max 5MB</small></span>
                                    <input type="file" name="attachment" id="fbFile"
                                        accept=".pdf,.doc,.docx,.png,.jpg,.jpeg">
                                </label>
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="fbConsent" required>
                            <label class="form-check-label small text-muted" for="fbConsent">
                                I confirm the information provided is accurate. <span class="text-danger">*</span>
                            </label>
                            <div class="invalid-feedback">Please confirm before submitting.</div>
                        </div>

                        <button type="submit" class="btn btn-teal w-100 py-3 rounded-pill fw-bold fs-6">
                            <span class="fb-submit-text"><i class="fa-solid fa-paper-plane me-2"></i>Submit
                                Feedback</span>
                            <span class="fb-submit-loading d-none"><span
                                    class="spinner-border spinner-border-sm me-2"></span>Sending...</span>
                        </button>
                    </form>

                    <!-- Success state -->
                    <div class="fb-success text-center d-none py-3">
                        <div class="fb-success-icon"><i class="fa-solid fa-check"></i></div>
                        <h3 class="font-outfit text-teal mt-3">Thank You!</h3>
                        <p class="text-muted">Your feedback has been received. Our team will review it and get back to
                            you within 2 business days.</p>
                        <button type="button" class="btn btn-outline-teal rounded-pill px-5 fw-bold mt-2"
                            id="fbAnother">Submit Another</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Contact Information -->
<section id="feedback-contact">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag" data-aos="fade-up">Prefer to Talk?</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Other Ways to Reach Us</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-phone"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Phone</h5>
                        <p class="text-muted small mb-0">1800-HOPE-BRIDGE<br>Mon&ndash;Fri, 9am &ndash; 5pm</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-envelope"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Email</h5>
                        <p class="text-muted small mb-0">feedback@hopebridgecare.org<br>We reply within 2 business days
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="info-pill">
                    <span class="ic"><i class="fa-solid fa-clock"></i></span>
                    <div>
                        <h5 class="font-outfit text-teal mb-1">Office Hours</h5>
                        <p class="text-muted small mb-0">Monday &ndash; Friday: 9am &ndash; 5pm<br>Saturday &amp; Sunday:
                            Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. FAQ -->
<section class="bg-light-section" id="feedback-faq">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag" data-aos="fade-up">Good to Know</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">How long will it take to receive a response?</button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">We acknowledge every submission within 2 business days. For
                                complaints, we aim to provide a full resolution within 10 business days and will keep you
                                updated throughout.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">Can I submit anonymous feedback?</button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Yes. While contact details help us follow up, you may leave them
                                blank if you prefer to remain anonymous. Note that we won't be able to respond directly
                                to anonymous submissions.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">How are complaints handled?</button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Each complaint is logged and assigned to the relevant team
                                leader. We investigate fairly and confidentially, contact you to discuss, and put
                                measures in place to prevent it happening again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('feedbackForm');
        if (!form) return;
        const card = form.closest('.feedback-card');
        const successBox = card.querySelector('.fb-success');
        const submitText = card.querySelector('.fb-submit-text');
        const submitLoading = card.querySelector('.fb-submit-loading');
        const fileInput = document.getElementById('fbFile');
        const fileDrop = card.querySelector('.fb-file-drop');
        const fileText = card.querySelector('.fb-file-text');

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length) {
                fileDrop.classList.add('has-file');
                fileText.innerHTML = fileInput.files[0].name + '<small class="text-muted">Click to change</small>';
            }
        });

        form.addEventListener('submit', e => {
            e.preventDefault();
            form.classList.add('was-validated');
            if (!form.checkValidity()) return;

            submitText.classList.add('d-none');
            submitLoading.classList.remove('d-none');

            // Simulate sending (replace with a real fetch() to your endpoint)
            setTimeout(() => {
                submitText.classList.remove('d-none');
                submitLoading.classList.add('d-none');
                form.classList.add('d-none');
                successBox.classList.remove('d-none');
            }, 1200);
        });

        document.getElementById('fbAnother').addEventListener('click', () => {
            form.reset();
            form.classList.remove('was-validated', 'd-none');
            successBox.classList.add('d-none');
            fileDrop.classList.remove('has-file');
            fileText.innerHTML = 'Click to attach <small class="text-muted">image, PDF or document &middot; max 5MB</small>';
        });
    });
</script>

<?php include "include/footer.php" ?>
