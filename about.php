<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --accent-color: #7209b7;
            --light-color: #ffffff;
            --dark-color: #212529;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        /* Bouton retour ultra moderne */
        .home-btn {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: var(--primary-color);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 100;
            border: 2px solid rgba(67, 97, 238, 0.1);
            overflow: hidden;
        }

        .home-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
            transition: 0.5s;
        }

        .home-btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 35px rgba(67, 97, 238, 0.3);
            color: var(--light-color);
            background: var(--primary-color);
        }

        .home-btn:hover::before {
            left: 100%;
        }

        .home-btn i {
            margin-right: 10px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-5px) rotate(-10deg);
        }

        /* En-tête */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 120px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }

        header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s ease-out;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            opacity: 0.9;
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 20px;
        }

        /* Section À Propos */
        .about-section {
            display: flex;
            align-items: center;
            gap: 60px;
            margin-bottom: 80px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out 0.4s forwards;
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            color: var(--primary-color);
            margin-bottom: 25px;
            font-size: 2rem;
            position: relative;
            display: inline-block;
        }

        .about-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .about-content p {
            color: var(--secondary-color);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-image {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.02);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100%;
            height: 100%;
            border: 3px solid var(--primary-color);
            border-radius: 20px;
            z-index: -1;
            transition: all 0.5s ease;
        }

        .about-image:hover::before {
            top: -15px;
            right: -15px;
        }

        /* Section Valeurs */
        .values-section {
            background-color: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            margin-bottom: 80px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out 0.6s forwards;
        }

        .values-section h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 50px;
            font-size: 2rem;
            position: relative;
        }

        .values-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .value-card {
            background-color: var(--light-color);
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .value-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .value-card:hover i {
            transform: scale(1.1);
            color: var(--accent-color);
        }

        .value-card h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .value-card p {
            color: var(--secondary-color);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Section Équipe */
        .team-section {
            background-color: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out 0.8s forwards;
        }

        .team-section h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 50px;
            font-size: 2rem;
            position: relative;
        }

        .team-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .team-member {
            text-align: center;
            transition: all 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border: 5px solid var(--light-color);
        }

        .team-member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .team-member-image img {
            transform: scale(1.1);
        }

        .team-member h3 {
            color: var(--primary-color);
            margin: 20px 0 5px;
            font-size: 1.3rem;
        }

        .team-member p {
            color: var(--secondary-color);
            font-size: 0.95rem;
            position: relative;
            display: inline-block;
        }

        .team-member p::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .team-member:hover p::after {
            width: 100%;
        }

        /* Décoration */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(67, 97, 238, 0.1);
            z-index: 0;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
        }

        /* Animations */
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

        /* Responsive */
        @media (max-width: 992px) {
            .about-section {
                flex-direction: column;
                text-align: center;
            }

            .about-content h2::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .about-image {
                margin-top: 40px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 100px 20px 60px;
            }

            .home-btn {
                top: 20px;
                left: 20px;
                padding: 10px 18px;
                font-size: 0.9rem;
            }

            header h1 {
                font-size: 2.2rem;
            }

            header p {
                font-size: 1rem;
            }

            .about-content h2,
            .values-section h2,
            .team-section h2 {
                font-size: 1.8rem;
            }

            .values-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .about-section,
            .values-section,
            .team-section {
                padding: 30px 20px;
            }

            .team-member-image {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <!-- Bouton retour accueil -->
    <a href="index.php" class="home-btn">
        <i class="fas fa-arrow-left"></i> Retour à l'accueil
    </a>

    <!-- Décoration -->
    <div class="decor-circle circle-1"></div>
    <div class="decor-circle circle-2"></div>

    <!-- En-tête -->
    <header>
        <h1>À Propos de Nous</h1>
        <p>Découvrez notre mission, notre vision et notre équipe</p>
    </header>

    <!-- Contenu principal -->
    <div class="container">
        <section class="about-section">
            <div class="about-content">
                <h2>Qui Sommes-Nous?</h2>
                <p>AIM Global est une plateforme de recrutement innovante qui connecte les talents avec les entreprises leaders dans leur domaine. Notre mission est de simplifier le processus de recrutement et de créer des opportunités pour tous.</p>
                <p>Fondée en 2020, notre entreprise a rapidement évolué pour devenir un acteur clé dans le domaine du recrutement digital, grâce à notre approche centrée sur l'humain et notre technologie de pointe.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Équipe AIM Global">
            </div>
        </section>

        <section class="values-section">
            <h2>Nos Valeurs</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>Nous croyons en la puissance de l'innovation pour transformer le recrutement. Notre équipe travaille sans relâche à développer des solutions disruptives qui redéfinissent les standards du secteur.</p>
                </div>

                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Intégrité</h3>
                    <p>Nous agissons avec transparence et honnêteté dans toutes nos interactions. L'éthique guide chacune de nos décisions, garantissant des relations de confiance avec nos partenaires.</p>
                </div>

                <div class="value-card">
                    <i class="fas fa-trophy"></i>
                    <h3>Excellence</h3>
                    <p>Nous nous engageons à fournir des services de la plus haute qualité. Notre recherche permanente de l'excellence se traduit par des résultats exceptionnels pour nos clients et candidats.</p>
                </div>
            </div>
        </section>

        <section class="team-section">
            <h2>Notre Équipe</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-member-image">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Jean Dupont">
                    </div>
                    <h3>Jean Dupont</h3>
                    <p>PDG & Fondateur</p>
                </div>

                <div class="team-member">
                    <div class="team-member-image">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Marie Martin">
                    </div>
                    <h3>Marie Martin</h3>
                    <p>Directrice des Opérations</p>
                </div>

                <div class="team-member">
                    <div class="team-member-image">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Pierre Durand">
                    </div>
                    <h3>Pierre Durand</h3>
                    <p>Directeur Technique</p>
                </div>

                <div class="team-member">
                    <div class="team-member-image">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sophie Lambert">
                    </div>
                    <h3>Sophie Lambert</h3>
                    <p>Responsable RH</p>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Animation au chargement
        document.addEventListener('DOMContentLoaded', () => {
            // Animation des cartes de valeurs
            const valueCards = document.querySelectorAll('.value-card');
            valueCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 200 * index);
            });

            // Animation des membres de l'équipe
            const teamMembers = document.querySelectorAll('.team-member');
            teamMembers.forEach((member, index) => {
                setTimeout(() => {
                    member.style.opacity = '1';
                    member.style.transform = 'translateY(0)';
                }, 150 * index);
            });
        });
    </script>
</body>
</html>