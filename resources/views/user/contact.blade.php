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

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Include Navbar -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section class="bg-primary text-white py-5" style="margin-top: 76px;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Get In Touch</h1>
                    <p class="lead mb-4">Have questions about our ice cream products? We'd love to hear from you. Send
                        us a message and we'll respond as soon as possible.</p>
                    <div class="d-flex gap-3 mb-4">
                        <i class="bi bi-check-circle-fill fs-5"></i>
                        <span>Quick Response Time</span>
                    </div>
                    <div class="d-flex gap-3 mb-4">
                        <i class="bi bi-check-circle-fill fs-5"></i>
                        <span>Professional Support Team</span>
                    </div>
                    <div class="d-flex gap-3">
                        <i class="bi bi-check-circle-fill fs-5"></i>
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
                            <h2 class="card-title fw-bold mb-4">Send Us a Message</h2>
                            <form>
                                <div class="row g-3">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-semibold">Full Name <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i
                                                    class="bi bi-person"></i></span>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="John Doe" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-semibold">Email Address <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i
                                                    class="bi bi-envelope"></i></span>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="john@example.com" required>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label fw-semibold">Phone Number <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i
                                                    class="bi bi-telephone"></i></span>
                                            <input type="tel" class="form-control" id="phone"
                                                placeholder="+62 812 3456 7890" required>
                                        </div>
                                    </div>

                                    <!-- Company -->
                                    <div class="col-md-6">
                                        <label for="company" class="form-label fw-semibold">Company Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white"><i
                                                    class="bi bi-building"></i></span>
                                            <input type="text" class="form-control" id="company"
                                                placeholder="Your Company">
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-12">
                                        <label for="subject" class="form-label fw-semibold">Subject <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select" id="subject" required>
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
                                        <label for="message" class="form-label fw-semibold">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="message" rows="6"
                                            placeholder="Tell us more about your inquiry..." required></textarea>
                                        <div class="form-text">Please provide as much detail as possible</div>
                                    </div>

                                    <!-- Agreement -->
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agreement" required>
                                            <label class="form-check-label" for="agreement">
                                                I agree to the <a href="#" class="text-decoration-none">Privacy
                                                    Policy</a> and <a href="#"
                                                    class="text-decoration-none">Terms of Service</a>
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
                                    <h3 class="card-title fw-bold mb-4">Contact Information</h3>

                                    <!-- Address -->
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3">
                                                <i class="bi bi-geo-alt-fill fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fw-semibold mb-1">Address</h5>
                                            <p class="text-muted mb-0">Jl. Raya Distribution No. 123<br>Jakarta Selatan,
                                                DKI Jakarta 12345<br>Indonesia</p>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-success bg-opacity-10 text-success rounded-circle p-3">
                                                <i class="bi bi-telephone-fill fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fw-semibold mb-1">Phone</h5>
                                            <p class="text-muted mb-1">+62 812 3456 7890</p>
                                            <p class="text-muted mb-0">+62 821 9876 5432</p>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0">
                                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle p-3">
                                                <i class="bi bi-envelope-fill fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fw-semibold mb-1">Email</h5>
                                            <p class="text-muted mb-1">info@icecream.com</p>
                                            <p class="text-muted mb-0">support@icecream.com</p>
                                        </div>
                                    </div>

                                    <!-- Working Hours -->
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="bg-warning bg-opacity-10 text-warning rounded-circle p-3">
                                                <i class="bi bi-clock-fill fs-5"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="fw-semibold mb-1">Working Hours</h5>
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
                                    <h3 class="card-title fw-bold mb-4">Follow Us</h3>
                                    <div class="d-flex gap-3">
                                        <a href="#"
                                            class="btn btn-outline-primary rounded-circle p-3 d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-facebook fs-5"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-outline-danger rounded-circle p-3 d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-instagram fs-5"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-outline-info rounded-circle p-3 d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
                                            <i class="bi bi-twitter fs-5"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-outline-success rounded-circle p-3 d-flex align-items-center justify-content-center"
                                            style="width: 50px; height: 50px;">
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
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3">Find Us Here</h2>
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
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3">Frequently Asked Questions</h2>
                <p class="text-muted">Quick answers to common questions</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    What is the minimum order quantity?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
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
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you offer delivery services?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
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
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
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
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Can I become a distributor?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
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
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you provide product samples?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
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
    <section class="py-5 bg-primary text-white">
        <div class="container text-center py-4">
            <h2 class="fw-bold display-6 mb-3">Ready to Get Started?</h2>
            <p class="lead mb-4">Contact us today and let's grow your ice cream business together!</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="tel:+6281234567890" class="btn btn-light btn-lg px-5">
                    <i class="bi bi-telephone me-2"></i>Call Now
                </a>
                <a href="https://wa.me/6281234567890" class="btn btn-success btn-lg px-5">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-snow me-2"></i>IceCream Distribution
                    </h5>
                    <p class="text-white-50">Your trusted partner for premium ice cream distribution services across
                        Indonesia.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Products</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="/contact" class="text-white-50 text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Ice Cream</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Ice Cream Powder</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Cones & Cups</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Contact Info</h5>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-geo-alt me-2"></i>Jakarta, Indonesia
                    </p>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-telephone me-2"></i>+62 812 3456 7890
                    </p>
                    <p class="text-white-50">
                        <i class="bi bi-envelope me-2"></i>info@icecream.com
                    </p>
                </div>
            </div>

            <hr class="my-4 bg-white opacity-25">

            <div class="text-center">
                <p class="text-white-50 mb-0">&copy; 2024 IceCream Distribution. All rights reserved.</p>
            </div>
        </div>
    </footer>

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