<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entreprises - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Styles spécifiques à la page des entreprises */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --accent-color: #FFC107;
            --dark-color: #343a40;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #0056b3);
            color: white;
            padding: 60px 20px 40px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: inline-flex;
            align-items: center;
            padding: 12px 20px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1em;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .company-filters {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }

        .company-filters input,
        .company-filters select {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            flex: 1;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .company-filters input:focus,
        .company-filters select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
        }

        .company-filters button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .company-filters button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .company-filters button:active {
            transform: translateY(0);
        }

        .company-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .company-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .company-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .company-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .company-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .company-card:hover img {
            transform: scale(1.05);
        }

        .company-card-content {
            padding: 20px;
        }

        .company-card-content h3 {
            margin: 0 0 10px;
            color: var(--primary-color);
            font-size: 1.5em;
        }

        .company-card-content p {
            color: var(--secondary-color);
            margin: 0 0 15px;
            line-height: 1.5;
        }

        .company-card-content .industry {
            display: flex;
            align-items: center;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .company-card-content .industry svg {
            margin-right: 5px;
            width: 16px;
            height: 16px;
        }

        .company-card-content .view-jobs {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background: linear-gradient(135deg, var(--primary-color), #0056b3);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-weight: 600;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .company-card-content .view-jobs:hover {
            background: linear-gradient(135deg, #0069d9, #004a9c);
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .company-card-content .view-jobs i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .company-card-content .view-jobs:hover i {
            transform: translateX(3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .company-filters {
                flex-direction: column;
            }

            .company-grid {
                grid-template-columns: 1fr;
            }
            
            header {
                padding-top: 80px;
            }
            
            .home-link {
                top: 15px;
                left: 50%;
                transform: translateX(-50%);
                width: max-content;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Entreprises Partenaires</h1>
        <p>Découvrez les entreprises qui recrutent sur AIM Global</p>
    </header>

    <div class="container">
        <div class="company-filters">
            <input type="text" id="searchInput" placeholder="Rechercher par nom d'entreprise...">
            <select id="industryFilter">
                <option value="">Tous les secteurs</option>
                <option value="tech">Technologie</option>
                <option value="finance">Finance</option>
                <option value="healthcare">Santé</option>
                <option value="education">Éducation</option>
            </select>
            <button id="filterButton">Filtrer</button>
        </div>

        <div class="company-grid">
            <!-- Exemple d'entreprise -->
            <div class="company-card">
                <img src="assets/company-image-1.jpg" alt="Entreprise">
                <div class="company-card-content">
                    <h3>TechCorp</h3>
                    <p class="industry">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M12 12l-4 4h8l-4-4z"></path>
                        </svg>
                        Technologie
                    </p>
                    <p>Leader dans le développement de solutions logicielles innovantes.</p>
                    <a href="offres_d_emploi.php?company=techcorp" class="view-jobs">Voir les offres <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>

            <!-- Ajouter d'autres entreprises ici -->
        </div>
    </div>

    <script>
        // Filtres de recherche et de secteur
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const industryFilter = document.getElementById('industryFilter').value.toLowerCase();
            const companyCards = document.querySelectorAll('.company-card');

            companyCards.forEach(card => {
                const name = card.querySelector('h3').textContent.toLowerCase();
                const industry = card.querySelector('.industry').textContent.toLowerCase();

                const matchesSearch = name.includes(searchQuery);
                const matchesIndustry = industryFilter === '' || industry.includes(industryFilter);

                if (matchesSearch && matchesIndustry) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>