<!-- filepath: resources/views/layouts/footer.blade.php -->
<footer class="py-5 text-white" style="background-color: #173648;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logo_transparan.png') }}" alt="Depo Es Krim" width="50" height="50"
                        class="me-3">
                    <h4 class="fw-bold mb-0">Depo Es Krim</h4>
                </div>
                <p class="opacity-75 mb-4">
                    Mitra terpercaya Anda untuk layanan distribusi es krim premium di seluruh Indonesia. 
                    Produk berkualitas, pengiriman yang dapat diandalkan, dan harga kompetitif untuk kesuksesan bisnis Anda.
                </p>
                <!-- Social Media Links -->
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 45px; height: 45px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 45px; height: 45px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 45px; height: 45px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle border d-flex align-items-center justify-content-center"
                        style="width: 45px; height: 45px; color: white; border-color: #0A5A99 !important; transition: all 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-3px)';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Us -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="fw-bold mb-4">Hubungi Kami</h4>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill me-3 mt-1 fs-5" style="color: #0FB7D4;"></i>
                            <span class="opacity-75">
                                Jl. Raya Distribution No. 123<br>
                                Jakarta Selatan, DKI Jakarta<br>
                                12345, Indonesia
                            </span>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telephone-fill me-3 fs-5" style="color: #0FB7D4;"></i>
                            <a href="tel:+6281234567890" class="text-decoration-none opacity-75"
                               style="color: white; transition: color 0.3s ease;"
                               onmouseover="this.style.color='#0FB7D4';"
                               onmouseout="this.style.color='white';">
                                +62 812 3456 7890
                            </a>
                        </div>
                    </li>
                    <li class="mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-envelope-fill me-3 fs-5" style="color: #0FB7D4;"></i>
                            <a href="mailto:info@depoeskrim.com" class="text-decoration-none opacity-75"
                               style="color: white; transition: color 0.3s ease;"
                               onmouseover="this.style.color='#0FB7D4';"
                               onmouseout="this.style.color='white';">
                                info@depoeskrim.com
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock-fill me-3 fs-5" style="color: #0FB7D4;"></i>
                            <span class="opacity-75">Senin - Sabtu: 08:00 - 18:00</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Newsletter / CTA -->
            <div class="col-lg-4 col-md-12 mb-4">
                <h4 class="fw-bold mb-4">Tetap Terhubung</h4>
                <p class="opacity-75 mb-3">Dapatkan informasi terbaru tentang produk dan promosi kami.</p>
                
                <!-- Newsletter Form -->
                <div class="mb-4">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Anda" 
                               style="border-radius: 10px 0 0 10px; border: 2px solid #0A5A99; padding: 12px; background-color: rgba(255, 255, 255, 0.1); color: white;">
                        <button class="btn" type="button"
                                style="background-color: #1C7FDD; color: white; 
                                       border-radius: 0 10px 10px 0; font-weight: 600; padding: 12px 20px;
                                       transition: all 0.3s ease; border: 2px solid #1C7FDD;"
                                onmouseover="this.style.backgroundColor='#0FB7D4'; this.style.borderColor='#0FB7D4'; this.style.transform='translateY(-2px)';"
                                onmouseout="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(0)';">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </div>

                <!-- Quick Contact Buttons -->
                <div class="d-grid gap-2">
                    <a href="tel:+6281234567890" class="btn"
                       style="border-radius: 10px; border: 2px solid #0A5A99; background-color: transparent; color: white; font-weight: 600; transition: all 0.3s ease;"
                       onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-2px)';"
                       onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-telephone-fill me-2"></i>Hubungi Sekarang
                    </a>
                    <a href="https://wa.me/6281234567890" class="btn"
                       style="border-radius: 10px; border: 2px solid #0A5A99; background-color: transparent; color: white; font-weight: 600; transition: all 0.3s ease;"
                       onmouseover="this.style.backgroundColor='#1C7FDD'; this.style.borderColor='#1C7FDD'; this.style.transform='translateY(-2px)';"
                       onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='#0A5A99'; this.style.transform='translateY(0)';">
                        <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-4" style="border-color: rgba(10, 90, 153, 0.5);">

        <!-- Copyright -->
        <div class="row">
            <div class="col-12">
                <p class="mb-0 opacity-75 text-center">&copy; 2025 Depo Es Krim. All rights reserved.</p>
            </div>
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

        // Newsletter input placeholder color
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.querySelector('input[type="email"]');
            if (emailInput) {
                emailInput.style.setProperty('color', 'white', 'important');
            }
        });
    </script>

    <style>
        input[type="email"]::placeholder {
            color: rgba(255, 255, 255, 0.6) !important;
        }
        
        input[type="email"]:focus {
            outline: none;
            border-color: #1C7FDD !important;
            box-shadow: 0 0 0 0.2rem rgba(28, 127, 221, 0.25);
        }
    </style>
</footer>
