<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-light: #4cc9f0;
            --secondary-color: #7209b7;
            --background-color: #f8f9ff;
            --card-bg: #ffffff;
            --text-color: #2b2d42;
            --text-light: #8d99ae;
            --accent-color: #f72585;
            --border-radius: 16px;
            --box-shadow: 0 10px 30px rgba(67, 97, 238, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-weight: 600;
            z-index: 100;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 12px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px);
        }

        .home-link i {
            margin-right: 10px;
            font-size: 18px;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
        }

        header h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: -40px auto 60px;
            padding: 0 20px;
            position: relative;
        }

        .filters-container {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--box-shadow);
        }

        .filters {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .search-box {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .search-box i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f8f9ff;
            font-family: 'Poppins', sans-serif;
        }

        .search-box input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            background-color: white;
        }

        .filter-select {
            flex: 0.5;
            min-width: 250px;
            position: relative;
        }

        .filter-select i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            pointer-events: none;
        }

        .filter-select select {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 16px;
            appearance: none;
            -webkit-appearance: none;
            background-color: #f8f9ff;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-select select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            background-color: white;
        }

        .filter-button {
            flex: 0.2;
            min-width: 120px;
        }

        .filter-button button {
            width: 100%;
            height: 100%;
            padding: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .filter-button button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }

        .filter-button button:active {
            transform: translateY(0);
        }

        .jobs-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }

        .job-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--box-shadow);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(67, 97, 238, 0.2);
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
        }

        .job-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 15px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .meta-item i {
            margin-right: 8px;
            font-size: 1rem;
            color: var(--primary-color);
        }

        .job-description {
            margin-bottom: 20px;
            color: var(--text-color);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.2);
        }

        .apply-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.3);
        }

        .apply-button i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .apply-button:hover i {
            transform: translateX(3px);
        }

        .job-tag {
            display: inline-block;
            padding: 5px 12px;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 15px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            grid-column: 1 / -1;
            background: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .empty-state i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .empty-state p {
            color: var(--text-light);
            max-width: 500px;
            margin: 0 auto;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .job-card {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .job-card:nth-child(1) { animation-delay: 0.1s; }
        .job-card:nth-child(2) { animation-delay: 0.2s; }
        .job-card:nth-child(3) { animation-delay: 0.3s; }
        .job-card:nth-child(4) { animation-delay: 0.4s; }
        .job-card:nth-child(5) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 992px) {
            .filters {
                flex-direction: column;
            }
            
            .search-box, .filter-select, .filter-button {
                min-width: 100%;
            }
            
            .jobs-list {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 80px 20px 60px;
            }
            
            header h1 {
                font-size: 2rem;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .filters-container {
                padding: 25px;
            }
            
            .job-card {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 70px 15px 50px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .jobs-list {
                grid-template-columns: 1fr;
            }
            
            .job-card h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <i class="fas fa-arrow-left"></i>
        Retour à l'accueil
    </a>

    <header>
        <h1>Offres d'Emploi</h1>
        <p>Trouvez l'opportunité parfaite parmi nos offres sélectionnées</p>
    </header>

    <div class="container">
        <div class="filters-container">
            <div class="filters">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher par poste, entreprise...">
                </div>
                <div class="filter-select">
                    <i class="fas fa-map-marker-alt"></i>
                    <select id="locationFilter">
                        <option value="">Toutes les localisations</option>
                        <option value="paris">Paris</option>
                        <option value="lyon">Lyon</option>
                        <option value="marseille">Marseille</option>
                        <option value="remote">Télétravail</option>
                    </select>
                </div>
                <div class="filter-select">
                    <i class="fas fa-briefcase"></i>
                    <select id="jobTypeFilter">
                        <option value="">Tous les types</option>
                        <option value="full-time">Temps Plein</option>
                        <option value="part-time">Temps Partiel</option>
                        <option value="contract">Contrat</option>
                        <option value="internship">Stage</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>
                <div class="filter-button">
                    <button id="filterButton">
                        <i class="fas fa-sliders-h"></i>
                        Filtrer
                    </button>
                </div>
            </div>
        </div>

        <div class="jobs-list">
            <!-- Exemple d'offre d'emploi -->
            <div class="job-card">
                <h3>Développeur Full Stack</h3>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-building"></i>
                        <span>TechCorp International</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Paris (Hybride)</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Temps Plein</span>
                    </div>
                </div>
                <div class="job-description">
                    Nous recherchons un développeur full stack expérimenté pour rejoindre notre équipe produit. Vous travaillerez sur des projets innovants avec les dernières technologies.
                </div>
                <span class="job-tag">Nouveau</span>
                <a href="postuler_à_une_offre.php" class="apply-button">
                    Postuler
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="job-card">
                <h3>Chef de Projet Digital</h3>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-building"></i>
                        <span>Innovate Ltd</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Lyon</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Temps Plein</span>
                    </div>
                </div>
                <div class="job-description">
                    En tant que chef de projet digital, vous serez responsable de la gestion de projets web et mobiles de A à Z, de la conception à la livraison.
                </div>
                <a href="postuler_à_une_offre.php" class="apply-button">
                    Postuler
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="job-card">
                <h3>Designer UI/UX Senior</h3>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-building"></i>
                        <span>CreativeMinds</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Marseille</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Contrat</span>
                    </div>
                </div>
                <div class="job-description">
                    Nous cherchons un designer UI/UX talentueux pour concevoir des interfaces utilisateur exceptionnelles pour nos clients internationaux.
                </div>
                <span class="job-tag">Urgent</span>
                <a href="postuler_à_une_offre.php" class="apply-button">
                    Postuler
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="job-card">
                <h3>Data Scientist</h3>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-building"></i>
                        <span>DataFuture</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Télétravail</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Temps Plein</span>
                    </div>
                </div>
                <div class="job-description">
                    Rejoignez notre équipe de data science pour développer des modèles prédictifs innovants et participer à des projets de machine learning de pointe.
                </div>
                <a href="postuler_à_une_offre.php" class="apply-button">
                    Postuler
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        // Filtres de recherche et de statut
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const locationFilter = document.getElementById('locationFilter').value.toLowerCase();
            const jobTypeFilter = document.getElementById('jobTypeFilter').value.toLowerCase();
            const jobCards = document.querySelectorAll('.job-card');
            let visibleCards = 0;

            jobCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const company = card.querySelector('.meta-item:nth-child(1) span').textContent.toLowerCase();
                const location = card.querySelector('.meta-item:nth-child(2) span').textContent.toLowerCase();
                const jobType = card.querySelector('.meta-item:nth-child(3) span').textContent.toLowerCase();

                const matchesSearch = title.includes(searchQuery) || company.includes(searchQuery);
                const matchesLocation = locationFilter === '' || location.includes(locationFilter);
                const matchesJobType = jobTypeFilter === '' || jobType.includes(jobTypeFilter);

                if (matchesSearch && matchesLocation && matchesJobType) {
                    card.style.display = 'block';
                    visibleCards++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Gérer l'affichage si aucun résultat
            const emptyState = document.querySelector('.empty-state');
            if (visibleCards === 0) {
                if (!emptyState) {
                    const jobsList = document.querySelector('.jobs-list');
                    const emptyStateHTML = `
                        <div class="empty-state">
                            <i class="fas fa-search"></i>
                            <h3>Aucune offre trouvée</h3>
                            <p>Essayez de modifier vos critères de recherche</p>
                        </div>
                    `;
                    jobsList.innerHTML = emptyStateHTML;
                }
            } else if (emptyState) {
                emptyState.remove();
            }
        });

        // Permettre la recherche avec la touche Entrée
        document.getElementById('searchInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                document.getElementById('filterButton').click();
            }
        });
    </script>
</body>
</html>