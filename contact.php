<?php include "include/header.php" ?>

<!-- 1. Hero -->
<section class="page-hero"
    style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1920&q=85');">
    <div class="page-hero-overlay"></div>
    <div class="container text-center">
        <nav class="page-breadcrumb" data-aos="fade-up" aria-label="breadcrumb">
            <a href="index.php"><i class="fa-solid fa-house me-1"></i>Home</a>
            <span class="sep">/</span>
            <span class="current">Contact</span>
        </nav>
        <h1 class="page-hero-title font-outfit" data-aos="fade-up" data-aos-delay="100">Let's Connect</h1>
        <p class="page-hero-lead" data-aos="fade-up" data-aos-delay="200">
            Have a question or ready to start your care journey? Our team is here to help &mdash; reach out any way you
            like.
        </p>
    </div>
    <div class="page-hero-divider">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#ffffff" d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z"></path>
        </svg>
    </div>
</section>

<!-- 2. Contact Information Cards -->
<section id="contact-info">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-card">
                    <div class="c-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h5 class="font-outfit">Office Address</h5>
                    <p>100 Care Circle, Suite A<br>Melbourne, VIC 3000</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-card">
                    <div class="c-icon"><i class="fa-solid fa-phone"></i></div>
                    <h5 class="font-outfit">Phone Number</h5>
                    <a href="tel:1800467327">1800-HOPE-BRIDGE</a><br>
                    <a href="tel:0390000000">(03) 9000 0000</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-card">
                    <div class="c-icon"><i class="fa-solid fa-envelope"></i></div>
                    <h5 class="font-outfit">Email Address</h5>
                    <a href="mailto:contact@hopebridgecare.org">contact@hopebridgecare.org</a><br>
                    <a href="mailto:support@hopebridgecare.org">support@hopebridgecare.org</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-card">
                    <div class="c-icon"><i class="fa-solid fa-clock"></i></div>
                    <h5 class="font-outfit">Working Hours</h5>
                    <p>Mon &ndash; Fri: 8am &ndash; 6pm<br>Sat: 9am &ndash; 1pm<br>24/7 On-call Support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Contact Form + Quick Options -->
<section class="bg-light-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-tag">Send a Message</span>
                <h2 class="text-teal font-outfit fw-black mb-3">We'd Love to Hear From You</h2>
                <p class="text-muted mb-4"><strong class="text-coral">Delivering Service with Love</strong> means
                    listening, caring, and responding to your needs. We'd love to hear from you.</p>
                <div class="contact-form-wrap">
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Full Name</label>
                                <input type="text" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Email Address</label>
                                <input type="email" class="form-control" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="0400 000 000">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Subject</label>
                                <input type="text" class="form-control" placeholder="How can we help?">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted">Service Interested In</label>
                                <select class="form-select">
                                    <option>Supported Independent Living (SIL)</option>
                                    <option>Daily Living Assistance</option>
                                    <option>Community Participation</option>
                                    <option>Disability Support &amp; Care</option>
                                    <option>Mental Health Support</option>
                                    <option>Respite Care Services</option>
                                    <option>General Enquiry</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted">Message</label>
                                <textarea class="form-control" rows="5"
                                    placeholder="Tell us a little about what you need..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold">
                                    <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                        <div class="form-success" id="contactSuccess">
                            <i class="fa-solid fa-circle-check me-2"></i>Thank you! Your message has been sent. We'll be
                            in touch within 24 hours.
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left">
                <span class="section-tag">Quick Options</span>
                <h2 class="text-teal font-outfit fw-black mb-4">Prefer Something Faster?</h2>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <a href="tel:1800467327" class="quick-contact">
                            <div class="qc-icon bg-teal"><i class="fa-solid fa-phone"></i></div>
                            <div>
                                <h6 class="font-outfit">Call Us</h6>
                                <span>1800-HOPE-BRIDGE</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="mailto:contact@hopebridgecare.org" class="quick-contact">
                            <div class="qc-icon bg-coral"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <h6 class="font-outfit">Email Us</h6>
                                <span>Drop us a line</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="https://wa.me/611800467327" class="quick-contact">
                            <div class="qc-icon" style="background:#25D366;"><i class="fa-brands fa-whatsapp"></i></div>
                            <div>
                                <h6 class="font-outfit">WhatsApp</h6>
                                <span>Chat with us</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="quick-contact">
                            <div class="qc-icon" style="background:#6366f1;"><i class="fa-solid fa-comments"></i></div>
                            <div>
                                <h6 class="font-outfit">Live Chat</h6>
                                <span>Available 8am&ndash;6pm</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Emergency banner -->
                <div class="emergency-banner mt-4" data-aos="zoom-in">
                    <div class="eb-icon"><i class="fa-solid fa-headset"></i></div>
                    <div>
                        <h4 class="font-outfit fw-bold text-white mb-1">24/7 Emergency Support</h4>
                        <p class="m-0 small">For urgent participant care needs, call our on-call line anytime.</p>
                    </div>
                    <a href="tel:1800467327" class="btn btn-light rounded-pill fw-bold px-4">Call Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Map -->
<section class="pt-0">
    <div class="container">
        <div class="map-wrap" data-aos="fade-up">
            <iframe
                src="https://www.google.com/maps?q=Melbourne%20VIC%20Australia&output=embed"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Maya location"></iframe>
        </div>
    </div>
</section>

<!-- 5. FAQ -->
<section id="faq" class="bg-light-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag" data-aos="fade-up">Common Inquiries</span>
            <h2 class="section-title text-teal" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#cf1">How quickly will you respond to my enquiry?</button>
                        </h2>
                        <div id="cf1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Our care coordinators respond to all enquiries within 24 hours,
                                and usually much sooner during business hours.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#cf2">Do I need an NDIS plan to contact you?</button>
                        </h2>
                        <div id="cf2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Not at all. Whether you're NDIS funded, self-managed, or just
                                exploring options, we're happy to talk through what's possible.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#cf3">Can I book an in-person consultation?</button>
                        </h2>
                        <div id="cf3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Yes. We offer consultations at our office, in your home, or over
                                video call &mdash; whatever is most comfortable for you.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. CTA -->
<section class="cta-gradient-section text-white text-center">
    <div class="container" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-outfit fw-black mb-3 text-white" style="font-size: 2.8rem; line-height: 1.2;">We're Here
                    to Help</h2>
                <p class="lead mb-5 text-white-50">No question is too small. Reach out today and take the first step
                    toward personalised, compassionate support.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="tel:1800467327" class="btn btn-coral text-white px-5 py-3 rounded-pill fw-bold fs-6"><i
                            class="fa-solid fa-phone me-2"></i>Call 1800-HOPE-BRIDGE</a>
                    <a href="#contact-info"
                        class="btn btn-outline-light px-5 py-3 rounded-pill fw-bold fs-6">View Contact Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contactForm');
        const success = document.getElementById('contactSuccess');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                success.classList.add('show');
                form.reset();
                setTimeout(() => success.classList.remove('show'), 6000);
            });
        }
    });
</script>

<?php include "include/footer.php" ?>
