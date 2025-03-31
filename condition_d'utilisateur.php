<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d'Utilisation - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Styles spécifiques à la page des conditions utilisateur */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --accent-color: #FFC107;
            --dark-color: #343A40;
            --light-color: #FFFFFF;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
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
            padding: 10px 15px;
            background-color: var(--light-color);
            color: var(--primary-color);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .home-link:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1em;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            border-radius: 16px;
        }

        .terms-section {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .terms-section:last-child {
            border-bottom: none;
        }

        .terms-section h2 {
            color: var(--primary-color);
            padding-bottom: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            font-size: 1.5em;
            position: relative;
        }

        .terms-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), rgba(0, 123, 255, 0.3));
            border-radius: 3px;
        }

        .terms-section h2 svg {
            margin-right: 15px;
            width: 28px;
            height: 28px;
        }

        .terms-section p,
        .terms-section ul {
            color: var(--secondary-color);
            font-size: 1.05em;
        }

        .terms-section ul {
            list-style-type: none;
            margin-left: 0;
            padding-left: 20px;
        }

        .terms-section ul li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
        }

        .terms-section ul li::before {
            content: '•';
            color: var(--primary-color);
            font-size: 1.5em;
            position: absolute;
            left: 0;
            top: -3px;
        }

        .terms-section a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .terms-section a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Effets d'animation */
        .terms-section {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .terms-section:hover {
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 80px 20px 30px;
            }
            
            .home-link {
                top: 15px;
                left: 15px;
                padding: 8px 12px;
                font-size: 0.9em;
            }
            
            .container {
                padding: 20px;
                margin: 20px 10px;
                border-radius: 10px;
            }
            
            .terms-section h2 {
                font-size: 1.3em;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-home"></i> Retour à l'accueil
        </a>
        <h1>Conditions d'Utilisation pour les Utilisateurs</h1>
    </header>

    <div class="container">
        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Acceptation des Conditions
            </h2>
            <p>En accédant et en utilisant le site AIM Global, vous acceptez sans réserve les présentes Conditions d'Utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser ce site.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Création de Compte
            </h2>
            <p>Pour accéder à certaines fonctionnalités du site, vous devez créer un compte utilisateur. Vous êtes responsable de la confidentialité de vos identifiants de connexion et de toute activité sur votre compte. En cas de suspicion d'utilisation frauduleuse, vous devez immédiatement nous en informer.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                Utilisation du Site
            </h2>
            <p>Vous vous engagez à utiliser le site AIM Global conformément aux lois et réglementations en vigueur. Il est interdit de :</p>
            <ul>
                <li>Utiliser le site à des fins illégales ou frauduleuses.</li>
                <li>Porter atteinte aux droits d'AIM Global ou de tiers.</li>
                <li>Perturber le fonctionnement du site ou y introduire des virus ou autres codes malveillants.</li>
            </ul>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <line x1="10" y1="9" x2="8" y2="9"></line>
                </svg>
                Candidatures
            </h2>
            <p>En soumettant une candidature, vous garantissez que les informations fournies sont exactes et à jour. AIM Global se réserve le droit de refuser ou de supprimer toute candidature qui ne respecte pas ses critères ou qui est jugée inappropriée.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Propriété Intellectuelle
            </h2>
            <p>Le contenu que vous publiez sur le site (CV, lettres de motivation, etc.) reste votre propriété. Cependant, en publiant ce contenu, vous accordez à AIM Global une licence mondiale, non exclusive, gratuite, pour l'utiliser dans le cadre de ses services.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Limitation de Responsabilité
            </h2>
            <p>AIM Global ne peut être tenue responsable des erreurs ou omissions présentes sur le site, ni des dommages directs ou indirects qui pourraient résulter de l'accès ou de l'utilisation du site.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Modifications des Conditions
            </h2>
            <p>AIM Global se réserve le droit de modifier les présentes Conditions d'Utilisation à tout moment. Les modifications seront publiées sur cette page et entreront en vigueur immédiatement.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Droit Applicable
            </h2>
            <p>Les présentes Conditions d'Utilisation sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
        </section>

        <section class="terms-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 2H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                    <polyline points="22 6 12 13 2 6"></polyline>
                </svg>
                Contact
            </h2>
            <p>Pour toute question concernant ces Conditions d'Utilisation, veuillez nous contacter à l'adresse <a href="mailto:contact@aimglobal.com">contact@aimglobal.com</a> ou par courrier à l'adresse suivante :</p>
            <p>AIM Global<br>123 Rue de l'Exemple<br>75001 Paris, France</p>
        </section>
    </div>
</body>
</html>