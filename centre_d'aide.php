<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Centre d'aide AIM Global - Trouvez des réponses à vos questions ou contactez notre équipe de support">
    <meta name="keywords" content="aide, support, FAQ, assistance, AIM Global, questions fréquentes">
    <meta name="theme-color" content="#2563eb">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Centre d'Aide | AIM Global - Trouvez des réponses à vos questions</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --text-color: #1f2937;
            --light-gray: #e5e7eb;
            --white: #ffffff;
            --accent-color: #f59e0b;
            --accent-hover: #d97706;
            --success-color: #10b981;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --rounded-sm: 0.25rem;
            --rounded-md: 0.5rem;
            --rounded-lg: 0.75rem;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #1e40af);
            color: var(--white);
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        header h1 {
            font-size: 2.25rem;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        header p {
            font-size: 1.125rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .breadcrumb {
            padding: 1rem;
            background-color: var(--white);
            box-shadow: var(--shadow-sm);
            font-size: 0.875rem;
        }

        .breadcrumb a {
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            flex: 1;
        }

        .search-container {
            background-color: var(--white);
            padding: 2rem;
            border-radius: var(--rounded-lg);
            box-shadow: var(--shadow-md);
            margin-bottom: 2rem;
            text-align: center;
        }

        .search-container h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .search-bar {
            display: flex;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .search-bar input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: 2px solid var(--light-gray);
            border-radius: var(--rounded-md);
            font-size: 1rem;
            transition: var(--transition);
            padding-right: 3.5rem;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        .search-bar button {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 0 var(--rounded-md) var(--rounded-md) 0;
            padding: 0 1.5rem;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .search-bar button:hover {
            background-color: var(--primary-hover);
        }

        .help-sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .help-card {
            background-color: var(--white);
            border-radius: var(--rounded-lg);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: var(--transition);
        }

        .help-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .help-card-header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1rem 1.5rem;
            font-weight: 600;
        }

        .help-card-body {
            padding: 1.5rem;
        }

        .help-card-body ul {
            list-style: none;
        }

        .help-card-body li {
            margin-bottom: 0.75rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px dashed var(--light-gray);
        }

        .help-card-body a {
            color: var(--text-color);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .help-card-body a:hover {
            color: var(--primary-color);
        }

        .faq-section {
            background-color: var(--white);
            border-radius: var(--rounded-lg);
            box-shadow: var(--shadow-md);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .faq-section h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--light-gray);
        }

        .faq-item {
            margin-bottom: 1rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--rounded-md);
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-item:last-child {
            margin-bottom: 0;
        }

        .faq-item:hover {
            border-color: var(--primary-color);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.25rem;
            background-color: var(--background-color);
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .faq-question:hover {
            background-color: rgba(37, 99, 235, 0.05);
        }

        .faq-question::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            transition: var(--transition);
        }

        .faq-question.active {
            background-color: rgba(37, 99, 235, 0.1);
        }

        .faq-question.active::after {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .faq-answer-content {
            padding: 1.25rem;
            background-color: var(--white);
        }

        .contact-section {
            background-color: var(--white);
            border-radius: var(--rounded-lg);
            box-shadow: var(--shadow-md);
            padding: 2rem;
        }

        .contact-section h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .contact-card {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1.5rem;
            background-color: var(--background-color);
            border-radius: var(--rounded-md);
            transition: var(--transition);
        }

        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-sm);
        }

        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            min-width: 40px;
            text-align: center;
        }

        .contact-info h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .contact-form {
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--light-gray);
            border-radius: var(--rounded-md);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--accent-color);
            color: var(--white);
            padding: 1rem 2rem;
            border: none;
            border-radius: var(--rounded-md);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .submit-btn:hover {
            background-color: var(--accent-hover);
        }

        .status-message {
            padding: 1rem;
            border-radius: var(--rounded-md);
            margin-bottom: 1rem;
            display: none;
        }

        .status-message.success {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
            border: 1px solid var(--success-color);
            display: block;
        }

        footer {
            background-color: var(--secondary-color);
            color: var(--white);
            text-align: center;
            padding: 1.5rem;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--white);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .copyright {
            font-size: 0.875rem;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.75rem;
            }
            
            header p {
                font-size: 1rem;
            }
            
            .search-bar {
                flex-direction: column;
            }
            
            .search-bar input {
                border-radius: var(--rounded-md);
                margin-bottom: 0.5rem;
                padding-right: 1.5rem;
            }
            
            .search-bar button {
                position: relative;
                border-radius: var(--rounded-md);
                padding: 1rem;
                justify-content: center;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 0.5rem;
            }
            
            .search-container,
            .faq-section,
            .contact-section {
                padding: 1.5rem 1rem;
            }
            
            .help-card-header,
            .faq-question,
            .contact-card {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Centre d'Aide AIM Global</h1>
        <p>Nous sommes là pour répondre à toutes vos questions et vous accompagner</p>
    </header>

    <div class="breadcrumb">
        <a href="index.php"><i class="fas fa-home"></i> Accueil</a> > <span>Centre d'aide</span>
    </div>

    <div class="container">
        <div class="search-container">
            <h2>Comment pouvons-nous vous aider ?</h2>
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Rechercher dans le centre d'aide...">
                <button type="button" id="searchButton">
                    <i class="fas fa-search"></i> Rechercher
                </button>
            </div>
        </div>

        <div class="help-sections">
            <div class="help-card">
                <div class="help-card-header">
                    <i class="fas fa-user-circle"></i> Compte et Profil
                </div>
                <div class="help-card-body">
                    <ul>
                        <li><a href="Créer_un_compte.php"><i class="fas fa-chevron-right"></i> Créer un compte</a></li>
                        <li><a href="modifier_mon_profil.php"><i class="fas fa-chevron-right"></i> Modifier mon profil</a></li>
                        <li><a href="reinitialiser_mon_mot_de_passe.php"><i class="fas fa-chevron-right"></i> Réinitialiser mon mot de passe</a></li>
                        <li><a href="supprimer.php"><i class="fas fa-chevron-right"></i> Supprimer mon compte</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="help-card">
                <div class="help-card-header">
                    <i class="fas fa-briefcase"></i> Offres d'Emploi
                </div>
                <div class="help-card-body">
                    <ul>
                        <li><a href="postuler_à_une_offre.php"><i class="fas fa-chevron-right"></i> Postuler à une offre</a></li>
                        <li><a href="suivre_candidature.php"><i class="fas fa-chevron-right"></i> Suivre mes candidatures</a></li>
                        <li><a href="recevoir_des_alertes.php"><i class="fas fa-chevron-right"></i> Recevoir des alertes</a></li>
                        <li><a href="conseil_pour_postuler.php"><i class="fas fa-chevron-right"></i> Conseils pour postuler</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="help-card">
                <div class="help-card-header">
                    <i class="fas fa-building"></i> Entreprises
                </div>
                <div class="help-card-body">
                    <ul>
                        <li><a href="publier_offre.php"><i class="fas fa-chevron-right"></i> Publier une offre</a></li>
                        <li><a href="gerer.php"><i class="fas fa-chevron-right"></i> Gérer mes offres</a></li>
                        <li><a href="consulter.php"><i class="fas fa-chevron-right"></i> Consulter des CV</a></li>
                        <li><a href="solution.php"><i class="fas fa-chevron-right"></i> Solutions RH</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="faq-section">
            <h2><i class="fas fa-question-circle"></i> Questions Fréquentes</h2>
            
            <div class="faq-item">
                <div class="faq-question">Comment créer un compte sur AIM Global ?</div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Pour créer un compte :</p>
                        <ol>
                            <li>Cliquez sur "S'inscrire" en haut à droite de la page d'accueil</li>
                            <li>Choisissez entre "Candidat" ou "Entreprise"</li>
                            <li>Remplissez le formulaire avec vos informations</li>
                            <li>Confirmez votre email en cliquant sur le lien reçu</li>
                            <li>Complétez votre profil pour augmenter vos chances</li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Comment postuler à une offre d'emploi ?</div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Pour postuler à une offre :</p>
                        <ol>
                            <li>Connectez-vous à votre compte candidat</li>
                            <li>Trouvez l'offre qui vous intéresse via la recherche</li>
                            <li>Lisez attentivement la description complète</li>
                            <li>Cliquez sur "Postuler"</li>
                            <li>Ajoutez un CV et une lettre de motivation si demandé</li>
                            <li>Suivez votre candidature dans votre espace personnel</li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">J'ai oublié mon mot de passe, que faire ?</div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Pour réinitialiser votre mot de passe :</p>
                        <ol>
                            <li>Allez sur la page de connexion</li>
                            <li>Cliquez sur "Mot de passe oublié ?"</li>
                            <li>Entrez l'email associé à votre compte</li>
                            <li>Cliquez sur le lien dans l'email reçu</li>
                            <li>Créez un nouveau mot de passe sécurisé</li>
                            <li>Confirmez le nouveau mot de passe</li>
                        </ol>
                        <p class="note"><i class="fas fa-info-circle"></i> Si vous ne recevez pas l'email, vérifiez vos spams ou contactez notre support.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Comment mettre à jour mon CV sur la plateforme ?</div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Pour mettre à jour votre CV :</p>
                        <ol>
                            <li>Connectez-vous à votre compte</li>
                            <li>Allez dans "Mon Profil" puis "Mon CV"</li>
                            <li>Cliquez sur "Modifier"</li>
                            <li>Mettez à jour les informations nécessaires</li>
                            <li>Vous pouvez aussi importer un nouveau fichier CV</li>
                            <li>N'oubliez pas de sauvegarder les modifications</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <h2><i class="fas fa-envelope"></i> Contactez notre équipe</h2>
            
            <div class="contact-methods">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-info">
                        <h3>Par téléphone</h3>
                        <p>+33 1 23 45 67 89</p>
                        <p>Lundi-vendredi, 9h-18h</p>
                    </div>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-info">
                        <h3>Par email</h3>
                        <p>support@aimglobal.com</p>
                        <p>Réponse sous 24h</p>
                    </div>
                </div>
                
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="contact-info">
                        <h3>Chat en direct</h3>
                        <p>Disponible 24/7</p>
                        <p>Avec nos assistants virtuels</p>
                    </div>
                </div>
            </div>
            
            <div id="statusMessage" class="status-message"></div>
            
            <form id="contactForm" class="contact-form">
                <div class="form-group">
                    <label for="name">Votre nom complet *</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Votre email *</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Sujet *</label>
                    <input type="text" id="subject" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Votre message *</label>
                    <textarea id="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Envoyer le message
                </button>
            </form>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="mention.php">Mentions légales</a>
                <a href="confidentialite.php">Confidentialité</a>
                <a href="condition.php">Conditions d'utilisation</a>
                <a href="accessibilite.php">Accessibilité</a>
                <a href="site.php">Plan du site</a>
            </div>
            <div class="copyright">
                &copy; 2025 AIM Global. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        // Gestion de l'accordéon FAQ avec animation fluide
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const answer = question.nextElementSibling;
                const isOpen = question.classList.contains('active');
                
                // Fermer tous les autres éléments ouverts
                document.querySelectorAll('.faq-question.active').forEach(openQuestion => {
                    if (openQuestion !== question) {
                        openQuestion.classList.remove('active');
                        const openAnswer = openQuestion.nextElementSibling;
                        openAnswer.style.maxHeight = null;
                    }
                });
                
                // Basculer l'état actuel
                question.classList.toggle('active');
                
                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });

        // Simulation de recherche améliorée
        document.getElementById('searchButton').addEventListener('click', performSearch);
        document.getElementById('searchInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') performSearch();
        });
        
        function performSearch() {
            const query = document.getElementById('searchInput').value.trim();
            if (query) {
                // Ici, ajouter la logique de recherche réelle
                console.log(`Recherche pour: ${query}`);
                
                // Simulation de résultats
                const faqItems = document.querySelectorAll('.faq-item');
                let found = false;
                
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question').textContent;
                    if (question.toLowerCase().includes(query.toLowerCase())) {
                        found = true;
                        item.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        item.style.border = '2px solid var(--accent-color)';
                        setTimeout(() => {
                            item.style.border = '1px solid var(--light-gray)';
                        }, 3000);
                    }
                });
                
                if (!found) {
                    alert(`Aucun résultat trouvé pour "${query}". Essayez avec d'autres termes.`);
                }
            } else {
                alert('Veuillez entrer un terme de recherche');
            }
        }

        // Gestion du formulaire de contact
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const statusMessage = document.getElementById('statusMessage');
            statusMessage.textContent = 'Envoi en cours...';
            statusMessage.style.display = 'block';
            
            // Simulation d'envoi avec délai
            setTimeout(() => {
                statusMessage.className = 'status-message success';
                statusMessage.innerHTML = `
                    <i class="fas fa-check-circle"></i> Votre message a été envoyé avec succès ! 
                    Notre équipe vous répondra dans les plus brefs délais.
                `;
                
                // Réinitialiser le formulaire
                this.reset();
            }, 1500);
        });
    </script>
</body>
</html>