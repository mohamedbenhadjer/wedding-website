<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#322d2e",
                    "on-secondary": "#ffeff0",
                    "background": "#fef4f5",
                    "error": "#b31b25",
                    "error-dim": "#9f0519",
                    "inverse-primary": "#f96d89",
                    "surface-container-high": "#ebe0e1",
                    "tertiary-container": "#f288ff",
                    "outline": "#7c7576",
                    "on-primary-fixed": "#000000",
                    "on-tertiary-container": "#570066",
                    "on-error-container": "#570008",
                    "on-tertiary": "#ffeefb",
                    "tertiary-dim": "#89089e",
                    "on-tertiary-fixed-variant": "#660076",
                    "surface-container-low": "#f9eeef",
                    "on-error": "#ffefee",
                    "outline-variant": "#b3abac",
                    "surface": "#fef4f5",
                    "on-primary-fixed-variant": "#5f0020",
                    "primary": "#a62e4c",
                    "secondary": "#864958",
                    "on-background": "#322d2e",
                    "on-surface-variant": "#605a5b",
                    "primary-fixed": "#ff728e",
                    "on-secondary-container": "#6e3644",
                    "primary-container": "#ff728e",
                    "surface-container-highest": "#e5dadc",
                    "surface-container": "#f0e6e7",
                    "on-secondary-fixed-variant": "#793f4d",
                    "inverse-on-surface": "#a39b9c",
                    "surface-container-lowest": "#ffffff",
                    "inverse-surface": "#110d0e",
                    "tertiary-fixed": "#f288ff",
                    "secondary-fixed-dim": "#fcafbe",
                    "on-tertiary-fixed": "#2f0038",
                    "primary-dim": "#962140",
                    "surface-dim": "#ddd2d3",
                    "secondary-fixed": "#ffc2cd",
                    "tertiary": "#9720ab",
                    "secondary-container": "#ffc2cd",
                    "surface-tint": "#a62e4c",
                    "on-primary-container": "#4d0019",
                    "surface-variant": "#e5dadc",
                    "primary-fixed-dim": "#ef6581",
                    "on-secondary-fixed": "#572331",
                    "on-primary": "#ffeff0",
                    "surface-bright": "#fef4f5",
                    "error-container": "#fb5151",
                    "secondary-dim": "#783e4c",
                    "tertiary-fixed-dim": "#ea73fb"
            },
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Noto Serif"],
                    "body": ["Plus Jakarta Sans"],
                    "label": ["Plus Jakarta Sans"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .asymmetric-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-auto-rows: 200px;
            gap: 2rem;
        }
        .asymmetric-item:nth-child(3n) { grid-row: span 3; }
        .asymmetric-item:nth-child(3n+1) { grid-row: span 2; }
        .asymmetric-item:nth-child(3n+2) { grid-row: span 4; }
    </style>
</head>
<body class="bg-surface font-body text-on-surface">
<div class="fixed bottom-6 right-6 z-50">
    <a href="upload.php" class="bg-gradient-to-r from-primary to-primary-container text-white rounded-full shadow-xl px-6 py-4 font-bold tracking-wide hover:scale-105 active:scale-95 transition-all text-lg flex items-center gap-2">
        <span class="material-symbols-outlined">add_a_photo</span>
        Upload Yours
    </a>
</div>
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-rose-50/80 dark:bg-rose-950/80 backdrop-blur-xl shadow-[0_10px_30px_-15px_rgba(166,46,76,0.1)] tonal-shift bg-rose-100/20">
<div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<span class="font-noto-serif italic text-2xl text-rose-800 dark:text-rose-200">L'Amour Éternel</span>
<div class="hidden md:flex items-center space-x-8">
<a class="font-noto-serif text-lg tracking-tight text-rose-900 dark:text-rose-100 font-semibold border-b-2 border-rose-400 hover:text-rose-900 dark:hover:text-rose-100 transition-colors duration-300" href="#">Gallery</a>
<a class="font-noto-serif text-lg tracking-tight text-rose-600/70 dark:text-rose-400/70 hover:text-rose-900 dark:hover:text-rose-100 transition-colors duration-300" href="#">Our Story</a>
</div>
<button class="bg-primary text-on-primary px-6 py-2 rounded-full font-semibold scale-95 active:opacity-80 transition-all hover:shadow-lg hover:shadow-primary/20">
                Preserve Memories
            </button>
