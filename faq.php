<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - AIM Global</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #64748b;
            --background-color: #f8fafc;
            --accent-color: #f59e0b;
            --light-color: #ffffff;
            --dark-color: #1e293b;
            --glass-effect: rgba(255, 255, 255, 0.2);
            --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            color: var(--dark-color);
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
            color: var(--light-color);
            text-decoration: none;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 50px;
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1000;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .home-link i {
            font-size: 1.2em;
            transition: transform 0.5s ease;
        }

        .home-link:hover i {
            transform: translateX(-5px);
        }

        /* En-tête */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 140px 20px 80px;
            text-align: center;
            position: relative;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--accent-color);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        header p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Conteneur principal */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 30px;
        }

        /* Barre de recherche */
        .faq-search {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            position: relative;
        }

        .faq-search input {
            padding: 18px 25px;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            width: 100%;
            max-width: 600px;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            padding-right: 60px;
        }

        .faq-search input:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .faq-search button {
            position: absolute;
            right: 5px;
            top: 5px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .faq-search button:hover {
            transform: scale(1.05);
        }

        /* Catégories */
        .faq-categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .faq-categories button {
            background-color: var(--light-color);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 12px 24px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            font-weight: 600;
            box-shadow: var(--card-shadow);
        }

        .faq-categories button.active {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.3);
        }

        .faq-categories button:hover:not(.active) {
            background-color: rgba(79, 70, 229, 0.1);
        }

        /* Liste FAQ */
        .faq-list {
            display: grid;
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Items FAQ */
        .faq-item {
            background-color: var(--light-color);
            padding: 25px;
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            cursor: pointer;
            transition: all 0.4s ease;
            border-left: 5px solid var(--primary-color);
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 20px -5px rgba(0, 0, 0, 0.1);
        }

        .faq-item.active {
            border-left-color: var(--accent-color);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 700;
            color: var(--primary-dark);
            font-size: 1.2rem;
            gap: 20px;
        }

        .faq-question::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: var(--primary-color);
            transition: all 0.4s ease;
            flex-shrink: 0;
        }

        .faq-item.active .faq-question::after {
            transform: rotate(180deg);
            color: var(--accent-color);
        }

        .faq-answer {
            display: none;
            padding-top: 20px;
            color: var(--secondary-color);
            line-height: 1.7;
            animation: fadeIn 0.4s ease-out;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 120px 20px 60px;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0% 100%);
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 12px 20px;
            }
            
            .faq-search {
                flex-direction: column;
                align-items: center;
            }
            
            .faq-search button {
                position: relative;
                right: auto;
                top: auto;
                margin-top: 15px;
                width: 100%;
                max-width: 200px;
                justify-content: center;
            }
            
            .faq-categories {
                gap: 10px;
            }
            
            .faq-categories button {
                padding: 10px 18px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            header p {
                font-size: 1.1rem;
            }
            
            .faq-question {
                font-size: 1.1rem;
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

    <header>
        <h1>Questions Fréquentes</h1>
        <p>Trouvez des réponses rapides à vos questions les plus courantes</p>
    </header>

    <div class="container">
        <div class="faq-search">
            <input type="text" id="searchInput" placeholder="Rechercher une question...">
            <button id="searchButton">
                <i class="fas fa-search"></i>
                Rechercher
            </button>
        </div>

        <div class="faq-categories">
            <button class="active" data-category="all">Toutes</button>
            <button data-category="account">Compte</button>
            <button data-category="application">Candidature</button>
            <button data-category="payment">Paiement</button>
            <button data-category="support">Support</button>
        </div>

        <div class="faq-list">
            <!-- Exemple de FAQ -->
            <div class="faq-item" data-category="account">
                <div class="faq-question">Comment créer un compte sur AIM Global?</div>
                <div class="faq-answer">
                    <p>Pour créer un compte, cliquez sur le bouton "Inscription" en haut à droite de la page d'accueil. Remplissez le formulaire avec vos informations personnelles (nom, email, mot de passe) et validez votre inscription en cliquant sur le lien de confirmation qui vous sera envoyé par email.</p>
                    <p>Une fois votre compte créé, vous pourrez compléter votre profil professionnel pour augmenter vos chances de trouver l'emploi idéal.</p>
                </div>
            </div>

            <div class="faq-item" data-category="application">
                <div class="faq-question">Comment postuler à une offre d'emploi?</div>
                <div class="faq-answer">
                    <p>Pour postuler à une offre :</p>
                    <ol>
                        <li>Connectez-vous à votre compte AIM Global</li>
                        <li>Naviguez jusqu'à l'offre qui vous intéresse</li>
                        <li>Cliquez sur le bouton "Postuler"</li>
                        <li>Remplissez le formulaire de candidature</li>
                        <li>Téléversez votre CV et lettre de motivation (formats PDF ou DOCX)</li>
                        <li>Soumettez votre candidature</li>
                    </ol>
                    <p>Vous recevrez une confirmation par email et pourrez suivre l'état de votre candidature dans votre espace personnel.</p>
                </div>
            </div>

            <div class="faq-item" data-category="account">
                <div class="faq-question">Que faire si j'ai oublié mon mot de passe?</div>
                <div class="faq-answer">
                    <p>Si vous avez oublié votre mot de passe :</p>
                    <ol>
                        <li>Cliquez sur "Mot de passe oublié" sur la page de connexion</li>
                        <li>Entrez l'adresse email associée à votre compte</li>
                        <li>Cliquez sur le lien de réinitialisation dans l'email reçu</li>
                        <li>Créez un nouveau mot de passe sécurisé</li>
                    </ol>
                    <p>Le lien de réinitialisation est valable 24 heures. Si vous ne recevez pas l'email, vérifiez votre dossier de spam ou contactez notre support.</p>
                </div>
            </div>

            <div class="faq-item" data-category="payment">
                <div class="faq-question">Quels sont les modes de paiement acceptés?</div>
                <div class="faq-answer">
                    <p>AIM Global accepte plusieurs modes de paiement sécurisés :</p>
                    <ul>
                        <li>Cartes de crédit/débit (Visa, Mastercard, American Express)</li>
                        <li>Virements bancaires</li>
                        <li>PayPal</li>
                        <li>Stripe</li>
                    </ul>
                    <p>Tous les paiements sont traités de manière sécurisée et cryptée. Nous ne stockons jamais vos informations de paiement sur nos serveurs.</p>
                </div>
            </div>

            <div class="faq-item" data-category="support">
                <div class="faq-question">Comment contacter le support technique?</div>
                <div class="faq-answer">
                    <p>Notre équipe de support est disponible :</p>
                    <ul>
                        <li>Par email : <a href="mailto:support@aimglobal.com">support@aimglobal.com</a> (réponse sous 24h)</li>
                        <li>Par téléphone : +33 1 23 45 67 89 (9h-18h du lundi au vendredi)</li>
                        <li>Via le chat en direct sur notre site (10h-17h)</li>
                        <li>En remplissant le formulaire de contact dans votre espace client</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Gestion des FAQ
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
                
                // Fermer les autres items FAQ
                if (item.classList.contains('active')) {
                    document.querySelectorAll('.faq-item').forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                }
            });
        });

        // Filtres de recherche et de catégorie
        document.getElementById('searchButton').addEventListener('click', () => {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const activeCategory = document.querySelector('.faq-categories button.active').getAttribute('data-category');
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                const category = item.getAttribute('data-category');

                const matchesSearch = question.includes(searchQuery) || answer.includes(searchQuery);
                const matchesCategory = activeCategory === 'all' || category === activeCategory;

                if (matchesSearch && matchesCategory) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Gestion des catégories
        document.querySelectorAll('.faq-categories button').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelector('.faq-categories button.active').classList.remove('active');
                button.classList.add('active');
                document.getElementById('searchButton').click();
            });
        });

        // Recherche lors de la frappe avec délai
        let searchTimeout;
        document.getElementById('searchInput').addEventListener('input', () => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                document.getElementById('searchButton').click();
            }, 300);
        });

        // Détection des préférences d'accessibilité
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                item.style.transition = 'none';
            });
        }
    </script>
</body>
</html>