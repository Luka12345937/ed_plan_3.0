<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification Sociale - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page d'authentification sociale */
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

        .social-auth-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin-top: 100px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .social-auth-container h2 {
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .social-auth-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .social-auth-buttons button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .social-auth-buttons button svg {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .social-auth-buttons .google {
            background-color: #DB4437;
            color: white;
        }

        .social-auth-buttons .google:hover {
            background-color: #c13528;
            transform: translateY(-2px);
        }

        .social-auth-buttons .facebook {
            background-color: #1877F2;
            color: white;
        }

        .social-auth-buttons .facebook:hover {
            background-color: #1462c4;
            transform: translateY(-2px);
        }

        .social-auth-buttons .linkedin {
            background-color: #0077B5;
            color: white;
        }

        .social-auth-buttons .linkedin:hover {
            background-color: #005f91;
            transform: translateY(-2px);
        }

        .login-link {
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .social-auth-container {
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

    <div class="social-auth-container">
        <h2>Authentification Sociale</h2>
        <div class="social-auth-buttons">
            <button class="google" onclick="window.location.href='google-auth.php'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22.56 12.25c0-.78-.06-1.56-.18-2.32h-10.88v4.61h6.03c-.27 1.49-1.14 2.7-2.4 3.52v2.97h3.83c2.26-2.09 3.56-5.17 3.56-8.82z"></path>
                    <path d="M2.83 9.34v4.64h6.31c-.25 1.46-.97 2.76-2.16 3.68v2.96h3.83c2.27-2.09 3.57-5.17 3.57-8.83 0-.78-.06-1.56-.18-2.32h-10.9z"></path>
                </svg>
                Se connecter avec Google
            </button>
            <button class="facebook" onclick="window.location.href='facebook-auth.php'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                Se connecter avec Facebook
            </button>
            <button class="linkedin" onclick="window.location.href='linkedin-auth.php'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
                Se connecter avec LinkedIn
            </button>
        </div>
        <div class="login-link">
            Vous préférez utiliser votre email? <a href="login.php">Connectez-vous ici</a>
        </div>
    </div>
</body>
</html>
