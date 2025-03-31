<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi - AIM Global</title>
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
            transform: translateY(-3px);
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
            transform: translateX(-5px);
        }

        /* En-tête */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 100px 20px 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
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
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        header p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Filtres */
        .job-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: var(--card-shadow);
        }

        .job-filters input,
        .job-filters select {
            flex: 1 1 200px;
            padding: 15px 20px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: rgba(248, 249, 250, 0.7);
        }

        .job-filters input:focus,
        .job-filters select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 4px rgba(67, 97, 238, 0.15);
            background-color: var(--light-color);
        }

        .job-filters button {
            flex: 0 0 auto;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .job-filters button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.3);
        }

        .job-filters button i {
            transition: transform 0.3s ease;
        }

        .job-filters button:hover i {
            transform: rotate(15deg);
        }

        /* Grille d'offres */
        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        /* Carte d'offre */
        .job-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .job-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .job-card-content {
            padding: 25px;
        }

        .job-card-content h3 {
            margin: 0 0 10px;
            color: var(--primary-color);
            font-size: 1.4rem;
        }

        .job-card-content p {
            color: var(--secondary-color);
            margin: 0 0 15px;
            font-size: 0.95rem;
        }

        .job-card-content .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .job-meta-item {
            display: flex;
            align-items: center;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        .job-meta-item i {
            margin-right: 8px;
            color: var(--primary-color);
        }

        .job-card-content .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            gap: 10px;
        }

        .job-card-content .apply-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }

        .job-card-content .apply-button i {
            transition: transform 0.3s ease;
        }

        .job-card-content .apply-button:hover i {
            transform: translateX(5px);
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

        /* Responsive */
        @media (max-width: 768px) {
            header {
                padding: 80px 20px 50px;
            }

            .home-btn {
                top: 20px;
                left: 20px;
                padding: 10px 18px;
                font-size: 0.9rem;
            }

            .job-grid {
                grid-template-columns: 1fr;
            }

            .job-filters {
                flex-direction: column;
            }

            .job-filters input,
            .job-filters select,
            .job-filters button {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            .job-card-content {
                padding: 20px;
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
        <h1>Offres d'Emploi</h1>
        <p>Trouvez l'emploi de vos rêves parmi nos offres sélectionnées</p>
    </header>

    <!-- Contenu principal -->
    <div class="container">
        <div class="job-filters">
            <input type="text" id="searchInput" placeholder="Rechercher par poste, entreprise...">
            <select id="locationFilter">
                <option value="">Toutes les localisations</option>
                <option value="paris">Paris</option>
                <option value="lyon">Lyon</option>
                <option value="marseille">Marseille</option>
            </select>
            <select id="jobTypeFilter">
                <option value="">Tous les types</option>
                <option value="full-time">Temps Plein</option>
                <option value="part-time">Temps Partiel</option>
                <option value="contract">Contrat</option>
                <option value="internship">Stage</option>
            </select>
            <button id="filterButton">
                <i class="fas fa-filter"></i> Filtrer
            </button>
        </div>

        <div class="job-grid">
            <!-- Exemple d'offre d'emploi -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Développeur Web">
                <div class="job-card-content">
                    <h3>Développeur Web Full Stack</h3>
                    <p><strong>TechCorp</strong> - Entreprise innovante dans les nouvelles technologies</p>
                    
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Paris, France</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Temps Plein</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-euro-sign"></i>
                            <span>45K-55K/an</span>
                        </div>
                    </div>
                    
                    <a href="postuler_maintenant.php" class="apply-button">
                        Postuler maintenant <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>

            <!-- Autre offre -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Designer UX/UI">
                <div class="job-card-content">
                    <h3>Designer UX/UI Senior</h3>
                    <p><strong>DesignStudio</strong> - Agence de design primée</p>
                    
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lyon, France</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Temps Plein</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-euro-sign"></i>
                            <span>50K-65K/an</span>
                        </div>
                    </div>
                    
                    <a href="postuler_maintenant.php" class="apply-button">
                        Postuler maintenant <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>

            <!-- Autre offre -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Chef de Projet">
                <div class="job-card-content">
                    <h3>Chef de Projet Digital</h3>
                    <p><strong>DigitalAgency</strong> - Agence digitale internationale</p>
                    
                    <div class="job-meta">
                        <div class="job-meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Marseille, France</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Temps Partiel</span>
                        </div>
                        <div class="job-meta-item">
                            <i class="fas fa-euro-sign"></i>
                            <span>35K-45K/an</span>
                        </div>
                    </div>
                    
                    <a href="postuler_maintenant.php" class="apply-button">
                        Postuler maintenant <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filtres de recherche et de catégorie
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const locationFilter = document.getElementById('locationFilter').value.toLowerCase();
            const jobTypeFilter = document.getElementById('jobTypeFilter').value.toLowerCase();
            const jobCards = document.querySelectorAll('.job-card');

            jobCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const company = card.querySelector('p').textContent.toLowerCase();
                const location = card.querySelector('.job-meta-item:nth-child(1) span').textContent.toLowerCase();
                const jobType = card.querySelector('.job-meta-item:nth-child(2) span').textContent.toLowerCase();

                const matchesSearch = title.includes(searchQuery) || company.includes(searchQuery);
                const matchesLocation = locationFilter === '' || location.includes(locationFilter);
                const matchesJobType = jobTypeFilter === '' || jobType.includes(jobTypeFilter);

                if (matchesSearch && matchesLocation && matchesJobType) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const jobCards = document.querySelectorAll('.job-card');
            jobCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * index);
            });
        });
    </script>
</body>
</html>