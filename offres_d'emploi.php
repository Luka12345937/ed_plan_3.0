<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres d'Emploi - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --error-color: #ef4444;
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
            padding: 100px 20px 60px;
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
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
            opacity: 0.3;
        }

        .home-link {
            position: absolute;
            top: 30px;
            left: 30px;
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            transition: var(--transition);
            z-index: 10;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .home-link i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
            font-weight: 700;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            font-weight: 300;
        }

        .container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 30px;
        }

        .job-filters {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
            background-color: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            align-items: center;
        }

        .job-filters input,
        .job-filters select {
            flex: 1;
            padding: 16px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: var(--transition);
            background-color: #f9fafb;
            font-family: inherit;
        }

        .job-filters input:focus,
        .job-filters select:focus {
            border-color: var(--primary-color);
            outline: none;
            background-color: white;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        .job-filters button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-family: inherit;
        }

        .job-filters button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .job-filters button i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 30px;
        }

        .job-card {
            background-color: white;
            border-radius: 16px;
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
            top: 20px;
            right: 20px;
            background-color: var(--accent-color);
            color: #111827;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 700;
            z-index: 1;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .job-card-badge.new {
            background-color: var(--error-color);
            color: white;
        }

        .job-card-badge.featured {
            background-color: var(--success-color);
            color: white;
        }

        .job-card-badge.urgent {
            background-color: var(--accent-color);
            color: #111827;
        }

        .job-card-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: var(--transition);
        }

        .job-card:hover .job-card-image {
            transform: scale(1.05);
        }

        .job-card-content {
            padding: 30px;
            position: relative;
        }

        .job-card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #111827;
            font-weight: 700;
        }

        .job-card-content .company {
            display: flex;
            align-items: center;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .job-card-content .company i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .job-card-content .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 25px;
        }

        .job-card-content .meta-item {
            display: flex;
            align-items: center;
            color: var(--secondary-color);
            font-size: 0.95rem;
        }

        .job-card-content .meta-item i {
            margin-right: 8px;
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .job-card-content .salary {
            color: var(--success-color);
            font-weight: 700;
            margin-bottom: 25px;
            display: block;
            font-size: 1.1rem;
        }

        .job-card-content .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
            text-align: center;
            font-size: 1rem;
        }

        .job-card-content .apply-button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .job-card-content .apply-button i {
            margin-right: 10px;
            font-size: 1.1rem;
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
        @media (max-width: 1200px) {
            .job-grid {
                grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            }
        }

        @media (max-width: 992px) {
            header {
                padding: 120px 20px 80px;
            }

            .job-filters {
                flex-wrap: wrap;
            }

            .job-filters input,
            .job-filters select,
            .job-filters button {
                flex: 1 1 200px;
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.4rem;
            }

            header p {
                font-size: 1.1rem;
            }

            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 18px;
            }

            .job-grid {
                grid-template-columns: 1fr;
            }

            .job-card-image {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 20px;
            }

            .job-filters {
                padding: 20px;
                gap: 15px;
            }

            .job-filters input,
            .job-filters select,
            .job-filters button {
                flex: 1 1 100%;
            }

            .job-card-content {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Opportunités de Carrière</h1>
        <p>Découvrez nos offres d'emploi exclusives et trouvez le poste qui correspond à vos ambitions</p>
    </header>

    <div class="container">
        <div class="job-filters">
            <input type="text" id="searchInput" placeholder="Rechercher par poste, compétences...">
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
                <option value="freelance">Freelance</option>
            </select>
            <button id="filterButton">
                <i class="fas fa-filter"></i> Filtrer
            </button>
        </div>

        <div class="job-grid">
            <!-- Offre 1 -->
            <div class="job-card">
                <span class="job-card-badge new">Nouveau</span>
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Développeur Full Stack" class="job-card-image">
                <div class="job-card-content">
                    <h3>Développeur Full Stack</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> TechVision
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Paris, France
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 3-5 ans
                        </div>
                    </div>
                    <span class="salary">€55,000 - €75,000/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 2 -->
            <div class="job-card">
                <span class="job-card-badge featured">Featured</span>
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Designer UX/UI" class="job-card-image">
                <div class="job-card-content">
                    <h3>Designer UX/UI Senior</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> CreativeMinds
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Lyon, France
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 5+ ans
                        </div>
                    </div>
                    <span class="salary">€50,000 - €70,000/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 3 -->
            <div class="job-card">
                <span class="job-card-badge urgent">Urgent</span>
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Marketing Digital" class="job-card-image">
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
                    <span class="salary">€40,000 - €50,000/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 4 -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Data Scientist" class="job-card-image">
                <div class="job-card-content">
                    <h3>Data Scientist</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> DataInsights
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Paris, France
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 1-3 ans
                        </div>
                    </div>
                    <span class="salary">€60,000 - €80,000/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 5 -->
            <div class="job-card">
                <span class="job-card-badge new">Nouveau</span>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Ressources Humaines" class="job-card-image">
                <div class="job-card-content">
                    <h3>Responsable RH</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> PeopleFirst
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Marseille, France
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Temps Plein
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> 5+ ans
                        </div>
                    </div>
                    <span class="salary">€45,000 - €60,000/an</span>
                    <a href="postuler_maintenant.php" class="apply-button">
                        <i class="fas fa-paper-plane"></i> Postuler maintenant
                    </a>
                </div>
            </div>

            <!-- Offre 6 -->
            <div class="job-card">
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Stage Développement" class="job-card-image">
                <div class="job-card-content">
                    <h3>Stagiaire Développement</h3>
                    <div class="company">
                        <i class="fas fa-building"></i> FutureTech
                    </div>
                    <div class="meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i> Toulouse, France
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i> Stage
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i> Étudiant
                        </div>
                    </div>
                    <span class="salary">€1,000 - €1,200/mois</span>
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