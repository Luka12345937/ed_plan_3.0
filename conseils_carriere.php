<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils Carrière - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page des conseils carrière */
        :root {
            --primary-color: #2563eb;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --dark-color: #1e293b;
            --light-color: #ffffff;
            --hover-color: #1d4ed8;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--dark-color);
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #1e40af);
            color: var(--light-color);
            padding: 60px 20px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            opacity: 0.1;
        }

        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            color: var(--light-color);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1rem;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .tips-section {
            background-color: var(--light-color);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .tips-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .tips-section h2 {
            color: var(--primary-color);
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .tips-section h2 svg {
            margin-right: 12px;
            width: 28px;
            height: 28px;
        }

        .tips-section ul {
            list-style-type: none;
            padding: 0;
        }

        .tips-section ul li {
            background-color: var(--background-color);
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-color);
        }

        .tips-section ul li:hover {
            background-color: #e0e7ff;
            transform: translateX(5px);
        }

        .tips-section ul li svg {
            margin-right: 12px;
            width: 20px;
            height: 20px;
            color: var(--primary-color);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .tips-section ul li strong {
            color: var(--primary-color);
            font-weight: 600;
        }

        .cta-section {
            text-align: center;
            margin: 60px 0 40px;
        }

        .cta-section button {
            background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
            color: white;
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: inline-flex;
            align-items: center;
        }

        .cta-section button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, var(--hover-color), var(--primary-color));
        }

        .cta-section button i {
            margin-left: 8px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
            border-radius: 2px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tips-section {
            animation: fadeIn 0.6s ease forwards;
        }

        .tips-section:nth-child(1) { animation-delay: 0.1s; }
        .tips-section:nth-child(2) { animation-delay: 0.2s; }
        .tips-section:nth-child(3) { animation-delay: 0.3s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .tips-section {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i>
            Retour à l'accueil
        </a>
        <h1>Conseils Carrière</h1>
        <p>Maximisez vos chances de réussite professionnelle avec nos conseils experts</p>
    </header>

    <div class="container">
        <section class="tips-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <line x1="10" y1="9" x2="8" y2="9"></line>
                </svg>
                Optimiser son CV
            </h2>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Personnalisez votre CV :</strong> Adaptez-le à chaque offre d'emploi en mettant en avant les compétences requises.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Soyez concis :</strong> Limitez votre CV à une ou deux pages maximum.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Mettez en avant vos réalisations :</strong> Utilisez des chiffres pour quantifier vos succès.
                </li>
            </ul>
        </section>

        <section class="tips-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Réussir l'Entretien
            </h2>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Préparez-vous :</strong> Recherchez l'entreprise et anticipez les questions courantes.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Soyez ponctuel :</strong> Arrivez 10 minutes avant l'heure prévue.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Montrez votre motivation :</strong> Expliquez pourquoi vous êtes le candidat idéal.
                </li>
            </ul>
        </section>

        <section class="tips-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Réseautage Efficace
            </h2>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Utilisez LinkedIn :</strong> Créez un profil complet et interagissez avec des professionnels.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Participez à des événements :</strong> Assistez à des conférences et des meetups pour élargir votre réseau.
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <strong>Suivez les tendances :</strong> Restez informé des dernières tendances dans votre secteur.
                </li>
            </ul>
        </section>

        <section class="cta-section">
            <button onclick="window.location.href='offres_d_emploi.php'">
                Trouvez votre prochain emploi
                <i class="fas fa-arrow-right"></i>
            </button>
        </section>
    </div>
</body>
</html>