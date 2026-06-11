<?php include "include/header.php" ?>

<style>
/* ===== Application Modal ===== */
.apply-modal .modal-content { box-shadow: 0 30px 80px rgba(0, 0, 0, .25); }
.apply-modal-head {
    position: relative;
    padding: 2rem 2.5rem 1.75rem;
    color: #fff;
    background: linear-gradient(135deg, var(--secondary, #0e7c7b) 0%, var(--primary, #0a5c5b) 100%);
}
.apply-modal-head h3 { font-weight: 700; }
.apply-modal-tag {
    display: inline-block;
    font-size: .72rem;
    letter-spacing: .12em;
    text-transform: uppercase;
    font-weight: 600;
    background: rgba(255, 255, 255, .16);
    padding: .35rem .9rem;
    border-radius: 50px;
    margin-bottom: .85rem;
}
.apply-close-btn {
    position: absolute;
    top: 1.1rem;
    right: 1.25rem;
    width: 38px;
    height: 38px;
    border: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, .18);
    color: #fff;
    font-size: 1rem;
    transition: background .2s, transform .2s;
}
.apply-close-btn:hover { background: rgba(255, 255, 255, .32); transform: rotate(90deg); }
.apply-label { font-weight: 600; font-size: .85rem; color: #344; margin-bottom: .35rem; }
.apply-input-group .input-group-text {
    background: #f6f9f9;
    border-right: 0;
    color: var(--secondary, #0e7c7b);
}
.apply-input-group .form-control,
.apply-input-group .form-select { border-left: 0; padding-left: .25rem; }
.apply-input-group .form-control:focus,
.apply-input-group .form-select:focus { box-shadow: none; border-color: #ced4da; }
.apply-input-group:focus-within { box-shadow: 0 0 0 .2rem rgba(14, 124, 123, .15); border-radius: .4rem; }
.apply-file-drop {
    display: flex;
    align-items: center;
    gap: .9rem;
    width: 100%;
    padding: 1rem 1.25rem;
    border: 2px dashed #cdd;
    border-radius: .6rem;
    background: #f8fbfb;
    cursor: pointer;
    transition: border-color .2s, background .2s;
}
.apply-file-drop:hover { border-color: var(--secondary, #0e7c7b); background: #f0f7f7; }
.apply-file-drop i { font-size: 1.5rem; color: var(--secondary, #0e7c7b); }
.apply-file-text { display: flex; flex-direction: column; font-weight: 600; color: #344; }
.apply-file-text small { font-weight: 400; }
.apply-file-drop input[type=file] { display: none; }
.apply-file-drop.has-file { border-color: var(--secondary, #0e7c7b); border-style: solid; background: #eef7f7; }
.apply-success-icon {
    width: 76px;
    height: 76px;
    margin: 1rem auto 0;
    border-radius: 50%;
    background: rgba(14, 124, 123, .12);
    color: var(--secondary, #0e7c7b);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}
</style>

<!-- 1. Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <span class="current">Careers</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">Join a Team Dedicated to
            Delivering Service with Love</h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            Build a rewarding career with purpose &mdash; making a meaningful impact in people's lives, every single
            day.
        </p>
        <a href="#open-positions" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold mt-2"
            data-aos="fade-up" data-aos-delay="300">View Open Positions <i class="fa-solid fa-arrow-down ms-2"></i></a>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Why Work With Us -->
<section id="why-work">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">Why Maya</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Why Work With Us</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            More than a job &mdash; a chance to do meaningful work alongside people who genuinely care.
        </p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-seedling"></i></div>
                    <h4 class="text-teal font-outfit mb-3">Career Growth</h4>
                    <p class="text-muted mb-0">Clear pathways, mentorship, and funded training to help you grow into the
                        role you want.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <h4 class="text-teal font-outfit mb-3">Flexible Environment</h4>
                    <p class="text-muted mb-0">Rosters that respect your life, with part-time, full-time, and casual
                        options across regions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon-wrapper"><i class="fa-solid fa-people-pulling"></i></div>
                    <h4 class="text-teal font-outfit mb-3">Positive Culture</h4>
                    <p class="text-muted mb-0">A supportive, inclusive team that celebrates wins and lifts each other
                        up.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 4. Open Positions -->
<section id="open-positions">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">We're Hiring</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Open Positions</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
                Find a role that fits your skills and your purpose.
            </p>
        </div>

        <!-- Search + filter -->
        <div class="row g-3 justify-content-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i
                            class="fa-solid fa-magnifying-glass text-muted"></i></span>
                    <input type="text" id="jobSearch" class="form-control border-start-0"
                        placeholder="Search job titles...">
                </div>
            </div>
            <div class="col-lg-3">
                <select id="jobFilter" class="form-select">
                    <option value="all">All Departments</option>
                    <option value="care">Care &amp; Support</option>
                    <option value="clinical">Clinical</option>
                    <option value="admin">Administration</option>
                    <option value="community">Community</option>
                </select>
            </div>
        </div>

        <div class="row g-4" id="jobList">
            <?php
            $jobs = [
                ['Disability Support Worker', 'care', 'Melbourne, VIC', 'Full-time', '1+ years'],
                ['Registered Nurse - Community', 'clinical', 'Geelong, VIC', 'Part-time', '3+ years'],
                ['Support Coordinator', 'care', 'Remote / Hybrid', 'Full-time', '2+ years'],
                ['Intake & Admin Officer', 'admin', 'Melbourne, VIC', 'Full-time', '1+ years'],
                ['Community Engagement Lead', 'community', 'Ballarat, VIC', 'Full-time', '4+ years'],
                ['Mental Health Support Worker', 'clinical', 'Bendigo, VIC', 'Casual', '2+ years'],
            ];
            $d = 0;
            foreach ($jobs as $j): $d += 80; ?>
            <div class="col-lg-6 job-item" data-dept="<?= $j[1] ?>" data-title="<?= strtolower($j[0]) ?>"
                data-aos="fade-up" data-aos-delay="<?= $d ?>">
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <h4 class="font-outfit"><?= htmlspecialchars($j[0]) ?></h4>
                        <span class="badge-category"><i class="fa-solid fa-briefcase"></i><?= $j[3] ?></span>
                    </div>
                    <div class="job-meta">
                        <span><i class="fa-solid fa-location-dot"></i><?= $j[2] ?></span>
                        <span><i class="fa-solid fa-user-clock"></i><?= $j[4] ?> experience</span>
                    </div>
                    <p class="text-muted small mb-3">Join our team and make a genuine difference in the lives of the
                        people and communities we support.</p>
                    <button type="button" class="btn btn-outline-teal rounded-pill btn-sm px-4 fw-bold apply-btn"
                        data-job="<?= htmlspecialchars($j[0]) ?>">Apply Now <i
                            class="fa-solid fa-arrow-right ms-1"></i></button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center text-muted mt-4 d-none" id="noJobs">No positions match your search. Try different
            keywords.</p>
    </div>
</section>


<!-- 7. Recruitment Process -->
<section class="bg-light-section">
    <div class="container text-center">
        <span class="section-tag" data-aos="fade-up">How to Join</span>
        <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Our Recruitment Process</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
            A simple, transparent journey from application to your first day.
        </p>
        <div class="row g-4 g-lg-3 mt-2">
            <?php
            $steps = [
                ['1', 'fa-paper-plane', 'Apply', 'Submit your application and resume online in minutes.'],
                ['2', 'fa-magnifying-glass', 'Screening', 'Our team reviews your experience and gives you a call.'],
                ['3', 'fa-comments', 'Interview', 'A friendly conversation about you, us, and the role.'],
                ['4', 'fa-file-signature', 'Offer', 'Receive your offer and complete onboarding checks.'],
                ['5', 'fa-handshake-angle', 'Onboarding', 'Welcome aboard! Training and mentorship from day one.'],
            ];
            $d = 0;
            foreach ($steps as $s): $d += 100; ?>
            <div class="col-lg col-md-6" data-aos="fade-up" data-aos-delay="<?= $d ?>">
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

<!-- 8. Volunteer Opportunities -->
<section id="volunteer">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="story-img-wrap accent-bottom">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=900&q=80"
                        alt="Volunteers at a community event">
                </div>
            </div>
            <div class="col-lg-6 story-content" data-aos="fade-left">
                <span class="section-tag">Give Your Time</span>
                <h2 class="story-title font-outfit">Volunteer Opportunities</h2>
                <p class="story-lead">Not looking for a paid role but still want to make a difference? Our volunteers
                    are the heartbeat of our community programs.</p>
                <ul class="story-feature-list">
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-people-group"></i></span>
                        <div>
                            <p class="feat-title">Community Event Helpers</p>
                            <p class="feat-desc">Support our social gatherings, picnics, and skill workshops.</p>
                        </div>
                    </li>
                    <li>
                        <span class="feat-icon"><i class="fa-solid fa-hands-holding-circle"></i></span>
                        <div>
                            <p class="feat-title">Companionship &amp; Mentoring</p>
                            <p class="feat-desc">Spend time with participants building friendships and confidence.</p>
                        </div>
                    </li>
                </ul>
                <a href="contact.php" class="btn btn-teal px-5 py-3 rounded-pill fw-bold">Become a Volunteer <i
                        class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>


<!-- Application Modal -->
<div class="modal fade apply-modal" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <!-- Header -->
            <div class="apply-modal-head">
                <button type="button" class="apply-close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <span class="apply-modal-tag"><i class="fa-solid fa-briefcase me-2"></i>Job Application</span>
                <h3 class="font-outfit mb-1" id="applyModalLabel">Apply for <span id="applyJobTitle">this role</span>
                </h3>
                <p class="mb-0 small opacity-75">Takes about 3 minutes. Fields marked <span class="text-warning">*</span>
                    are required.</p>
            </div>

            <!-- Body -->
            <div class="modal-body p-4 p-md-5">
                <form id="applyForm" novalidate>
                    <input type="hidden" name="position" id="applyPositionField">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label apply-label">Full Name <span class="text-danger">*</span></label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Jane Doe" required>
                            </div>
                            <div class="invalid-feedback">Please enter your full name.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label apply-label">Email Address <span
                                    class="text-danger">*</span></label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="jane@email.com"
                                    required>
                            </div>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label apply-label">Phone <span class="text-danger">*</span></label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="tel" name="phone" class="form-control" placeholder="0400 000 000" required>
                            </div>
                            <div class="invalid-feedback">Please enter your phone number.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label apply-label">Position</label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bullseye"></i></span>
                                <input type="text" name="position_display" id="applyPositionDisplay"
                                    class="form-control bg-light" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label apply-label">Years of Experience</label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user-clock"></i></span>
                                <select name="experience" class="form-select">
                                    <option value="0-1">Less than 1 year</option>
                                    <option value="1-3">1 &ndash; 3 years</option>
                                    <option value="3-5">3 &ndash; 5 years</option>
                                    <option value="5+">5+ years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label apply-label">Availability</label>
                            <div class="input-group apply-input-group">
                                <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                <select name="availability" class="form-select">
                                    <option value="full-time">Full-time</option>
                                    <option value="part-time">Part-time</option>
                                    <option value="casual">Casual</option>
                                    <option value="immediate">Available immediately</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label apply-label">Resume / CV <span class="text-danger">*</span></label>
                            <label class="apply-file-drop" for="applyResume">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <span class="apply-file-text">Click to upload <small class="text-muted">PDF, DOC, DOCX
                                        &middot; max 5MB</small></span>
                                <input type="file" name="resume" id="applyResume" accept=".pdf,.doc,.docx" required>
                            </label>
                            <div class="invalid-feedback d-block d-none" id="resumeError">Please attach your resume.
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label apply-label">Cover Note <small
                                    class="text-muted fw-normal">(optional)</small></label>
                            <textarea name="message" class="form-control" rows="3"
                                placeholder="Tell us briefly why you'd be a great fit..."></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="applyConsent" required>
                                <label class="form-check-label small text-muted" for="applyConsent">
                                    I agree to the processing of my personal data in line with the
                                    <a href="#" class="text-teal">Privacy Policy</a>. <span class="text-danger">*</span>
                                </label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 justify-content-end mt-4">
                        <button type="button" class="btn btn-light rounded-pill px-4 fw-bold"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-teal rounded-pill px-5 fw-bold">
                            <span class="apply-submit-text"><i class="fa-solid fa-paper-plane me-2"></i>Submit
                                Application</span>
                            <span class="apply-submit-loading d-none"><span
                                    class="spinner-border spinner-border-sm me-2"></span>Sending...</span>
                        </button>
                    </div>
                </form>

                <!-- Success state -->
                <div class="apply-success text-center d-none">
                    <div class="apply-success-icon"><i class="fa-solid fa-check"></i></div>
                    <h3 class="font-outfit text-teal mt-3">Application Received!</h3>
                    <p class="text-muted">Thanks for applying for <strong id="applySuccessJob"></strong>. Our team will
                        review your details and get back to you within 5 business days.</p>
                    <button type="button" class="btn btn-teal rounded-pill px-5 fw-bold mt-2"
                        data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="modal fade lightbox-modal" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="lightbox-close-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <img src="" id="lightboxImg" class="img-fluid rounded-4 shadow-lg" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const search = document.getElementById('jobSearch');
        const filter = document.getElementById('jobFilter');
        const items = document.querySelectorAll('.job-item');
        const noJobs = document.getElementById('noJobs');
        function applyFilter() {
            const q = (search.value || '').toLowerCase();
            const dept = filter.value;
            let visible = 0;
            items.forEach(item => {
                const matchText = item.dataset.title.includes(q);
                const matchDept = dept === 'all' || item.dataset.dept === dept;
                const show = matchText && matchDept;
                item.style.display = show ? '' : 'none';
                if (show) visible++;
            });
            noJobs.classList.toggle('d-none', visible > 0);
        }
        if (search && filter) {
            search.addEventListener('input', applyFilter);
            filter.addEventListener('change', applyFilter);
        }

        // ===== Application modal =====
        const applyModalEl = document.getElementById('applyModal');
        if (applyModalEl) {
            const applyModal = new bootstrap.Modal(applyModalEl);
            const form = document.getElementById('applyForm');
            const titleSpan = document.getElementById('applyJobTitle');
            const posDisplay = document.getElementById('applyPositionDisplay');
            const posField = document.getElementById('applyPositionField');
            const successJob = document.getElementById('applySuccessJob');
            const successBox = applyModalEl.querySelector('.apply-success');
            const submitText = applyModalEl.querySelector('.apply-submit-text');
            const submitLoading = applyModalEl.querySelector('.apply-submit-loading');
            const fileInput = document.getElementById('applyResume');
            const fileDrop = applyModalEl.querySelector('.apply-file-drop');
            const fileText = applyModalEl.querySelector('.apply-file-text');
            const resumeError = document.getElementById('resumeError');

            // Open + prefill from any Apply Now button
            document.querySelectorAll('.apply-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const job = btn.dataset.job || 'this role';
                    titleSpan.textContent = job;
                    posDisplay.value = job;
                    posField.value = job;
                    applyModal.show();
                });
            });

            // File chosen feedback
            fileInput.addEventListener('change', () => {
                if (fileInput.files.length) {
                    fileDrop.classList.add('has-file');
                    fileText.innerHTML = fileInput.files[0].name +
                        '<small class="text-muted">Click to change</small>';
                    resumeError.classList.add('d-none');
                }
            });

            // Submit
            form.addEventListener('submit', e => {
                e.preventDefault();
                let ok = form.checkValidity();
                form.classList.add('was-validated');
                if (!fileInput.files.length) {
                    resumeError.classList.remove('d-none');
                    ok = false;
                }
                if (!ok) return;

                submitText.classList.add('d-none');
                submitLoading.classList.remove('d-none');

                // Simulate sending (replace with real fetch() to your endpoint)
                setTimeout(() => {
                    submitText.classList.remove('d-none');
                    submitLoading.classList.add('d-none');
                    successJob.textContent = posField.value;
                    form.classList.add('d-none');
                    successBox.classList.remove('d-none');
                }, 1200);
            });

            // Reset when closed
            applyModalEl.addEventListener('hidden.bs.modal', () => {
                form.reset();
                form.classList.remove('was-validated', 'd-none');
                successBox.classList.add('d-none');
                fileDrop.classList.remove('has-file');
                fileText.innerHTML = 'Click to upload <small class="text-muted">PDF, DOC, DOCX &middot; max 5MB</small>';
                resumeError.classList.add('d-none');
            });
        }
    });
</script>

<?php include "include/footer.php" ?>
