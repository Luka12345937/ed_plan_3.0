<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions Générales d'Utilisation - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables modernes */
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #64748b;
            --background-color: #f8fafc;
            --accent-color: #f59e0b;
            --dark-color: #1e293b;
            --light-color: #ffffff;
            --glass-effect: rgba(255, 255, 255, 0.25);
            --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Reset et styles de base */
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
            scroll-behavior: smooth;
        }

        /* En-tête futuriste */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 120px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
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

        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0 L50 100 L100 0' fill='none' stroke='%23f59e0b' stroke-width='2'/%3E%3C/svg%3E") repeat-x;
            background-size: 100px 100px;
            transform: translateY(50px);
            opacity: 0.3;
        }

        /* Bouton retour accueil ultra-moderne */
        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 100;
            overflow: hidden;
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.25);
        }

        .home-link i {
            font-size: 1.2em;
            transition: transform 0.5s ease;
        }

        .home-link:hover i {
            transform: translateX(-8px) rotate(-20deg);
        }

        .home-link::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.3) 0%,
                rgba(255, 255, 255, 0) 60%
            );
            transform: rotate(30deg);
            transition: all 0.7s ease;
        }

        .home-link:hover::before {
            transform: translateX(100%) rotate(30deg);
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 40px;
            position: relative;
            z-index: 2;
        }

        /* Carte de contenu */
        .terms-card {
            background: var(--light-color);
            border-radius: 24px;
            box-shadow: var(--card-shadow);
            padding: 60px;
            margin-bottom: 60px;
            border-top: 5px solid var(--accent-color);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .terms-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .terms-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.08) 0%, transparent 70%);
            z-index: -1;
        }

        /* Sections des conditions */
        .terms-section {
            margin-bottom: 50px;
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .terms-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .terms-section h2 {
            color: var(--primary-dark);
            padding-bottom: 15px;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 1.8em;
            position: relative;
            display: inline-block;
        }

        .terms-section h2::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 4px;
        }

        .terms-section h2::after {
            content: attr(data-number);
            position: absolute;
            left: -70px;
            top: -10px;
            font-size: 4em;
            font-weight: 900;
            color: rgba(79, 70, 229, 0.05);
            z-index: -1;
        }

        .terms-section p,
        .terms-section ul {
            color: var(--secondary-color);
            margin-bottom: 25px;
            font-size: 1.1em;
            line-height: 1.8;
        }

        .terms-section strong {
            color: var(--dark-color);
            font-weight: 600;
        }

        .terms-section ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 20px;
        }

        .terms-section ul li {
            padding: 16px 0;
            padding-left: 40px;
            position: relative;
            transition: all 0.4s ease;
        }

        .terms-section ul li:hover {
            transform: translateX(10px);
        }

        .terms-section ul li::before {
            content: '»';
            color: var(--accent-color);
            font-size: 1.8em;
            position: absolute;
            left: 0;
            top: 10px;
            transition: all 0.4s ease;
        }

        .terms-section ul li:hover::before {
            transform: scale(1.2);
            color: var(--primary-color);
        }

        .terms-section a {
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
            border-bottom: 2px solid rgba(79, 70, 229, 0.3);
            padding-bottom: 2px;
        }

        .terms-section a:hover {
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
                padding: 100px 20px 60px;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .container {
                padding: 0 30px;
            }
            
            .terms-card {
                padding: 40px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 80px 15px 40px;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 12px 20px;
                font-size: 0.9em;
            }
            
            .container {
                padding: 0 20px;
                margin: 60px auto;
            }
            
            .terms-card {
                padding: 30px;
            }
            
            .terms-section h2 {
                font-size: 1.5em;
            }
            
            .terms-section h2::after {
                font-size: 3em;
                left: -50px;
            }
            
            .terms-section ul li {
                padding-left: 30px;
            }
        }

        @media (max-width: 480px) {
            header {
                clip-path: polygon(0 0, 100% 0, 100% 97%, 0 100%);
            }
            
            .home-link {
                top: 15px;
                left: 15px;
                padding: 10px 15px;
            }
            
            .terms-section h2::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-chevron-left"></i>
            <span>Retour à l'accueil</span>
        </a>
        <h1>Conditions Générales d'Utilisation</h1>
    </header>

    <div class="container">
        <div class="terms-card">
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>

            <section class="terms-section" data-number="1">
                <h2>Acceptation des Conditions</h2>
                <p>En accédant et en utilisant le site AIM Global, vous acceptez sans réserve les présentes Conditions Générales d'Utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser ce site.</p>
            </section>

            <section class="terms-section" data-number="2">
                <h2>Accès au Site</h2>
                <p>AIM Global s'efforce de maintenir le site accessible 24 heures sur 24, 7 jours sur 7, mais se réserve le droit de suspendre l'accès, notamment pour des raisons de maintenance, de mises à jour, ou pour toute autre raison, sans préavis.</p>
            </section>

            <section class="terms-section" data-number="3">
                <h2>Utilisation du Site</h2>
                <p>Le site AIM Global est destiné à un usage personnel et non commercial. Vous vous engagez à ne pas utiliser ce site à des fins illégales, contraires aux présentes conditions, ou susceptibles de porter atteinte aux droits d'AIM Global ou de tiers.</p>
            </section>

            <section class="terms-section" data-number="4">
                <h2>Comptes Utilisateurs</h2>
                <p>Pour accéder à certaines fonctionnalités du site, vous devez créer un compte utilisateur. Vous êtes responsable de la confidentialité de vos identifiants de connexion et de toute activité sur votre compte. En cas de suspicion d'utilisation frauduleuse, vous devez immédiatement nous en informer.</p>
            </section>

            <section class="terms-section" data-number="5">
                <h2>Propriété Intellectuelle</h2>
                <p>L'ensemble du contenu du site (textes, images, vidéos, logos, etc.) est la propriété exclusive d'AIM Global ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable d'AIM Global.</p>
            </section>

            <section class="terms-section" data-number="6">
                <h2>Limitation de Responsabilité</h2>
                <p>AIM Global ne peut être tenue responsable des erreurs ou omissions présentes sur le site, ni des dommages directs ou indirects qui pourraient résulter de l'accès ou de l'utilisation du site.</p>
            </section>

            <section class="terms-section" data-number="7">
                <h2>Liens Hypertextes</h2>
                <p>Le site peut contenir des liens hypertextes vers des sites tiers. AIM Global n'exerce aucun contrôle sur ces sites et ne peut être tenue responsable de leur contenu ou de leur utilisation.</p>
            </section>

            <section class="terms-section" data-number="8">
                <h2>Modification des Conditions</h2>
                <p>AIM Global se réserve le droit de modifier les présentes Conditions Générales d'Utilisation à tout moment. Les modifications seront publiées sur cette page et entreront en vigueur immédiatement.</p>
            </section>

            <section class="terms-section" data-number="9">
                <h2>Droit Applicable</h2>
                <p>Les présentes Conditions Générales d'Utilisation sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
            </section>

            <section class="terms-section" data-number="10">
                <h2>Contact</h2>
                <p>Pour toute question concernant ces conditions générales, veuillez nous contacter à l'adresse <a href="mailto:contact@aimglobal.com">contact@aimglobal.com</a> ou par courrier à l'adresse suivante :</p>
                <p>AIM Global<br>123 Rue de l'Exemple<br>75001 Paris, France</p>
            </section>
        </div>
    </div>

    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.terms-section');
            
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