</div>
</nav>
<main class="pt-24">
<!-- Hero Section -->
<section class="relative h-[819px] flex items-center justify-center overflow-hidden px-6">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover brightness-[0.85]" data-alt="Dreamy wide shot of a romantic dinner setting at sunset with soft pink sky and elegant floral arrangements" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbz4i_qimdBJ-LvphFE7-s9JzkMjmmUzgkYqTPv4J_O-8m3W0Ozaray97KpCj59wfMK-YhOPKxVRZ2zZTXbMv34bqItmXBx5SwXS323NXpjY26X08vPyhKMC8FBWdhT-5VZwAQrQd1QvWzrbZqQfXVN3Nb0Wd3LQzRXA4IdKAfn22DUQGtCPWijGMwRGAUN0j1MWWGo15BF1KU8oDQymzImFlBENNN0eZd9zmVvIw4XH_Cbsrd4uNX0vtlExzt-1AcxljNvjcwFmhA"/>
<div class="absolute inset-0 bg-gradient-to-b from-transparent via-surface/20 to-surface"></div>
</div>
<div class="relative z-10 text-center max-w-4xl">
<span class="inline-block px-4 py-1 rounded-full bg-primary-container/30 text-primary font-semibold text-sm tracking-widest mb-6 backdrop-blur-md">A DIGITAL KEEPSAKE</span>
<h1 class="font-headline text-5xl md:text-8xl text-on-background leading-tight mb-8">Our Love Story, <span class="italic font-normal">Curated</span></h1>
<p class="font-body text-lg md:text-xl text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                    A timeless sanctuary of our most cherished chapters. Every glance, every laugh, and every quiet moment, preserved forever in this luxury digital album.
                </p>
