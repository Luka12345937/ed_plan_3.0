<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--background-color);
            color: #111827;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #3730a3);
            color: white;
            padding: 80px 20px 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD9iIjEwMCUiIGZpbGw9InVybCgjcGF0dGVybikiLz48L3N2Zz4=');
            opacity: 0.3;
        }

        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 16px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 10;
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .home-link i {
            margin-right: 8px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        header p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .job-filters {
            display: flex;
            gap: 15px;
            margin-bottom: 40px;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
        }

        .job-filters input,
        .job-filters select {
            flex: 1;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
            background-color: #f9fafb;
        }

        .job-filters input:focus,
        .job-filters select:focus {
            border-color: var(--primary-color);
            outline: none;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .job-filters button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 24px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .job-filters button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .job-filters button i {
            margin-right: 8px;
        }

        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .job-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
        }

        .job-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .job-card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 1;
        }

        .job-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: var(--transition);
        }

        .job-card:hover img {
            transform: scale(1.05);
        }

        .job-card-content {
            padding: 25px;
            position: relative;
        }

        .job-card-content h3 {
            font-size: 1.3rem;
            margin-bottom: 12px;
            color: #111827;
        }

        .job-card-content .company {
            display: flex;
            align-items: center;
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }

        .job-card-content .company i {
            margin-right: 8px;
        }

        .job-card-content .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .job-card-content .meta-item {
            display: flex;
            align-items: center;
            color: var(--secondary-color);
        }

        .job-card-content .meta-item i {
            margin-right: 8px;
            color: var(--primary-color);
        }

        .job-card-content .salary {
            color: var(--success-color);
            font-weight: 600;
            margin-bottom: 20px;
            display: block;
        }

        .job-card-content .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            width: 100%;
            text-align: center;
        }

        .job-card-content .apply-button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .job-card-content .apply-button i {
            margin-right: 8px;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .job-card {
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }

        .job-card:nth-child(1) { animation-delay: 0.1s; }
        .job-card:nth-child(2) { animation-delay: 0.2s; }
        .job-card:nth-child(3) { animation-delay: 0.3s; }
        .job-card:nth-child(4) { animation-delay: 0.4s; }
        .job-card:nth-child(5) { animation-delay: 0.5s; }
        .job-card:nth-child(6) { animation-delay: 0.6s; }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .job-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 100px 20px 60px;
            }

            .job-filters {
                flex-direction: column;
            }

            .job-filters button {
                padding: 14px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2rem;
            }

            .job-card-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Offres d'Emploi</h1>
        <p>Trouvez l'opportunité parfaite parmi nos offres sélectionnées avec soin</p>
    </header>

    <div class="container">
        <div class="job-filters">
            <input type="text" id="searchInput" placeholder="Rechercher par poste, compétence...">
            <select id="locationFilter">
                <option value="">Toutes localisations</option>
                <option value="paris">Paris</option>
                <option value="lyon">Lyon</option>
                <option value="marseille">Marseille</option>
                <option value="toulouse">Toulouse</option>
                <option value="remote">Télétravail</option>
            </select>
            <select id="jobTypeFilter">
                <option value="">Tous types</option>
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
            <!-- Offre 1 -->
            <div class="job-card">
                <span class="job-card-badge">Nouveau</span>
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Développeur Web">
                <div class="job-card-content">
                    <h3>Développeur Full Stack</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> TechVision
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Paris
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 3-5 ans
                        </div>
                    </div>
                    <span class="salary">€55k - €75k/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 2 -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Designer UX/UI">
                <div class="job-card-content">
                    <h3>Designer UX/UI Senior</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> CreativeMinds
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Lyon
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 5+ ans
                        </div>
                    </div>
                    <span class="salary">€50k - €70k/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 3 -->
            <div class="job-card">
                <span class="job-card-badge">Urgent</span>
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Marketing Digital">
                <div class="job-card-content">
                    <h3>Responsable Marketing Digital</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> MarketGuru
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Télétravail
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Partiel
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 2-3 ans
                        </div>
                    </div>
                    <span class="salary">€40k - €50k/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 4 -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Data Scientist">
                <div class="job-card-content">
                    <h3>Data Scientist</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> DataInsights
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Paris
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 1-3 ans
                        </div>
                    </div>
                    <span class="salary">€60k - €80k/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 5 -->
            <div class="job-card">
                <span class="job-card-badge">Populaire</span>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Ressources Humaines">
                <div class="job-card-content">
                    <h3>Responsable RH</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> PeopleFirst
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Marseille
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 5+ ans
                        </div>
                    </div>
                    <span class="salary">€45k - €60k/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 6 -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Stage Développement">
                <div class="job-card-content">
                    <h3>Stagiaire Développement</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> FutureTech
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Toulouse
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Stage
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> Étudiant
                        </div>
                    </div>
                    <span class="salary">€1k - €1.2k/mois</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filtres de recherche
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const locationFilter = document.getElementById('locationFilter').value.toLowerCase();
            const jobTypeFilter = document.getElementById('jobTypeFilter').value.toLowerCase();
            const jobCards = document.querySelectorAll('.job-card');

            jobCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const company = card.querySelector('.company').textContent.toLowerCase();
                const location = card.querySelector('.meta-item:nth-child(1)').textContent.toLowerCase();
                const jobType = card.querySelector('.meta-item:nth-child(2)').textContent.toLowerCase();

                const matchesSearch = title.includes(searchQuery) || company.includes(searchQuery);
                const matchesLocation = locationFilter === '' || location.includes(locationFilter);
                const matchesJobType = jobTypeFilter === '' || jobType.includes(jobTypeFilter);

                if (matchesSearch && matchesLocation && matchesJobType) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.job-card');
            cards.forEach(card => {
                card.style.opacity = '0';
            });
        });
    </script>
</body>
</html>