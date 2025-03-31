<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique Générale - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #64748b;
            --background-color: #f8fafc;
            --accent-color: #f59e0b;
            --light-color: #ffffff;
            --dark-color: #1e293b;
            --glass-effect: rgba(255, 255, 255, 0.2);
            --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
            background-image: radial-gradient(circle at 10% 20%, rgba(79, 70, 229, 0.05) 0%, rgba(79, 70, 229, 0.05) 90%);
        }

        /* Bouton retour ultra-moderne */
        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--light-color);
            text-decoration: none;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1000;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .home-link i {
            font-size: 1.2em;
            transition: transform 0.5s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        /* En-tête */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 140px 20px 80px;
            text-align: center;
            position: relative;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--accent-color);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 30px;
        }

        /* Carte de contenu */
        .policy-card {
            background-color: var(--light-color);
            border-radius: 24px;
            box-shadow: var(--card-shadow);
            padding: 60px;
            margin-bottom: 60px;
            border-top: 5px solid var(--accent-color);
            position: relative;
            overflow: hidden;
        }

        .policy-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.08) 0%, transparent 70%);
            z-index: -1;
        }

        /* Sections de politique */
        .policy-section {
            margin-bottom: 50px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .policy-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .policy-section h2 {
            color: var(--primary-dark);
            padding-bottom: 15px;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 1.8em;
            position: relative;
            display: flex;
            align-items: center;
        }

        .policy-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 4px;
        }

        .policy-section svg {
            margin-right: 15px;
            width: 32px;
            height: 32px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .policy-section p,
        .policy-section ul {
            color: var(--secondary-color);
            margin-bottom: 25px;
            font-size: 1.1em;
            line-height: 1.8;
        }

        .policy-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .policy-section ul li {
            padding: 12px 0;
            padding-left: 40px;
            position: relative;
        }

        .policy-section ul li::before {
            content: '•';
            color: var(--accent-color);
            font-size: 1.5em;
            position: absolute;
            left: 15px;
            top: 8px;
        }

        .policy-section a {
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 2px solid rgba(79, 70, 229, 0.3);
            transition: all 0.3s ease;
        }

        .policy-section a:hover,
        .policy-section a:focus {
            color: var(--primary-color);
            border-bottom-color: var(--accent-color);
        }

        /* Éléments décoratifs */
        .decoration {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.08) 0%, transparent 70%);
            z-index: -1;
            filter: blur(20px);
        }

        .decoration-1 {
            top: -100px;
            right: -100px;
        }

        .decoration-2 {
            bottom: 100px;
            left: -100px;
            width: 400px;
            height: 400px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            header {
                padding: 120px 20px 60px;
            }
            
            .policy-card {
                padding: 40px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 100px 20px 50px;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0% 100%);
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 12px 20px;
            }
            
            .container {
                padding: 0 20px;
            }
            
            .policy-card {
                padding: 30px;
            }
            
            .policy-section h2 {
                font-size: 1.5em;
            }
            
            .policy-section ul li {
                padding-left: 30px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            .policy-section h2::after {
                width: 40px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link" aria-label="Retour à l'accueil">
        <i class="fas fa-arrow-left" aria-hidden="true"></i>
        <span>Retour à l'accueil</span>
    </a>

    <header>
        <h1>Politique Générale</h1>
    </header>

    <div class="container">
        <div class="policy-card">
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Introduction
                </h2>
                <p>Bienvenue sur AIM Global. Cette politique générale définit les règles et les principes qui régissent l'utilisation de notre site web. En accédant et en utilisant notre site, vous acceptez de vous conformer à ces conditions.</p>
                <p>Nous nous engageons à fournir un service de qualité tout en respectant vos droits et votre vie privée. Ces conditions générales s'appliquent à tous les visiteurs et utilisateurs de notre plateforme.</p>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Utilisation du Site
                </h2>
                <p>Le site AIM Global est destiné à un usage personnel et non commercial. Vous vous engagez à ne pas utiliser ce site à des fins illégales, contraires aux présentes conditions, ou susceptibles de porter atteinte aux droits d'AIM Global ou de tiers.</p>
                <p>En particulier, vous vous engagez à ne pas :</p>
                <ul>
                    <li>Utiliser le site de manière frauduleuse ou trompeuse</li>
                    <li>Publier ou transmettre du contenu illégal, diffamatoire ou offensant</li>
                    <li>Porter atteinte aux droits de propriété intellectuelle d'autrui</li>
                    <li>Perturber ou interférer avec le bon fonctionnement du site</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    Comptes Utilisateurs
                </h2>
                <p>Pour accéder à certaines fonctionnalités du site, vous devez créer un compte utilisateur. Vous êtes responsable de la confidentialité de vos identifiants de connexion et de toute activité sur votre compte. En cas de suspicion d'utilisation frauduleuse, vous devez immédiatement nous en informer.</p>
                <p>Nous nous réservons le droit de :</p>
                <ul>
                    <li>Suspendre ou résilier votre compte en cas de violation de nos conditions</li>
                    <li>Modifier ou supprimer tout contenu que vous publiez en violation de nos règles</li>
                    <li>Prendre toutes mesures nécessaires pour protéger notre plateforme et nos utilisateurs</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <line x1="10" y1="9" x2="8" y2="9"></line>
                    </svg>
                    Propriété Intellectuelle
                </h2>
                <p>L'ensemble du contenu du site (textes, images, vidéos, logos, etc.) est la propriété exclusive d'AIM Global ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable d'AIM Global.</p>
                <p>Les marques et logos figurant sur le site sont des marques déposées. Toute reproduction, imitation ou usage, total ou partiel, de ces marques sans notre autorisation expresse est prohibé.</p>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Limitation de Responsabilité
                </h2>
                <p>AIM Global ne peut être tenue responsable des erreurs ou omissions présentes sur le site, ni des dommages directs ou indirects qui pourraient résulter de l'accès ou de l'utilisation du site.</p>
                <p>Nous nous efforçons de maintenir le site accessible 24h/24 et 7j/7, mais ne pouvons garantir une disponibilité ininterrompue. Des interruptions pour maintenance technique ou mises à jour peuvent survenir sans préavis.</p>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Modifications des Conditions
                </h2>
                <p>AIM Global se réserve le droit de modifier les présentes conditions générales à tout moment. Les modifications seront publiées sur cette page et entreront en vigueur immédiatement.</p>
                <p>Nous vous encourageons à consulter régulièrement cette page pour prendre connaissance des éventuelles mises à jour. Votre utilisation continue du site après publication des modifications constitue votre acceptation des nouvelles conditions.</p>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Droit Applicable
                </h2>
                <p>Les présentes conditions générales sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
                <p>Conformément à la réglementation en vigueur, nous nous engageons à rechercher une solution amiable avant tout recours contentieux. En cas de désaccord, vous pouvez contacter le médiateur de la consommation dont nous dépendons.</p>
            </section>

            <section class="policy-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21 2H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                        <polyline points="22 6 12 13 2 6"></polyline>
                    </svg>
                    Contact
                </h2>
                <p>Pour toute question concernant ces conditions générales, veuillez nous contacter :</p>
                <ul>
                    <li>Par email : <a href="mailto:contact@aimglobal.com">contact@aimglobal.com</a></li>
                    <li>Par téléphone : +33 1 23 45 67 89 (9h-18h du lundi au vendredi)</li>
                    <li>Par courrier : AIM Global, 123 Rue de l'Exemple, 75001 Paris, France</li>
                </ul>
                <p>Nous nous engageons à répondre à toute demande dans un délai maximum de 5 jours ouvrables.</p>
            </section>
        </div>
    </div>

    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.policy-section');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { 
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Effet parallaxe pour les décorations
            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                const deco1 = document.querySelector('.decoration-1');
                const deco2 = document.querySelector('.decoration-2');
                
                if (deco1) {
                    deco1.style.transform = `translateY(${scrollY * 0.1}px) rotate(${scrollY * 0.02}deg)`;
                    deco1.style.opacity = 1 - (scrollY * 0.001);
                }
                if (deco2) {
                    deco2.style.transform = `translateY(${scrollY * 0.05}px) rotate(${-scrollY * 0.01}deg)`;
                    deco2.style.opacity = 1 - (scrollY * 0.0005);
                }
            });
        });
    </script>
</body>
</html>