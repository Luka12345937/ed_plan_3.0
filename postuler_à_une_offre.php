<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler à l'Offre - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Styles spécifiques à la page de candidature */
        :root {
            --primary-color: #4361ee;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --success-color: #4cc9f0;
            --error-color: #f72585;
            --text-color: #2b2d42;
            --accent-color: #7209b7;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: var(--text-color);
        }

        .home-link {
            position: absolute;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .home-link:hover {
            color: var(--accent-color);
            transform: translateX(-5px);
        }

        .home-link svg {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }

        .home-link:hover svg {
            transform: scale(1.1);
        }

        .apply-container {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(67, 97, 238, 0.15);
            width: 100%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .apply-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .apply-container h2 {
            margin-bottom: 20px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .apply-container h2 svg {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .job-details {
            background-color: #f8f9ff;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            text-align: left;
            border-left: 4px solid var(--primary-color);
        }

        .job-details h3 {
            color: var(--primary-color);
            margin-top: 0;
            font-weight: 600;
        }

        .job-details p {
            margin: 8px 0;
            font-size: 15px;
        }

        .job-details p strong {
            color: var(--text-color);
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-color);
        }

        .input-group input,
        .input-group textarea,
        .input-group select {
            width: 100%;
            padding: 14px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9ff;
        }

        .input-group input:focus,
        .input-group textarea:focus,
        .input-group select:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
            background-color: white;
        }

        .input-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
            display: none;
            font-weight: 500;
        }

        .success-message {
            color: var(--success-color);
            font-size: 14px;
            margin-top: 5px;
            display: none;
            font-weight: 500;
        }

        button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Animation pour le message de succès */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        #successMessage {
            animation: slideUp 0.5s ease-out;
            background-color: #f0f9ff;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            border: 1px solid #bde0fe;
            display: none;
        }

        /* Style personnalisé pour le champ fichier */
        .file-input-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            background-color: #f0f2ff;
            border: 2px dashed #d1d5ff;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-input-button:hover {
            background-color: #e6e9ff;
            border-color: var(--primary-color);
        }

        .file-input-button svg {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .file-input-text {
            font-size: 14px;
            color: var(--text-color);
        }

        #cv {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .apply-container {
                padding: 30px;
                margin: 20px;
            }
            
            .home-link {
                top: 15px;
                left: 15px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .apply-container {
                padding: 20px;
            }
            
            button {
                padding: 14px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </svg>
        Retour à l'accueil
    </a>

    <div class="apply-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
            Postuler à l'Offre
        </h2>
        <div class="job-details">
            <h3>Développeur Web</h3>
            <p><strong>Entreprise:</strong> TechCorp</p>
            <p><strong>Localisation:</strong> Paris</p>
            <p><strong>Description:</strong> Nous recherchons un développeur web talentueux pour rejoindre notre équipe dynamique.</p>
        </div>
        <form id="applyForm">
            <div class="input-group">
                <label for="fullName">Nom Complet</label>
                <input type="text" id="fullName" name="fullName" required placeholder="Votre nom complet">
                <span class="error-message" id="fullNameError">Nom complet requis</span>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="exemple@email.com">
                <span class="error-message" id="emailError">Email invalide</span>
            </div>
            <div class="input-group">
                <label for="cv">CV (PDF uniquement)</label>
                <div class="file-input-container">
                    <div class="file-input-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="17 8 12 3 7 8"></polyline>
                            <line x1="12" y1="3" x2="12" y2="15"></line>
                        </svg>
                        <span class="file-input-text" id="fileLabel">Choisir un fichier PDF</span>
                    </div>
                    <input type="file" id="cv" name="cv" accept="application/pdf" required>
                </div>
                <span class="error-message" id="cvError">Veuillez téléverser un fichier PDF</span>
            </div>
            <div class="input-group">
                <label for="coverLetter">Lettre de Motivation</label>
                <textarea id="coverLetter" name="coverLetter" rows="5" required placeholder="Décrivez pourquoi vous êtes le candidat idéal..."></textarea>
            </div>
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
                Envoyer ma candidature
            </button>
        </form>
        <div class="success-message" id="successMessage">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px;">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            Votre candidature a été envoyée avec succès!
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('applyForm');
        const fullNameInput = document.getElementById('fullName');
        const emailInput = document.getElementById('email');
        const cvInput = document.getElementById('cv');
        const fileLabel = document.getElementById('fileLabel');

        // Afficher le nom du fichier sélectionné
        cvInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                fileLabel.textContent = this.files[0].name;
            } else {
                fileLabel.textContent = 'Choisir un fichier PDF';
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

        // Validation du CV (PDF)
        cvInput.addEventListener('change', () => {
            const file = cvInput.files[0];
            if (file && file.type !== 'application/pdf') {
                document.getElementById('cvError').style.display = 'block';
                cvInput.value = ''; // Réinitialiser le champ de fichier
                fileLabel.textContent = 'Choisir un fichier PDF';
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

            if (cvInput.files.length === 0 || cvInput.files[0].type !== 'application/pdf') {
                document.getElementById('cvError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire (ici, on simule une redirection)
            if (isValid) {
                document.getElementById('successMessage').style.display = 'flex';
                document.getElementById('successMessage').style.alignItems = 'center';
                document.getElementById('successMessage').style.justifyContent = 'center';
                
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                    // Rediriger vers une page de confirmation ou le tableau de bord
                    window.location.href = 'dashboard.php';
                }, 3000);
                // Ajouter ici la logique pour envoyer les données au serveur
            }
        });
    </script>
</body>
</html>