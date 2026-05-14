// ============================================
// INITIALIZATION
// ============================================

// State variables - initialize first
let isOpen = false;
let isPlaying = false;
let particlesArray = [];
let animationFrameId = null;

// DOM Elements - will be assigned after DOM is ready
let cover, mainContent, hero, musicPlayer, bgMusic, canvas, ctx;

// Check reduced motion preference
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// ============================================
// PARTICLES SYSTEM
// ============================================

class Particle {
    constructor(canvasWidth, canvasHeight) {
const cw = Math.max(100, canvasWidth);
const ch = Math.max(100, canvasHeight);
this.x = Math.random() * cw;
this.y = Math.random() * ch;
this.size = Math.max(0.5, Math.random() * 2 + 0.5);
this.speedX = (Math.random() - 0.5) * 0.3;
this.speedY = Math.max(0.1, Math.random() * 0.5 + 0.2);
this.opacity = Math.max(0.1, Math.random() * 0.5 + 0.2);
    }
    
    update(canvasWidth, canvasHeight) {
const cw = Math.max(100, canvasWidth);
const ch = Math.max(100, canvasHeight);

this.x += this.speedX;
this.y += this.speedY;

if (this.y > ch) {
    this.y = 0;
    this.x = Math.random() * cw;
}
if (this.x > cw) this.x = 0;
if (this.x < 0) this.x = cw;
    }
    
    draw(context) {
if (!context) return;

const safeOpacity = Math.max(0, Math.min(1, this.opacity));
const safeSize = Math.max(0.1, this.size);

context.save();
context.globalAlpha = safeOpacity;
context.fillStyle = '#d4af37';
context.beginPath();
context.arc(this.x, this.y, safeSize, 0, Math.PI * 2);
context.fill();
context.restore();
    }
}

function initParticles() {
    if (!canvas) return;
    
    canvas.width = Math.max(100, window.innerWidth);
    canvas.height = Math.max(100, window.innerHeight);
    
    particlesArray = [];
    const particleCount = prefersReducedMotion ? 0 : Math.min(50, Math.floor(window.innerWidth / 25));
    
    for (let i = 0; i < particleCount; i++) {
particlesArray.push(new Particle(canvas.width, canvas.height));
    }
}

function animateParticles() {
    if (!ctx || !canvas) return;
    if (prefersReducedMotion) return;
    
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    const cw = Math.max(100, canvas.width);
    const ch = Math.max(100, canvas.height);
    
    particlesArray.forEach(particle => {
particle.update(cw, ch);
particle.draw(ctx);
    });
    
    animationFrameId = requestAnimationFrame(animateParticles);
}

// ============================================
// COUNTDOWN TIMER
// ============================================

function updateCountdown() {

    const weddingDate = new Date('2026-06-03T10:00:00').getTime();

    const now = new Date().getTime();

    const distance = weddingDate - now;

    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    if (distance < 0) {

        daysEl.textContent = '00';
        hoursEl.textContent = '00';
        minutesEl.textContent = '00';
        secondsEl.textContent = '00';

        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));

    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) /
        (1000 * 60 * 60)
    );

    const minutes = Math.floor(
        (distance % (1000 * 60 * 60)) /
        (1000 * 60)
    );

    const seconds = Math.floor(
        (distance % (1000 * 60)) / 1000
    );

    daysEl.textContent = String(days).padStart(2, '0');
    hoursEl.textContent = String(hours).padStart(2, '0');
    minutesEl.textContent = String(minutes).padStart(2, '0');
    secondsEl.textContent = String(seconds).padStart(2, '0');
}

updateCountdown();

setInterval(updateCountdown, 1000);

// ============================================
// SCROLL REVEAL
// ============================================

function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal');
    
    if (prefersReducedMotion) {
revealElements.forEach(el => el.classList.add('active'));
return;
    }
    
    const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
    if (entry.isIntersecting) {
entry.target.classList.add('active');
    }
});
    }, {
threshold: 0.1,
rootMargin: '0px 0px -50px 0px'
    });
    
    revealElements.forEach(el => observer.observe(el));
}

