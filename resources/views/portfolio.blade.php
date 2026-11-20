<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f7f5f2">
        <meta name="description" content="Saliou Niasse, développeur full stack junior et étudiant en Master MIAGE. Développement web, mobile, data et gestion financière.">
        <title>Saliou Niasse — Développeur Full Stack & MIAGE</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700&family=manrope:400,500,600,700,800" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="page-shell">
            <header class="site-header">
                <a class="brand" href="#accueil" aria-label="Saliou Niasse, accueil">
                    <span class="brand-mark">SN</span>
                    <span class="brand-name">Saliou Niasse<span class="brand-dot">.</span></span>
                </a>

                <button class="mobile-nav-button" type="button" data-mobile-nav-button aria-expanded="false" aria-controls="site-navigation" aria-label="Ouvrir le menu">☰</button>

                <nav class="site-nav" id="site-navigation" data-mobile-nav data-open="false" aria-label="Navigation principale">
                    <a href="#profil">Profil</a>
                    <a href="#expertises">Expertises</a>
                    <a href="#parcours">Parcours</a>
                    <a href="#projets">Projets</a>
                    <a class="nav-contact" href="#contact">Me contacter <span aria-hidden="true">↗</span></a>
                </nav>
            </header>

            <main>
                <section class="hero" id="accueil">
                    <div class="hero-copy" data-reveal>
                        <p class="eyebrow"><span class="status-dot"></span> Disponible pour une opportunité junior</p>
                        <h1>Le numérique,<br>avec <span>du sens.</span></h1>
                        <p class="hero-description">
                            Développeur full stack junior et étudiant en Master MIAGE, je crée des solutions web et mobiles et j’explore les liens entre technologie, données et gestion.
                        </p>
                        <div class="hero-actions">
                            <a class="button button-primary" href="#projets">Découvrir mes projets <span aria-hidden="true">↘</span></a>
                            <a class="text-link" href="mailto:saliouniass191817@gmail.com">Discutons de votre projet <span aria-hidden="true">↗</span></a>
                        </div>
                        <div class="hero-meta" aria-label="Informations clés">
                            <span>Master MIAGE <i></i></span>
                            <span>Saint-Louis, Sénégal <i></i></span>
                            <span>Web · Mobile · Finance</span>
                        </div>
                    </div>

                    <div class="hero-portrait" data-reveal>
                        <img src="{{ asset('images/saliou-niasse.jpg') }}" alt="Portrait de Saliou Niasse" fetchpriority="high">
                        <div class="portrait-note">
                            <span class="portrait-note-mark" aria-hidden="true">✳</span>
                            <span>La tech au service<br>des idées utiles.</span>
                        </div>
                        <span class="portrait-index" aria-hidden="true">SN — 01</span>
                    </div>
                </section>

                <section class="intro section-block" id="profil" data-reveal>
                    <div class="section-label"><span>01</span> À propos</div>
                    <div class="intro-content">
                        <h2>Un profil hybride.<br><span>Une même envie :</span> faire avancer les projets.</h2>
                        <div class="intro-aside">
                            <p>Ma formation en MIAGE réunit informatique et gestion. Je m’intéresse au développement d’applications utiles comme à l’analyse financière et à l’exploitation des données pour éclairer les décisions.</p>
                            <a class="text-link" href="#parcours">Mon parcours <span aria-hidden="true">↘</span></a>
                        </div>
                    </div>
                </section>

                <section class="expertise section-block" id="expertises" data-reveal>
                    <div class="section-heading">
                        <div>
                            <div class="section-label"><span>02</span> Savoir-faire</div>
                            <h2>Deux domaines,<br>un regard transversal.</h2>
                        </div>
                        <p class="section-lead">Du besoin utilisateur aux données qui aident à décider, je combine mes compétences techniques et ma formation en gestion.</p>
                    </div>

                    <div class="expertise-grid">
                        <article class="expertise-card expertise-card-primary">
                            <div class="card-topline"><span>01 / DIGITAL</span><span aria-hidden="true">↗</span></div>
                            <h3>Développement<br>web & mobile</h3>
                            <p>Conception de sites et d’applications adaptés aux besoins de particuliers et de petites entreprises.</p>
                            <ul class="tag-list" aria-label="Technologies">
                                <li>HTML5</li><li>CSS3</li><li>JavaScript</li><li>PHP</li><li>Laravel</li>
                                <li>Flutter</li><li>Dart</li><li>API REST</li><li>Spring Boot</li>
                                <li>MySQL</li><li>PostgreSQL</li><li>Git</li><li>GitHub</li><li>Docker</li><li>CI/CD</li><li>Cloud</li>
                            </ul>
                        </article>

                        <article class="expertise-card expertise-card-finance">
                            <div class="card-topline"><span>02 / ANALYSE</span><span aria-hidden="true">↗</span></div>
                            <h3>Gestion financière<br>& data</h3>
                            <p>Analyse d’états financiers, suivi budgétaire et exploration de données pour mieux comprendre la performance.</p>
                            <ul class="tag-list" aria-label="Outils et compétences">
                                <li>Analyse financière</li><li>Ratios</li><li>Rentabilité</li><li>Budgets</li>
                                <li>Excel</li><li>SQL</li><li>Python</li><li>Pandas</li><li>NumPy</li><li>Matplotlib</li>
                                <li>Machine learning</li><li>Data mining</li><li>Data analysis</li>
                            </ul>
                        </article>
                    </div>
                </section>

                <section class="journey section-block" id="parcours" data-reveal>
                    <div class="section-label"><span>03</span> Parcours</div>
                    <div class="journey-grid">
                        <div>
                            <h2>Apprendre,<br>construire, progresser.</h2>
                            <p class="section-lead">Un parcours universitaire à la croisée des méthodes informatiques et de la gestion des entreprises.</p>
                            <div class="language-note"><span>Langues</span><p>Français — professionnel <i></i> Anglais — intermédiaire</p></div>
                        </div>

                        <div class="timeline">
                            <article class="timeline-item">
                                <span class="timeline-date">2024 — 2026 · EN COURS</span>
                                <h3>Master MIAGE</h3>
                                <p>Université Gaston Berger de Saint-Louis</p>
                            </article>
                            <article class="timeline-item">
                                <span class="timeline-date">2021 — 2024</span>
                                <h3>Licence MIAGE</h3>
                                <p>Méthodes Informatiques Appliquées à la Gestion des Entreprises<br>Université Gaston Berger de Saint-Louis</p>
                            </article>
                            <article class="timeline-item">
                                <span class="timeline-date">ORANGE DIGITAL CENTER · MOOC ORANGE</span>
                                <h3>Certifications</h3>
                                <p>Interface no-code · 04/10/2025<br>Bases de données · 02/10/2025</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="projects section-block" id="projets" data-reveal>
                    <div class="section-heading">
                        <div>
                            <div class="section-label"><span>04</span> Sélection</div>
                            <h2>Des projets concrets.<br>Des compétences en action.</h2>
                        </div>
                        <p class="section-lead">Expériences de conception numérique et projets académiques en développement, analyse et finance.</p>
                    </div>

                    <div class="project-grid">
                        <article class="project-card project-card-featured">
                            <div class="project-visual palace-visual" aria-hidden="true">
                                <span class="visual-orbit orbit-one"></span><span class="visual-orbit orbit-two"></span>
                                <span class="palace-wordmark">SAMA<br>PALACE<span>.</span></span>
                                <span class="visual-caption">PLATEFORME E-COMMERCE · PROJET PERSONNEL</span>
                            </div>
                            <div class="project-info">
                                <div><p class="project-kicker">Projet personnel</p><h3>Sama Palace</h3></div>
                                <p>Participation à la réalisation d’une plateforme e-commerce avec un frontend et un backend dédiés.</p>
                                <div class="project-links">
                                    <a href="http://sama-palace.onrender.com" target="_blank" rel="noopener noreferrer">Voir le frontend <span aria-hidden="true">↗</span></a>
                                    <a href="https://appwebyoonema-production.up.railway.app" target="_blank" rel="noopener noreferrer">Voir le backend <span aria-hidden="true">↗</span></a>
                                </div>
                            </div>
                        </article>

                        <article class="project-card project-card-study">
                            <div class="project-visual finance-visual" aria-hidden="true">
                                <span class="finance-chart"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span>
                                <span class="finance-caption">ANALYSE · INDICATEURS · DÉCISION</span>
                            </div>
                            <div class="project-info">
                                <div><p class="project-kicker">Projets académiques</p><h3>Études financières</h3></div>
                                <p>Analyse de bilans et comptes de résultat, ratios financiers, seuil de rentabilité et écarts budgétaires.</p>
                                <span class="project-note">Analyse de données avec SQL & Python</span>
                            </div>
                        </article>
                    </div>
                    <p class="experience-note"><span aria-hidden="true">✳</span> J’ai également conçu des sites et des solutions numériques pour des particuliers et de petites entreprises, en utilisant des outils no-code et low-code selon les besoins.</p>
                </section>

                <section class="contact section-block" id="contact" data-reveal>
                    <div class="contact-main">
                        <div class="section-label"><span>05</span> Et maintenant ?</div>
                        <h2>Une idée à faire<br><span>grandir ?</span></h2>
                        <p>Je suis à la recherche d’une opportunité junior en développement full stack. Parlons de vos besoins et de la façon dont je peux y contribuer.</p>
                        <a class="button button-light" href="mailto:saliouniass191817@gmail.com">Écrire un e-mail <span aria-hidden="true">↗</span></a>
                    </div>
                    <div class="contact-details">
                        <a href="mailto:saliouniass191817@gmail.com"><span>E-MAIL</span>saliouniass191817@gmail.com <b aria-hidden="true">↗</b></a>
                        <a href="tel:+221783792823"><span>TÉLÉPHONE</span>+221 78 379 28 23 <b aria-hidden="true">↗</b></a>
                        <a href="https://github.com/saliouniass191817-wq" target="_blank" rel="noopener noreferrer"><span>GITHUB</span>saliouniass191817-wq <b aria-hidden="true">↗</b></a>
                        <a href="https://www.linkedin.com/in/s-salihu-niass-8bab30320" target="_blank" rel="noopener noreferrer"><span>LINKEDIN</span>s-salihu-niass <b aria-hidden="true">↗</b></a>
                        <p>Louga, Sénégal</p>
                    </div>
                </section>
            </main>

            <footer class="site-footer">
                <a class="brand" href="#accueil"><span class="brand-mark">SN</span><span class="brand-name">Saliou Niasse<span class="brand-dot">.</span></span></a>
                <p>Développement · Data · Gestion</p>
                <a class="back-to-top" href="#accueil">Retour en haut ↑</a>
            </footer>
        </div>
    </body>
</html>
