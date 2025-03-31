<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page de contact */
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --accent-color: #f59e0b;
            --error-color: #ef4444;
            --success-color: #10b981;
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #1e40af);
            color: white;
            padding: 60px 20px 40px;
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
            opacity: 0.5;
        }

        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            transition: var(--transition);
            z-index: 10;
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1rem;
        }

        h1 {
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
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            gap: 30px;
        }

        .contact-info {
            flex: 1;
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .contact-info h2 {
            color: var(--primary-color);
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }

        .contact-info h2 i {
            margin-right: 12px;
            font-size: 1.5rem;
        }

        .contact-info p {
            color: var(--secondary-color);
            margin: 16px 0;
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .contact-info p:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .contact-info p i {
            margin-right: 12px;
            color: var(--primary-color);
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        .contact-form {
            flex: 2;
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }

        .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .contact-form h2 {
            color: var(--primary-color);
            margin-bottom: 24px;
            font-size: 1.5rem;
        }

        .input-group {
            margin-bottom: 24px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
            background-color: #f9fafb;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .input-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 8px;
            display: none;
        }

        .success-message {
            color: var(--success-color);
            font-size: 1rem;
            margin-top: 20px;
            padding: 12px;
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: 8px;
            text-align: center;
            display: none;
        }

        button {
            width: 100%;
            padding: 16px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        button i {
            margin-right: 10px;
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-info, .contact-form {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .contact-form {
            animation-delay: 0.2s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                gap: 20px;
            }

            header {
                padding: 80px 20px 40px;
            }

            h1 {
                font-size: 2rem;
            }

            .contact-info,
            .contact-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Contactez-Nous</h1>
        <p>Nous sommes là pour répondre à vos questions et vous aider</p>
    </header>

    <div class="container">
        <div class="contact-info">
            <h2>
                <i class="fas fa-info-circle"></i>
                Informations de Contact
            </h2>
            <p>
                <i class="fas fa-map-marker-alt"></i>
                123 Rue de l'Exemple, 75001 Paris, France
            </p>
            <p>
                <i class="fas fa-phone-alt"></i>
                +33 1 23 45 67 89
            </p>
            <p>
                <i class="fas fa-envelope"></i>
                contact@aimglobal.com
            </p>
            <p>
                <i class="fas fa-clock"></i>
                Lundi-Vendredi: 9h00-18h00
            </p>
            <div style="margin-top: 30px;">
                <h3 style="font-size: 1.2rem; color: var(--primary-color); margin-bottom: 15px; display: flex; align-items: center;">
                    <i class="fas fa-share-alt" style="margin-right: 10px;"></i>
                    Nous suivre
                </h3>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="color: var(--secondary-color); font-size: 1.5rem; transition: var(--transition);">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" style="color: var(--secondary-color); font-size: 1.5rem; transition: var(--transition);">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" style="color: var(--secondary-color); font-size: 1.5rem; transition: var(--transition);">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" style="color: var(--secondary-color); font-size: 1.5rem; transition: var(--transition);">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h2><i class="fas fa-paper-plane"></i> Envoyez-Nous un Message</h2>
            <form id="contactForm">
                <div class="input-group">
                    <label for="name">Nom Complet</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom complet" required>
                    <span class="error-message" id="nameError">Nom complet requis</span>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="votre@email.com" required>
                    <span class="error-message" id="emailError">Email invalide</span>
                </div>
                <div class="input-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Objet de votre message" required>
                    <span class="error-message" id="subjectError">Sujet requis</span>
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" placeholder="Votre message..." required></textarea>
                    <span class="error-message" id="messageError">Message requis</span>
                </div>
                <button type="submit">
                    <i class="fas fa-paper-plane"></i> Envoyer le Message
                </button>
            </form>
            <div class="success-message" id="successMessage">
                <i class="fas fa-check-circle"></i> Votre message a été envoyé avec succès! Nous vous répondrons dans les plus brefs délais.
            </div>
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('contactForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const subjectInput = document.getElementById('subject');
        const messageInput = document.getElementById('message');

        // Validation du nom complet
        nameInput.addEventListener('input', () => {
            if (nameInput.value.trim() === '') {
                document.getElementById('nameError').style.display = 'block';
            } else {
                document.getElementById('nameError').style.display = 'none';
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

        // Validation du sujet
        subjectInput.addEventListener('input', () => {
            if (subjectInput.value.trim() === '') {
                document.getElementById('subjectError').style.display = 'block';
            } else {
                document.getElementById('subjectError').style.display = 'none';
            }
        });

        // Validation du message
        messageInput.addEventListener('input', () => {
            if (messageInput.value.trim() === '') {
                document.getElementById('messageError').style.display = 'block';
            } else {
                document.getElementById('messageError').style.display = 'none';
            }
        });

        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            // Vérification finale avant soumission
            if (nameInput.value.trim() === '') {
                document.getElementById('nameError').style.display = 'block';
                isValid = false;
            }

            if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(emailInput.value)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }

            if (subjectInput.value.trim() === '') {
                document.getElementById('subjectError').style.display = 'block';
                isValid = false;
            }

            if (messageInput.value.trim() === '') {
                document.getElementById('messageError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire (ici, on simule une redirection)
            if (isValid) {
                document.getElementById('successMessage').style.display = 'block';
                form.reset();
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
                // Ajouter ici la logique pour envoyer les données au serveur
            }
        });

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.contact-info, .contact-form');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
            });
        });
    </script>
</body>
</html>