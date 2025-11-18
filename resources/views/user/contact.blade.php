@extends('layouts.app')

@section('title', 'Hubungi Kami')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="breadcrumb-link">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                        </ol>
                    </nav>
                    <h1 class="contact-hero-title">Hubungi Kami</h1>
                    <p class="contact-hero-subtitle">
                        Kami siap membantu Anda dengan pertanyaan tentang produk, harga grosir, dan layanan distribusi kami.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="hero-stat-card">
                                <i class="bi bi-headset hero-stat-icon"></i>
                                <h5 class="hero-stat-title">24/7 Support</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="hero-stat-card hero-stat-card-secondary">
                                <i class="bi bi-reply-fill hero-stat-icon"></i>
                                <h5 class="hero-stat-title">Respon Cepat</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="contact-section">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <div class="contact-form-header">
                            <h2 class="form-title">Kirim Pesan</h2>
                            <p class="form-subtitle">Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda.
                            </p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row g-4">
                                <!-- Nama Lengkap -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label-custom">
                                        Nama Lengkap <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control-custom @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}"
                                        placeholder="Masukkan nama lengkap Anda" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label-custom">
                                        Alamat Email <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control-custom @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="contoh@email.com" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nomor Telepon -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label-custom">
                                        Nomor Telepon <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control-custom @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{ old('phone') }}"
                                        placeholder="+62 812 3456 7890" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nama Perusahaan -->
                                <div class="col-md-6">
                                    <label for="company" class="form-label-custom">
                                        Nama Perusahaan
                                    </label>
                                    <input type="text" class="form-control-custom" id="company" name="company"
                                        value="{{ old('company') }}" placeholder="Nama perusahaan Anda (opsional)">
                                </div>

                                <!-- Subjek -->
                                <div class="col-12">
                                    <label for="subject" class="form-label-custom">
                                        Subjek <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select-custom @error('subject') is-invalid @enderror" id="subject"
                                        name="subject" required>
                                        <option value="" selected disabled>Pilih subjek pesan...</option>
                                        <option value="general" {{ old('subject') == 'general' ? 'selected' : '' }}>
                                            Pertanyaan Umum</option>
                                        <option value="product" {{ old('subject') == 'product' ? 'selected' : '' }}>
                                            Informasi Produk</option>
                                        <option value="order" {{ old('subject') == 'order' ? 'selected' : '' }}>Pemesanan
                                            Grosir</option>
                                        <option value="partnership"
                                            {{ old('subject') == 'partnership' ? 'selected' : '' }}>Kemitraan Distributor
                                        </option>
                                        <option value="complaint" {{ old('subject') == 'complaint' ? 'selected' : '' }}>
                                            Keluhan / Saran</option>
                                        <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Lainnya
                                        </option>
                                    </select>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Pesan -->
                                <div class="col-12">
                                    <label for="message" class="form-label-custom">
                                        Pesan <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control-custom @error('message') is-invalid @enderror" id="message" name="message"
                                        rows="6" placeholder="Tulis pesan Anda di sini..." required>{{ old('message') }}</textarea>
                                    <div class="form-text-custom">Minimal 20 karakter</div>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn-submit">
                                        <i class="bi bi-send me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="row g-4">
                        <!-- Informasi Kontak -->
                        <div class="col-12">
                            <div class="contact-info-card">
                                <h4 class="contact-info-title">Informasi Kontak</h4>

                                @php
                                    $contactInfo = [
                                        [
                                            'icon' => 'bi-geo-alt-fill',
                                            'title' => 'Alamat',
                                            'content' => [
                                                'Jl. Raya Distribution No. 123',
                                                'Jakarta Selatan, DKI Jakarta',
                                                '12345, Indonesia',
                                            ],
                                            'type' => 'text',
                                        ],
                                        [
                                            'icon' => 'bi-telephone-fill',
                                            'title' => 'Telepon',
                                            'content' => [
                                                ['number' => '+62 812 3456 7890', 'link' => 'tel:+6281234567890'],
                                                ['number' => '+62 821 9876 5432', 'link' => 'tel:+6282198765432'],
                                            ],
                                            'type' => 'phone',
                                        ],
                                        [
                                            'icon' => 'bi-envelope-fill',
                                            'title' => 'Email',
                                            'content' => [
                                                [
                                                    'email' => 'info@depoeskrim.com',
                                                    'link' => 'mailto:info@depoeskrim.com',
                                                ],
                                                [
                                                    'email' => 'sales@depoeskrim.com',
                                                    'link' => 'mailto:sales@depoeskrim.com',
                                                ],
                                            ],
                                            'type' => 'email',
                                        ],
                                        [
                                            'icon' => 'bi-clock-fill',
                                            'title' => 'Jam Operasional',
                                            'content' => [
                                                'Senin - Jumat: 08:00 - 18:00',
                                                'Sabtu: 09:00 - 16:00',
                                                'Minggu: Libur',
                                            ],
                                            'type' => 'text',
                                        ],
                                    ];
                                @endphp

                                @foreach ($contactInfo as $index => $info)
                                    @if ($index > 0)
                                        <hr class="contact-divider">
                                    @endif

                                    <div class="contact-info-item">
                                        <div class="contact-info-icon-wrapper">
                                            <div class="contact-info-icon contact-info-icon-{{ $loop->iteration }}">
                                                <i class="bi {{ $info['icon'] }}"></i>
                                            </div>
                                        </div>
                                        <div class="contact-info-content">
                                            <h6 class="contact-info-subtitle">{{ $info['title'] }}</h6>

                                            @if ($info['type'] === 'text')
                                                @foreach ($info['content'] as $line)
                                                    <p class="contact-info-text">{{ $line }}</p>
                                                @endforeach
                                            @elseif($info['type'] === 'phone')
                                                @foreach ($info['content'] as $phone)
                                                    <p class="contact-info-text">
                                                        <a href="{{ $phone['link'] }}" class="contact-link">
                                                            {{ $phone['number'] }}
                                                        </a>
                                                    </p>
                                                @endforeach
                                            @elseif($info['type'] === 'email')
                                                @foreach ($info['content'] as $email)
                                                    <p class="contact-info-text">
                                                        <a href="{{ $email['link'] }}" class="contact-link">
                                                            {{ $email['email'] }}
                                                        </a>
                                                    </p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="col-12">
                            <div class="social-media-card">
                                <h5 class="social-media-title">Ikuti Kami</h5>
                                <div class="social-media-links">
                                    @php
                                        $socialMedia = [
                                            ['icon' => 'bi-facebook', 'url' => '#', 'name' => 'Facebook'],
                                            ['icon' => 'bi-instagram', 'url' => '#', 'name' => 'Instagram'],
                                            [
                                                'icon' => 'bi-whatsapp',
                                                'url' => 'https://wa.me/6281234567890',
                                                'name' => 'WhatsApp',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($socialMedia as $social)
                                        <a href="{{ $social['url'] }}"
                                            class="social-link social-link-{{ $loop->iteration }}"
                                            title="{{ $social['name'] }}"
                                            {{ $social['name'] === 'WhatsApp' ? 'target="_blank"' : '' }}>
                                            <i class="bi {{ $social['icon'] }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container py-4">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="faq-title">Pertanyaan yang Sering Diajukan</h2>
                    <p class="faq-subtitle">Jawaban cepat untuk pertanyaan umum</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @php
                        $faqs = [
                            [
                                'question' => 'Berapa jumlah minimum pemesanan?',
                                'answer' =>
                                    'Jumlah minimum pemesanan bervariasi tergantung produk. Untuk es krim, minimum 50 pcs. Untuk perlengkapan seperti cone dan cup, biasanya minimum 100 pcs. Hubungi kami untuk informasi MOQ produk spesifik.',
                                'show' => true,
                            ],
                            [
                                'question' => 'Apakah tersedia layanan pengiriman?',
                                'answer' =>
                                    'Ya! Kami menyediakan layanan pengiriman dengan kontrol suhu ke seluruh Jakarta dan area sekitarnya. Biaya pengiriman tergantung lokasi dan ukuran pesanan. Kami juga menyediakan opsi pickup di gudang kami.',
                                'show' => false,
                            ],
                            [
                                'question' => 'Metode pembayaran apa yang diterima?',
                                'answer' =>
                                    'Kami menerima transfer bank, kartu kredit, dan COD. Untuk pelanggan reguler, kami menawarkan sistem pembayaran tempo. Hubungi tim sales kami untuk diskusi opsi pembayaran yang sesuai untuk bisnis Anda.',
                                'show' => false,
                            ],
                            [
                                'question' => 'Bisakah saya menjadi distributor?',
                                'answer' =>
                                    'Tentu saja! Kami selalu mencari mitra distributor yang dapat diandalkan. Silakan hubungi kami melalui formulir ini atau telepon hotline kemitraan kami untuk diskusi peluang distributor di area Anda.',
                                'show' => false,
                            ],
                            [
                                'question' => 'Apakah ada layanan sampel produk?',
                                'answer' =>
                                    'Ya, kami dapat menyediakan sampel produk untuk calon mitra bisnis. Silakan hubungi kami untuk mengatur sesi sampling di gudang kami atau request pengiriman sampel produk.',
                                'show' => false,
                            ],
                        ];
                    @endphp

                    <div class="accordion" id="faqAccordion">
                        @foreach ($faqs as $index => $faq)
                            <div class="faq-item {{ !$loop->last ? 'mb-3' : '' }}">
                                <h2 class="accordion-header">
                                    <button class="faq-button {{ $faq['show'] ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq{{ $index + 1 }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="faq{{ $index + 1 }}"
                                    class="accordion-collapse collapse {{ $faq['show'] ? 'show' : '' }}"
                                    data-bs-parent="#faqAccordion">
                                    <div class="faq-answer">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
