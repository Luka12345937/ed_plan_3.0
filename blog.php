<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - AIM Global</title>
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
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
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

        header p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 30px;
        }

        /* Filtres de blog */
        .blog-filters {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .blog-filters input,
        .blog-filters select {
            flex: 1;
            min-width: 200px;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            background-color: var(--light-color);
            transition: all 0.3s ease;
        }

        .blog-filters input:focus,
        .blog-filters select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .blog-filters button {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: var(--card-shadow);
            min-width: 150px;
        }

        .blog-filters button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 20px -5px rgba(79, 70, 229, 0.3);
        }

        /* Grille de blog */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        /* Cartes de blog */
        .blog-card {
            background-color: var(--light-color);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.4s ease;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(79, 70, 229, 0.25);
        }

        .blog-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(79, 70, 229, 0.1), transparent 50%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .blog-card:hover::before {
            opacity: 1;
        }

        .blog-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover img {
            transform: scale(1.05);
        }

        .blog-card-content {
            padding: 25px;
            position: relative;
            background-color: var(--light-color);
        }

        .blog-card-content h3 {
            margin: 0 0 15px;
            color: var(--primary-dark);
            font-size: 1.4rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .blog-card-content p {
            color: var(--secondary-color);
            margin: 0 0 20px;
            line-height: 1.6;
        }

        .blog-card-content .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .blog-card-content .read-more:hover {
            color: var(--primary-dark);
            transform: translateX(5px);
        }

        .blog-card-content .read-more i {
            transition: transform 0.3s ease;
        }

        .blog-card-content .read-more:hover i {
            transform: translateX(3px);
        }

        .blog-card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .blog-card-meta .category {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-dark);
            font-weight: 500;
            padding: 6px 12px;
            background-color: rgba(79, 70, 229, 0.1);
            border-radius: 50px;
        }

        .blog-card-meta .category svg {
            width: 16px;
            height: 16px;
        }

        .blog-card-meta .date {
            color: var(--secondary-color);
        }

        /* Animation des cartes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            header {
                padding: 120px 20px 60px;
            }
            
            .blog-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
            
            .blog-filters {
                flex-direction: column;
            }
            
            .blog-filters button {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            header p {
                font-size: 1.1rem;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
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
        <h1>Blog AIM Global</h1>
        <p>Découvrez nos derniers articles sur l'emploi, les carrières, et les tendances du marché</p>
    </header>

    <div class="container">
        <div class="blog-filters">
            <input type="text" id="searchInput" placeholder="Rechercher des articles...">
            <select id="categoryFilter">
                <option value="">Toutes les catégories</option>
                <option value="career">Carrière</option>
                <option value="tips">Conseils</option>
                <option value="trends">Tendances</option>
            </select>
            <button id="filterButton">
                <i class="fas fa-filter" style="margin-right: 8px;"></i>
                Filtrer
            </button>
        </div>

        <div class="blog-grid">
            <!-- Exemple d'article de blog -->
            <div class="blog-card" style="animation: fadeInUp 0.6s ease-out;">
                <img src="assets/blog-post-1.jpg" alt="Personne travaillant sur ordinateur portable">
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="category">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="17 8 12 3 7 8"></polyline>
                                <line x1="12" y1="3" x2="12" y2="15"></line>
                            </svg>
                            Carrière
                        </span>
                        <span class="date">15 Octobre 2023</span>
                    </div>
                    <h3>Comment Booster Votre Carrière en 2023</h3>
                    <p>Découvrez les meilleures stratégies pour faire évoluer votre carrière cette année avec nos conseils d'experts.</p>
                    <a href="article.php" class="read-more">
                        Lire l'article
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>

            <!-- Deuxième article -->
            <div class="blog-card" style="animation: fadeInUp 0.6s ease-out 0.2s;">
                <img src="assets/blog-post-2.jpg" alt="Réunion d'équipe">
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="category">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Conseils
                        </span>
                        <span class="date">8 Octobre 2023</span>
                    </div>
                    <h3>Les Compétences Clés pour Réussir en Télétravail</h3>
                    <p>Maîtrisez les compétences essentielles pour exceller dans un environnement de travail à distance.</p>
                    <a href="article.php" class="read-more">
                        Lire l'article
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>

            <!-- Troisième article -->
            <div class="blog-card" style="animation: fadeInUp 0.6s ease-out 0.4s;">
                <img src="assets/blog-post-3.jpg" alt="Graphique de croissance">
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="category">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="20" x2="12" y2="10"></line>
                                <line x1="18" y1="20" x2="18" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="16"></line>
                            </svg>
                            Tendances
                        </span>
                        <span class="date">1 Octobre 2023</span>
                    </div>
                    <h3>Les Métiers les Plus Demandés en 2023</h3>
                    <p>Découvrez les secteurs qui recrutent et les compétences les plus recherchées cette année.</p>
                    <a href="article.php" class="read-more">
                        Lire l'article
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filtres de recherche et de catégorie
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value.toLowerCase();
            const blogCards = document.querySelectorAll('.blog-card');

            blogCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const category = card.querySelector('.category').textContent.toLowerCase();

                const matchesSearch = title.includes(searchQuery);
                const matchesCategory = categoryFilter === '' || category.includes(categoryFilter);

                if (matchesSearch && matchesCategory) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.6s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Détection des préférences d'accessibilité
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const cards = document.querySelectorAll('.blog-card');
            cards.forEach(card => {
                card.style.animation = 'none';
            });
        }
    </script>
</body>
</html>