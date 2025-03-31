<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter l'Offre - AIM Global</title>
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

        .container {
            max-width: 1200px;
            margin: -40px auto 60px;
            padding: 40px;
            background: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            position: relative;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .job-details {
            display: flex;
            gap: 40px;
            margin-bottom: 30px;
        }

        .job-info {
            flex: 1;
            position: relative;
            padding-right: 20px;
        }

        .job-info::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, transparent, var(--primary-color), transparent);
        }

        .job-info h2 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .job-meta {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 30px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: var(--text-color);
            font-size: 1rem;
        }

        .meta-item i {
            margin-right: 12px;
            font-size: 1.2rem;
            color: var(--primary-color);
            width: 24px;
            text-align: center;
        }

        .job-description {
            flex: 2;
        }

        .job-description h3 {
            font-size: 1.4rem;
            color: var(--primary-color);
            margin-top: 0;
            margin-bottom: 20px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .job-description h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }

        .job-description p {
            color: var(--text-color);
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .job-description ul {
            margin-bottom: 25px;
            padding-left: 20px;
        }

        .job-description li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            line-height: 1.6;
        }

        .job-description li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 10px;
            height: 10px;
            background-color: var(--primary-color);
            border-radius: 50%;
        }

        .apply-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(67, 97, 238, 0.3);
            margin-top: 20px;
        }

        .apply-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }

        .apply-button i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .apply-button:hover i {
            transform: translateX(5px);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .job-details {
                flex-direction: column;
                gap: 30px;
            }
            
            .job-info {
                padding-right: 0;
                padding-bottom: 30px;
            }
            
            .job-info::after {
                top: auto;
                bottom: 0;
                right: auto;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
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
                padding: 30px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 70px 15px 50px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 25px 20px;
            }
            
            .job-info h2 {
                font-size: 1.5rem;
            }
            
            .job-description h3 {
                font-size: 1.2rem;
            }
            
            .apply-button {
                width: 100%;
                padding: 14px;
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
        <h1>Consulter l'Offre d'Emploi</h1>
    </header>

    <div class="container">
        <div class="job-details">
            <div class="job-info">
                <h2>Développeur Full Stack</h2>
                <div class="job-meta">
                    <div class="meta-item">
                        <i class="fas fa-building"></i>
                        <span>TechCorp International</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Paris, France (Hybride)</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>Temps Plein</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Publiée le 15/10/2023</span>
                    </div>
                </div>
                <a href="postuler_à_une_offre.php" class="apply-button">
                    Postuler maintenant
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="job-description">
                <h3>Description de l'Offre</h3>
                <p>Nous recherchons un développeur Full Stack expérimenté pour rejoindre notre équipe dynamique. Vous serez responsable du développement et de la maintenance de nos applications web innovantes, en collaborant avec une équipe multidisciplinaire de designers, développeurs et chefs de produit.</p>
                
                <h3>Responsabilités</h3>
                <ul>
                    <li>Développer et maintenir des applications web performantes et évolutives</li>
                    <li>Collaborer avec les équipes produit et design pour créer des expériences utilisateur exceptionnelles</li>
                    <li>Participer à l'architecture technique et aux décisions de conception</li>
                    <li>Résoudre des problèmes complexes et optimiser les performances</li>
                    <li>Mettre en œuvre les meilleures pratiques de développement et de sécurité</li>
                </ul>
                
                <h3>Compétences Requises</h3>
                <ul>
                    <li>3+ ans d'expérience en développement Full Stack</li>
                    <li>Maîtrise de JavaScript (React/Node.js) et Python/Django</li>
                    <li>Expérience avec les bases de données relationnelles et NoSQL</li>
                    <li>Connaissance des architectures microservices et API REST</li>
                    <li>Expérience avec les outils DevOps et CI/CD</li>
                    <li>Capacité à travailler en équipe agile</li>
                </ul>
                
                <h3>Avantages</h3>
                <ul>
                    <li>Salaire compétitif + bonus de performance</li>
                    <li>Télétravail flexible (3 jours/semaine)</li>
                    <li>Environnement de travail moderne et stimulant</li>
                    <li>Budget formation annuel</li>
                    <li>Mutuelle santé premium</li>
                    <li>Tickets restaurant</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>