<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réseaux Sociaux - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page des réseaux sociaux */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --accent-color: #FFC107;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
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

        .social-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
            margin-top: 100px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .social-container h2 {
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .social-links a svg {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .social-links .facebook {
            background-color: #1877F2;
        }

        .social-links .facebook:hover {
            box-shadow: 0 4px 8px rgba(24, 119, 242, 0.3);
            transform: translateY(-2px);
        }

        .social-links .twitter {
            background-color: #1DA1F2;
        }

        .social-links .twitter:hover {
            box-shadow: 0 4px 8px rgba(29, 161, 242, 0.3);
            transform: translateY(-2px);
        }

        .social-links .linkedin {
            background-color: #0077B5;
        }

        .social-links .linkedin:hover {
            box-shadow: 0 4px 8px rgba(0, 119, 181, 0.3);
            transform: translateY(-2px);
        }

        .social-links .instagram {
            background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D);
        }

        .social-links .instagram:hover {
            box-shadow: 0 4px 8px rgba(193, 53, 132, 0.3);
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .social-container {
                padding: 20px;
                margin-top: 50px;
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

    <div class="social-container">
        <h2>Suivez-Nous sur les Réseaux Sociaux</h2>
        <div class="social-links">
            <a href="https://facebook.com/aimglobal" target="_blank" class="facebook">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                Facebook
            </a>
            <a href="https://twitter.com/aimglobal" target="_blank" class="twitter">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                </svg>
                Twitter
            </a>
            <a href="https://linkedin.com/company/aimglobal" target="_blank" class="linkedin">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
                LinkedIn
            </a>
            <a href="https://instagram.com/aimglobal" target="_blank" class="instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                Instagram
            </a>
        </div>
    </div>
</body>
</html>
