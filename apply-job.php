<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postuler à l'Offre - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page de candidature */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --success-color: #28A745;
            --error-color: #DC3545;
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

        .apply-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
            margin-top: 50px;
            animation: fadeIn 0.5s ease-in-out;
        }

        .apply-container h2 {
            margin-bottom: 20px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .apply-container h2 svg {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .job-details {
            background-color: var(--background-color);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: left;
            border-left: 4px solid var(--primary-color);
        }

        .job-details h3 {
            color: var(--primary-color);
            margin-top: 0;
        }

        .job-details p {
            color: var(--secondary-color);
            margin: 5px 0;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: var(--secondary-color);
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        .success-message {
            color: var(--success-color);
            font-size: 14px;
            margin-top: 20px;
            display: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .apply-container {
                padding: 20px;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="header-link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
        </svg>
        Retour à l'accueil
    </a>

    <div class="apply-container">
        <h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
            </svg>
            Postuler à l'Offre
        </h2>
        <div class="job-details">
            <h3>Développeur Web</h3>
            <p><strong>Entreprise:</strong> TechCorp</p>
            <p><strong>Localisation:</strong> Paris</p>
            <p><strong>Type:</strong> Temps Plein</p>
        </div>
        <form id="applyForm">
            <div class="input-group">
                <label for="fullName">Nom Complet</label>
                <input type="text" id="fullName" name="fullName" required>
                <span class="error-message" id="fullNameError">Nom complet requis</span>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <span class="error-message" id="emailError">Email invalide</span>
            </div>
            <div class="input-group">
                <label for="phone">Téléphone</label>
                <input type="tel" id="phone" name="phone" required>
                <span class="error-message" id="phoneError">Numéro de téléphone invalide</span>
            </div>
            <div class="input-group">
                <label for="cv">CV (PDF)</label>
                <input type="file" id="cv" name="cv" accept="application/pdf" required>
                <span class="error-message" id="cvError">Veuillez téléverser un fichier PDF</span>
            </div>
            <div class="input-group">
                <label for="coverLetter">Lettre de Motivation</label>
                <textarea id="coverLetter" name="coverLetter" rows="6" required></textarea>
            </div>
            <button type="submit">Postuler</button>
        </form>
        <div class="success-message" id="successMessage">
            Votre candidature a été envoyée avec succès!
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('applyForm');
        const fullNameInput = document.getElementById('fullName');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const cvInput = document.getElementById('cv');

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
                cvInput.value = ''; // Réinitialiser le champ de fichier
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

            // Si valide, soumettre le formulaire (ici, on simule une redirection)
            if (isValid) {
                document.getElementById('successMessage').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                    // Rediriger vers une page de confirmation ou le tableau de bord
                    window.location.href = 'confirmation.php';
                }, 3000);
                // Ajouter ici la logique pour envoyer les données au serveur
            }
        });
    </script>
</body>
</html>
