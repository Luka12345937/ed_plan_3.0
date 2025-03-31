<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de Confidentialité - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables modernes */
        :root {
            --primary-color: #3b82f6;
            --primary-dark: #2563eb;
            --secondary-color: #64748b;
            --background-color: #f8fafc;
            --accent-color: #f59e0b;
            --dark-color: #1e293b;
            --light-color: #ffffff;
            --glass-effect: rgba(255, 255, 255, 0.25);
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }

        /* Styles de base */
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
        }

        /* En-tête moderne */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 100px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            bottom: -50px;
            left: -10%;
            right: -10%;
            height: 100px;
            background: var(--light-color);
            transform: rotate(-2deg);
            z-index: 1;
        }

        /* Bouton retour accueil ultra-moderne */
        .home-link {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 10;
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .home-link i {
            font-size: 1.1em;
            transition: transform 0.4s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        .home-link::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50px;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .home-link:hover::after {
            transform: translateX(100%);
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }

        /* Carte de contenu */
        .privacy-card {
            background: var(--light-color);
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            padding: 50px;
            margin-bottom: 50px;
            border-left: 5px solid var(--accent-color);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .privacy-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .privacy-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
        }

        /* Sections de politique */
        .privacy-section {
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .privacy-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .privacy-section h2 {
            color: var(--primary-dark);
            padding-bottom: 15px;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.6em;
            position: relative;
            display: inline-flex;
            align-items: center;
        }

        .privacy-section h2::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 4px;
        }

        .privacy-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 55px;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-color), transparent);
        }

        .privacy-section p,
        .privacy-section ul {
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-size: 1.08em;
        }

        .privacy-section strong {
            color: var(--dark-color);
            font-weight: 600;
        }

        .privacy-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .privacy-section ul li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            transition: transform 0.3s ease;
        }

        .privacy-section ul li:hover {
            transform: translateX(5px);
        }

        .privacy-section ul li::before {
            content: '→';
            color: var(--accent-color);
            font-size: 1.2em;
            position: absolute;
            left: 0;
            top: 12px;
            transition: transform 0.3s ease;
        }

        .privacy-section ul li:hover::before {
            transform: translateX(5px);
        }

        .privacy-section a {
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        .privacy-section a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.4s ease;
        }

        .privacy-section a:hover {
            color: var(--primary-color);
        }

        .privacy-section a:hover::after {
            width: 100%;
        }

        /* Éléments décoratifs */
        .decoration {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
            z-index: -1;
        }

        .decoration-1 {
            top: -50px;
            right: -50px;
        }

        .decoration-2 {
            bottom: 100px;
            left: -50px;
            width: 300px;
            height: 300px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 80px 15px 60px;
            }

            header::after {
                bottom: -30px;
                height: 60px;
            }

            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 18px;
                font-size: 0.9em;
            }

            .container {
                padding: 0 20px;
                margin: 40px auto;
            }

            .privacy-card {
                padding: 30px;
            }

            .privacy-section h2 {
                font-size: 1.4em;
            }

            .privacy-section ul li {
                padding-left: 25px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i>
            <span>Retour à l'accueil</span>
        </a>
        <h1>Politique de Confidentialité</h1>
    </header>

    <div class="container">
        <div class="privacy-card">
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>

            <section class="privacy-section">
                <h2>1. Collecte des Données Personnelles</h2>
                <p>AIM Global collecte des données personnelles dans le cadre de l'utilisation de ses services, notamment lors de l'inscription, de la candidature à une offre d'emploi, ou de la navigation sur le site. Les données collectées peuvent inclure :</p>
                <ul>
                    <li>Nom et prénom</li>
                    <li>Adresse email</li>
                    <li>Numéro de téléphone</li>
                    <li>CV et lettre de motivation</li>
                    <li>Informations de navigation (cookies)</li>
                </ul>
            </section>

            <section class="privacy-section">
                <h2>2. Utilisation des Données Personnelles</h2>
                <p>Les données collectées sont utilisées pour les finalités suivantes :</p>
                <ul>
                    <li>Gestion des comptes utilisateurs</li>
                    <li>Traitement des candidatures</li>
                    <li>Personnalisation de l'expérience utilisateur</li>
                    <li>Envoi de notifications et d'alertes</li>
                    <li>Amélioration des services et analyse statistique</li>
                </ul>
            </section>

            <section class="privacy-section">
                <h2>3. Partage des Données Personnelles</h2>
                <p>AIM Global ne partage pas vos données personnelles avec des tiers, sauf dans les cas suivants :</p>
                <ul>
                    <li>Avec votre consentement explicite</li>
                    <li>Pour répondre à une obligation légale</li>
                    <li>Avec des prestataires de services agissant pour le compte d'AIM Global (hébergement, analyse, etc.)</li>
                </ul>
            </section>

            <section class="privacy-section">
                <h2>4. Sécurité des Données</h2>
                <p>AIM Global met en œuvre des mesures de sécurité techniques et organisationnelles pour protéger vos données personnelles contre tout accès non autorisé, altération, divulgation ou destruction.</p>
            </section>

            <section class="privacy-section">
                <h2>5. Droits des Utilisateurs</h2>
                <p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez des droits suivants concernant vos données personnelles :</p>
                <ul>
                    <li>Droit d'accès</li>
                    <li>Droit de rectification</li>
                    <li>Droit à l'effacement</li>
                    <li>Droit à la limitation du traitement</li>
                    <li>Droit à la portabilité des données</li>
                    <li>Droit d'opposition</li>
                </ul>
                <p>Pour exercer ces droits, veuillez nous contacter à l'adresse <a href="mailto:contact@aimglobal.com">contact@aimglobal.com</a>.</p>
            </section>

            <section class="privacy-section">
                <h2>6. Cookies</h2>
                <p>Notre site utilise des cookies pour améliorer l'expérience utilisateur. Pour plus d'informations sur l'utilisation des cookies, veuillez consulter notre <a href="politique_cookies.php">Politique de Cookies</a>.</p>
            </section>

            <section class="privacy-section">
                <h2>7. Modifications de la Politique de Confidentialité</h2>
                <p>AIM Global se réserve le droit de modifier cette politique de confidentialité à tout moment. Les modifications seront publiées sur cette page et entreront en vigueur immédiatement.</p>
            </section>

            <section class="privacy-section">
                <h2>8. Contact</h2>
                <p>Pour toute question concernant cette politique de confidentialité, veuillez nous contacter à l'adresse <a href="mailto:contact@aimglobal.com">contact@aimglobal.com</a> ou par courrier à l'adresse suivante :</p>
                <p>AIM Global<br>123 Rue de l'Exemple<br>75001 Paris, France</p>
            </section>
        </div>
    </div>

    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.privacy-section');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            sections.forEach(section => {
                observer.observe(section);
            });

            // Effet parallaxe pour les décorations
            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                const deco1 = document.querySelector('.decoration-1');
                const deco2 = document.querySelector('.decoration-2');
                
                if (deco1) deco1.style.transform = `translateY(${scrollY * 0.1}px) rotate(${scrollY * 0.02}deg)`;
                if (deco2) deco2.style.transform = `translateY(${scrollY * 0.05}px) rotate(${scrollY * 0.01}deg)`;
            });
        });
    </script>
</body>
</html>