// ============================================
// OPEN INVITATION
// ============================================

function openInvitation() {
    if (!cover || !mainContent || !hero || !musicPlayer) return;
    
    isOpen = true;
    
    // Hide cover
    cover.classList.add('hidden');
    
    // Show main content
    setTimeout(() => {
mainContent.classList.add('visible');
if(hero){
    hero.classList.add('opened');
}
musicPlayer.classList.add('visible');

// Initialize scroll reveal after content is visible
initScrollReveal();

// Start music
if (bgMusic && !prefersReducedMotion) {
    bgMusic.volume = 0.3;
    bgMusic.play().then(() => {
isPlaying = true;
musicPlayer.classList.add('playing');
    }).catch(e => console.log('Audio autoplay prevented'));
}
    }, 300);
}

// ============================================
// MUSIC CONTROL
// ============================================

function toggleMusic() {
    if (!bgMusic || !musicPlayer) return;
    
    if (isPlaying) {
bgMusic.pause();
musicPlayer.classList.remove('playing');
    } else {
bgMusic.play().catch(e => console.log('Audio play failed'));
musicPlayer.classList.add('playing');
    }
    isPlaying = !isPlaying;
}

// ============================================
// UTILITY FUNCTIONS
// ============================================

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
alert('Copied to clipboard!');
    }).catch(() => {
alert('Failed to copy');
    });
}

function openMaps(location) {

    const locations = {
        ceremony: 'Bale Banjar Batuaji, Bali',
        reception: 'Bale Banjar Batuaji, Bali'
    };

    const query = locations[location];

    if(query){
        window.open(
            `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(query)}`,
            '_blank'
        );
    }

}

function submitRSVP(e) {
    e.preventDefault();
    alert('Thank you for your RSVP! We look forward to celebrating with you.');
}

// ============================================
// PARALLAX EFFECT
// ============================================

function initParallax() {
    if (prefersReducedMotion) return;
    
    const heroBg = document.querySelector('.hero-bg');

    if (!heroBg) return;
    
    window.addEventListener('scroll', () => {
if (window.innerWidth >= 1024) return; // Skip on desktop

const scrolled = window.pageYOffset;
const rate = scrolled * 0.3;
heroBg.style.transform = `scale(1.1) translateY(${rate}px)`;
    }, { passive: true });
}

// ============================================
// INITIALIZATION ON DOM READY
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    // Assign DOM elements
    cover = document.getElementById('cover');
    mainContent = document.getElementById('mainContent');
    hero = document.getElementById('hero');
    musicPlayer = document.getElementById('musicPlayer');
    bgMusic = document.getElementById('bgMusic');
    canvas = document.getElementById('particles-canvas');
    
    // Initialize canvas context
    if (canvas) {
ctx = canvas.getContext('2d');
    }
    
    // Initialize systems
    initParticles();
    animateParticles();
    updateCountdown();
    setInterval(updateCountdown, 1000);
    initParallax();
    
    // Initialize cover reveal animations
    if (!prefersReducedMotion) {
document.querySelectorAll('.invitation-cover .reveal').forEach(el => {
    el.classList.add('active');
});
    }
    
    // Resize handler
    let resizeTimeout;
    window.addEventListener('resize', () => {
clearTimeout(resizeTimeout);
resizeTimeout = setTimeout(() => {
    if (canvas) {
canvas.width = Math.max(100, window.innerWidth);
canvas.height = Math.max(100, window.innerHeight);
    }
}, 200);
    });
});

// Cleanup on page unload
window.addEventListener('beforeunload', () => {
    if (animationFrameId) {
cancelAnimationFrame(animationFrameId);
    }
});

/* ======================
   NAMA TAMU
====================== */
const params = new URLSearchParams(window.location.search);
const guest = params.get('mengundang') || 'Tamu Undangan';
document.getElementById('guest').innerText = guest;

/* ======================
   KOMENTAR
====================== */
const API_URL = "https://script.google.com/macros/s/AKfycbzesfbWIzUp6qEOrSTO5A5fbr5PuAaRToHRXRBpdx7ZeKS4Qg5CrlAVB4FiBl7oliIb/exec";

