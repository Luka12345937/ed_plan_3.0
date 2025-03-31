<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivre Mes Candidatures - AIM Global</title>
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
            --success-color: #4ad66d;
            --warning-color: #f8961e;
            --danger-color: #f72585;
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
            padding: 80px 20px 60px;
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
            margin-bottom: 10px;
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

        .applications-list {
            display: grid;
            gap: 20px;
        }

        .application-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--box-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .application-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(67, 97, 238, 0.2);
        }

        .application-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
        }

        .application-details {
            flex: 1;
            padding-right: 20px;
        }

        .application-details h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .application-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 10px;
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
        }

        .application-date {
            color: var(--text-light);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .application-date i {
            margin-right: 8px;
        }

        .application-status {
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 50px;
            color: white;
            min-width: 120px;
            text-align: center;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .status-pending {
            background: linear-gradient(135deg, var(--warning-color), #f9c74f);
        }

        .status-accepted {
            background: linear-gradient(135deg, var(--success-color), #90be6d);
        }

        .status-rejected {
            background: linear-gradient(135deg, var(--danger-color), #f15bb5);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .filters {
                flex-direction: column;
            }
            
            .search-box, .filter-select, .filter-button {
                min-width: 100%;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 60px 20px 40px;
            }
            
            header h1 {
                font-size: 2rem;
            }
            
            .home-link {
                top: 15px;
                left: 15px;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .application-card {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .application-status {
                margin-top: 20px;
                align-self: flex-end;
            }
            
            .application-details {
                padding-right: 0;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 50px 15px 30px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .filters-container {
                padding: 20px;
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
        <h1>Suivre Mes Candidatures</h1>
        <p>Visualisez l'état de toutes vos candidatures en un seul endroit</p>
    </header>

    <div class="container">
        <div class="filters-container">
            <div class="filters">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher par poste ou entreprise...">
                </div>
                <div class="filter-select">
                    <i class="fas fa-filter"></i>
                    <select id="statusFilter">
                        <option value="all">Tous les statuts</option>
                        <option value="pending">En attente</option>
                        <option value="accepted">Acceptée</option>
                        <option value="rejected">Rejetée</option>
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

        <div class="applications-list">
            <!-- Exemple de candidature -->
            <div class="application-card">
                <div class="application-details">
                    <h3>Développeur Web Senior</h3>
                    <div class="application-meta">
                        <div class="meta-item">
                            <i class="fas fa-building"></i>
                            <span>TechCorp International</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Paris (Remote possible)</span>
                        </div>
                    </div>
                    <div class="application-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>Candidature envoyée le 15/10/2023</span>
                    </div>
                </div>
                <div class="application-status status-pending">En attente</div>
            </div>

            <div class="application-card">
                <div class="application-details">
                    <h3>Chef de Projet Digital</h3>
                    <div class="application-meta">
                        <div class="meta-item">
                            <i class="fas fa-building"></i>
                            <span>Innovate Ltd</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lyon</span>
                        </div>
                    </div>
                    <div class="application-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>Candidature envoyée le 10/10/2023</span>
                    </div>
                </div>
                <div class="application-status status-accepted">Acceptée</div>
            </div>

            <div class="application-card">
                <div class="application-details">
                    <h3>Designer UI/UX</h3>
                    <div class="application-meta">
                        <div class="meta-item">
                            <i class="fas fa-building"></i>
                            <span>CreativeMinds Agency</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Bordeaux</span>
                        </div>
                    </div>
                    <div class="application-date">
                        <i class="far fa-calendar-alt"></i>
                        <span>Candidature envoyée le 05/10/2023</span>
                    </div>
                </div>
                <div class="application-status status-rejected">Rejetée</div>
            </div>
        </div>
    </div>

    <script>
        // Filtres de recherche et de statut
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const statusFilter = document.getElementById('statusFilter').value;
            const applications = document.querySelectorAll('.application-card');

            applications.forEach(application => {
                const title = application.querySelector('h3').textContent.toLowerCase();
                const company = application.querySelector('.meta-item:nth-child(1) span').textContent.toLowerCase();
                const status = application.querySelector('.application-status').classList[1];

                const matchesSearch = title.includes(searchQuery) || company.includes(searchQuery);
                const matchesStatus = statusFilter === 'all' || status === `status-${statusFilter}`;

                if (matchesSearch && matchesStatus) {
                    application.style.display = 'flex';
                } else {
                    application.style.display = 'none';
                }
            });
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