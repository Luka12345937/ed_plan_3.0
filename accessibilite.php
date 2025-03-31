<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessibilité - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Variables modernes accessibles */
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1e40af;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --accent-color: #d97706;
            --dark-color: #1f2937;
            --light-color: #ffffff;
            --glass-effect: rgba(255, 255, 255, 0.25);
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Styles de base accessibles */
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
            scroll-behavior: smooth;
        }

        /* En-tête accessible */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 100px 20px 60px;
            text-align: center;
            position: relative;
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

        /* Bouton retour ultra-accessible */
        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            z-index: 10;
        }

        .home-link:focus {
            outline: 3px solid var(--accent-color);
            outline-offset: 2px;
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: translateY(-2px);
        }

        .home-link i {
            font-size: 1.1em;
            transition: transform 0.3s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 30px;
        }

        /* Carte de contenu accessible */
        .accessibility-card {
            background: var(--light-color);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            padding: 40px;
            margin-bottom: 40px;
            border-left: 5px solid var(--accent-color);
        }

        /* Sections d'accessibilité */
        .accessibility-section {
            margin-bottom: 40px;
        }

        .accessibility-section h2 {
            color: var(--primary-dark);
            padding-bottom: 12px;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.5em;
            position: relative;
            display: flex;
            align-items: center;
        }

        .accessibility-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            border-radius: 3px;
        }

        .accessibility-section svg {
            margin-right: 15px;
            width: 28px;
            height: 28px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .accessibility-section p,
        .accessibility-section ul {
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-size: 1.05em;
        }

        .accessibility-section strong {
            color: var(--dark-color);
            font-weight: 600;
        }

        .accessibility-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .accessibility-section ul li {
            padding: 12px 0;
            padding-left: 40px;
            position: relative;
        }

        .accessibility-section ul li::before {
            content: '•';
            color: var(--accent-color);
            font-size: 1.5em;
            position: absolute;
            left: 15px;
            top: 8px;
        }

        .accessibility-section a {
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 2px solid rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
        }

        .accessibility-section a:hover,
        .accessibility-section a:focus {
            color: var(--primary-color);
            border-bottom-color: var(--accent-color);
        }

        .accessibility-section a:focus {
            outline: none;
            background-color: rgba(217, 119, 6, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 80px 15px 50px;
            }

            .home-link {
                top: 15px;
                left: 15px;
                padding: 10px 18px;
                font-size: 0.9em;
            }

            .container {
                padding: 0 20px;
            }

            .accessibility-card {
                padding: 25px;
            }

            .accessibility-section h2 {
                font-size: 1.3em;
            }

            .accessibility-section ul li {
                padding-left: 30px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link" aria-label="Retour à la page d'accueil">
            <i class="fas fa-arrow-left" aria-hidden="true"></i>
            <span>Retour à l'accueil</span>
        </a>
        <h1>Accessibilité</h1>
    </header>

    <div class="container">
        <div class="accessibility-card">
            <section class="accessibility-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    Engagement en matière d'Accessibilité
                </h2>
                <p>AIM Global est engagé à rendre son site web accessible à toutes les personnes, y compris celles ayant des handicaps. Nous nous efforçons de respecter les normes internationales d'accessibilité, notamment les <a href="https://www.w3.org/TR/WCAG21/" target="_blank" rel="noopener noreferrer">WCAG 2.1 (Web Content Accessibility Guidelines)</a> au niveau AA.</p>
            </section>

            <section class="accessibility-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Mesures d'Accessibilité
                </h2>
                <p>Voici quelques-unes des mesures que nous avons mises en place pour améliorer l'accessibilité de notre site :</p>
                <ul>
                    <li><strong>Navigation au clavier :</strong> Toutes les fonctionnalités du site sont accessibles via le clavier.</li>
                    <li><strong>Contraste des couleurs :</strong> Nous respectons les ratios de contraste pour garantir une bonne lisibilité.</li>
                    <li><strong>Alternatives textuelles :</strong> Toutes les images disposent d'un attribut `alt` descriptif.</li>
                    <li><strong>Structure de page :</strong> Utilisation de balises HTML sémantiques pour une meilleure navigation.</li>
                    <li><strong>Compatibilité avec les lecteurs d'écran :</strong> Le site est optimisé pour les technologies d'assistance.</li>
                </ul>
            </section>

            <section class="accessibility-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    Limitations et Alternatives
                </h2>
                <p>Malgré nos efforts, certaines parties du site peuvent ne pas être entièrement accessibles. Si vous rencontrez des difficultés, voici quelques alternatives :</p>
                <ul>
                    <li>Contactez-nous par téléphone au <a href="tel:+33123456789">+33 1 23 45 67 89</a> pour obtenir de l'aide.</li>
                    <li>Utilisez notre formulaire de contact disponible sur la page <a href="contact.php">Contact</a>.</li>
                </ul>
            </section>

            <section class="accessibility-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Amélioration Continue
                </h2>
                <p>Nous travaillons continuellement à améliorer l'accessibilité de notre site. Si vous avez des suggestions ou rencontrez des problèmes, veuillez nous en informer en utilisant le formulaire de contact ou en nous envoyant un email à <a href="mailto:accessibilite@aimglobal.com">accessibilite@aimglobal.com</a>.</p>
            </section>

            <section class="accessibility-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M12 12l-4 4h8l-4-4z"></path>
                    </svg>
                    Déclaration de Conformité
                </h2>
                <p>Nous nous efforçons de respecter les critères de conformité de niveau AA des WCAG 2.1. Cependant, certaines parties du site peuvent ne pas être entièrement conformes. Nous travaillons activement à corriger ces problèmes.</p>
            </section>
        </div>
    </div>

    <script>
        // Détection des préférences d'accessibilité
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.body.style.scrollBehavior = 'auto';
        }
    </script>
</body>
</html>