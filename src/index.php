<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>L'Amour Éternel — Crafting Digital Keepsakes</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    "primary-fixed-dim": "#ef6581",
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
                    "primary-container": "#ff728e",
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
        .serif-italics { font-family: 'Noto Serif', serif; font-style: italic; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .heart-glow {
            filter: drop-shadow(0 0 8px rgba(255, 114, 142, 0.6));
        }
        .tonal-shift {
            background-image: linear-gradient(to bottom, transparent, rgba(255, 114, 142, 0.05));
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-rose-50/80 dark:bg-rose-950/80 backdrop-blur-xl shadow-[0_10px_30px_-15px_rgba(166,46,76,0.1)]">
<div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<div class="font-noto-serif italic text-2xl text-rose-800 dark:text-rose-200">L'Amour Éternel</div>
<div class="hidden md:flex items-center gap-10">
<a class="text-rose-600/70 dark:text-rose-400/70 font-noto-serif text-lg tracking-tight hover:text-rose-900 dark:hover:text-rose-100 transition-colors duration-300" href="#">Gallery</a>
<a class="text-rose-600/70 dark:text-rose-400/70 font-noto-serif text-lg tracking-tight hover:text-rose-900 dark:hover:text-rose-100 transition-colors duration-300" href="#">Our Story</a>
</div>
<a href="upload.php" class="inline-block bg-primary text-on-primary font-label px-8 py-2.5 rounded-full scale-95 active:opacity-80 transition-all text-sm uppercase tracking-widest font-bold">
                Preserve Memories
            </a>
</div>
</nav>
<!-- Hero Section -->
<section class="relative min-h-[921px] flex items-center pt-24 overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-90 brightness-[0.95]" data-alt="romantic high-fashion couple laughing in a sun-drenched floral garden, soft focus background, ethereal golden hour lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZP80BbHRRzJKSZlb6X4hG45KOpdCsufqf4I00d5Xat6CRw4GVbN4aV1MDqoOUDXU8L6R6WwUu3DbhmM-VIQGTyuupfGjJmNEpnTWBNv7A6N3HP8wSXE1S9bMd8j-5Fu18gn4cPlxfq6UaoEQHlX25J3hd_kbGnFqJZFpqLLCth8HNtgy3mfrIPtOoEAZxOW4fnyPEaKggGyYIvbaGY7lDeBcVht9WRcmTdiM8mUdMfCOB5gRyry9wByUOB1AwBDaNofToqROJuphS"/>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-transparent to-transparent opacity-80"></div>
</div>
<div class="relative z-10 container mx-auto px-6 grid md:grid-cols-2 gap-12">
<div class="flex flex-col justify-center space-y-8">
<div class="inline-flex items-center gap-2 bg-surface-container-lowest/60 backdrop-blur-md px-4 py-2 rounded-full w-fit shadow-sm border border-white/30">
<span class="material-symbols-outlined text-primary text-lg" data-icon="favorite" style="font-variation-settings: 'FILL' 1;">favorite</span>
<span class="text-primary text-xs font-bold uppercase tracking-widest">Love, Transcended</span>
</div>
<h1 class="font-headline text-6xl md:text-8xl text-primary-dim leading-[1.1] font-bold">
                    Preserving <br/>
<span class="serif-italics font-light">Love</span> Forever.
                </h1>
<p class="text-on-surface-variant text-xl max-w-md leading-relaxed">
                    Create a timeless digital sanctuary for your most cherished moments. Elegant, secure, and designed for a legacy that never fades.
                </p>
<div class="flex items-center gap-6">
<a href="upload.php" class="inline-block bg-gradient-to-r from-primary to-primary-container text-on-primary px-10 py-5 rounded-full font-bold text-lg shadow-xl shadow-primary/20 scale-100 hover:scale-105 active:scale-95 transition-all">
                        Begin Your Keepsake
                    </a>
<a href="gallery.php" class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all">
<span>View Gallery</span>
<span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
<!-- Floating Bento Elements -->
<div class="hidden md:flex relative items-center justify-center">
<div class="grid grid-cols-2 gap-4 w-full h-full p-8 rotate-3">
<div class="glass-panel p-4 rounded-lg shadow-2xl mt-12 self-start border border-white/40">
<img class="rounded-DEFAULT mb-4" data-alt="macro shot of two gold wedding bands resting on velvet, soft moody rose pink lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtP9a8KKOHEaKOZYDI8TyFM2MCXXR0OSfchKneeNmHNV5pxn4-nr25sOqyiklaNti4ffvu0GuKd0KdWqdxlf4_yg40vBNp5JmXoA2Y0VBncr-HLAOOAw7HPhffena-K-vvO8og7SbRpaKWYJYq-uJF43c_rkDPEs58WSDbYgPbxCbiCEo4-A-NYTNFMCMILXowdOQTQApwHB70Diz2gTMicN1YRyINhFj9IDse7mWxItpTblXjuAiycigBAwITm0rWOAB9_Trg75vo"/>
<div class="text-primary font-bold text-sm">Sacred Vows</div>
</div>
<div class="glass-panel p-4 rounded-lg shadow-2xl self-end border border-white/40">
<img class="rounded-DEFAULT mb-4 h-64 object-cover" data-alt="tender embrace of a couple during sunset, high-end editorial photography style, warm highlights" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUcFzQ9ncu3BVHmNvJctNdJCyKd5r-IpnfGrdiq2bMk6JJaB56KK7TBXrAPBZ6Y2-wtr5XuKBmLmq9uUJk0_TBf5fMhZ8sjqw6tCgPcLbm61i2jTe9D0v9waxYNZ80WA_bV3IORsb74x8JJ4N4BgFnIb1v97fCk_b_LkHeU5x-LdvS_3A8V92eU13RxUXGEeQoY3Mwjno31ur_fnzGC3fuMLfug2zWC0V3MMtLhVaNxxUWplXFQ7zhadHD1n7MsqpCBcjRE3xdWxX1"/>
<div class="text-primary font-bold text-sm">Timeless Moments</div>
</div>
</div>
</div>
</div>
</section>
<!-- The Digital Keepsake Section -->
<section class="py-32 bg-surface relative overflow-hidden">
<div class="absolute -right-24 top-0 w-96 h-96 bg-primary-container opacity-10 rounded-full blur-[100px]"></div>
<div class="container mx-auto px-6">
<div class="flex flex-col items-center text-center mb-20 space-y-4">
<h2 class="font-headline text-5xl text-primary font-bold">The Digital Keepsake</h2>
<div class="h-1 w-20 bg-primary-container rounded-full"></div>
<p class="text-on-surface-variant max-w-xl text-lg">More than an archive, it's an evolving tribute to the journey you've built together.</p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<!-- Feature Card 1 -->
<div class="bg-surface-container-low p-10 rounded-xl hover:bg-surface-container transition-colors duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 shadow-inner-glow group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-primary" data-icon="auto_awesome" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</div>
<h3 class="text-2xl font-bold mb-4 text-primary-dim">Artisanal Curation</h3>
<p class="text-on-surface-variant leading-relaxed">Our AI-assisted storytelling woven with human emotion organizes your memories into poetic narratives.</p>
</div>
<!-- Feature Card 2 -->
<div class="bg-surface-container-low p-10 rounded-xl hover:bg-surface-container transition-colors duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 shadow-inner-glow group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-primary" data-icon="encrypted" style="font-variation-settings: 'FILL' 1;">encrypted</span>
</div>
<h3 class="text-2xl font-bold mb-4 text-primary-dim">Eternal Security</h3>
<p class="text-on-surface-variant leading-relaxed">Decentralized vaulting ensures your love story remains private, protected, and accessible for generations.</p>
</div>
<!-- Feature Card 3 -->
<div class="bg-surface-container-low p-10 rounded-xl hover:bg-surface-container transition-colors duration-500 group border border-transparent hover:border-primary-container/20">
<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-8 shadow-inner-glow group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-3xl text-primary" data-icon="loyalty" style="font-variation-settings: 'FILL' 1;">loyalty</span>
</div>
<h3 class="text-2xl font-bold mb-4 text-primary-dim">Generational Gift</h3>
<p class="text-on-surface-variant leading-relaxed">Designate beneficiaries to inherit your digital legacy, passing on the flame of your story.</p>
</div>
</div>
</div>
</section>
<!-- Curated Galleries - Asymmetric Layout -->
<section class="py-24 bg-surface-container-low/30">
<div class="container mx-auto px-6">
<div class="grid md:grid-cols-12 gap-6 items-center">
<div class="md:col-span-5 space-y-8">
<h2 class="font-headline text-6xl text-primary leading-tight font-bold">Curated <br/><span class="serif-italics font-light">Galleries</span></h2>
<p class="text-on-surface-variant text-xl leading-relaxed">Experience your life through custom-designed cinematic galleries that adapt to the mood of the moment.</p>
<ul class="space-y-4">
<li class="flex items-center gap-4 text-primary font-semibold">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            Dynamic Cinematic Playbacks
                        </li>
<li class="flex items-center gap-4 text-primary font-semibold">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            Collaborative Family Albums
                        </li>
<li class="flex items-center gap-4 text-primary font-semibold">
<span class="material-symbols-outlined text-primary-container" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            Print-Ready Keepsake Exports
                        </li>
</ul>
</div>
<div class="md:col-span-7 grid grid-cols-2 gap-4">
<div class="space-y-4">
<img class="rounded-xl w-full h-80 object-cover shadow-lg" data-alt="aesthetic wedding table setting with delicate flowers and crystal glassware, soft focus luxury romantic style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5V-GInjhFYg-ePoxeI3LIaXvckRjd6TcPzED5MVqvqu4b5qWSZ28R3yMC2IHq-pu0y5BnvvKLWPRJ935zNgAPexCb_9NjsR19s96ZM2b2JCCUl4XzgvZ1TyWX_bAdz3jB4rXgcoXfrD7qmZ6ZvF5y2D3gGpnpItvOomJrv6qw0te8MSDt3QXMtUZj8O3W_CW3_fk0sZqLzoUZ0pt9zIylZnupl03dngYDbw1Gf3KGga4rbj9WHrqnKw6TV8ziGq7ypT81V-07FOZx"/>
<img class="rounded-xl w-full h-48 object-cover shadow-lg" data-alt="close up of couple holding hands with intertwined fingers, focus on the touch, soft bright lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmcQoJDbtCYjy69QYrr26j3XjaAFUlZ_D0mQn2V2zGZczvo8PYfcrzvT_Tun2z0Ab6OpwSAcC4yBjyoKyOy0PC-EJ8hAroiLz7Ej9auYzn1U_o5e4n0sogDFtlSBE6uepe7vSMWcD350jK8YpbdLI-3GfusqGnNw8fYctNYM-POhhD_bzYbxGKgKhd4oMG23d262qZSVPBj_UKLeTgcyeyxXtur0CnvVGorrAJaam8Vlgo4-kJpfdve1iNH5A09e0qG1IvSf2B0iO9"/>
</div>
<div class="pt-12 space-y-4">
<img class="rounded-xl w-full h-56 object-cover shadow-lg" data-alt="vintage style envelope with a wax seal and a dried rose on a marble table, romantic stationery photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCww6odUvkIpSwaC1W2jUEsbACPJFKAjeGoyfDbqkHWdjVLxgfTS8xQfzeIwKsThFqu7ig7WiOcGaTi7JAwLVBXLWA3YY7Q6OF0VsAc1Uc8r_Zvl_9cB14-gL1zEsPNg8EhDgIVBiPq1s2UuyGsjTNYZTN46Ny2_Wj1AeMVxstWjtOdE8Jh5Dg8oQkxZss5QGtblJPFX8KMPYhwcu6Nuvy---F67VJ-uTvLeyTBCM8Ce_O1NSZy7TCEW2eoA1uh39tvatn-Z8sYGKio"/>
<img class="rounded-xl w-full h-[28rem] object-cover shadow-lg" data-alt="couple looking at fireworks together from a distance, romantic evening atmosphere, silhouette against light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnB9FeQiQCvViBZzyuu43tmiLyFyx5jsZTaQRbf-_ELbLzwSmDNLk-VlH4dd-9EawMV8XQqEk0XDjzzPpcR7qG2-5yHMb4-fMnj3VuMvXbZWJuanpL_smTzMEk4E1mZHGsqWZRsQ0cpDJR8t8lFpWW8VPs7pQhuySQixM0ac0mijzwtThECjs01ehMMzmak-XNN-_EOqRuzffTtQaRwrBAfAZioVQSi9A3JkwKI7mKZRFNk5Ai-CgF5uRt48RfFvrsyVIhmp9Y7uC6"/>
</div>
</div>
</div>
</div>
</section>
<!-- Legacy of Love Section (Glassmorphism Overlay) -->
<section class="py-32 relative">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="blurry abstract light through rose petals, soft pink and red hues, dreamy texture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA71KKTNe24QTMvQHIfmnPolht2Px6FqOxSxRqZGt8yO3p8ZUlzdfMq93-siC-qKphl2_mfxukhpj-tCPiUmSY5qNXPYEY2-te1q9ygCYCZ7WA6M-ZfAiZqhAk3nXh4W1n879vjjSktlYe9Vtfl8hpb4hsRG5MmBzwRVc2uh_FYhc77vnBr_k3qqpZhHPqWdxOmjKUsrACDxprHg3ihkIifQ9MGtE0WyN1jHCXYJwab1o7vGRxnWG_exuoJyUUNoW280ikNSmmTlcef"/>
<div class="absolute inset-0 bg-primary/20 backdrop-blur-sm"></div>
</div>
<div class="relative z-10 container mx-auto px-6 flex justify-center">
<div class="max-w-4xl glass-panel p-16 rounded-xl text-center border border-white/30 shadow-2xl space-y-10">
<span class="material-symbols-outlined text-6xl text-primary heart-glow" data-icon="favorite" style="font-variation-settings: 'FILL' 1;">favorite</span>
<h2 class="font-headline text-5xl text-on-primary-container font-bold leading-tight">A Legacy of Love</h2>
<p class="text-on-surface-variant text-xl italic font-serif">
                    "Love is not just something you feel, it is something you create, document, and leave behind as a light for others."
                </p>
<div class="flex flex-col md:flex-row gap-6 justify-center items-center pt-8">
<div class="flex flex-col items-center">
<span class="text-4xl font-bold text-primary">100k+</span>
<span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Stories Told</span>
</div>
<div class="h-10 w-[1px] bg-outline-variant/30 hidden md:block"></div>
<div class="flex flex-col items-center">
<span class="text-4xl font-bold text-primary">Eternal</span>
<span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Archiving</span>
</div>
<div class="h-10 w-[1px] bg-outline-variant/30 hidden md:block"></div>
<div class="flex flex-col items-center">
<span class="text-4xl font-bold text-primary">Secure</span>
<span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Encryption</span>
</div>
</div>
<a href="upload.php" class="inline-block bg-primary text-on-primary px-12 py-5 rounded-full text-lg font-bold shadow-lg hover:shadow-primary/40 transition-shadow">
                    Create Your Legacy Today
                </a>
</div>
</div>
</section>
<!-- Footer -->
<footer class="bg-rose-50 dark:bg-rose-950 w-full py-12 border-t border-rose-200/30">
<div class="flex flex-col items-center justify-center space-y-6 text-center max-w-screen-2xl mx-auto px-6">
<div class="font-noto-serif text-xl text-rose-900 dark:text-rose-100">L'Amour Éternel</div>
<div class="flex gap-8">
<a class="text-rose-600 dark:text-rose-400 font-plus-jakarta-sans text-sm tracking-wide hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Privacy</a>
<a class="text-rose-600 dark:text-rose-400 font-plus-jakarta-sans text-sm tracking-wide hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Terms</a>
<a class="text-rose-600 dark:text-rose-400 font-plus-jakarta-sans text-sm tracking-wide hover:text-rose-900 dark:hover:text-rose-100 underline decoration-rose-300 transition-opacity" href="#">Contact Us</a>
</div>
<p class="text-rose-600 dark:text-rose-400 font-plus-jakarta-sans text-xs opacity-70">
                © 2024 L'Amour Éternel — Crafting Digital Keepsakes with Love
            </p>
</div>
</footer>
</body></html>