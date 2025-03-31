<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils pour Postuler - AIM Global</title>
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

        .tips-section {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tips-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(67, 97, 238, 0.2);
        }

        .tips-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
        }

        .tips-section h2 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            font-weight: 700;
        }

        .tips-section h2 i {
            margin-right: 15px;
            font-size: 1.8rem;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
        }

        .tips-list {
            list-style-type: none;
        }

        .tips-list li {
            background: #f8f9ff;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            transition: all 0.3s ease;
        }

        .tips-list li:hover {
            background: white;
            transform: translateX(5px);
        }

        .tips-list li i {
            margin-right: 15px;
            font-size: 1.2rem;
            color: var(--primary-color);
            min-width: 24px;
            margin-top: 3px;
        }

        .tips-list li strong {
            color: var(--primary-color);
            font-weight: 600;
        }

        .cta-section {
            text-align: center;
            margin-top: 50px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(67, 97, 238, 0.3);
            text-decoration: none;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }

        .cta-button:active {
            transform: translateY(0);
        }

        .cta-button i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .cta-button:hover i {
            transform: translateX(5px);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tips-section {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .tips-section:nth-child(2) {
            animation-delay: 0.1s;
        }

        .tips-section:nth-child(3) {
            animation-delay: 0.2s;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            header {
                padding: 80px 20px 60px;
            }
            
            .tips-section {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 70px 15px 50px;
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
            
            .tips-section h2 {
                font-size: 1.3rem;
            }
            
            .tips-section h2 i {
                font-size: 1.5rem;
                width: 40px;
                height: 40px;
            }
            
            .tips-list li {
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 60px 15px 40px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .tips-section {
                padding: 25px 20px;
            }
            
            .tips-section h2 {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .tips-section h2 i {
                margin-bottom: 15px;
                margin-right: 0;
            }
            
            .cta-button {
                width: 100%;
                padding: 16px;
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
        <h1>Conseils pour Postuler avec Succès</h1>
        <p>Maximisez vos chances de décrocher l'emploi de vos rêves avec nos conseils experts</p>
    </header>

    <div class="container">
        <section class="tips-section">
            <h2>
                <i class="fas fa-file-alt"></i>
                Préparer son CV
            </h2>
            <ul class="tips-list">
                <li>
                    <i class="fas fa-lightbulb"></i>
                    <div>
                        <strong>Personnalisez votre CV :</strong> Adaptez-le à chaque offre d'emploi en mettant en avant les compétences requises. Utilisez des mots-clés spécifiques à l'industrie.
                    </div>
                </li>
                <li>
                    <i class="fas fa-ruler-combined"></i>
                    <div>
                        <strong>Soyez concis :</strong> Limitez votre CV à une ou deux pages maximum. Les recruteurs passent en moyenne 7 secondes à scanner un CV.
                    </div>
                </li>
                <li>
                    <i class="fas fa-chart-line"></i>
                    <div>
                        <strong>Mettez en avant vos réalisations :</strong> Utilisez des chiffres pour quantifier vos succès ("Augmenté les ventes de 30% en 6 mois").
                    </div>
                </li>
            </ul>
        </section>

        <section class="tips-section">
            <h2>
                <i class="fas fa-user-tie"></i>
                Réussir l'Entretien
            </h2>
            <ul class="tips-list">
                <li>
                    <i class="fas fa-search"></i>
                    <div>
                        <strong>Préparez-vous :</strong> Recherchez l'entreprise, ses valeurs, ses produits et anticipez les questions courantes. Préparez des questions pertinentes à poser.
                    </div>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Soyez ponctuel :</strong> Arrivez 10-15 minutes avant l'heure prévue. Pour un entretien en ligne, testez votre connexion à l'avance.
                    </div>
                </li>
                <li>
                    <i class="fas fa-fire"></i>
                    <div>
                        <strong>Montrez votre motivation :</strong> Expliquez pourquoi vous êtes le candidat idéal en liant vos compétences aux besoins spécifiques de l'entreprise.
                    </div>
                </li>
            </ul>
        </section>

        <section class="tips-section">
            <h2>
                <i class="fas fa-tasks"></i>
                Suivi de Candidature
            </h2>
            <ul class="tips-list">
                <li>
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Envoyez un email de remerciement :</strong> Dans les 24h suivant l'entretien, personnalisez votre message et rappelez brièvement pourquoi vous êtes motivé.
                    </div>
                </li>
                <li>
                    <i class="fas fa-hourglass-half"></i>
                    <div>
                        <strong>Restez patient :</strong> Le processus de recrutement peut prendre plusieurs semaines. Gardez une trace de vos candidatures.
                    </div>
                </li>
                <li>
                    <i class="fas fa-comment-dots"></i>
                    <div>
                        <strong>Demandez des retours :</strong> Si vous êtes refusé, demandez poliment des conseils pour vous améliorer. Cela peut vous aider pour les prochaines candidatures.
                    </div>
                </li>
            </ul>
        </section>

        <section class="cta-section">
            <a href="offres_d_emploi.php" class="cta-button">
                Trouvez votre prochain emploi
                <i class="fas fa-arrow-right"></i>
            </a>
        </section>
    </div>
</body>
</html>