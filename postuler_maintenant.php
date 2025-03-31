<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler Maintenant - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables de couleur */
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
        }

        /* Styles de base */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        /* Bouton retour */
        .home-btn {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            background: var(--light-color);
            color: var(--primary-color);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 10;
            border: 2px solid transparent;
        }

        .home-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
            background: var(--primary-color);
            color: var(--light-color);
            border-color: var(--light-color);
        }

        .home-btn i {
            margin-right: 8px;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-3px);
        }

        /* Conteneur principal */
        .apply-container {
            background: var(--light-color);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 650px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            animation: fadeInUp 0.6s ease-out;
        }

        .apply-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        /* Titre */
        .apply-container h2 {
            margin-bottom: 30px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            position: relative;
            padding-bottom: 15px;
        }

        .apply-container h2::after {
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

        .apply-container h2 svg {
            margin-right: 15px;
            width: 30px;
            height: 30px;
            stroke-width: 1.5;
        }

        /* Formulaire */
        #applyForm {
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

        .input-group input,
        .input-group textarea,
        .input-group select,
        .input-group .file-input-wrapper {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .input-group input:focus,
        .input-group textarea:focus,
        .input-group select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            background-color: var(--light-color);
        }

        .input-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        /* Style personnalisé pour le champ fichier */
        .file-input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-input-text {
            flex: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--secondary-color);
        }

        .file-input-btn {
            background: var(--primary-color);
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            font-size: 0.9rem;
            margin-left: 10px;
            transition: background 0.3s ease;
        }

        .file-input-wrapper:hover .file-input-btn {
            background: var(--primary-hover);
        }

        /* Bouton de soumission */
        button[type="submit"] {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border: none;
            padding: 16px;
            border-radius: 10px;
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
        }

        button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
            background: linear-gradient(135deg, var(--primary-hover), #6700a8);
        }

        button[type="submit"] i {
            transition: transform 0.3s ease;
        }

        button[type="submit"]:hover i {
            transform: translateX(3px);
        }

        /* Messages d'erreur/succès */
        .error-message {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 8px;
            display: none;
            font-weight: 500;
        }

        .success-message {
            background: var(--success-color);
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            display: none;
            font-weight: 500;
            animation: fadeIn 0.5s ease;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Décoration */
        .decor-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(67, 97, 238, 0.1);
            z-index: -1;
        }

        .circle-1 {
            width: 150px;
            height: 150px;
            top: -50px;
            right: -50px;
        }

        .circle-2 {
            width: 100px;
            height: 100px;
            bottom: -30px;
            left: -30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .home-btn {
                top: 15px;
                left: 15px;
                padding: 10px 15px;
                font-size: 0.9rem;
            }

            .apply-container {
                padding: 30px 20px;
                margin-top: 50px;
            }

            .apply-container h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .apply-container {
                padding: 25px 15px;
            }

            .input-group input,
            .input-group textarea,
            .input-group select,
            .input-group .file-input-wrapper {
                padding: 12px;
            }

            button[type="submit"] {
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
    <div class="apply-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
            </svg>
            Postuler Maintenant
        </h2>
        
        <form id="applyForm">
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
                <label for="phone">Téléphone</label>
                <input type="tel" id="phone" name="phone" placeholder="+33 6 12 34 56 78" required>
                <span class="error-message" id="phoneError">Veuillez entrer un numéro valide</span>
            </div>
            
            <div class="input-group">
                <label for="cv">CV (PDF uniquement)</label>
                <div class="file-input-wrapper">
                    <span class="file-input-text">Aucun fichier sélectionné</span>
                    <span class="file-input-btn">Parcourir</span>
                    <input type="file" id="cv" name="cv" accept="application/pdf" required>
                </div>
                <span class="error-message" id="cvError">Veuillez sélectionner un fichier PDF</span>
            </div>
            
            <div class="input-group">
                <label for="coverLetter">Lettre de Motivation</label>
                <textarea id="coverLetter" name="coverLetter" placeholder="Décrivez pourquoi vous êtes le candidat idéal..." required></textarea>
            </div>
            
            <button type="submit">
                <span>Envoyer ma candidature</span>
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
        
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle"></i> Votre candidature a été envoyée avec succès !
        </div>
    </div>

    <script>
        // Gestion de l'affichage du nom du fichier
        const cvInput = document.getElementById('cv');
        const fileInputText = document.querySelector('.file-input-text');

        cvInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                fileInputText.textContent = this.files[0].name;
            } else {
                fileInputText.textContent = 'Aucun fichier sélectionné';
            }
        });

        // Validation en temps réel
        const form = document.getElementById('applyForm');
        const fullNameInput = document.getElementById('fullName');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');

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

        // Validation du téléphone
        phoneInput.addEventListener('input', () => {
            const phonePattern = /^\+?\d{1,3}[\s.-]?\d{2,4}[\s.-]?\d{2,4}[\s.-]?\d{2,4}$/;
            if (!phonePattern.test(phoneInput.value)) {
                document.getElementById('phoneError').style.display = 'block';
            } else {
                document.getElementById('phoneError').style.display = 'none';
            }
        });

        // Validation du CV (PDF)
        cvInput.addEventListener('change', () => {
            const file = cvInput.files[0];
            if (file && file.type !== 'application/pdf') {
                document.getElementById('cvError').style.display = 'block';
                cvInput.value = '';
                fileInputText.textContent = 'Aucun fichier sélectionné';
            } else {
                document.getElementById('cvError').style.display = 'none';
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

            if (!/^\+?\d{1,3}[\s.-]?\d{2,4}[\s.-]?\d{2,4}[\s.-]?\d{2,4}$/.test(phoneInput.value)) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            }

            if (cvInput.files.length === 0 || cvInput.files[0].type !== 'application/pdf') {
                document.getElementById('cvError').style.display = 'block';
                isValid = false;
            }

            // Si valide, afficher le message de succès
            if (isValid) {
                document.getElementById('successMessage').style.display = 'block';
                form.reset();
                fileInputText.textContent = 'Aucun fichier sélectionné';
                
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>