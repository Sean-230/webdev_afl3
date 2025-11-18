<!-- filepath: resources/views/layouts/footer.blade.php -->
<footer class="py-5 text-white" style="background-color: #173648;">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                        style="width: 70px; height: 70px; background-color: white; padding: 8px; flex-shrink: 0;">
                        <img src="{{ asset('images/logo_transparan.png') }}" alt="Depo Es Krim"
                            style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h4 class="fw-bold mb-0" style="font-size: 1.5rem;">Depo Es Krim</h4>
                </div>
                <p class="opacity-75 mb-4 lh-lg" style="font-size: 0.95rem;">
                    Menyediakan es krim, bahan, dan perlengkapan. Melayani sepenuh hati dengan produk-produk berkualitas
                    untuk kesuksesan bisnis Anda.
                </p>

                <!-- Social Media Links -->
                <h6 class="fw-semibold mb-3" style="color: #0FB7D4;">Ikuti Kami</h6>
                <div class="d-flex gap-2">
                    <a href="#"
                        class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#"
                        class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#"
                        class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://wa.me/6281234567890"
                        class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        target="_blank"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-4" style="color: #0FB7D4;">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <a href="{{ route('home') }}" class="footer-link">
                            <i class="bi bi-chevron-right me-2" style="font-size: 0.8rem;"></i>Beranda
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('products') }}" class="footer-link">
                            <i class="bi bi-chevron-right me-2" style="font-size: 0.8rem;"></i>Produk
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="/about" class="footer-link">
                            <i class="bi bi-chevron-right me-2" style="font-size: 0.8rem;"></i>Tentang Kami
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('reviews.index') }}" class="footer-link">
                            <i class="bi bi-chevron-right me-2" style="font-size: 0.8rem;"></i>Review
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="{{ route('contact') }}" class="footer-link">
                            <i class="bi bi-chevron-right me-2" style="font-size: 0.8rem;"></i>Kontak
                        </a>
                    </li>
                </ul>

                <!-- Additional Info -->
                <div class="mt-4 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                    <h6 class="fw-semibold mb-3" style="color: #0FB7D4; font-size: 0.95rem;">Informasi Kontak</h6>
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-telephone-fill me-2 mt-1" style="color: #0FB7D4; font-size: 0.9rem;"></i>
                        <div>
                            <a href="tel:+6281234567890" class="footer-contact-link d-block mb-1">
                                +62 812 3456 7890
                            </a>
                            <a href="tel:+6282198765432" class="footer-contact-link d-block">
                                +62 821 9876 5432
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="bi bi-envelope-fill me-2 mt-1" style="color: #0FB7D4; font-size: 0.9rem;"></i>
                        <div>
                            <a href="mailto:info@depoeskrim.com" class="footer-contact-link d-block">
                                info@depoeskrim.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operating Hours -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="fw-bold mb-4" style="color: #0FB7D4;">Jam Operasional</h5>

                <!-- Operating Hours List -->
                <div class="mb-4">
                    <!-- Senin - Sabtu -->
                    <div class="p-4 rounded-3 mb-3"
                        style="background: linear-gradient(135deg, rgba(28, 127, 221, 0.15) 0%, rgba(15, 183, 212, 0.15) 100%); border-left: 4px solid #0FB7D4;">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-grow-1">
                                <i class="bi bi-calendar-check fs-4 me-3" style="color: #0FB7D4;"></i>
                                <div>
                                    <h6 class="fw-bold mb-1 text-white">Senin - Sabtu</h6>
                                    <p class="mb-0 opacity-75">08:00 - 18:00</p>
                                </div>
                            </div>
                            <span class="badge bg-success fs-6 px-3 py-2 ms-3">Buka</span>
                        </div>
                    </div>

                    <!-- Minggu / Libur -->
                    <div class="p-4 rounded-3"
                        style="background: linear-gradient(135deg, rgba(220, 53, 69, 0.15) 0%, rgba(220, 53, 69, 0.1) 100%); border-left: 4px solid #dc3545;">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-grow-1">
                                <i class="bi bi-calendar-x fs-4 me-3" style="color: #dc3545;"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">Minggu / Hari Libur</h6>
                                </div>
                            </div>
                            <span class="badge bg-danger fs-6 px-3 py-2 ms-3">Tutup</span>
                        </div>
                    </div>
                </div>

                <!-- Emergency Service Card -->
                <div class="p-4 rounded"
                    style="background: linear-gradient(135deg, rgba(15, 183, 212, 0.2) 0%, rgba(28, 127, 221, 0.2) 100%); border: 2px solid rgba(15, 183, 212, 0.3);">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-headset fs-4 me-3" style="color: #0FB7D4;"></i>
                        <div>
                            <h6 class="fw-semibold mb-2" style="color: white;">Layanan Darurat</h6>
                            <p class="mb-0 opacity-75 small">
                                Tersedia 24/7 untuk klien prioritas dan pesanan mendesak
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="tel:+6281234567890" class="btn btn-sm flex-fill fw-semibold"
                            style="background-color: #1C7FDD; color: white; border-radius: 8px; padding: 8px 16px; transition: all 0.3s ease;"
                            onmouseover="this.style.backgroundColor='#0FB7D4';"
                            onmouseout="this.style.backgroundColor='#1C7FDD';">
                            <i class="bi bi-telephone-fill me-1"></i>Call
                        </a>
                        <a href="https://wa.me/6281234567890" class="btn btn-sm flex-fill fw-semibold"
                            style="background-color: transparent; color: white; border: 2px solid #0FB7D4; border-radius: 8px; padding: 8px 16px; transition: all 0.3s ease;"
                            target="_blank"
                            onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.borderColor='#0FB7D4';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0FB7D4';">
                            <i class="bi bi-whatsapp me-1"></i>Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.2); opacity: 0.5;">

        <!-- Copyright - Centered -->
        <div class="text-center">
            <p class="mb-0 opacity-75" style="font-size: 0.95rem;">
                &copy; {{ date('Y') }} Depo Es Krim. All rights reserved.
            </p>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button onclick="scrollToTop()" id="backToTopBtn"
        class="btn rounded-circle position-fixed bottom-0 end-0 m-4 shadow-lg"
        style="width: 55px; height: 55px; background-color: #1C7FDD; color: white; 
               border: none; display: none; z-index: 1000; transition: all 0.3s ease;"
        onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.transform='scale(1.1)';"
        onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.transform='scale(1)';">
        <i class="bi bi-arrow-up-short fs-3"></i>
    </button>

    <script>
        // Back to Top Button functionality
        window.onscroll = function() {
            const backToTopBtn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <style>
        /* Footer Links */
        .footer-link {
            color: white;
            opacity: 0.75;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            font-size: 0.95rem;
        }

        .footer-link:hover {
            opacity: 1;
            color: #0FB7D4;
            transform: translateX(5px);
        }

        .footer-contact-link {
            color: white;
            opacity: 0.75;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .footer-contact-link:hover {
            opacity: 1;
            color: #0FB7D4;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {

            footer h5,
            footer h6 {
                font-size: 1.1rem;
            }

            footer .btn-sm {
                padding: 6px 12px;
                font-size: 0.85rem;
            }

            footer .rounded-circle {
                width: 60px !important;
                height: 60px !important;
            }

            footer h4 {
                font-size: 1.25rem !important;
            }
        }
    </style>
</footer>
