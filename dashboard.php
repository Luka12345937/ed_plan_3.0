<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --error-color: #ef4444;
            --success-color: #10b981;
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --sidebar-shadow: 4px 0 6px -1px rgba(0, 0, 0, 0.1);
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

        .dashboard-container {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        /* Sidebar stylisée */
        .sidebar {
            width: 280px;
            background: linear-gradient(160deg, var(--primary-color), #3730a3);
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            z-index: 10;
            box-shadow: var(--sidebar-shadow);
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
            opacity: 0.3;
        }

        .sidebar-header {
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .sidebar-header h2 {
            font-size: 1.8rem;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .sidebar-header h2 i {
            margin-right: 12px;
            color: var(--accent-color);
        }

        .sidebar-header p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .sidebar nav ul {
            list-style: none;
            margin-top: 30px;
        }

        .sidebar nav ul li {
            margin-bottom: 12px;
            position: relative;
        }

        .sidebar nav ul li a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            transition: var(--transition);
            position: relative;
            z-index: 1;
        }

        .sidebar nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(5px);
        }

        .sidebar nav ul li a.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            font-weight: 500;
        }

        .sidebar nav ul li a i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }

        .sidebar nav ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: var(--accent-color);
            border-radius: 0 3px 3px 0;
            opacity: 0;
            transition: var(--transition);
        }

        .sidebar nav ul li a:hover::after,
        .sidebar nav ul li a.active::after {
            opacity: 1;
        }

        .user-info {
            margin-top: auto;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .user-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid rgba(255, 255, 255, 0.2);
            transition: var(--transition);
        }

        .user-info img:hover {
            transform: scale(1.05);
            border-color: var(--accent-color);
        }

        .user-info p {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-info small {
            opacity: 0.7;
            font-size: 0.85rem;
        }

        /* Contenu principal */
        .main-content {
            flex: 1;
            padding: 30px;
            background-color: var(--background-color);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2rem;
            color: #111827;
            position: relative;
            display: inline-block;
        }

        .header h1::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }

        .home-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 8px;
            background-color: rgba(79, 70, 229, 0.1);
            transition: var(--transition);
        }

        .home-link:hover {
            background-color: rgba(79, 70, 229, 0.2);
            transform: translateY(-2px);
        }

        .home-link i {
            margin-right: 8px;
        }

        /* Cartes de statistiques */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary-color);
        }

        .stat-card h3 {
            color: var(--secondary-color);
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .stat-card h3 i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .stat-card p {
            font-size: 2rem;
            font-weight: 700;
            color: #111827;
            margin: 0;
        }

        .stat-card .trend {
            display: flex;
            align-items: center;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .stat-card .trend.up {
            color: var(--success-color);
        }

        .stat-card .trend.down {
            color: var(--error-color);
        }

        .stat-card .trend i {
            margin-right: 5px;
        }

        /* Graphiques */
        .charts-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .chart-card {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .chart-card h3 {
            color: #111827;
            font-size: 1.2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .chart-card h3 i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .stat-card, .chart-card {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .stat-card:nth-child(2) { animation-delay: 0.1s; }
        .stat-card:nth-child(3) { animation-delay: 0.2s; }
        .stat-card:nth-child(4) { animation-delay: 0.3s; }
        .chart-card:nth-child(1) { animation-delay: 0.4s; }
        .chart-card:nth-child(2) { animation-delay: 0.5s; }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 20px;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .sidebar-header {
                width: 100%;
                margin-bottom: 20px;
            }

            .sidebar nav {
                width: 100%;
            }

            .sidebar nav ul {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 0;
            }

            .sidebar nav ul li {
                margin-bottom: 0;
                flex: 1;
                min-width: 120px;
            }

            .sidebar nav ul li a {
                justify-content: center;
                padding: 10px;
            }

            .sidebar nav ul li a i {
                margin-right: 0;
                margin-bottom: 5px;
                display: block;
            }

            .sidebar nav ul li a span {
                display: none;
            }

            .user-info {
                display: none;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .sidebar nav ul li {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2><i class="fas fa-globe"></i> AIM Global</h2>
                <p>Tableau de bord administrateur</p>
            </div>
            
            <nav>
                <ul>
                    <li>
                        <a href="#dashboard" class="active">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Tableau de Bord</span>
                        </a>
                    </li>
                    <li>
                        <a href="#profile">
                            <i class="fas fa-user"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#offres">
                            <i class="fas fa-briefcase"></i>
                            <span>Offres d'emploi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#candidats">
                            <i class="fas fa-users"></i>
                            <span>Candidats</span>
                        </a>
                    </li>
                    <li>
                        <a href="#entretiens">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Entretiens</span>
                        </a>
                    </li>
                    <li>
                        <a href="#settings">
                            <i class="fas fa-cog"></i>
                            <span>Paramètres</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="user-info">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Photo de profil">
                <p>Jean Dupont</p>
                <small>Administrateur</small>
            </div>
        </div>

        <div class="main-content">
            <div class="header">
                <h1>Tableau de Bord</h1>
                <a href="index.php" class="home-link">
                    <i class="fas fa-home"></i> Retour à l'accueil
                </a>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <h3><i class="fas fa-briefcase"></i> Offres Publiées</h3>
                    <p>45</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 12% ce mois
                    </div>
                </div>
                <div class="stat-card">
                    <h3><i class="fas fa-file-alt"></i> Candidatures Reçues</h3>
                    <p>120</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 24% ce mois
                    </div>
                </div>
                <div class="stat-card">
                    <h3><i class="fas fa-calendar-check"></i> Entretiens Planifiés</h3>
                    <p>15</p>
                    <div class="trend down">
                        <i class="fas fa-arrow-down"></i> 5% ce mois
                    </div>
                </div>
                <div class="stat-card">
                    <h3><i class="fas fa-user-check"></i> Emplois Pourvus</h3>
                    <p>8</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 33% ce mois
                    </div>
                </div>
            </div>

            <div class="charts-grid">
                <div class="chart-card">
                    <h3><i class="fas fa-chart-line"></i> Candidatures par Mois</h3>
                    <div class="chart-container">
                        <canvas id="applicationsChart"></canvas>
                    </div>
                </div>
                <div class="chart-card">
                    <h3><i class="fas fa-chart-pie"></i> Offres par Catégorie</h3>
                    <div class="chart-container">
                        <canvas id="jobsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Données pour les graphiques
        const applicationsData = {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
            datasets: [{
                label: 'Candidatures',
                data: [12, 19, 23, 15, 22, 13, 20],
                backgroundColor: 'rgba(79, 70, 229, 0.1)',
                borderColor: '#4f46e5',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                pointBackgroundColor: '#4f46e5',
                pointBorderColor: '#fff',
                pointHoverRadius: 6,
                pointHoverBorderWidth: 2
            }]
        };

        const jobsData = {
            labels: ['Développement', 'Marketing', 'Design', 'Ventes', 'RH'],
            datasets: [{
                label: 'Offres',
                data: [30, 15, 20, 10, 5],
                backgroundColor: [
                    '#4f46e5',
                    '#10b981',
                    '#f59e0b',
                    '#ef4444',
                    '#6b7280'
                ],
                borderWidth: 0,
                hoverOffset: 10
            }]
        };

        // Configuration des graphiques
        const applicationsChart = new Chart(document.getElementById('applicationsChart'), {
            type: 'line',
            data: applicationsData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#1f2937',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 8,
                        displayColors: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        const jobsChart = new Chart(document.getElementById('jobsChart'), {
            type: 'doughnut',
            data: jobsData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: '#1f2937',
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 12
                        },
                        padding: 12,
                        cornerRadius: 8
                    }
                },
                cutout: '70%'
            }
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.stat-card, .chart-card');
            elements.forEach(el => {
                el.style.opacity = '0';
            });
        });
    </script>
</body>
</html>