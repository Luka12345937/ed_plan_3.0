<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-hover: #3a56d4;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --success-color: #4cc9f0;
            --error-color: #f72585;
            --light-color: #ffffff;
            --dark-color: #212529;
            --accent-color: #7209b7;
            --text-color: #2b2d42;
            --google-red: #DB4437;
            --facebook-blue: #1877F2;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Bouton retour ultra moderne */
        .home-btn {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            color: var(--primary-color);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(67, 97, 238, 0.25);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 10;
            border: 2px solid rgba(67, 97, 238, 0.2);
            overflow: hidden;
        }

        .home-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(67, 97, 238, 0.1), transparent);
            transition: 0.5s;
        }

        .home-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(67, 97, 238, 0.35);
            color: var(--light-color);
            background: var(--primary-color);
        }

        .home-btn:hover::before {
            left: 100%;
        }

        .home-btn i {
            margin-right: 10px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-5px);
        }

        /* Conteneur principal */
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            width: 100%;
            max-width: 450px;
            padding: 50px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: fadeInUp 0.6s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        /* Titre */
        .login-container h2 {
            margin-bottom: 30px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }

        .login-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .login-container h2 svg {
            margin-right: 15px;
            width: 30px;
            height: 30px;
            stroke-width: 1.5;
        }

        /* Formulaire */
        #loginForm {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .input-group {
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--text-color);
            font-size: 0.95rem;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: rgba(248, 249, 250, 0.7);
        }

        .input-group input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 4px rgba(67, 97, 238, 0.15);
            background-color: var(--light-color);
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 8px;
            display: none;
            font-weight: 500;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin: -15px 0 10px;
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        /* Bouton de connexion */
        button[type="submit"] {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        button[type="submit"]::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }

        button[type="submit"]:hover::before {
            left: 100%;
        }

        button[type="submit"] i {
            transition: transform 0.3s ease;
        }

        button[type="submit"]:hover i {
            transform: translateX(5px);
        }

        /* Connexion sociale */
        .social-login {
            margin: 30px 0 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .social-login-title {
            text-align: center;
            margin-bottom: 15px;
            position: relative;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        .social-login-title::before,
        .social-login-title::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.1));
        }

        .social-login-title::before {
            left: 0;
        }

        .social-login-title::after {
            right: 0;
        }

        .social-btn {
            padding: 14px;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            border: none;
            color: white;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .social-btn.google {
            background-color: var(--google-red);
        }

        .social-btn.google:hover {
            background-color: #c13528;
        }

        .social-btn.facebook {
            background-color: var(--facebook-blue);
        }

        .social-btn.facebook:hover {
            background-color: #1462c4;
        }

        .social-btn i {
            font-size: 1.2rem;
        }

        /* Lien d'inscription */
        .signup-link {
            margin-top: 25px;
            text-align: center;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .signup-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .signup-link a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        /* Décoration */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(67, 97, 238, 0.1);
            z-index: -1;
        }

        .circle-1 {
            width: 200px;
            height: 200px;
            top: -80px;
            right: -80px;
        }

        .circle-2 {
            width: 150px;
            height: 150px;
            bottom: -60px;
            left: -60px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .home-btn {
                top: 20px;
                left: 20px;
                padding: 10px 18px;
                font-size: 0.9rem;
            }

            .login-container {
                padding: 40px 30px;
                margin-top: 70px;
            }

            .login-container h2 {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 35px 25px;
            }

            .input-group input {
                padding: 14px 18px;
            }

            button[type="submit"],
            .social-btn {
                padding: 14px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Bouton retour accueil -->
    <a href="index.php" class="home-btn">
        <i class="fas fa-arrow-left"></i> Retour
    </a>

    <!-- Décoration -->
    <div class="decor-circle circle-1"></div>
    <div class="decor-circle circle-2"></div>

    <!-- Contenu principal -->
    <div class="login-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                <polyline points="10 17 15 12 10 7"></polyline>
                <line x1="15" y1="12" x2="3" y2="12"></line>
            </svg>
            Connexion
        </h2>
        
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                <span class="error-message" id="emailError">Veuillez entrer une adresse email valide</span>
            </div>
            
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
                <span class="error-message" id="passwordError">Veuillez entrer votre mot de passe</span>
            </div>
            
            <a href="reinitialiser_mon_mot_de_passe.php" class="forgot-password">Mot de passe oublié ?</a>
            
            <button type="submit">
                <span>Se connecter</span>
                <i class="fas fa-sign-in-alt"></i>
            </button>
        </form>
        
        <div class="social-login">
            <div class="social-login-title">Ou connectez-vous avec</div>
            
            <button class="social-btn google">
                <i class="fab fa-google"></i>
                <span>Google</span>
            </button>
            
            <button class="social-btn facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </button>
        </div>
        
        <div class="signup-link">
            Vous n'avez pas de compte ? <a href="register.php">Inscrivez-vous</a>
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');

        // Validation de l'email
        emailInput.addEventListener('input', () => {
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(emailInput.value)) {
                document.getElementById('emailError').style.display = 'block';
            } else {
                document.getElementById('emailError').style.display = 'none';
            }
        });

        // Validation du mot de passe
        passwordInput.addEventListener('input', () => {
            if (passwordInput.value.trim() === '') {
                document.getElementById('passwordError').style.display = 'block';
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }
        });

        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            // Vérification finale avant soumission
            if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(emailInput.value)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }

            if (passwordInput.value.trim() === '') {
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire
            if (isValid) {
                // Simulation de connexion réussie
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Connexion...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    alert('Connexion réussie !');
                    window.location.href = 'dashboard.php';
                }, 1500);
            }
        });
    </script>
</body>
</html>