<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Candidatures - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page des candidatures */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --accent-color: #FFC107;
            --success-color: #28A745;
            --danger-color: #DC3545;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
        }

        .header-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .header-link svg {
            margin-right: 5px;
            width: 24px;
            height: 24px;
        }

        .header-link:hover {
            color: #0056b3;
        }

        .applications-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .applications-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .applications-header h1 {
            color: var(--primary-color);
            margin: 0;
        }

        .applications-filters {
            display: flex;
            gap: 20px;
        }

        .applications-filters input,
        .applications-filters select {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            flex: 1;
        }

        .applications-filters button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .applications-filters button svg {
            margin-right: 5px;
            width: 20px;
            height: 20px;
        }

        .applications-filters button:hover {
            background-color: #0056b3;
        }

        .applications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .application-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .application-card:hover {
            transform: translateY(-10px);
        }

        .application-card-content {
            padding: 20px;
        }

        .application-card-content h3 {
            margin: 0 0 10px;
            color: var(--primary-color);
        }

        .application-card-content p {
            color: var(--secondary-color);
            margin: 0 0 15px;
        }

        .application-card-content .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
        }

        .status-pending {
            background-color: var(--accent-color);
            color: white;
        }

        .status-accepted {
            background-color: var(--success-color);
            color: white;
        }

        .status-rejected {
            background-color: var(--danger-color);
            color: white;
        }

        .application-card-content .view-details {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .application-card-content .view-details:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .applications-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .applications-filters {
                flex-direction: column;
                width: 100%;
            }

            .applications-filters input,
            .applications-filters select,
            .applications-filters button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="header-link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H5M12 19l-7-7 7-7" />
        </svg>
        Retour à l'accueil
    </a>

    <div class="applications-container">
        <div class="applications-header">
            <h1>Mes Candidatures</h1>
            <div class="applications-filters">
                <input type="text" id="searchInput" placeholder="Rechercher par poste, entreprise...">
                <select id="statusFilter">
                    <option value="">Tous les statuts</option>
                    <option value="pending">En attente</option>
                    <option value="accepted">Acceptée</option>
                    <option value="rejected">Rejetée</option>
                </select>
                <button id="filterButton">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    Filtrer
                </button>
            </div>
        </div>

        <div class="applications-grid">
            <!-- Exemple de candidature -->
            <div class="application-card">
                <div class="application-card-content">
                    <h3>Développeur Web</h3>
                    <p><strong>Entreprise:</strong> TechCorp</p>
                    <p><strong>Date de candidature:</strong> 15/10/2023</p>
                    <span class="status status-pending">En attente</span>
                    <a href="application-details.php" class="view-details">Voir les détails</a>
                </div>
            </div>

            <!-- Ajouter d'autres candidatures ici -->
        </div>
    </div>

    <script>
        // Filtres de recherche et de statut
        document.getElementById('filterButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const statusFilter = document.getElementById('statusFilter').value.toLowerCase();
            const applicationCards = document.querySelectorAll('.application-card');

            applicationCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const company = card.querySelector('p:nth-child(2)').textContent.toLowerCase();
                const status = card.querySelector('.status').classList[1];

                const matchesSearch = title.includes(searchQuery) || company.includes(searchQuery);
                const matchesStatus = statusFilter === '' || status === `status-${statusFilter}`;

                if (matchesSearch && matchesStatus) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
