<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ice Cream Distribution</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="text-white py-5" style="margin-top: 76px; background-color: var(--primary-dark);">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/"
                                    class="text-white text-decoration-none opacity-75">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                    <h1 class="display-4 fw-bold mb-3">Get In Touch</h1>
                    <p class="lead mb-4 opacity-90">Have questions about our ice cream products? We'd love to hear from
                        you. Send us a message and we'll respond as soon as possible.</p>
                    <div class="d-flex gap-3 mb-3">
                        <i class="bi bi-check-circle-fill fs-5" style="color: var(--accent-pink);"></i>
                        <span>Quick Response Time</span>
                    </div>
                    <div class="d-flex gap-3 mb-3">
                        <i class="bi bi-check-circle-fill fs-5" style="color: var(--accent-pink);"></i>
                        <span>Professional Support Team</span>
                    </div>
                    <div class="d-flex gap-3">
                        <i class="bi bi-check-circle-fill fs-5" style="color: var(--accent-pink);"></i>
                        <span>Available 24/7</span>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <i class="bi bi-envelope-heart display-1 opacity-25"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="card-title fw-bold mb-4" style="color: var(--primary-dark);">Send Us a Message
                            </h2>
                            <form>
                                <div class="row g-3">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Full Name <span
                                                style="color: var(--accent-pink);">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"
                                                style="border-color: var(--primary-teal);">
                                                <i class="bi bi-person" style="color: var(--primary-teal);"></i>
                                            </span>
                                            <input type="text" class="form-control" id="name"
                                                style="border-color: var(--primary-teal);" placeholder="John Doe"
                                                required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Email Address <span
                                                style="color: var(--accent-pink);">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"
                                                style="border-color: var(--primary-teal);">
                                                <i class="bi bi-envelope" style="color: var(--primary-teal);"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email"
                                                style="border-color: var(--primary-teal);"
                                                placeholder="john@example.com" required>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Phone Number <span
                                                style="color: var(--accent-pink);">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"
                                                style="border-color: var(--primary-teal);">
                                                <i class="bi bi-telephone" style="color: var(--primary-teal);"></i>
                                            </span>
                                            <input type="tel" class="form-control" id="phone"
                                                style="border-color: var(--primary-teal);"
                                                placeholder="+62 812 3456 7890" required>
                                        </div>
                                    </div>

                                    <!-- Company -->
                                    <div class="col-md-6">
                                        <label for="company" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Company Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"
                                                style="border-color: var(--primary-teal);">
                                                <i class="bi bi-building" style="color: var(--primary-teal);"></i>
                                            </span>
                                            <input type="text" class="form-control" id="company"
                                                style="border-color: var(--primary-teal);" placeholder="Your Company">
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-12">
                                        <label for="subject" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Subject <span
                                                style="color: var(--accent-pink);">*</span></label>
                                        <select class="form-select" id="subject"
                                            style="border-color: var(--primary-teal);" required>
                                            <option value="" selected disabled>Choose a subject...</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="product">Product Information</option>
                                            <option value="order">Bulk Order</option>
                                            <option value="partnership">Partnership Opportunity</option>
                                            <option value="support">Customer Support</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <!-- Message -->
                                    <div class="col-12">
                                        <label for="message" class="form-label fw-semibold"
                                            style="color: var(--primary-dark);">Message <span
                                                style="color: var(--accent-pink);">*</span></label>
                                        <textarea class="form-control" id="message" rows="6"
                                            style="border-color: var(--primary-teal);"
                                            placeholder="Tell us more about your inquiry..." required></textarea>
                                        <div class="form-text" style="color: var(--primary-teal);">Please provide as
                                            much detail as possible</div>
                                    </div>

                                    <!-- Agreement -->
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agreement" required>
                                            <label class="form-check-label" for="agreement"
                                                style="color: var(--primary-dark);">
                                                I agree to the <a href="#" class="text-decoration-none"
                                                    style="color: var(--primary-teal);">Privacy Policy</a>
                                                and <a href="#" class="text-decoration-none"
                                                    style="color: var(--primary-teal);">Terms of Service</a>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">
                                            <i class="bi bi-send me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="row g-4">
                        <!-- Contact Details Card -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <h3 class="card-title fw-bold mb-4" style="color: var(--primary-dark);">Contact
                                        Information</h3>

                                    <!-- Address -->
                                    <div class="d-flex mb-4">
                                        <div class="contact-icon-box icon-dark shrink-0 me-3">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div class="grow">
                                            <h5 class="fw-semibold mb-1" style="color: var(--primary-dark);">Address
                                            </h5>
                                            <p class="text-muted mb-0">Jl. Raya Distribution No. 123<br>Jakarta
                                                Selatan, DKI Jakarta 12345<br>Indonesia</p>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="d-flex mb-4">
                                        <div class="contact-icon-box icon-teal shrink-0 me-3">
                                            <i class="bi bi-telephone-fill"></i>
                                        </div>
                                        <div class="grow">
                                            <h5 class="fw-semibold mb-1" style="color: var(--primary-dark);">Phone</h5>
                                            <p class="text-muted mb-1">+62 812 3456 7890</p>
                                            <p class="text-muted mb-0">+62 821 9876 5432</p>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="d-flex mb-4">
                                        <div class="contact-icon-box icon-pink shrink-0 me-3">
                                            <i class="bi bi-envelope-fill"></i>
                                        </div>
                                        <div class="grow">
                                            <h5 class="fw-semibold mb-1" style="color: var(--primary-dark);">Email</h5>
                                            <p class="text-muted mb-1">info@icecream.com</p>
                                            <p class="text-muted mb-0">support@icecream.com</p>
                                        </div>
                                    </div>

                                    <!-- Working Hours -->
                                    <div class="d-flex">
                                        <div class="contact-icon-box icon-peach shrink-0 me-3">
                                            <i class="bi bi-clock-fill"></i>
                                        </div>
                                        <div class="grow">
                                            <h5 class="fw-semibold mb-1" style="color: var(--primary-dark);">Working
                                                Hours</h5>
                                            <p class="text-muted mb-1">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                            <p class="text-muted mb-1">Saturday: 9:00 AM - 4:00 PM</p>
                                            <p class="text-muted mb-0">Sunday: Closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Card -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h3 class="card-title fw-bold mb-4" style="color: var(--primary-dark);">Follow Us
                                    </h3>
                                    <div class="d-flex gap-3">
                                        <a href="#" class="social-btn"
                                            style="background-color: rgba(26, 49, 83, 0.1); color: var(--primary-dark);">
                                            <i class="bi bi-facebook fs-5"></i>
                                        </a>
                                        <a href="#" class="social-btn"
                                            style="background-color: rgba(239, 147, 255, 0.2); color: var(--accent-pink);">
                                            <i class="bi bi-instagram fs-5"></i>
                                        </a>
                                        <a href="#" class="social-btn"
                                            style="background-color: rgba(12, 87, 119, 0.1); color: var(--primary-teal);">
                                            <i class="bi bi-twitter fs-5"></i>
                                        </a>
                                        <a href="#" class="social-btn"
                                            style="background-color: rgba(12, 87, 119, 0.1); color: var(--primary-teal);">
                                            <i class="bi bi-whatsapp fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5" style="background-color: white;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3" style="color: var(--primary-dark);">Find Us Here</h2>
                <p class="text-muted">Visit our distribution center or warehouse</p>
            </div>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="ratio ratio-21x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.194450000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sMonas!5e0!3m2!1sen!2sid!4v1635123456789!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5" style="background-color: var(--accent-peach);">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3" style="color: var(--primary-dark);">Frequently Asked Questions</h2>
                <p class="text-muted">Quick answers to common questions</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" style="color: var(--primary-dark); background-color: white;">
                                    What is the minimum order quantity?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--primary-dark);">
                                    Our minimum order quantity varies by product. For ice cream, the minimum is 50
                                    pieces. For supplies like cones and cups, the minimum is usually 100 pieces. Contact
                                    us for specific product MOQ.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2"
                                    style="color: var(--primary-dark);">
                                    Do you offer delivery services?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--primary-dark);">
                                    Yes! We offer temperature-controlled delivery services throughout Jakarta and
                                    surrounding areas. Delivery fees depend on location and order size. We also offer
                                    pickup options at our warehouse.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3"
                                    style="color: var(--primary-dark);">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--primary-dark);">
                                    We accept bank transfers, credit cards, cash on delivery, and for regular customers,
                                    we offer payment terms. Contact our sales team to discuss payment options that work
                                    best for your business.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4"
                                    style="color: var(--primary-dark);">
                                    Can I become a distributor?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--primary-dark);">
                                    Absolutely! We're always looking for reliable distribution partners. Please contact
                                    us through this form or call our partnership hotline to discuss distributor
                                    opportunities in your area.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5"
                                    style="color: var(--primary-dark);">
                                    Do you provide product samples?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="color: var(--primary-dark);">
                                    Yes, we can provide samples for potential business partners. Please contact us to
                                    arrange a sampling session at our warehouse or request delivery of sample products.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-white" style="background-color: var(--primary-teal);">
        <div class="container text-center py-4">
            <h2 class="fw-bold display-6 mb-3">Ready to Get Started?</h2>
            <p class="lead mb-4 opacity-90">Contact us today and let's grow your ice cream business together!</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="tel:+6281234567890" class="btn btn-light btn-lg px-5"
                    style="color: var(--primary-dark); font-weight: 600;">
                    <i class="bi bi-telephone me-2"></i>Call Now
                </a>
                <a href="https://wa.me/6281234567890" class="btn btn-lg px-5"
                    style="background-color: var(--accent-pink); color: var(--primary-dark); border: none; font-weight: 600;">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Form validation
        (function() {
            'use strict'
            var forms = document.querySelectorAll('form')
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        event.preventDefault()
                        alert('Thank you for your message! We will get back to you soon.')
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>