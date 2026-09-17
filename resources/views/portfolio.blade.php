<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Saliou Niasse - Developpeur Full Stack Junior</title>
        <meta name="description" content="Portfolio de Saliou Niasse, developpeur full stack junior specialise web, mobile et data/IA.">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            html {
                scroll-behavior: smooth;
            }

            body {
                letter-spacing: 0;
            }

            .scene {
                perspective: 1200px;
            }

            .scene-stack {
                transform-style: preserve-3d;
                animation: float-stack 9s ease-in-out infinite;
            }

            .glass-panel {
                background: linear-gradient(145deg, rgba(255, 255, 255, 0.88), rgba(247, 250, 252, 0.62));
                box-shadow: 0 34px 80px rgba(15, 23, 42, 0.14), inset 0 1px 0 rgba(255, 255, 255, 0.86);
                backdrop-filter: blur(22px);
            }

            .dark .glass-panel {
                background: linear-gradient(145deg, rgba(21, 26, 38, 0.92), rgba(15, 18, 26, 0.72));
                box-shadow: 0 34px 80px rgba(0, 0, 0, 0.34), inset 0 1px 0 rgba(255, 255, 255, 0.08);
            }

            .tilt-card {
                transform-style: preserve-3d;
                transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease;
            }

            .tilt-card:hover {
                transform: translateY(-6px) rotateX(4deg) rotateY(-4deg);
                box-shadow: 0 28px 54px rgba(15, 23, 42, 0.14);
            }

            .cube {
                transform-style: preserve-3d;
                animation: turn-cube 14s linear infinite;
            }

            .cube-face {
                position: absolute;
                inset: 0;
                display: grid;
                place-items: center;
                border: 1px solid rgba(15, 23, 42, 0.12);
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.78), rgba(207, 250, 254, 0.74));
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.6);
                backface-visibility: hidden;
            }

            .dark .cube-face {
                border-color: rgba(255, 255, 255, 0.12);
                background: linear-gradient(135deg, rgba(30, 41, 59, 0.82), rgba(20, 184, 166, 0.32));
            }

            .face-front { transform: translateZ(72px); }
            .face-back { transform: rotateY(180deg) translateZ(72px); }
            .face-right { transform: rotateY(90deg) translateZ(72px); }
            .face-left { transform: rotateY(-90deg) translateZ(72px); }
            .face-top { transform: rotateX(90deg) translateZ(72px); }
            .face-bottom { transform: rotateX(-90deg) translateZ(72px); }

            @keyframes float-stack {
                0%, 100% { transform: rotateX(58deg) rotateZ(-28deg) translateY(0); }
                50% { transform: rotateX(58deg) rotateZ(-28deg) translateY(-16px); }
            }

            @keyframes turn-cube {
                from { transform: rotateX(-18deg) rotateY(0deg); }
                to { transform: rotateX(-18deg) rotateY(360deg); }
            }
        </style>
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#f7f3ea] text-[#111827] antialiased selection:bg-[#14b8a6]/30 selection:text-[#111827] dark:bg-[#0d1017] dark:text-[#f8fafc]">
        <div class="relative">
            <div class="pointer-events-none fixed inset-0 -z-10">
                <div class="absolute inset-0 bg-[linear-gradient(120deg,rgba(20,184,166,0.16),transparent_32%,rgba(255,111,97,0.16)_68%,transparent)]"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(17,24,39,0.12)_1px,transparent_0)] [background-size:28px_28px] dark:bg-[radial-gradient(circle_at_1px_1px,rgba(248,250,252,0.12)_1px,transparent_0)]"></div>
            </div>

            <div class="mx-auto w-full max-w-7xl px-5 py-6 sm:px-8 lg:px-10">
                <header class="flex flex-col gap-5 rounded-lg border border-black/10 bg-white/64 px-5 py-4 shadow-[0_18px_50px_rgba(15,23,42,0.08)] backdrop-blur-xl dark:border-white/10 dark:bg-white/6 sm:flex-row sm:items-center sm:justify-between">
                    <a href="#hero" class="inline-flex items-center gap-3 font-semibold text-[#111827] dark:text-white">
                        <span class="grid h-11 w-11 place-items-center rounded-lg bg-[#111827] text-sm text-white shadow-lg shadow-[#111827]/20 dark:bg-white dark:text-[#111827]">SN</span>
                        <span>Saliou Niasse</span>
                    </a>
                    <nav class="flex flex-wrap gap-x-5 gap-y-3 text-sm font-semibold text-[#475569] dark:text-[#cbd5e1]">
                        <a href="#about" class="transition hover:text-[#0f766e] dark:hover:text-[#5eead4]">Profil</a>
                        <a href="#skills" class="transition hover:text-[#0f766e] dark:hover:text-[#5eead4]">Competences</a>
                        <a href="#journey" class="transition hover:text-[#0f766e] dark:hover:text-[#5eead4]">Parcours</a>
                        <a href="#projects" class="transition hover:text-[#0f766e] dark:hover:text-[#5eead4]">Realisations</a>
                        <a href="#contact" class="transition hover:text-[#0f766e] dark:hover:text-[#5eead4]">Contact</a>
                    </nav>
                </header>

                <main class="mt-10 space-y-24 pb-10 lg:mt-16">
                    <section id="hero" class="grid min-h-[calc(100vh-9rem)] gap-12 lg:grid-cols-[1.02fr_0.98fr] lg:items-center">
                        <div class="max-w-3xl">
                            <p class="inline-flex rounded-full border border-[#14b8a6]/30 bg-white/70 px-4 py-2 text-sm font-semibold text-[#0f766e] shadow-sm dark:border-[#5eead4]/20 dark:bg-white/8 dark:text-[#5eead4]">Developpeur Full Stack Junior | Web, Mobile & Data/IA</p>
                            <h1 class="mt-7 text-5xl font-bold leading-[1.02] text-[#111827] dark:text-white sm:text-6xl lg:text-7xl">Saliou Niasse conçoit des solutions web, mobile et data intelligentes.</h1>
                            <p class="mt-7 max-w-2xl text-lg leading-8 text-[#475569] dark:text-[#cbd5e1]">Titulaire d'une Maitrise MIAGE, je combine developpement web, mobile, backend/API et bases solides en intelligence artificielle, machine learning et data mining pour creer des solutions utiles aux particuliers et petites entreprises.</p>

                            <div class="mt-9 flex flex-wrap gap-4">
                                <a href="#projects" class="inline-flex min-h-12 items-center justify-center rounded-lg bg-[#111827] px-6 text-sm font-bold text-white shadow-xl shadow-[#111827]/20 transition hover:-translate-y-1 hover:bg-[#0f766e] dark:bg-white dark:text-[#111827] dark:hover:bg-[#5eead4]">Voir les projets</a>
                                <a href="#contact" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-[#111827]/20 bg-white/70 px-6 text-sm font-bold text-[#111827] transition hover:-translate-y-1 hover:border-[#ff6f61] hover:text-[#c2410c] dark:border-white/15 dark:bg-white/8 dark:text-white dark:hover:border-[#ffb86b] dark:hover:text-[#ffb86b]">Me contacter</a>
                            </div>

                            <div class="mt-10 grid max-w-xl grid-cols-3 gap-3 text-sm">
                                <div class="rounded-lg border border-black/10 bg-white/68 p-4 shadow-sm dark:border-white/10 dark:bg-white/6">
                                    <p class="text-2xl font-bold text-[#111827] dark:text-white">MIAGE</p>
                                    <p class="mt-1 text-[#64748b] dark:text-[#cbd5e1]">Gestion & IT</p>
                                </div>
                                <div class="rounded-lg border border-black/10 bg-white/68 p-4 shadow-sm dark:border-white/10 dark:bg-white/6">
                                    <p class="text-2xl font-bold text-[#111827] dark:text-white">Full Stack</p>
                                    <p class="mt-1 text-[#64748b] dark:text-[#cbd5e1]">Web & mobile</p>
                                </div>
                                <div class="rounded-lg border border-black/10 bg-white/68 p-4 shadow-sm dark:border-white/10 dark:bg-white/6">
                                    <p class="text-2xl font-bold text-[#111827] dark:text-white">Data/IA</p>
                                    <p class="mt-1 text-[#64748b] dark:text-[#cbd5e1]">ML & analyse</p>
                                </div>
                            </div>
                        </div>

                        <div class="scene relative min-h-[520px]">
                            <div class="absolute left-1/2 top-1/2 h-80 w-80 -translate-x-1/2 -translate-y-1/2 sm:h-96 sm:w-96">
                                <div class="scene-stack absolute inset-0">
                                    <div class="absolute left-6 top-16 h-64 w-64 rounded-lg border border-[#14b8a6]/28 bg-[#14b8a6]/20 shadow-2xl shadow-[#14b8a6]/10"></div>
                                    <div class="absolute left-20 top-5 h-64 w-64 rounded-lg border border-[#ff6f61]/30 bg-[#ff6f61]/18 shadow-2xl shadow-[#ff6f61]/10"></div>
                                    <div class="absolute left-12 top-28 h-64 w-64 rounded-lg border border-[#facc15]/30 bg-[#facc15]/18 shadow-2xl shadow-[#facc15]/10"></div>
                                </div>
                            </div>

                            <div class="glass-panel absolute left-1/2 top-[52%] w-[min(88vw,25rem)] -translate-x-1/2 -translate-y-1/2 rounded-lg border border-white/70 p-7 dark:border-white/10">
                                <div class="flex items-center gap-4">
                                    <div class="grid h-20 w-20 shrink-0 place-items-center rounded-lg bg-[#111827] text-2xl font-bold text-white shadow-xl shadow-[#111827]/20 dark:bg-white dark:text-[#111827]">SN</div>
                                    <div>
                                        <p class="text-sm font-semibold text-[#0f766e] dark:text-[#5eead4]">Portfolio personnel</p>
                                        <h2 class="mt-1 text-3xl font-bold text-[#111827] dark:text-white">Saliou Niasse</h2>
                                    </div>
                                </div>
                                <div class="mt-7 grid grid-cols-2 gap-3">
                                    <div class="rounded-lg bg-white/72 p-4 dark:bg-white/8">
                                        <p class="text-xs font-semibold text-[#64748b] dark:text-[#cbd5e1]">Stack</p>
                                        <p class="mt-1 font-bold">Laravel, Flutter</p>
                                    </div>
                                    <div class="rounded-lg bg-white/72 p-4 dark:bg-white/8">
                                        <p class="text-xs font-semibold text-[#64748b] dark:text-[#cbd5e1]">Focus</p>
                                        <p class="mt-1 font-bold">Data & API</p>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute bottom-8 right-6 h-36 w-36 sm:right-12">
                                <div class="cube relative h-full w-full">
                                    <div class="cube-face face-front rounded-lg text-xl font-bold text-[#111827] dark:text-white">SN</div>
                                    <div class="cube-face face-back rounded-lg text-xl font-bold text-[#111827] dark:text-white">UI</div>
                                    <div class="cube-face face-right rounded-lg text-xl font-bold text-[#111827] dark:text-white">API</div>
                                    <div class="cube-face face-left rounded-lg text-xl font-bold text-[#111827] dark:text-white">DATA</div>
                                    <div class="cube-face face-top rounded-lg text-xl font-bold text-[#111827] dark:text-white">IA</div>
                                    <div class="cube-face face-bottom rounded-lg text-xl font-bold text-[#111827] dark:text-white">DEV</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="about" class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
                        <div>
                            <p class="text-sm font-bold text-[#0f766e] dark:text-[#5eead4]">Profil</p>
                            <h2 class="mt-4 max-w-md text-4xl font-bold leading-tight text-[#111827] dark:text-white">Un profil orienté développement, données et intelligence artificielle.</h2>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#ff6f61]">Identité</p>
                                <h3 class="mt-3 text-2xl font-bold">Saliou Niasse</h3>
                                <p class="mt-3 leading-7 text-[#475569] dark:text-[#cbd5e1]">Développeur Full Stack Junior, spécialisé en web, mobile et data/IA.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#0f766e] dark:text-[#5eead4]">Approche</p>
                                <h3 class="mt-3 text-2xl font-bold">Des solutions utiles</h3>
                                <p class="mt-3 leading-7 text-[#475569] dark:text-[#cbd5e1]">Je conçois des sites et applications pour des particuliers et petites entreprises, avec des outils no-code et low-code lorsque cela répond mieux au besoin.</p>
                            </article>
                        </div>
                    </section>

                    <section id="skills" class="space-y-8">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-sm font-bold text-[#0f766e] dark:text-[#5eead4]">Competences</p>
                                <h2 class="mt-4 text-4xl font-bold text-[#111827] dark:text-white">Un socle technique polyvalent.</h2>
                            </div>
                            <p class="max-w-md leading-7 text-[#475569] dark:text-[#cbd5e1]">Du développement d’interfaces jusqu’à l’analyse de données, chaque compétence sert des produits simples à utiliser et faciles à faire évoluer.</p>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#0f766e] dark:text-[#5eead4]">01</p>
                                <h3 class="mt-6 text-xl font-bold">Développement Web</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">HTML5, CSS3, JavaScript, PHP et Laravel.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#ff6f61]">02</p>
                                <h3 class="mt-6 text-xl font-bold">Développement Mobile</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">Flutter, Dart et intégration d’API REST.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#d97706]">03</p>
                                <h3 class="mt-6 text-xl font-bold">Backend & API</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">PHP/Laravel, Spring Boot et Web Services.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#2563eb]">04</p>
                                <h3 class="mt-6 text-xl font-bold">Bases de données</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">MySQL, PostgreSQL, SQL et modélisation.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#0f766e] dark:text-[#5eead4]">05</p>
                                <h3 class="mt-6 text-xl font-bold">Data & IA</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">Machine Learning, Data Mining et Data Analysis.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-3xl font-bold text-[#ff6f61]">06</p>
                                <h3 class="mt-6 text-xl font-bold">DevOps & Outils</h3>
                                <p class="mt-3 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">Git, GitHub, Docker, CI/CD et Cloud.</p>
                            </article>
                        </div>
                    </section>

                    <section id="journey" class="space-y-8">
                        <div>
                            <p class="text-sm font-bold text-[#0f766e] dark:text-[#5eead4]">Parcours</p>
                            <h2 class="mt-4 text-4xl font-bold text-[#111827] dark:text-white">Formation et expériences.</h2>
                        </div>
                        <div class="grid gap-5 lg:grid-cols-2">
                            <article class="rounded-lg border border-black/10 bg-white/72 p-7 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#ff6f61]">Formation</p>
                                <div class="mt-6 space-y-6">
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#64748b] dark:text-[#cbd5e1]">2024 - 2026</p>
                                        <h3 class="mt-2 text-xl font-bold">Master en MIAGE</h3>
                                        <p class="mt-1 text-[#475569] dark:text-[#cbd5e1]">Université Gaston Berger de Saint-Louis</p>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#64748b] dark:text-[#cbd5e1]">2021 - 2024</p>
                                        <h3 class="mt-2 text-xl font-bold">Licence en MIAGE</h3>
                                        <p class="mt-1 text-[#475569] dark:text-[#cbd5e1]">Méthodes Informatiques Appliquées à la Gestion des Entreprises, UGB</p>
                                    </div>
                                </div>
                            </article>
                            <article class="rounded-lg border border-black/10 bg-white/72 p-7 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#0f766e] dark:text-[#5eead4]">Expérience</p>
                                <div class="mt-6 space-y-6">
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#64748b] dark:text-[#cbd5e1]">Particuliers et petites entreprises</p>
                                        <h3 class="mt-2 text-xl font-bold">Développement de solutions numériques</h3>
                                        <p class="mt-1 leading-7 text-[#475569] dark:text-[#cbd5e1]">Conception et développement de sites et solutions numériques, avec des outils no-code/low-code et une adaptation aux besoins fonctionnels.</p>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-[0.18em] text-[#64748b] dark:text-[#cbd5e1]">Projets académiques et personnels</p>
                                        <h3 class="mt-2 text-xl font-bold">Ingénieur en IA</h3>
                                        <p class="mt-1 leading-7 text-[#475569] dark:text-[#cbd5e1]">Conception et entraînement de modèles de Machine Learning, avec préparation et analyse des données.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <article class="rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#ff6f61]">Langues</p>
                                <div class="mt-4 flex gap-3">
                                    <span class="rounded-full bg-[#111827] px-4 py-2 text-sm font-bold text-white">Français</span>
                                    <span class="rounded-full bg-[#14b8a6]/15 px-4 py-2 text-sm font-bold text-[#0f766e] dark:text-[#5eead4]">Anglais</span>
                                </div>
                            </article>
                            <article class="rounded-lg border border-black/10 bg-white/72 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <p class="text-sm font-semibold text-[#0f766e] dark:text-[#5eead4]">Diplôme</p>
                                <h3 class="mt-4 text-xl font-bold">Maîtrise MIAGE</h3>
                                <p class="mt-2 text-sm leading-6 text-[#64748b] dark:text-[#cbd5e1]">Méthodes Informatiques Appliquées à la Gestion des Entreprises.</p>
                            </article>
                        </div>
                    </section>

                    <section id="projects" class="space-y-8">
                        <div>
                            <p class="text-sm font-bold text-[#0f766e] dark:text-[#5eead4]">Projets</p>
                            <h2 class="mt-4 text-4xl font-bold text-[#111827] dark:text-white">Selection de realisations.</h2>
                        </div>
                        <div class="grid gap-5 xl:grid-cols-3">
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/76 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <div class="h-36 rounded-lg bg-[linear-gradient(135deg,#14b8a6,#e0f2fe_48%,#ff6f61)] shadow-inner"></div>
                                <p class="mt-6 text-sm font-semibold text-[#64748b] dark:text-[#cbd5e1]">Application web</p>
                                <h3 class="mt-2 text-2xl font-bold">Portfolio Laravel</h3>
                                <p class="mt-3 leading-7 text-[#475569] dark:text-[#cbd5e1]">Un site personnel rapide avec une architecture simple, une page Blade soignee et un rendu responsive.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/76 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <div class="h-36 rounded-lg bg-[linear-gradient(135deg,#111827,#facc15_52%,#f8fafc)] shadow-inner"></div>
                                <p class="mt-6 text-sm font-semibold text-[#64748b] dark:text-[#cbd5e1]">Interface</p>
                                <h3 class="mt-2 text-2xl font-bold">Dashboard moderne</h3>
                                <p class="mt-3 leading-7 text-[#475569] dark:text-[#cbd5e1]">Des composants clairs pour suivre des donnees, naviguer vite et garder une lecture confortable.</p>
                            </article>
                            <article class="tilt-card rounded-lg border border-black/10 bg-white/76 p-6 shadow-sm dark:border-white/10 dark:bg-white/6">
                                <div class="h-36 rounded-lg bg-[linear-gradient(135deg,#2563eb,#ffffff_42%,#14b8a6)] shadow-inner"></div>
                                <p class="mt-6 text-sm font-semibold text-[#64748b] dark:text-[#cbd5e1]">Landing page</p>
                                <h3 class="mt-2 text-2xl font-bold">Presence digitale</h3>
                                <p class="mt-3 leading-7 text-[#475569] dark:text-[#cbd5e1]">Une page d'accueil persuasive, elegante et adaptee aux profils independants ou aux petites marques.</p>
                            </article>
                        </div>
                    </section>

                    <section id="contact" class="rounded-lg border border-black/10 bg-[#111827] p-7 text-white shadow-[0_28px_80px_rgba(15,23,42,0.22)] sm:p-10 dark:border-white/10">
                        <div class="grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
                            <div>
                                <p class="text-sm font-bold text-[#5eead4]">Contact</p>
                                <h2 class="mt-4 max-w-2xl text-4xl font-bold leading-tight">Pret a donner plus d'impact au prochain projet web ?</h2>
                                <p class="mt-5 max-w-2xl leading-8 text-[#dbeafe]">Contacte Saliou Niasse pour construire une interface moderne, lisible et adaptee a tes objectifs.</p>
                            </div>
                            <span class="inline-flex min-h-12 items-center justify-center rounded-lg bg-white px-6 text-sm font-bold text-[#111827] shadow-xl shadow-black/20">
                                <p>saliouniass191817@gmail.com</p>
                            </span>
                        </div>
                    </section>
                </main>

                <footer class="border-t border-black/10 py-8 text-sm font-medium text-[#64748b] dark:border-white/10 dark:text-[#cbd5e1]">
                    <p>@copyright 2026</p>
                </footer>
            </div>
        </div>
    </body>
</html>
