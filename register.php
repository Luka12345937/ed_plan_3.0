<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - AIM Global</title>
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
            box-shadow: 0 4px 25px rgba(67, 97, 238, 0.25);
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
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 35px rgba(67, 97, 238, 0.4);
            color: var(--light-color);
            background: var(--primary-color);
        }

        .home-btn:hover::before {
            left: 100%;
        }

        .home-btn i {
            margin-right: 10px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-5px) rotate(-10deg);
        }

        /* Conteneur principal */
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 500px;
            padding: 50px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: fadeInUp 0.6s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        /* Titre */
        .register-container h2 {
            margin-bottom: 30px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            position: relative;
            padding-bottom: 15px;
        }

        .register-container h2::after {
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

        .register-container h2 svg {
            margin-right: 15px;
            width: 30px;
            height: 30px;
            stroke-width: 1.5;
        }

        /* Formulaire */
        #registerForm {
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

        /* Bouton de soumission */
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
            transform: translateX(5px) rotate(15deg);
        }

        /* Inscription sociale */
        .social-register {
            margin: 30px 0 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .social-register-title {
            text-align: center;
            margin-bottom: 15px;
            position: relative;
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        .social-register-title::before,
        .social-register-title::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.1));
        }

        .social-register-title::before {
            left: 0;
        }

        .social-register-title::after {
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

        /* Lien de connexion */
        .login-link {
            margin-top: 25px;
            text-align: center;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
        }

        .login-link a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .login-link a:hover {
            color: var(--accent-color);
        }

        .login-link a:hover::after {
            width: 100%;
        }

        /* Indicateur de force du mot de passe */
        .password-strength {
            height: 5px;
            background: #e9ecef;
            border-radius: 5px;
            margin-top: 8px;
            overflow: hidden;
            position: relative;
        }

        .password-strength::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0%;
            background: var(--error-color);
            transition: width 0.3s ease;
        }

        .password-strength.weak::before {
            width: 30%;
            background: var(--error-color);
        }

        .password-strength.medium::before {
            width: 60%;
            background: #ffbe0b;
        }

        .password-strength.strong::before {
            width: 100%;
            background: var(--success-color);
        }

        /* Décoration */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(67, 97, 238, 0.1);
            z-index: -1;
            animation: float 6s ease-in-out infinite;
        }

        .circle-1 {
            width: 250px;
            height: 250px;
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 180px;
            height: 180px;
            bottom: -80px;
            left: -80px;
            animation-delay: 1s;
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

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
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

            .register-container {
                padding: 40px 30px;
                margin-top: 70px;
            }

            .register-container h2 {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 480px) {
            .register-container {
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
        <i class="fas fa-arrow-left"></i> Retour à l'accueil
    </a>

    <!-- Décoration -->
    <div class="decor-circle circle-1"></div>
    <div class="decor-circle circle-2"></div>

    <!-- Contenu principal -->
    <div class="register-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="8.5" cy="7" r="4"></circle>
                <polyline points="17 11 19 5 17 3 15 5"></polyline>
            </svg>
            Créer un compte
        </h2>
        
        <form id="registerForm">
            <div class="input-group">
                <label for="fullName">Nom Complet</label>
                <input type="text" id="fullName" name="fullName" placeholder="Votre nom complet" required>
                <span class="error-message" id="fullNameError">Veuillez entrer votre nom complet</span>
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                <span class="error-message" id="emailError">Veuillez entrer une adresse email valide</span>
            </div>
            
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
                <div class="password-strength" id="passwordStrength"></div>
                <span class="error-message" id="passwordError">Le mot de passe doit contenir au moins 8 caractères, une majuscule et un chiffre</span>
            </div>
            
            <div class="input-group">
                <label for="confirmPassword">Confirmer le mot de passe</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required>
                <span class="error-message" id="confirmPasswordError">Les mots de passe ne correspondent pas</span>
            </div>
            
            <button type="submit">
                <span>S'inscrire</span>
                <i class="fas fa-user-plus"></i>
            </button>
        </form>
        
        <div class="social-register">
            <div class="social-register-title">Ou inscrivez-vous avec</div>
            
            <button class="social-btn google">
                <i class="fab fa-google"></i>
                <span>Google</span>
            </button>
            
            <button class="social-btn facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </button>
        </div>
        
        <div class="login-link">
            Vous avez déjà un compte ? <a href="login.php">Connectez-vous</a>
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('registerForm');
        const fullNameInput = document.getElementById('fullName');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const passwordStrength = document.getElementById('passwordStrength');

        // Indicateur de force du mot de passe
        passwordInput.addEventListener('input', () => {
            const password = passwordInput.value;
            let strength = 0;
            
            // Longueur minimale
            if (password.length >= 8) strength += 1;
            
            // Contient une majuscule
            if (/[A-Z]/.test(password)) strength += 1;
            
            // Contient un chiffre
            if (/\d/.test(password)) strength += 1;
            
            // Mise à jour de l'indicateur
            passwordStrength.className = 'password-strength';
            if (password.length > 0) {
                if (strength === 1) {
                    passwordStrength.classList.add('weak');
                } else if (strength === 2) {
                    passwordStrength.classList.add('medium');
                } else if (strength >= 3) {
                    passwordStrength.classList.add('strong');
                }
            }
        });

        // Validation du nom complet
        fullNameInput.addEventListener('input', () => {
            if (fullNameInput.value.trim() === '') {
                document.getElementById('fullNameError').style.display = 'block';
            } else {
                document.getElementById('fullNameError').style.display = 'none';
            }
        });

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
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
            if (!passwordPattern.test(passwordInput.value)) {
                document.getElementById('passwordError').style.display = 'block';
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }
        });

        // Validation de la confirmation du mot de passe
        confirmPasswordInput.addEventListener('input', () => {
            if (confirmPasswordInput.value !== passwordInput.value) {
                document.getElementById('confirmPasswordError').style.display = 'block';
            } else {
                document.getElementById('confirmPasswordError').style.display = 'none';
            }
        });

        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            // Vérification finale avant soumission
            if (fullNameInput.value.trim() === '') {
                document.getElementById('fullNameError').style.display = 'block';
                isValid = false;
            }

            if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(emailInput.value)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }

            if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(passwordInput.value)) {
                document.getElementById('passwordError').style.display = 'block';
                isValid = false;
            }

            if (confirmPasswordInput.value !== passwordInput.value) {
                document.getElementById('confirmPasswordError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire
            if (isValid) {
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Création en cours...';
                submitBtn.disabled = true;
                
                // Simulation de création de compte
                setTimeout(() => {
                    alert('Inscription réussie !');
                    window.location.href = 'dashboard.php';
                }, 2000);
            }
        });
    </script>
</body>
</html>