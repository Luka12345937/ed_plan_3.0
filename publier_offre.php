<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une Offre - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --primary-light: #4cc9f0;
            --secondary-color: #7209b7;
            --background-color: #f8f9ff;
            --card-bg: #ffffff;
            --text-color: #2b2d42;
            --text-light: #8d99ae;
            --success-color: #4ad66d;
            --error-color: #f72585;
            --border-radius: 16px;
            --box-shadow: 0 10px 30px rgba(67, 97, 238, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            z-index: 100;
            background: rgba(255, 255, 255, 0.9);
            padding: 12px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid rgba(67, 97, 238, 0.1);
        }

        .home-link:hover {
            transform: translateX(-5px);
            box-shadow: 0 6px 20px rgba(67, 97, 238, 0.2);
            color: var(--secondary-color);
        }

        .home-link i {
            margin-right: 10px;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .home-link:hover i {
            transform: scale(1.2);
        }

        .publish-container {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 50px;
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 800px;
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
            margin-top: 60px;
        }

        .publish-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .publish-container h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }

        .publish-container h2 i {
            margin-right: 15px;
            font-size: 1.8rem;
            color: var(--secondary-color);
        }

        .input-group {
            margin-bottom: 25px;
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
        .input-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 16px;
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
            margin-top: 8px;
            display: none;
            font-weight: 500;
        }

        .success-message {
            color: var(--success-color);
            font-size: 1rem;
            margin-top: 25px;
            padding: 15px;
            background: rgba(74, 214, 109, 0.1);
            border-radius: 8px;
            display: none;
            align-items: center;
            justify-content: center;
            animation: slideUp 0.5s ease-out;
        }

        .success-message i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            box-shadow: 0 5px 20px rgba(67, 97, 238, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .publish-container {
                padding: 40px;
            }
        }

        @media (max-width: 768px) {
            .publish-container {
                padding: 30px;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .publish-container h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 20px 15px;
            }
            
            .publish-container {
                padding: 25px 20px;
                margin-top: 40px;
            }
            
            .publish-container h2 {
                font-size: 1.4rem;
            }
            
            .input-group input,
            .input-group textarea,
            .input-group select {
                padding: 12px;
            }
            
            button {
                padding: 14px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <i class="fas fa-arrow-left"></i>
        Retour à l'accueil
    </a>

    <div class="publish-container">
        <h2>
            <i class="fas fa-bullhorn"></i>
            Publier une Offre d'Emploi
        </h2>
        <form id="publishForm">
            <div class="input-group">
                <label for="jobTitle">Titre de l'Offre <span class="required">*</span></label>
                <input type="text" id="jobTitle" name="jobTitle" required placeholder="Ex: Développeur Full Stack">
                <span class="error-message" id="jobTitleError">Veuillez saisir un titre pour l'offre</span>
            </div>
            
            <div class="input-group">
                <label for="companyName">Nom de l'Entreprise <span class="required">*</span></label>
                <input type="text" id="companyName" name="companyName" required placeholder="Ex: TechCorp International">
                <span class="error-message" id="companyNameError">Veuillez saisir le nom de votre entreprise</span>
            </div>
            
            <div class="input-group">
                <label for="location">Localisation <span class="required">*</span></label>
                <input type="text" id="location" name="location" required placeholder="Ex: Paris (Télétravail possible)">
                <span class="error-message" id="locationError">Veuillez indiquer la localisation du poste</span>
            </div>
            
            <div class="input-group">
                <label for="jobType">Type de Contrat <span class="required">*</span></label>
                <select id="jobType" name="jobType" required>
                    <option value="">Sélectionnez un type de contrat</option>
                    <option value="full-time">Temps Plein</option>
                    <option value="part-time">Temps Partiel</option>
                    <option value="contract">Contrat</option>
                    <option value="internship">Stage</option>
                    <option value="freelance">Freelance</option>
                </select>
                <span class="error-message" id="jobTypeError">Veuillez sélectionner un type de contrat</span>
            </div>
            
            <div class="input-group">
                <label for="salary">Salaire (optionnel)</label>
                <input type="text" id="salary" name="salary" placeholder="Ex: 45K€ - 55K€ selon expérience">
            </div>
            
            <div class="input-group">
                <label for="description">Description de l'Offre <span class="required">*</span></label>
                <textarea id="description" name="description" rows="6" required placeholder="Décrivez en détail le poste à pourvoir..."></textarea>
                <span class="error-message" id="descriptionError">Veuillez saisir une description détaillée</span>
            </div>
            
            <div class="input-group">
                <label for="requirements">Exigences et Compétences Requises <span class="required">*</span></label>
                <textarea id="requirements" name="requirements" rows="4" required placeholder="Listez les compétences et qualifications nécessaires..."></textarea>
                <span class="error-message" id="requirementsError">Veuillez indiquer les exigences pour ce poste</span>
            </div>
            
            <div class="input-group">
                <label for="benefits">Avantages (optionnel)</label>
                <textarea id="benefits" name="benefits" rows="3" placeholder="Listez les avantages proposés (tickets restaurant, mutuelle, etc.)"></textarea>
            </div>
            
            <button type="submit">
                <i class="fas fa-paper-plane"></i>
                Publier l'Offre
            </button>
        </form>
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle"></i>
            Votre offre a été publiée avec succès!
        </div>
    </div>

    <script>
        // Validation en temps réel
        const form = document.getElementById('publishForm');
        const jobTitleInput = document.getElementById('jobTitle');
        const companyNameInput = document.getElementById('companyName');
        const locationInput = document.getElementById('location');
        const jobTypeSelect = document.getElementById('jobType');
        const descriptionInput = document.getElementById('description');
        const requirementsInput = document.getElementById('requirements');
        const successMessage = document.getElementById('successMessage');

        // Fonction générique de validation
        function validateInput(input, errorId) {
            if (input.value.trim() === '') {
                document.getElementById(errorId).style.display = 'block';
                return false;
            } else {
                document.getElementById(errorId).style.display = 'none';
                return true;
            }
        }

        // Écouteurs d'événements
        jobTitleInput.addEventListener('input', () => validateInput(jobTitleInput, 'jobTitleError'));
        companyNameInput.addEventListener('input', () => validateInput(companyNameInput, 'companyNameError'));
        locationInput.addEventListener('input', () => validateInput(locationInput, 'locationError'));
        descriptionInput.addEventListener('input', () => validateInput(descriptionInput, 'descriptionError'));
        requirementsInput.addEventListener('input', () => validateInput(requirementsInput, 'requirementsError'));
        
        jobTypeSelect.addEventListener('change', () => {
            if (jobTypeSelect.value === '') {
                document.getElementById('jobTypeError').style.display = 'block';
            } else {
                document.getElementById('jobTypeError').style.display = 'none';
            }
        });

        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            // Validation de tous les champs
            isValid &= validateInput(jobTitleInput, 'jobTitleError');
            isValid &= validateInput(companyNameInput, 'companyNameError');
            isValid &= validateInput(locationInput, 'locationError');
            isValid &= validateInput(descriptionInput, 'descriptionError');
            isValid &= validateInput(requirementsInput, 'requirementsError');
            
            if (jobTypeSelect.value === '') {
                document.getElementById('jobTypeError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire
            if (isValid) {
                successMessage.style.display = 'flex';
                
                // Simulation d'envoi des données
                setTimeout(() => {
                    successMessage.style.display = 'none';
                    // Redirection vers le tableau de bord
                    window.location.href = 'dashboard.php';
                }, 3000);
                
                // Ici, vous pourriez ajouter une requête AJAX pour sauvegarder les données
                /*
                fetch('/save-job-offer', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        jobTitle: jobTitleInput.value,
                        companyName: companyNameInput.value,
                        location: locationInput.value,
                        jobType: jobTypeSelect.value,
                        salary: document.getElementById('salary').value,
                        description: descriptionInput.value,
                        requirements: requirementsInput.value,
                        benefits: document.getElementById('benefits').value
                    })
                })
                .then(response => response.json())
                .then(data => {
                    successMessage.style.display = 'flex';
                    setTimeout(() => {
                        window.location.href = 'dashboard.php';
                    }, 3000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Une erreur est survenue lors de la publication de l'offre");
                });
                */
            }
        });
    </script>
</body>
</html>