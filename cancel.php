<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Annuler une action sur AIM Global - Confirmation requise">
    <meta name="keywords" content="annulation, confirmation, action, AIM Global">
    <meta name="theme-color" content="#ef4444">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Annuler Action | AIM Global</title>
    <style>
        :root {
            --primary-color: #6366f1;
            --danger-color: #ef4444;
            --danger-hover: #dc2626;
            --secondary-color: #6b7280;
            --background-color: #f9fafb;
            --text-color: #111827;
            --light-gray: #e5e7eb;
            --white: #ffffff;
            --warning-color: #f59e0b;
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
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.9), rgba(220, 38, 38, 0.9));
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

        .cancel-container {
            background-color: var(--white);
            padding: 3rem;
            border-radius: var(--rounded-xl);
            box-shadow: var(--shadow-xl);
            width: 100%;
            max-width: 500px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.6s ease-out;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cancel-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0.5rem;
            background: linear-gradient(90deg, var(--danger-color), var(--danger-hover));
        }

        .cancel-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .cancel-header h2 {
            color: var(--danger-color);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .warning-message {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
            padding: 1.5rem;
            border-radius: var(--rounded-lg);
            margin-bottom: 2rem;
            font-weight: 600;
            border-left: 4px solid var(--danger-color);
            text-align: left;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .warning-message i {
            font-size: 1.5rem;
            margin-top: 0.2rem;
        }

        .confirmation-group {
            margin-bottom: 2rem;
            position: relative;
        }

        .confirmation-group label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 500;
            color: var(--secondary-color);
            font-size: 0.95rem;
        }

        .confirmation-input {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--rounded-lg);
            font-size: 1rem;
            transition: var(--transition);
            background-color: var(--background-color);
            font-family: 'Poppins', sans-serif;
        }

        .confirmation-input:focus {
            outline: none;
            border-color: var(--danger-color);
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.2);
        }

        .error-message {
            color: var(--danger-color);
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: none;
            font-weight: 500;
        }

        .button-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .btn {
            padding: 1.1rem;
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
        }

        .btn-cancel {
            background-color: var(--secondary-color);
            color: var(--white);
            box-shadow: var(--shadow-sm);
        }

        .btn-cancel:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-confirm {
            background: linear-gradient(to right, var(--danger-color), var(--danger-hover));
            color: var(--white);
            box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.3), 0 2px 4px -1px rgba(239, 68, 68, 0.1);
        }

        .btn-confirm:hover {
            background: linear-gradient(to right, var(--danger-hover), var(--danger-color));
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(239, 68, 68, 0.3), 0 4px 6px -2px rgba(239, 68, 68, 0.1);
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

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-8px); }
            40%, 80% { transform: translateX(8px); }
        }

        .shake {
            animation: shake 0.5s ease-in-out;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cancel-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }
            
            .back-home {
                top: 1rem;
                left: 1rem;
            }
        }

        @media (max-width: 480px) {
            .cancel-container {
                padding: 1.5rem 1.25rem;
            }
            
            .cancel-header h2 {
                font-size: 1.75rem;
            }
            
            .button-group {
                grid-template-columns: 1fr;
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

    <div class="cancel-container">
        <div class="cancel-header">
            <h2>
                <i class="fas fa-ban"></i>
                Annuler l'Action
            </h2>
        </div>
        
        <div class="warning-message">
            <i class="fas fa-exclamation-triangle"></i>
            <div>
                <p>Attention! Cette action est irréversible.</p>
                <p>Êtes-vous certain de vouloir annuler cette opération ?</p>
            </div>
        </div>
        
        <form id="cancelForm">
            <div class="confirmation-group">
                <label for="confirmation">Tapez "ANNULER" pour confirmer</label>
                <input type="text" id="confirmation" class="confirmation-input" placeholder="ANNULER" required>
                <div id="confirmationError" class="error-message">Vous devez taper "ANNULER" pour confirmer</div>
            </div>
            
            <div class="button-group">
                <button type="button" class="btn btn-cancel" onclick="window.location.href='dashboard.php'">
                    <i class="fas fa-chevron-left"></i> Retour
                </button>
                <button type="submit" class="btn btn-confirm">
                    <i class="fas fa-check"></i> Confirmer l'annulation
                </button>
            </div>
        </form>
    </div>

    <script>
        // Sélection des éléments du DOM
        const form = document.getElementById('cancelForm');
        const confirmationInput = document.getElementById('confirmation');
        const confirmationError = document.getElementById('confirmationError');
        
        // Validation en temps réel
        confirmationInput.addEventListener('input', function() {
            if (this.value.toUpperCase() === 'ANNULER') {
                confirmationError.style.display = 'none';
            }
        });
        
        // Soumission du formulaire
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            if (confirmationInput.value.toUpperCase() !== 'ANNULER') {
                confirmationError.style.display = 'block';
                form.classList.add('shake');
                setTimeout(() => {
                    form.classList.remove('shake');
                }, 500);
            } else {
                // Double confirmation avant annulation
                if (confirm('Êtes-vous ABSOLUMENT certain de vouloir annuler cette action ?')) {
                    // Ici, ajouter la logique pour annuler l'action (via AJAX ou redirection)
                    alert('L\'action a été annulée avec succès.');
                    // Exemple de redirection après annulation
                    window.location.href = 'dashboard.php';
                }
            }
        });
    </script>
</body>
</html>