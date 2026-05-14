<?php
require "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Undangan Pawiwahan Sunarta & Mina">
    <meta property="og:description" content="Undangan Pernikahan 3 Juni 2026">
    <meta property="og:image" content="https://sunarta-mina.my.id/image/image_thumbnail_landscape.jpg">
    <meta property="og:url" content="https://sunarta-mina.my.id">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandra & James | Wedding Invitation</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Outfit:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#0b0b0b',
                    secondary: '#111111',
                    gold: '#d4af37',
                    softGold: '#f1d27a',
                    text: '#f5f5f5',
                },
                fontFamily: {
                    serif: ['Playfair Display', 'serif'],
                    sans: ['Outfit', 'sans-serif'],
                }
            }
        }
    }
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Particles Canvas -->
    <canvas id="particles-canvas"></canvas>

    <!-- Invitation Cover -->
    <div class="invitation-cover" id="cover">
        <div class="cover-content">
            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">You Are Invited</p>
            <h1 class="font-display text-4xl md:text-6xl font-semibold mb-2 reveal reveal-delay-1">
                <span class="gold-text">Ni Komang Minaliati</span>
            </h1>
            <p class="font-display text-xl md:text-2xl text-text/60 italic mb-2 reveal reveal-delay-2 gold-text">&</p>
            <h1 class="font-display text-4xl md:text-6xl font-semibold mb-6 reveal reveal-delay-3">
                <span class="gold-text">I Ketut Sunarta</span>
            </h1>

            <div class="cover-ornament reveal reveal-delay-3"></div>

            <p class="text-text/70 text-lg mb-8 reveal reveal-delay-4">
            <div class="font-bold">Kepada Yth.</div>
            <span class="font-semibold" id="guest"></span>
            </p>

            <div class="cover-ornament reveal reveal-delay-3"></div>

            <button id="openBtn" class="btn-gold reveal reveal-delay-4" onclick="openInvitation()">
                Open Invitation
            </button>

            <p class="text-text/40 text-sm mt-6 reveal reveal-delay-4 semibold">
                03 Juni 2026 | Bali, Indonesia
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Mobile Hero -->
        <section class="hero mobile-hero lg:hidden" id="hero">
            <div class="hero-bg"></div>
            <div class="hero-overlay"></div>
            <div class="hero-vignette"></div>

            <div class="relative z-10 text-center px-6">
                <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4">The Wedding Of</p>
                <h1 class="font-display text-5xl md:text-7xl font-semibold mb-2">
                    <span class="gold-text">Minaliati</span>
                </h1>
                <p class="font-display text-2xl text-text/60 italic my-4">&</p>
                <h1 class="font-display text-5xl md:text-7xl font-semibold mb-8">
                    <span class="gold-text">Sunarta</span>
                </h1>
                <p class="text-text/70 text-lg">03 Juni 2026 | Bali, Indonesia</p>
            </div>
        </section>

        <!-- Desktop Layout -->
        <div class="desktop-layout">
            <!-- Left Panel (Desktop Only) -->
            <aside class="left-panel hidden lg:flex">
                <div class="desktop-left-content text-center">
                    <div class="relative w-64 h-64 mx-auto mb-8">
                        <img src="../prawed/RV_08820.JPG" alt="Couple"
                            class="w-full h-full object-cover rounded-full border-3 border-gold">
                        <div class="absolute inset-0 rounded-full border border-gold/30 animate-pulse"></div>
                    </div>
                    <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4">The Wedding Of</p>
                    <h1 class="font-display text-4xl font-semibold mb-1">
                        <span class="gold-text">Ni Komang Minaliati</span>
                    </h1>
                    <p class="font-display text-xl text-text/60 italic my-3">&</p>
                    <h1 class="font-display text-4xl font-semibold mb-6">
                        <span class="gold-text">I Ketut Sunarta</span>
                    </h1>
                    <p class="text-text/70 mb-8">03 Juni 2026 | Bali, Indonesia</p>
                    <div class="ornament-line">
                        <span class="ornament-diamond"></span>
                    </div>
                    <p class="text-text/50 text-sm italic mt-6">Bersama Keluarga</p>
                </div>
            </aside>

            <!-- Right Panel -->
            <main class="right-panel">
                <!-- Quote Section -->
                <section class="section">
                    <div class="max-w-2xl mx-auto text-center">
                        <div class="reveal">
                            <svg class="w-8 h-8 mx-auto mb-6 text-gold/50" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <p
                            class="font-display text-2xl md:text-3xl italic text-text/80 leading-relaxed reveal reveal-delay-1">
                            "And they lived happily ever after, not because their story was perfect, but because they
                            chose to write it together."
                        </p>
                        <div class="ornament-line reveal reveal-delay-2">
                            <span class="ornament-diamond"></span>
                        </div>
                    </div>
                </section>

                <!-- Bride & Groom Section -->
                <section class="section">
                    <div class="max-w-4xl mx-auto">
                        <div class="text-center mb-16">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">The Happy Couple</p>
                            <h2 class="font-display text-3xl md:text-4xl font-semibold reveal reveal-delay-1">
                                <span class="gold-text">Bride & Groom</span>
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">

                            <!-- Bride -->
                            <div class="glass-card couple-card text-center reveal reveal-delay-2 relative">

                                <div class="relative inline-block">
                                    <img src="../prawed/RV_08841.JPG" alt="Bride" class="mx-auto">

                                    <div class="absolute inset-0 rounded-full border border-gold/20 animate-pulse">
                                    </div>
                                </div>

                                <h3 class="font-display text-2xl font-semibold gold-text mb-2">
                                    Ni Komang Minaliati
                                </h3>

                                <p class="text-text/60 text-sm mb-6 tracking-[0.2em] uppercase">
                                    The Bride
                                </p>

                                <div class="space-y-4 text-left mt-6">

                                    <div class="info-item">
                                        <span class="info-label">Anak Ke</span>
                                        <p class="info-value">Ke-3</p>
                                    </div>

                                    <div class="info-item">
                                        <span class="info-label">Orang Tua</span>
                                        <p class="info-value">
                                            I Ketut Suana <br>
                                            Ni Made Bari (Alm.)
                                        </p>
                                    </div>

                                    <div class="info-item">
                                        <span class="info-label">Alamat</span>
                                        <p class="info-value">
                                            Banjar Dinas Batuaji,
                                            Sukawati, Gianyar
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <!-- Groom -->
                            <div class="glass-card couple-card text-center reveal reveal-delay-3 relative md:mt-12">

                                <div class="relative inline-block">
                                    <img src="../prawed/RV_08846.JPG" alt="Groom" class="mx-auto">

                                    <div class="absolute inset-0 rounded-full border border-gold/20 animate-pulse">
                                    </div>
                                </div>

                                <h3 class="font-display text-2xl font-semibold gold-text mb-2">
                                    I Ketut Sunarta
                                </h3>

                                <p class="text-text/60 text-sm mb-6 tracking-[0.2em] uppercase">
                                    The Groom
                                </p>

                                <div class="space-y-4 text-left mt-6">

                                    <div class="info-item">
                                        <span class="info-label">Anak Ke</span>
                                        <p class="info-value">Ke-4</p>
                                    </div>

                                    <div class="info-item">
                                        <span class="info-label">Orang Tua</span>
                                        <p class="info-value">
                                            I Made Kacung (Alm.) <br>
                                            Ni Wayan Mangkin
                                        </p>
                                    </div>

                                    <div class="info-item">
                                        <span class="info-label">Alamat</span>
                                        <p class="info-value">
                                            Banjar Dinas Batuaji, Sukawati, Gianyar
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <!-- Countdown Section -->
                <section class="section" id="countdown-section">
                    <div class="countdown-bg"></div>
                    <div class="countdown-overlay"></div>
                    <div class="max-w-3xl mx-auto text-center">
                        <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Counting Down</p>
                        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-12 reveal reveal-delay-1">
                            <span class="gold-text">Until We Say "I Do"</span>
                        </h2>

                        <div class="flex justify-center gap-4 md:gap-6 reveal reveal-delay-2" id="countdown">
                            <div class="countdown-item">
                                <span class="countdown-number" id="days">00</span>
                                <p class="countdown-label">Days</p>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="hours">00</span>
                                <p class="countdown-label">Hours</p>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="minutes">00</span>
                                <p class="countdown-label">Minutes</p>
                            </div>
                            <div class="countdown-item">
                                <span class="countdown-number" id="seconds">00</span>
                                <p class="countdown-label">Seconds</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Event Details -->
                <section class="section">
                    <div class="max-w-4xl mx-auto">
                        <div class="text-center mb-16">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Save The Date</p>
                            <h2 class="font-display text-3xl md:text-4xl font-semibold reveal reveal-delay-1">
                                <span class="gold-text">Wedding Events</span>
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Ceremony -->
                            <div class="event-card reveal reveal-delay-2">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 rounded-full bg-gold/10 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-display text-xl font-semibold gold-text">Ceremony</h3>
                                        <p class="text-text/50 text-sm">Natab Nganten</p>
                                    </div>
                                </div>
                                <div class="space-y-3 text-text/70">
                                    <p class="flex items-center gap-3">
                                        <svg class="w-5 h-5 text-gold/60" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Rabu, 3 Juni 2026 / Buda Umanis, Wuku Julungwangi Saka 1948
                                    </p>
                                    <p class="flex items-center gap-3">
                                        <svg class="w-5 h-5 text-gold/60" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        12:00 AM - 13:30 PM
                                    </p>
                                    <p class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-gold/60 mt-0.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Rumah Keluarga Besar Bapak Pintu<br>
                                        <span class="text-text/50">Banjar Adat Batuaji</span>
                                    </p>
                                </div>
                                <button class="btn-outline w-full mt-6" onclick="openMaps('ceremony')">
                                    View Location
                                </button>
                            </div>

                            <!-- Reception -->
                            <div class="event-card reveal reveal-delay-3">
                                <div class="flex items-center gap-4 mb-6">
                                    <div class="w-12 h-12 rounded-full bg-gold/10 flex items-center justify-center">
                                        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-display text-xl font-semibold gold-text">Reception</h3>
                                        <p class="text-text/50 text-sm">Wedding Dinner</p>
                                    </div>
                                </div>
                                <div class="space-y-3 text-text/70">
                                    <p class="flex items-center gap-3">
                                        <svg class="w-5 h-5 text-gold/60" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Rabu, 3 Juni 2026 / Buda Umanis, Wuku Julungwangi Saka 1948
                                    </p>
                                    <p class="flex items-center gap-3">
                                        <svg class="w-5 h-5 text-gold/60" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        6:00 PM - SELESAI
                                    </p>
                                    <p class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-gold/60 mt-0.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Rumah Keluarga Besar Bapak Pintu<br>
                                        <span class="text-text/50">Banjar Adat Batuaji</span>
                                    </p>
                                </div>
                                <button class="btn-outline w-full mt-6" onclick="openMaps('reception')">
                                    View Location
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Gallery Section -->
                <section class="section">
                    <div class="max-w-5xl mx-auto">
                        <div class="text-center mb-16">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Our Moments</p>
                            <h2 class="font-display text-3xl md:text-4xl font-semibold reveal reveal-delay-1">
                                <span class="gold-text">Gallery</span>
                            </h2>
                        </div>

                        <div class="gallery-grid">
                            <div class="gallery-item reveal reveal-delay-2">
                                <img src="../prawed/RV_08710.JPG" alt="Gallery 1" loading="lazy">
                            </div>
                            <div class="gallery-item reveal reveal-delay-2">
                                <img src="../prawed/RV_08717.JPG" alt="Gallery 2" loading="lazy">
                            </div>
                            <div class="gallery-item reveal reveal-delay-3">
                                <img src="../prawed/RV_08741.JPG" alt="Gallery 3" loading="lazy">
                            </div>
                            <div class="gallery-item reveal reveal-delay-3">
                                <img src="../prawed/RV_08772.JPG" alt="Gallery 4" loading="lazy">
                            </div>
                            <div class="gallery-item reveal reveal-delay-4">
                                <img src="../prawed/RV_08804.JPG" alt="Gallery 5" loading="lazy">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Love Story / Timeline -->
                <!-- <section class="section">
                    <div class="max-w-2xl mx-auto">
                        <div class="text-center mb-16">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Our Journey</p>
                            <h2 class="font-display text-3xl md:text-4xl font-semibold reveal reveal-delay-1">
                                <span class="gold-text">Love Story</span>
                            </h2>
                        </div>

                        <div class="timeline">
                            <div class="timeline-item reveal">
                                <div class="timeline-dot"></div>
                                <div class="glass-card p-6 relative">
                                    <p class="text-gold text-sm mb-2">March 2020</p>
                                    <h3 class="font-display text-xl font-semibold mb-2">First Meeting</h3>
                                    <p class="text-text/60 text-sm">We met at a coffee shop in Brooklyn. Little did we
                                        know that a simple conversation would change our lives forever.</p>
                                </div>
                            </div>

                            <div class="timeline-item reveal reveal-delay-1">
                                <div class="timeline-dot"></div>
                                <div class="glass-card p-6 relative">
                                    <p class="text-gold text-sm mb-2">December 2021</p>
                                    <h3 class="font-display text-xl font-semibold mb-2">First Date</h3>
                                    <p class="text-text/60 text-sm">A romantic dinner under the stars. That night, we
                                        both knew there was something special between us.</p>
                                </div>
                            </div>

                            <div class="timeline-item reveal reveal-delay-2">
                                <div class="timeline-dot"></div>
                                <div class="glass-card p-6 relative">
                                    <p class="text-gold text-sm mb-2">August 2024</p>
                                    <h3 class="font-display text-xl font-semibold mb-2">The Proposal</h3>
                                    <p class="text-text/60 text-sm">On a beautiful summer evening, with the sunset as
                                        our witness, James got down on one knee and asked the question.</p>
                                </div>
                            </div>

                            <div class="timeline-item reveal reveal-delay-3">
                                <div class="timeline-dot"></div>
                                <div class="glass-card p-6 relative">
                                    <p class="text-gold text-sm mb-2">December 2025</p>
                                    <h3 class="font-display text-xl font-semibold mb-2">Forever Begins</h3>
                                    <p class="text-text/60 text-sm">We invite you to celebrate with us as we begin our
                                        journey as husband and wife.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- Gift Section -->
                <section class="section">
                    <div class="max-w-xl mx-auto text-center">
                        <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Wedding Gift</p>
                        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-8 reveal reveal-delay-1">
                            <span class="gold-text">Send Your Blessings</span>
                        </h2>

                        <div class="glass-card p-8 relative reveal reveal-delay-2">
                            <p class="text-text/70 mb-6">
                                Kehadiran dan doa restu Anda merupakan hadiah terindah bagi kami.
                                Namun, apabila Anda ingin memberikan tanda kasih, kami telah menyediakan
                                beberapa pilihan hadiah untuk memudahkan Anda.
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 bg-white/5 rounded-xl">
                                    <div>
                                        <p class="font-medium">Bank Transfer</p>
                                        <p class="text-text/50 text-sm">Bank Central Asia</p>
                                    </div>
                                    <button class="btn-outline text-sm py-2 px-4"
                                        onclick="copyToClipboard('7730913022')">
                                        Copy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- RSVP Section -->
                <section class="section" id="rsvp-section">
                    <div class="max-w-xl mx-auto">
                        <div class="text-center mb-12">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Be Our Guest</p>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm text-text/70 mb-2">Nama</label>
                                <input type="text" class="form-input" id="name" placeholder="Enter your full name"
                                    required>
                            </div>

                            <!-- <div>
                                        <label class="block text-sm text-text/70 mb-2">Email Address</label>
                                        <input type="email" class="form-input" placeholder="Enter your email" required>
                                    </div> -->

                            <!-- <div>
                                    <label class="block text-sm text-text/70 mb-2">Number of Guests</label>
                                    <select class="form-input">
                                        <option value="1">1 Person</option>
                                        <option value="2">2 Persons</option>
                                        <option value="3">3 Persons</option>
                                        <option value="4">4 Persons</option>
                                    </select>
                                </div> -->

                            <!-- <div>
                                    <label class="block text-sm text-text/70 mb-2">Attendance</label>
                                    <div class="flex gap-4">
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="attendance" value="confirm" class="accent-gold"
                                                checked>
                                            <span>Will Attend</span>
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="attendance" value="decline" class="accent-gold">
                                            <span>Cannot Attend</span>
                                        </label>
                                    </div>
                                </div> -->

                            <div>
                                <label class="block text-sm text-text/70 mb-2">Message (Optional)</label>
                                <textarea class="form-input h-24 resize-none" id="message"
                                    placeholder="Write your wishes..."></textarea>
                            </div>

                            <button type="button" class="btn-gold w-full" onclick="addComment()">
                                Komentar
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Wishes Section -->
                <section class="section">
                    <div class="max-w-2xl mx-auto">
                        <div class="text-center mb-12">
                            <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal">Warm Wishes</p>
                            <h2 class="font-display text-3xl md:text-4xl font-semibold reveal reveal-delay-1">
                                <span class="gold-text">Guest Wishes</span>
                            </h2>
                        </div>

                        <div id="commentStatus" class="comment-status"></div>

                        <div class="space-y-4 reveal reveal-delay-2" id="wishesList">
                            <!-- Comments loaded by JavaScript -->
                        </div>
                    </div>
                </section>

                <!-- Closing Section -->
                <section class="section text-center">
                    <div class="closing-bg"></div>
                    <div class="closing-overlay"></div>
                    <div class="max-w-2xl mx-auto">
                        <div class="ornament-line reveal mb-8">
                            <span class="ornament-diamond"></span>
                        </div>

                        <p class="text-gold text-sm tracking-[0.3em] uppercase mb-4 reveal reveal-delay-1">
                            Terima Kasih
                        </p>

                        <h2 class="font-display text-3xl md:text-4xl font-semibold mb-4 reveal reveal-delay-2">
                            <span class="gold-text">Telah Menjadi Bagian Dari Kisah Kami</span>
                        </h2>

                        <p class="text-text/60 mb-8 reveal reveal-delay-3">
                            Kami mengucapkan terima kasih atas doa, dukungan, dan kehadiran Anda.
                            Merupakan suatu kebahagiaan bagi kami dapat berbagi momen istimewa ini
                            bersama orang-orang terkasih.
                        </p>

                        <div class="reveal reveal-delay-4">
                            <p class="font-display text-xl italic text-text/70">With Love,</p>
                            <p class="font-display text-2xl gold-text mt-2">Minaliati & Sunarta</p>
                        </div>

                        <div class="ornament-line reveal reveal-delay-4 mt-8">
                            <span class="ornament-diamond"></span>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="py-8 text-center border-t border-gold/10">
                    <p class="text-text/40 text-sm">Made with love for Minaliati & Sunarta</p>
                    <p class="text-text/30 text-xs mt-2">December 28, 2025</p>
                </footer>
            </main>
        </div>
    </div>

    <!-- Music Player -->
    <div class="music-player" id="musicPlayer" onclick="toggleMusic()">
        <svg class="w-6 h-6 text-gold music-icon" id="musicIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
        </svg>
    </div>

    <!-- Audio Element -->
    <audio id="bgMusic" loop>
        <source src="https://gurubaru.github.io/sunarta-mina/music/a_lyrics.mp3" type="audio/mpeg">
    </audio>
    <script src="script.js"></script>
</body>

</html>