function addComment(){
    const name = document.getElementById("name").value.trim();
    const message = document.getElementById("message").value.trim();
    const status = document.getElementById("commentStatus");

    if(!name || !message){
        alert("Isi dulu bro 😄");
        return;
    }

    status.innerText = "Mengirim ucapan";
    status.classList.add("loading");

    fetch(API_URL,{
        method:"POST",
        body: JSON.stringify({name, message})
    })
    .then(res=>res.json())
    .then(()=>{
        status.innerText = "Ucapan terkirim 💜";
        status.classList.remove("loading");

        document.getElementById("name").value = "";
        document.getElementById("message").value = "";

        loadComments();

        setTimeout(()=>status.innerText="",2000);
    })
    .catch(()=>{
        status.innerText = "Gagal mengirim 😢";
        status.classList.remove("loading");
    });
}

function loadComments() {

    fetch(API_URL)

        .then(res => {

            if (!res.ok) {
                throw new Error("HTTP ERROR " + res.status);
            }

            return res.json();
        })

        .then(data => {

            console.log("DATA JSON:", data);

            const list = document.getElementById("wishesList");

            if (!list) {
                console.error("#wishesList tidak ditemukan");
                return;
            }

            list.innerHTML = "";

            // Pastikan data array
            if (!Array.isArray(data)) {
                console.error("Data bukan array");
                return;
            }

            // Reverse supaya komentar terbaru di atas
            data.slice().reverse().forEach((c) => {

                // Support huruf besar / kecil
                const name =
                    c.Nama ||
                    c.nama ||
                    c.Name ||
                    c.name ||
                    "Guest";

                const message =
                    c.Pesan ||
                    c.pesan ||
                    c.Message ||
                    c.message ||
                    "";

                const rawDate =
                    c.Waktu ||
                    c.waktu ||
                    c.Time ||
                    c.time ||
                    "";

                // Buat inisial
                const initials = name
                    .split(" ")
                    .map(word => word.charAt(0))
                    .join("")
                    .substring(0, 2)
                    .toUpperCase();

                // Format tanggal
                let date = "";

                if (rawDate) {

                    const dateObj = new Date(rawDate);

                    if (!isNaN(dateObj)) {

                        date = dateObj.toLocaleString("id-ID", {
                            day: "2-digit",
                            month: "short",
                            year: "numeric",
                            hour: "2-digit",
                            minute: "2-digit"
                        });

                    } else {

                        date = rawDate;

                    }
                }

                // Card komentar
                const div = document.createElement("div");

                div.className =
                    "glass-card p-6 relative opacity-0 translate-y-5 transition-all duration-500";

                div.innerHTML = `
                    <div class="flex items-start gap-4">

                        <!-- Inisial -->
                        <div class="w-10 h-10 rounded-full bg-gold/20
                            flex items-center justify-center flex-shrink-0">

                            <span class="text-gold font-medium">
                                ${initials}
                            </span>

                        </div>

                        <!-- Isi -->
                        <div class="flex-1 relative">

                            <!-- Waktu -->
                            <span class="absolute top-0 right-0 text-xs text-text/40">
                                ${date}
                            </span>

                            <!-- Nama -->
                            <p class="font-medium mb-2 pr-20">
                                ${name}
                            </p>

                            <!-- Pesan -->
                            <p class="text-text/60 text-sm leading-relaxed break-words">
                                ${message}
                            </p>

                        </div>

                    </div>
                `;

                list.appendChild(div);

                // Animasi muncul
                setTimeout(() => {
                    div.classList.remove("opacity-0", "translate-y-5");
                }, 100);

            });

        })

        .catch(err => {

            console.error("ERROR LOAD COMMENT:", err);

            const list = document.getElementById("wishesList");

            if (list) {

                list.innerHTML = `
                    <div class="glass-card p-6 text-center">
                        <p class="text-red-400">
                            Gagal memuat ucapan.
                        </p>
                    </div>
                `;
            }

        });
}


// Jalankan setelah halaman siap
document.addEventListener("DOMContentLoaded", () => {
    loadComments();
});