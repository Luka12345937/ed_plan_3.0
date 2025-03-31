<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Témoignage - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #64748b;
            --background-color: #f8fafc;
            --success-color: #10b981;
            --error-color: #ef4444;
            --light-color: #ffffff;
            --glass-effect: rgba(255, 255, 255, 0.25);
            --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #1e293b;
            background-image: radial-gradient(circle at 10% 20%, rgba(79, 70, 229, 0.05) 0%, rgba(79, 70, 229, 0.05) 90%);
        }

        /* Bouton retour ultra-moderne */
        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--primary-dark);
            text-decoration: none;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 50px;
            background: var(--light-color);
            box-shadow: var(--card-shadow);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 100;
            border: 1px solid rgba(79, 70, 229, 0.1);
        }

        .home-link:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 25px 50px -12px rgba(79, 70, 229, 0.25);
            background: var(--primary-color);
            color: white;
        }

        .home-link i {
            font-size: 1.2em;
            transition: transform 0.5s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        /* Conteneur du formulaire */
        .testimonial-container {
            background-color: var(--light-color);
            padding: 60px;
            border-radius: 24px;
            box-shadow: var(--card-shadow);
            width: 100%;
            max-width: 700px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(79, 70, 229, 0.1);
            animation: fadeInUp 0.6s ease-out;
        }

        .testimonial-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--success-color));
        }

        .testimonial-container h2 {
            margin-bottom: 30px;
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
        }

        .testimonial-container h2 svg {
            margin-right: 15px;
            width: 32px;
            height: 32px;
            color: var(--primary-color);
        }

        /* Groupes de champs */
        .input-group {
            margin-bottom: 25px;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1.05rem;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--background-color);
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            background-color: var(--light-color);
        }

        .input-group input:hover,
        .input-group textarea:hover {
            border-color: #c7d2fe;
        }

        /* Messages d'erreur */
        .error-message {
            color: var(--error-color);
            font-size: 0.9rem;
            margin-top: 8px;
            display: none;
            font-weight: 500;
        }

        /* Message de succès */
        .success-message {
            color: var(--success-color);
            font-size: 1rem;
            margin-top: 25px;
            display: none;
            text-align: center;
            font-weight: 600;
            padding: 15px;
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: 12px;
            animation: fadeIn 0.5s ease-out;
        }

        /* Bouton de soumission */
        button[type="submit"] {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3), 0 2px 4px -1px rgba(79, 70, 229, 0.1);
            position: relative;
            overflow: hidden;
        }

        button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3), 0 4px 6px -2px rgba(79, 70, 229, 0.1);
        }

        button[type="submit"]:active {
            transform: translateY(1px);
        }

        button[type="submit"]::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.3) 0%,
                rgba(255, 255, 255, 0) 60%
            );
            transform: rotate(30deg);
            transition: all 0.7s ease;
        }

        button[type="submit"]:hover::after {
            transform: translateX(100%) rotate(30deg);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

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

        /* Responsive Design */
        @media (max-width: 768px) {
            .testimonial-container {
                padding: 40px;
                margin: 20px;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 12px 20px;
            }
        }

        @media (max-width: 480px) {
            .testimonial-container {
                padding: 30px 20px;
            }
            
            .testimonial-container h2 {
                font-size: 1.5rem;
            }
            
            .input-group input,
            .input-group textarea {
                padding: 14px 16px;
            }
            
            button[type="submit"] {
                padding: 16px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link" aria-label="Retour à l'accueil">
        <i class="fas fa-arrow-left" aria-hidden="true"></i>
        <span>Retour à l'accueil</span>
    </a>

    <div class="testimonial-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
            </svg>
            Ajouter un Témoignage
        </h2>
        <form id="testimonialForm">
            <div class="input-group">
                <label for="name">Nom Complet</label>
                <input type="text" id="name" name="name" required aria-describedby="nameError">
                <span class="error-message" id="nameError">Veuillez entrer votre nom complet</span>
            </div>
            <div class="input-group">
                <label for="role">Poste ou Rôle</label>
                <input type="text" id="role" name="role" required aria-describedby="roleError">
                <span class="error-message" id="roleError">Veuillez spécifier votre poste ou rôle</span>
            </div>
            <div class="input-group">
                <label for="testimonial">Votre Témoignage</label>
                <textarea id="testimonial" name="testimonial" rows="6" required aria-describedby="testimonialError"></textarea>
                <span class="error-message" id="testimonialError">Veuillez partager votre expérience</span>
            </div>
            <button type="submit">
                <i class="fas fa-paper-plane" style="margin-right: 10px;"></i>
                Soumettre le Témoignage
            </button>
        </form>
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle" style="margin-right: 10px;"></i>
            Votre témoignage a été soumis avec succès!
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('testimonialForm');
        const nameInput = document.getElementById('name');
        const roleInput = document.getElementById('role');
        const testimonialInput = document.getElementById('testimonial');
        const successMessage = document.getElementById('successMessage');

        // Fonction de validation générique
        const validateField = (input, errorId) => {
            const errorElement = document.getElementById(errorId);
            if (input.value.trim() === '') {
                errorElement.style.display = 'block';
                input.style.borderColor = 'var(--error-color)';
                return false;
            } else {
                errorElement.style.display = 'none';
                input.style.borderColor = '#e2e8f0';
                return true;
            }
        };

        // Écouteurs d'événements pour la validation en temps réel
        nameInput.addEventListener('input', () => validateField(nameInput, 'nameError'));
        roleInput.addEventListener('input', () => validateField(roleInput, 'roleError'));
        testimonialInput.addEventListener('input', () => validateField(testimonialInput, 'testimonialError'));

        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Valider tous les champs
            const isNameValid = validateField(nameInput, 'nameError');
            const isRoleValid = validateField(roleInput, 'roleError');
            const isTestimonialValid = validateField(testimonialInput, 'testimonialError');
            
            if (isNameValid && isRoleValid && isTestimonialValid) {
                // Afficher le message de succès
                successMessage.style.display = 'block';
                form.style.display = 'none';
                
                // Simuler l'envoi au serveur
                setTimeout(() => {
                    // Ici, vous ajouteriez normalement la logique pour envoyer les données au serveur
                    console.log('Témoignage soumis:', {
                        name: nameInput.value.trim(),
                        role: roleInput.value.trim(),
                        testimonial: testimonialInput.value.trim()
                    });
                    
                    // Redirection après soumission (simulée ici)
                    window.location.href = 'temoignages.php';
                }, 2000);
            }
        });

        // Détection des préférences d'accessibilité
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.querySelector('.testimonial-container').style.animation = 'none';
        }
    </script>
</body>
</html>