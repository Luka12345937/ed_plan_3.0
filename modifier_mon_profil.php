<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modifiez votre profil AIM Global pour optimiser votre visibilité auprès des recruteurs">
    <meta name="keywords" content="profil, modification, compte, emploi, AIM Global">
    <meta name="theme-color" content="#6366f1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Modifier Mon Profil | AIM Global</title>
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --text-color: #111827;
            --light-gray: #e5e7eb;
            --white: #ffffff;
            --success-color: #10b981;
            --error-color: #ef4444;
            --glass-effect: rgba(255, 255, 255, 0.15);
            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --rounded-sm: 0.25rem;
            --rounded-md: 0.5rem;
            --rounded-lg: 0.75rem;
            --rounded-xl: 1rem;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            background-image: 
                radial-gradient(at 80% 0%, hsla(189, 100%, 56%, 0.1) 0px, transparent 50%),
                radial-gradient(at 0% 50%, hsla(355, 100%, 93%, 0.1) 0px, transparent 50%);
            background-attachment: fixed;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.9), rgba(99, 102, 241, 0.9));
            z-index: -1;
        }

        .back-home {
            position: absolute;
            top: 2rem;
            left: 2rem;
            z-index: 10;
        }

        .back-home a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            padding: 0.75rem 1.25rem;
            border-radius: var(--rounded-xl);
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .back-home a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .profile-container {
            background-color: var(--white);
            padding: 3rem;
            border-radius: var(--rounded-xl);
            box-shadow: var(--shadow-xl);
            width: 100%;
            max-width: 700px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.6s ease-out;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .profile-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0.5rem;
            background: linear-gradient(90deg, var(--primary-color), #818cf8);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .profile-header h2 {
            color: var(--primary-color);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: linear-gradient(to right, var(--primary-color), #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .profile-header p {
            color: var(--secondary-color);
            font-size: 1rem;
        }

        .profile-picture {
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--white);
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
        }

        .profile-picture:hover img {
            transform: scale(1.05);
            box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.4);
        }

        .profile-picture input {
            display: none;
        }

        .profile-picture label {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            color: var(--primary-color);
            cursor: pointer;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: var(--rounded-md);
            transition: var(--transition);
            background-color: rgba(99, 102, 241, 0.1);
        }

        .profile-picture label:hover {
            background-color: rgba(99, 102, 241, 0.2);
            transform: translateY(-2px);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 500;
            color: var(--secondary-color);
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--rounded-lg);
            font-size: 1rem;
            transition: var(--transition);
            background-color: var(--background-color);
            font-family: 'Poppins', sans-serif;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .input-icon {
            position: absolute;
            right: 1.25rem;
            top: 3.1rem;
            color: var(--secondary-color);
            transition: var(--transition);
        }

        .form-control:focus + .input-icon {
            color: var(--primary-color);
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: none;
            font-weight: 500;
        }

        .status-message {
            padding: 1.25rem;
            border-radius: var(--rounded-lg);
            margin-bottom: 1.5rem;
            display: none;
            font-size: 0.95rem;
            font-weight: 500;
            border-left: 4px solid transparent;
        }

        .status-message.success {
            background-color: rgba(16, 185, 129, 0.08);
            color: var(--success-color);
            border-left-color: var(--success-color);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn {
            width: 100%;
            padding: 1.1rem;
            background: linear-gradient(to right, var(--primary-color), #818cf8);
            color: var(--white);
            border: none;
            border-radius: var(--rounded-lg);
            font-size: 1.05rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.75rem;
            margin-top: 1rem;
            box-shadow: 0 4px 6px -1px rgba(99, 102, 241, 0.3), 0 2px 4px -1px rgba(99, 102, 241, 0.1);
        }

        .btn:hover {
            background: linear-gradient(to right, var(--primary-hover), #6366f1);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3), 0 4px 6px -2px rgba(99, 102, 241, 0.1);
        }

        .btn:active {
            transform: translateY(0);
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
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
            
            .profile-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }
            
            .back-home {
                top: 1rem;
                left: 1rem;
            }
        }

        @media (max-width: 480px) {
            .profile-container {
                padding: 1.5rem 1.25rem;
            }
            
            .profile-header h2 {
                font-size: 1.75rem;
            }
            
            .profile-picture img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- Bouton de retour à l'accueil -->
    <div class="back-home">
        <a href="index.php">
            <i class="fas fa-arrow-left"></i>
            Retour à l'accueil
        </a>
    </div>

    <div class="profile-container">
        <div class="profile-header">
            <h2>
                <i class="fas fa-user-edit"></i>
                Modifier Mon Profil
            </h2>
            <p>Optimisez votre visibilité auprès des recruteurs</p>
        </div>
        
        <div id="statusMessage" class="status-message">
            <i class="fas fa-check-circle"></i>
            <span id="statusText"></span>
        </div>
        
        <form id="profileForm">
            <div class="profile-picture floating">
                <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80" alt="Photo de profil" id="profileImage">
                <input type="file" id="imageUpload" accept="image/*">
                <label for="imageUpload">
                    <i class="fas fa-camera"></i>
                    Changer la photo
                </label>
            </div>
            
            <div class="form-grid">
                <div class="form-group">
                    <label for="fullName">Nom complet</label>
                    <input type="text" id="fullName" class="form-control" value="John Doe" required>
                    <i class="fas fa-user input-icon"></i>
                    <div id="fullNameError" class="error-message">Veuillez entrer votre nom complet</div>
                </div>
                
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" class="form-control" value="john.doe@example.com" required>
                    <i class="fas fa-envelope input-icon"></i>
                    <div id="emailError" class="error-message">Veuillez entrer une adresse email valide</div>
                </div>
                
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" class="form-control" value="+33 6 12 34 56 78">
                    <i class="fas fa-phone input-icon"></i>
                    <div id="phoneError" class="error-message">Numéro de téléphone invalide</div>
                </div>
                
                <div class="form-group">
                    <label for="location">Localisation</label>
                    <input type="text" id="location" class="form-control" value="Paris, France">
                    <i class="fas fa-map-marker-alt input-icon"></i>
                </div>
            </div>
            
            <div class="form-group full-width">
                <label for="bio">Bio / Présentation</label>
                <textarea id="bio" class="form-control">Développeur full-stack passionné avec 5 ans d'expérience dans la création d'applications web modernes. Spécialisé en React, Node.js et architectures cloud.</textarea>
                <div id="bioError" class="error-message"></div>
            </div>
            
            <div class="form-group full-width">
                <label for="skills">Compétences (séparées par des virgules)</label>
                <input type="text" id="skills" class="form-control" value="JavaScript, React, Node.js, HTML/CSS, MongoDB">
                <i class="fas fa-code input-icon"></i>
            </div>
            
            <button type="submit" class="btn">
                <i class="fas fa-save"></i> Enregistrer les modifications
            </button>
        </form>
    </div>

    <script>
        // Sélection des éléments du DOM
        const form = document.getElementById('profileForm');
        const statusMessage = document.getElementById('statusMessage');
        const statusText = document.getElementById('statusText');
        
        // Prévisualisation de l'image de profil
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function() {
                document.getElementById('profileImage').src = reader.result;
                
                // Animation de confirmation
                statusText.textContent = 'Photo de profil mise à jour';
                statusMessage.className = 'status-message success';
                statusMessage.style.display = 'flex';
                
                setTimeout(() => {
                    statusMessage.style.display = 'none';
                }, 3000);
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Validation en temps réel
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('input', function() {
                validateField(this);
            });
        });
        
        // Fonction de validation des champs
        function validateField(field) {
            const value = field.value.trim();
            const fieldId = field.id;
            
            if (fieldId === 'fullName') {
                if (value === '') {
                    showError('fullNameError', 'Veuillez entrer votre nom complet');
                } else {
                    hideError('fullNameError');
                }
            }
            
            if (fieldId === 'email') {
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!emailPattern.test(value)) {
                    showError('emailError', 'Veuillez entrer une adresse email valide');
                } else {
                    hideError('emailError');
                }
            }
            
            if (fieldId === 'phone' && value !== '') {
                const phonePattern = /^\+?\d{1,3}[\s.-]?\d{2,4}[\s.-]?\d{2,4}[\s.-]?\d{2,4}$/;
                if (!phonePattern.test(value)) {
                    showError('phoneError', 'Numéro de téléphone invalide');
                } else {
                    hideError('phoneError');
                }
            }
        }
        
        // Fonctions d'affichage des messages
        function showError(elementId, message) {
            const element = document.getElementById(elementId);
            element.textContent = message;
            element.style.display = 'block';
        }
        
        function hideError(elementId) {
            document.getElementById(elementId).style.display = 'none';
        }
        
        // Soumission du formulaire
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation finale
            let isValid = true;
            const formData = {};
            
            document.querySelectorAll('.form-control').forEach(input => {
                validateField(input);
                if (input.id === 'fullName' && input.value.trim() === '') isValid = false;
                if (input.id === 'email' && !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(input.value)) isValid = false;
                if (input.id === 'phone' && input.value.trim() !== '' && !/^\+?\d{1,3}[\s.-]?\d{2,4}[\s.-]?\d{2,4}[\s.-]?\d{2,4}$/.test(input.value)) isValid = false;
                
                formData[input.id] = input.value;
            });
            
            // Si valide, soumettre le formulaire
            if (isValid) {
                // Simulation d'envoi
                statusText.textContent = 'Enregistrement des modifications...';
                statusMessage.className = 'status-message';
                statusMessage.style.display = 'flex';
                
                setTimeout(() => {
                    statusText.textContent = 'Profil mis à jour avec succès !';
                    statusMessage.className = 'status-message success';
                    console.log('Données du formulaire:', formData);
                    
                    // Reset après 3 secondes
                    setTimeout(() => {
                        statusMessage.style.display = 'none';
                    }, 3000);
                }, 1500);
            } else {
                statusText.textContent = 'Veuillez corriger les erreurs dans le formulaire';
                statusMessage.className = 'status-message error';
                statusMessage.style.display = 'flex';
            }
        });
    </script>
</body>
</html>