<div class="mt-12 flex justify-center gap-6">
<div class="w-16 h-16 rounded-full glass-card flex items-center justify-center animate-bounce shadow-xl">
<span class="material-symbols-outlined text-primary text-3xl">keyboard_arrow_down</span>
</div>
</div>
</div>
</section>
<!-- Stats/Asymmetric Highlights -->
<section class="max-w-screen-2xl mx-auto px-8 py-20">
<div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
<div class="p-8 rounded-lg glass-card text-center transform hover:-rotate-1 transition-transform border border-white/20">
<span class="block font-headline text-4xl text-primary mb-2">1,248</span>
<span class="font-label uppercase tracking-widest text-xs text-on-surface-variant">Photos Captured</span>
</div>
<div class="p-12 rounded-xl bg-primary text-on-primary text-center shadow-2xl relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-20 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-6xl">favorite</span>
</div>
<span class="block font-headline text-5xl mb-2">4 Years</span>
<span class="font-label uppercase tracking-widest text-xs">Of Pure Magic</span>
</div>
<div class="p-8 rounded-lg glass-card text-center transform hover:rotate-1 transition-transform border border-white/20">
<span class="block font-headline text-4xl text-primary mb-2">32</span>
<span class="font-label uppercase tracking-widest text-xs text-on-surface-variant">Countries Explored</span>
</div>
</div>
</section>
<!-- High-Fidelity Masonry Gallery -->
<section class="max-w-screen-2xl mx-auto px-8 pb-32">
<div class="asymmetric-grid">
<?php
require_once __DIR__ . "/includes/db.php";
$stmt = $pdo->query("SELECT * FROM uploads ORDER BY created_at DESC");
while ($row = $stmt->fetch()):
?>
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="uploads/<?php echo htmlspecialchars($row["filename"]); ?>" alt="Memory"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<p class="text-white font-serif text-xl mb-2"><?php echo htmlspecialchars($row["message"]); ?></p>
<p class="text-white/80 text-sm">- <?php echo htmlspecialchars($row["uploader_name"]); ?></p>
</div>
</div>
<?php endwhile; ?>
<!-- Item 1 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Close-up of a couple holding hands during a golden hour walk on a cobblestone street in Paris" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsES3_b5n4XI1KpQwsWxvTp0KKoSnwm7eYgIh-7okYdGimiyfR6NJ4eWQ_NQO-oxM3NxDh-HqURocTIvRrEJSDFsIZEH8JOmeLA8PJ6pPvtTcXEQZ8-E8496Ug_egs-Y11qhH6KAFwvXQgtdfQeENOXx9-peVY8mmtPFahgNvpXSN8dH3Vn3e-pPpD3YGbN_VRBpUdYZmef8uze11_cAKw96pVSUEggY9v4PSUu3WFDH2-zggL9DIakHJg8Ba8Cf5lbfxFdur36rxa"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white group-hover/heart:fill-1" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">Parisian Sunset</h3>
<p class="font-body text-sm text-on-secondary/80">October 14, 2021</p>
</div>
</div>
<!-- Item 2 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Interior view of a luxurious candlelit dinner for two in a private garden gazebo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAXpUeqGND2vc1tlD1xOoeKYGkAiIhEkG5z7-IWSU2lK05-2qfHmUVCCaLsRmgJ4rBaagutzQX-72SXrUGPScg072hMiNqCsRKO8AgurnsCdS8E775hn9dQVCwRwtC7c8vHqTaQhwHgJym-65KpUHR8ianns_xROsZz7_08VcBqhw-MSvUiXsf8XjWKD0cEiTZPbrjlsPnaWkqWy6__fbmYLDRH0nPKa9KbQhAs34sHLXzaxrdmYNh0ru0u8i2tGQVQwK1MmYu1WoM"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">The First Anniversary</h3>
<p class="font-body text-sm text-on-secondary/80">Spring Nights</p>
</div>
</div>
<!-- Item 3 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Elegant bride and groom laughing together under a blooming cherry blossom tree" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLAB7mCD-unF-f8JFl5fXsWhVxfrWvJHQjDMNDi3xLHGIVBoAOuvza-hd_Cq9QjuQQtWLfpdejWvswBTlExM1KPADfHIu8-IoBfdu_3tdsmNXwqSAk33JvIvPUn8a6SGrXGeKv8czfAe_1eN_YDNVncIz0TzHE3n9k_UU6Sp1rLk6sI8bajKtj-Ibc-yZGWe7-RoQVldh27UaXMSlMXBB7iiRCVyxUCyGPHuDDI3QaWTgDlYB6dq74ZjsNy8_oz8IgXrokALhVyiTS"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">Blossom Whispers</h3>
<p class="font-body text-sm text-on-secondary/80">Kyoto, Japan</p>
</div>
</div>
<!-- Item 4 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Close up of two champagne glasses clinking against a blurry background of city lights at night" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4OEEH7dSAMmz6JioIoofs-rbaG9ZRvFujEOkyNM9TCJD24oyDE_vctaJv2Ioa3XClOGO0Rr1K8mCSLPgT9RDH-n2oIw49ExPNTuY6Q4fufh3QugWir4q8ll_fV-lSVPcW6Yj0Na-foH-EHZk3iavuTvbWvEexIc8NChesU0JFsHD1vBrA7gTHyVAhoDYaxVnKEqFJ7QAbbp61eiEWZK9drS6j3uC5dbFykSn8Q6UENCYNiDt_cv15LWb42u1qgsVK_Tk1zElrLey5"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">A Toast to Us</h3>
<p class="font-body text-sm text-on-secondary/80">New Year's Eve</p>
</div>
</div>
<!-- Item 5 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Couple walking away from the camera on a white sand beach towards crystal clear turquoise water" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNvrA4usSjk_YsXUXeMOaa9KCfM1i0Xk6r2HxdPK2JSS9DgDIeT313wezcZF1YL1KBbTWCJIO20F9qDiu4xtEhm7T_TEryyf_2-Yv_WjrqhiUMFldtp6e5Nd0zIgFqXAteP8fvzwNp5jWBPoqx0sOvZSG3I806WQE8BfpsVqPYQ7ZFmt0Uxf-RSoJbCfl12WJFrIslCpede7ml_lfbYUtGie2CySm0_Qaq3sMph7_G5q5QSKDHjyVf_F05ldCnQa6v68nf2fPb6gMt"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">The Great Escape</h3>
<p class="font-body text-sm text-on-secondary/80">Maldives</p>
</div>
</div>
<!-- Item 6 -->
<div class="asymmetric-item relative group overflow-hidden rounded-lg shadow-lg">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Artistic blurry shot of a wedding ring resting inside a delicate pink rose petal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZPKc9lX-8P2ssBjW-YHABHaBNXIyuSDGJpwt0tJfVQqtHFa8r5aoQH8uSau7Uvpz5ac_5A5VR9Vd2kpKZ4gP-hitmq3gsQQ2k-VXn-p8vRYlrylMwM73TSI9JuH9JNnr2UQ6wUWGZs9v2aGAJSuZBfBhFFqu8WkBsnWSqN_bH_18gmRFBfEKSqf5_RcsHINH6cHv6gQcNJJpUaSt6-jg5-z8ERXvb__m9ubZF6_JJSqYGNqcgRAAYai4EJ7Tb1tYJkUTHCTeJx-TJ"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
<button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center hover:bg-primary-container transition-colors group/heart">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">favorite</span>
</button>
<h3 class="font-headline text-2xl text-on-primary mb-1">Forever Begins</h3>
<p class="font-body text-sm text-on-secondary/80">The Engagement</p>
</div>
</div>
</div>
<div class="mt-20 text-center">
<button class="font-body text-primary font-bold px-12 py-5 rounded-full border-2 border-primary/20 hover:bg-primary-container/10 transition-all hover:scale-105">
                    View Entire Collection
                </button>
