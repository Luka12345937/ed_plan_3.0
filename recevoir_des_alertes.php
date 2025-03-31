<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recevoir des Alertes - AIM Global</title>
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
            --warning-color: #f8961e;
            --danger-color: #f72585;
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
            position: relative;
            padding: 40px 20px;
        }

        .home-link {
            position: absolute;
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

        .alerts-container {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 50px;
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 600px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
        }

        .alerts-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .alerts-container h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alerts-container h2 i {
            margin-right: 15px;
            font-size: 1.8rem;
            color: var(--secondary-color);
        }

        .alert-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px;
            margin-bottom: 15px;
            background: #f8f9ff;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .alert-option:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.1);
        }

        .alert-option label {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: var(--text-color);
            font-weight: 500;
            cursor: pointer;
        }

        .alert-option label i {
            margin-right: 15px;
            font-size: 1.5rem;
            color: var(--primary-color);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .alert-option:hover label i {
            background: rgba(67, 97, 238, 0.2);
            transform: scale(1.1);
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #e9ecef;
            transition: 0.4s;
            border-radius: 34px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        input:checked + .slider {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .success-message {
            color: var(--success-color);
            font-size: 1rem;
            margin-top: 30px;
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

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .alerts-container {
                padding: 30px;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .alert-option {
                padding: 20px;
                flex-direction: column;
                align-items: flex-start;
            }
            
            .switch {
                margin-top: 15px;
                align-self: flex-end;
            }
        }

        @media (max-width: 480px) {
            .alerts-container {
                padding: 25px 20px;
            }
            
            .alerts-container h2 {
                font-size: 1.5rem;
            }
            
            .alert-option label {
                font-size: 0.9rem;
            }
            
            .alert-option label i {
                font-size: 1.2rem;
                width: 35px;
                height: 35px;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <i class="fas fa-arrow-left"></i>
        Retour à l'accueil
    </a>

    <div class="alerts-container">
        <h2>
            <i class="fas fa-bell"></i>
            Recevoir des Alertes
        </h2>
        <div class="alert-option">
            <label>
                <i class="fas fa-envelope"></i>
                Alertes par Email
            </label>
            <label class="switch">
                <input type="checkbox" id="emailAlerts" checked>
                <span class="slider"></span>
            </label>
        </div>
        <div class="alert-option">
            <label>
                <i class="fas fa-sms"></i>
                Alertes par SMS
            </label>
            <label class="switch">
                <input type="checkbox" id="smsAlerts">
                <span class="slider"></span>
            </label>
        </div>
        <div class="alert-option">
            <label>
                <i class="fas fa-browser"></i>
                Alertes dans l'application
            </label>
            <label class="switch">
                <input type="checkbox" id="appAlerts" checked>
                <span class="slider"></span>
            </label>
        </div>
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle"></i>
            Vos préférences ont été mises à jour avec succès!
        </div>
    </div>

    <script>
        // Gestion des switches
        const emailAlerts = document.getElementById('emailAlerts');
        const smsAlerts = document.getElementById('smsAlerts');
        const appAlerts = document.getElementById('appAlerts');
        const successMessage = document.getElementById('successMessage');

        function updatePreferences() {
            // Simulation d'envoi des données
            successMessage.style.display = 'flex';
            
            // Masquer le message après 3 secondes
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);
            
            // Ici, vous pourriez ajouter une requête AJAX pour sauvegarder les préférences
            // Exemple:
            /*
            fetch('/save-preferences', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    email: emailAlerts.checked,
                    sms: smsAlerts.checked,
                    app: appAlerts.checked
                })
            })
            .then(response => response.json())
            .then(data => {
                successMessage.style.display = 'flex';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
            });
            */
        }

        // Écouteurs d'événements
        emailAlerts.addEventListener('change', updatePreferences);
        smsAlerts.addEventListener('change', updatePreferences);
        appAlerts.addEventListener('change', updatePreferences);

        // Charger les préférences existantes (simulation)
        document.addEventListener('DOMContentLoaded', () => {
            // Ici, vous pourriez charger les préférences existantes depuis le serveur
            // Exemple:
            /*
            fetch('/get-preferences')
                .then(response => response.json())
                .then(data => {
                    emailAlerts.checked = data.email;
                    smsAlerts.checked = data.sms;
                    appAlerts.checked = data.app;
                });
            */
        });
    </script>
</body>
</html>