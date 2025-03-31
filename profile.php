<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles spécifiques à la page de profil */
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
        }

        .profile-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 15px;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .sidebar nav ul li a svg {
            margin-right: 10px;
            width: 20px;
            height: 20px;
        }

        .sidebar nav ul li a:hover {
            color: var(--background-color);
        }

        .sidebar .user-info {
            text-align: center;
            margin-top: auto;
        }

        .sidebar .user-info img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .sidebar .user-info p {
            margin: 0;
        }

        .main-content {
            flex: 1;
            padding: 40px;
        }

        .profile-section {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .profile-section h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .profile-section h2 svg {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .profile-section .input-group {
            margin-bottom: 20px;
        }

        .profile-section .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .profile-section .input-group input,
        .profile-section .input-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .profile-section .input-group input:focus,
        .profile-section .input-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .profile-section .error-message {
            color: var(--error-color);
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }

        .profile-section .success-message {
            color: var(--success-color);
            font-size: 14px;
            margin-top: 20px;
            display: none;
        }

        .profile-section button {
            padding: 12px 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-section button:hover {
            background-color: #0056b3;
        }

        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile-picture input {
            display: none;
        }

        .profile-picture label {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-picture label:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 10px;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar nav ul {
                display: flex;
                gap: 15px;
            }

            .sidebar .user-info {
                display: none;
            }

            .main-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="sidebar">
            <div>
                <h2>AIM Global</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Tableau de Bord
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                Paramètres
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="user-info">
                <img src="assets/user-profile.jpg" alt="Photo de profil">
                <p>Jean Dupont</p>
            </div>
        </div>

        <div class="main-content">
            <div class="profile-section">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Mon Profil
                </h2>
                <div class="profile-picture">
                    <img src="assets/user-profile.jpg" alt="Photo de profil" id="profileImage">
                    <label for="imageUpload">Changer la photo</label>
                    <input type="file" id="imageUpload" accept="image/*">
                </div>
                <form id="profileForm">
                    <div class="input-group">
                        <label for="fullName">Nom Complet</label>
                        <input type="text" id="fullName" name="fullName" value="Jean Dupont" required>
                        <span class="error-message" id="fullNameError">Nom complet requis</span>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="jean.dupont@example.com" required>
                        <span class="error-message" id="emailError">Email invalide</span>
                    </div>
                    <div class="input-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" value="+33 6 12 34 56 78">
                        <span class="error-message" id="phoneError">Numéro de téléphone invalide</span>
                    </div>
                    <div class="input-group">
                        <label for="bio">Bio</label>
                        <textarea id="bio" name="bio" rows="4">Passionné de technologie et de développement web.</textarea>
                    </div>
                    <button type="submit">Enregistrer les modifications</button>
                </form>
                <div class="success-message" id="successMessage">
                    Modifications enregistrées avec succès!
                </div>
            </div>
        </div>
    </div>

    <script>
        // Prévisualisation de l'image de profil
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const reader = new FileReader();
            reader.onload = function() {
                document.getElementById('profileImage').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Validation en temps réel
        const form = document.getElementById('profileForm');
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
            if (phoneInput.value.trim() !== '' && !phonePattern.test(phoneInput.value)) {
                document.getElementById('phoneError').style.display = 'block';
            } else {
                document.getElementById('phoneError').style.display = 'none';
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

            if (phoneInput.value.trim() !== '' && !/^\+?\d{1,3}[\s.-]?\d{2,4}[\s.-]?\d{2,4}[\s.-]?\d{2,4}$/.test(phoneInput.value)) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            }

            // Si valide, soumettre le formulaire (ici, on simule une redirection)
            if (isValid) {
                document.getElementById('successMessage').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 3000);
                // Ajouter ici la logique pour envoyer les données au serveur
            }
        });
    </script>
</body>
</html>
