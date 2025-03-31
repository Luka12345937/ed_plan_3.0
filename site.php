<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIM Global - Votre Partenaire Emploi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1e40af;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --light-color: #ffffff;
            --dark-color: #1f2937;
            --glass-effect: rgba(255, 255, 255, 0.2);
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.7;
            color: var(--dark-color);
        }

        /* Navigation moderne */
        .nav-container {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background: var(--glass-effect);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--light-color);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--accent-color);
        }

        .home-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--light-color);
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .home-link i {
            transition: transform 0.3s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        /* Hero section */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 180px 20px 100px;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--background-color);
            clip-path: polygon(0 40%, 100% 0, 100% 100%, 0% 100%);
        }

        .hero {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            flex: 1;
            padding-right: 40px;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 32px;
            background-color: var(--accent-color);
            color: var(--dark-color);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
            background-color: #fbbf24;
        }

        .hero-image {
            flex: 1;
            position: relative;
            animation: fadeIn 1s ease-out;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            transform: perspective(1000px) rotateY(-10deg);
            transition: transform 0.5s ease;
        }

        .hero-image:hover img {
            transform: perspective(1000px) rotateY(0deg);
        }

        /* Features section */
        .features {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--light-color);
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: var(--accent-color);
            transition: height 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover::before {
            height: 100%;
        }

        .feature-card svg {
            width: 60px;
            height: 60px;
            color: var(--primary-color);
            margin-bottom: 25px;
            transition: transform 0.4s ease;
        }

        .feature-card:hover svg {
            transform: scale(1.1);
        }

        .feature-card h3 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .feature-card p {
            color: var(--secondary-color);
            font-size: 1.05rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            text-align: center;
            padding: 40px 20px;
            margin-top: 80px;
        }

        footer p {
            opacity: 0.8;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-content h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                padding: 15px 20px;
            }
            
            .hero {
                flex-direction: column;
                text-align: center;
                padding-top: 60px;
            }

            .hero-content {
                padding-right: 0;
                margin-bottom: 40px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-image img {
                transform: none;
            }

            .features {
                padding: 0 20px;
                margin: 60px auto;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .cta-button {
                padding: 14px 28px;
            }

            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container">
        <a href="index.php" class="logo">AIM<span>Global</span></a>
        <a href="index.php" class="home-link">
            <i class="fas fa-home"></i>
            <span>Accueil</span>
        </a>
    </nav>

    <header>
        <div class="hero">
            <div class="hero-content">
                <h1>Trouvez l'Emploi de Vos Rêves avec AIM Global</h1>
                <p>Des milliers d'offres d'emploi, des entreprises renommées, et des outils pour maximiser vos chances de réussite.</p>
                <a href="offres_d_emploi.php" class="cta-button">
                    <i class="fas fa-briefcase"></i>
                    Découvrez nos Offres
                </a>
            </div>
            <div class="hero-image">
                <img src="assets/hero-image.jpg" alt="Personnes travaillant ensemble dans un environnement professionnel moderne">
            </div>
        </div>
    </header>

    <section class="features">
        <div class="feature-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2z"></path>
                <rect x="4" y="2" width="16" height="4" rx="2"></rect>
            </svg>
            <h3>Des Milliers d'Offres</h3>
            <p>Explorez une vaste sélection d'offres d'emploi dans divers secteurs d'activité à travers le monde.</p>
        </div>

        <div class="feature-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <h3>Profils Personnalisés</h3>
            <p>Créez un profil personnalisé pour mettre en avant vos compétences et expériences uniques.</p>
        </div>

        <div class="feature-card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="17 8 12 3 7 8"></polyline>
                <line x1="12" y1="3" x2="12" y2="15"></line>
            </svg>
            <h3>Candidature Simplifiée</h3>
            <p>Postulez en quelques clics grâce à notre processus de candidature intelligent et rapide.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 AIM Global. Tous droits réservés.</p>
    </footer>

    <script>
        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            featureCards.forEach((card, index) => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(30px)';
                card.style.transition = `all 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });
        });
    </script>
</body>
</html>