<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Offre - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --success-color: #10b981;
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
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 10;
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1rem;
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
            margin: -40px auto 40px;
            padding: 0;
            background-color: white;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .job-header {
            background-color: #f3f4f6;
            padding: 30px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }

        .company-logo {
            width: 100px;
            height: 100px;
            border-radius: 12px;
            object-fit: cover;
            margin-right: 30px;
            border: 3px solid white;
            box-shadow: var(--card-shadow);
        }

        .job-title {
            flex: 1;
        }

        .job-title h2 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 5px;
        }

        .job-title .company-name {
            font-size: 1.2rem;
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .job-title .company-name i {
            margin-right: 10px;
        }

        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: var(--secondary-color);
        }

        .meta-item i {
            margin-right: 8px;
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .salary-tag {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-left: 15px;
        }

        .job-details {
            display: flex;
            padding: 40px;
            gap: 40px;
        }

        .job-info {
            flex: 1;
            position: relative;
        }

        .job-info::after {
            content: '';
            position: absolute;
            top: 0;
            right: -20px;
            height: 100%;
            width: 1px;
            background-color: #e5e7eb;
        }

        .job-description {
            flex: 2;
        }

        .section-title {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 12px;
        }

        .job-description p {
            color: var(--secondary-color);
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .job-requirements ul,
        .job-benefits ul {
            color: var(--secondary-color);
            margin-left: 25px;
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .job-requirements li,
        .job-benefits li {
            margin-bottom: 10px;
            position: relative;
        }

        .job-requirements li::before,
        .job-benefits li::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 10px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: var(--primary-color);
        }

        .job-benefits li::before {
            background-color: var(--success-color);
        }

        .apply-section {
            background-color: #f3f4f6;
            padding: 30px 40px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 40px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3), 0 2px 4px -1px rgba(79, 70, 229, 0.1);
        }

        .apply-button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3), 0 4px 6px -2px rgba(79, 70, 229, 0.1);
        }

        .apply-button i {
            margin-right: 12px;
            font-size: 1.2rem;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-left: 15px;
        }

        .badge-new {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--error-color);
        }

        .badge-featured {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--accent-color);
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container {
            animation: fadeIn 0.6s ease-out forwards;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .job-details {
                flex-direction: column;
                gap: 30px;
            }

            .job-info::after {
                display: none;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 100px 20px 80px;
            }

            .job-header {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }

            .company-logo {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .job-meta {
                justify-content: center;
            }

            .job-details {
                padding: 30px 20px;
            }

            .apply-section {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2rem;
            }

            .job-title h2 {
                font-size: 1.5rem;
            }

            .job-meta {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .section-title {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Détails de l'Offre d'Emploi</h1>
        <p>Découvrez cette opportunité exceptionnelle et postulez dès maintenant</p>
    </header>

    <div class="container">
        <div class="job-header">
            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="TechCorp" class="company-logo">
            <div class="job-title">
                <h2>Développeur Full Stack <span class="badge badge-new">NOUVEAU</span></h2>
                <div class="company-name">
                    <i class="fas fa-building"></i> TechCorp Solutions
                </div>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i> Paris, France
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i> Temps Plein
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-briefcase"></i> 3-5 ans d'expérience
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i> Publiée le 15/10/2023
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-euro-sign"></i> Salaire: €55k - €75k
                        <span class="salary-tag">Compétitif</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-details">
            <div class="job-info">
                <h3 class="section-title">
                    <i class="fas fa-info-circle"></i> À propos de l'offre
                </h3>
                <p><strong>Type de contrat :</strong> CDI</p>
                <p><strong>Secteur :</strong> Technologie / SaaS</p>
                <p><strong>Télétravail :</strong> Possible 2 jours/semaine</p>
                <p><strong>Avantages :</strong> Mutuelle, Tickets-Restaurant, CE</p>

                <h3 class="section-title" style="margin-top: 40px;">
                    <i class="fas fa-users"></i> L'équipe
                </h3>
                <p>Vous rejoindrez une équipe dynamique de 15 développeurs expérimentés, répartis en 3 squads agiles. Notre culture d'entreprise favorise l'apprentissage continu et l'innovation.</p>
            </div>

            <div class="job-description">
                <h3 class="section-title">
                    <i class="fas fa-file-alt"></i> Description du poste
                </h3>
                <p>Nous recherchons un développeur Full Stack talentueux pour rejoindre notre équipe technique. Vous serez responsable du développement et de la maintenance de nos applications web innovantes, en collaborant étroitement avec les équipes produit et design.</p>
                <p>Votre rôle consistera à concevoir des solutions techniques robustes, implémenter de nouvelles fonctionnalités et optimiser les performances de nos plateformes. Vous participerez également aux revues de code et aux sessions de pair programming.</p>

                <div class="job-requirements">
                    <h3 class="section-title">
                        <i class="fas fa-list-check"></i> Compétences requises
                    </h3>
                    <ul>
                        <li>3+ ans d'expérience en développement Full Stack</li>
                        <li>Maîtrise de JavaScript (React/Node.js) et PHP (Symfony)</li>
                        <li>Expérience avec les bases de données relationnelles (PostgreSQL)</li>
                        <li>Connaissance des principes REST et des API</li>
                        <li>Pratique des méthodologies Agile/Scrum</li>
                        <li>Capacité à résoudre des problèmes complexes</li>
                    </ul>
                </div>

                <div class="job-benefits">
                    <h3 class="section-title">
                        <i class="fas fa-gift"></i> Avantages
                    </h3>
                    <ul>
                        <li>Salaire compétitif avec bonus annuel</li>
                        <li>Horaires flexibles et télétravail partiel</li>
                        <li>Budget formation annuel de €2000</li>
                        <li>Locaux modernes en centre-ville</li>
                        <li>Équipement high-tech fourni</li>
                        <li>Événements d'équipe réguliers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="apply-section">
            <a href="postuler_maintenant.php" class="apply-button">
                <i class="fas fa-paper-plane"></i> Postuler à cette offre
            </a>
        </div>
    </div>
</body>
</html>