</div>
</section>
<!-- Signature Quote Component -->
<section class="bg-surface-container-low py-24 relative overflow-hidden">
<div class="absolute -top-24 -left-24 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute -bottom-24 -right-24 w-96 h-96 bg-tertiary/5 rounded-full blur-3xl"></div>
<div class="max-w-4xl mx-auto px-8 text-center relative z-10">
<span class="material-symbols-outlined text-primary-container text-6xl opacity-50 mb-8 block mx-auto">format_quote</span>
<p class="font-headline text-3xl md:text-5xl italic text-on-surface leading-tight mb-10">
                    "In all the world, there is no heart for me like yours. In all the world, there is no love for you like mine."
                </p>
<div class="h-px w-24 bg-primary/20 mx-auto mb-6"></div>
<p class="font-label tracking-widest uppercase text-sm text-secondary">Our Eternal Vow</p>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-rose-50 dark:bg-rose-950 w-full py-12 tonal-shift border-t border-rose-200/30">
<div class="flex flex-col items-center justify-center space-y-6 text-center max-w-screen-2xl mx-auto px-8">
<span class="font-noto-serif text-xl text-rose-900 dark:text-rose-100">L'Amour Éternel</span>
<div class="flex space-x-8">
<a class="font-plus-jakarta-sans text-sm tracking-wide text-rose-600 dark:text-rose-400 hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Privacy</a>
<a class="font-plus-jakarta-sans text-sm tracking-wide text-rose-600 dark:text-rose-400 hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Terms</a>
<a class="font-plus-jakarta-sans text-sm tracking-wide text-rose-600 dark:text-rose-400 hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Contact Us</a>
</div>
<p class="font-plus-jakarta-sans text-sm tracking-wide text-rose-800 dark:text-rose-200 opacity-100">
                © 2024 L'Amour Éternel — Crafting Digital Keepsakes with Love
            </p>
<div class="flex gap-4 pt-4">
<span class="material-symbols-outlined text-primary opacity-50">favorite</span>
<span class="material-symbols-outlined text-primary opacity-50">auto_awesome</span>
<span class="material-symbols-outlined text-primary opacity-50">loyalty</span>
</div>
</div>
</footer>
</body></html>