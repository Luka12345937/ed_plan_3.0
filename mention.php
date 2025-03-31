<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Styles spécifiques à la page des mentions légales */
        :root {
            --primary-color: #2563eb;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --dark-color: #1f2937;
            --light-color: #ffffff;
            --glass-effect: rgba(255, 255, 255, 0.2);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #1e40af);
            color: white;
            padding: 80px 20px 60px;
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
            height: 4px;
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

        .home-link {
            position: absolute;
            top: 25px;
            left: 25px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .home-link i {
            font-size: 1.1em;
            transition: transform 0.3s ease;
        }

        .home-link:hover i {
            transform: translateX(-3px);
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .legal-card {
            background: var(--light-color);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin-bottom: 40px;
            border-left: 4px solid var(--primary-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .legal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .legal-section {
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .legal-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .legal-section h2 {
            color: var(--primary-color);
            padding-bottom: 12px;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.5em;
            position: relative;
        }

        .legal-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            border-radius: 3px;
        }

        .legal-section p,
        .legal-section ul {
            color: var(--secondary-color);
            margin-bottom: 15px;
            font-size: 1.05em;
        }

        .legal-section strong {
            color: var(--dark-color);
            font-weight: 600;
        }

        .legal-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .legal-section ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }

        .legal-section ul li::before {
            content: '•';
            color: var(--accent-color);
            font-size: 1.5em;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .legal-section a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        .legal-section a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .legal-section a:hover {
            color: #1e40af;
        }

        .legal-section a:hover::after {
            width: 100%;
        }

        /* Effets décoratifs */
        .decoration {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.1) 0%, rgba(37, 99, 235, 0) 70%);
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
                padding: 70px 15px 50px;
            }

            header::after {
                bottom: -30px;
                height: 60px;
            }

            .home-link {
                top: 15px;
                left: 15px;
                padding: 8px 15px;
                font-size: 0.9em;
            }

            .container {
                padding: 0 15px;
            }

            .legal-card {
                padding: 25px;
            }

            .legal-section h2 {
                font-size: 1.3em;
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
        <h1>Mentions Légales</h1>
    </header>

    <div class="container">
        <div class="legal-card">
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>

            <section class="legal-section">
                <h2>Éditeur du Site</h2>
                <p><strong>Nom de l'entreprise :</strong> AIM Global</p>
                <p><strong>Adresse :</strong> 123 Rue de l'Exemple, 75001 Paris, France</p>
                <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
                <p><strong>Email :</strong> contact@aimglobal.com</p>
                <p><strong>Directeur de la publication :</strong> Jean Dupont</p>
            </section>

            <section class="legal-section">
                <h2>Hébergement</h2>
                <p><strong>Hébergeur :</strong> OVH</p>
                <p><strong>Adresse :</strong> 2 Rue Kellermann, 59100 Roubaix, France</p>
                <p><strong>Téléphone :</strong> +33 9 72 10 10 07</p>
            </section>

            <section class="legal-section">
                <h2>Propriété Intellectuelle</h2>
                <p>L'ensemble du contenu de ce site (textes, images, vidéos, logos, etc.) est la propriété exclusive d'AIM Global ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable d'AIM Global.</p>
            </section>

            <section class="legal-section">
                <h2>Protection des Données Personnelles</h2>
                <p>AIM Global s'engage à respecter la confidentialité des données personnelles des utilisateurs conformément au Règlement Général sur la Protection des Données (RGPD). Pour plus d'informations, veuillez consulter notre <a href="politique_confidentialite.php">Politique de Confidentialité</a>.</p>
            </section>

            <section class="legal-section">
                <h2>Cookies</h2>
                <p>Ce site utilise des cookies pour améliorer l'expérience utilisateur. Pour plus d'informations sur l'utilisation des cookies, veuillez consulter notre <a href="politique_cookies.php">Politique de Cookies</a>.</p>
            </section>

            <section class="legal-section">
                <h2>Responsabilité</h2>
                <p>AIM Global ne peut être tenue responsable des erreurs ou omissions présentes sur le site, ni des dommages directs ou indirects qui pourraient résulter de l'accès ou de l'utilisation du site.</p>
            </section>

            <section class="legal-section">
                <h2>Droit Applicable</h2>
                <p>Le présent site est régi par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
            </section>
        </div>
    </div>

    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.legal-section');
            
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
                
                if (deco1) deco1.style.transform = `translateY(${scrollY * 0.1}px)`;
                if (deco2) deco2.style.transform = `translateY(${scrollY * 0.05}px)`;
            });
        });
    </script>
</body>
</html>