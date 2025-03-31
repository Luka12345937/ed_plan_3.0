<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AIM Global - Portail d'emploi spécialisé pour trouver les meilleures opportunités professionnelles">
    <meta name="keywords" content="emploi, carrière, recrutement, offres d'emploi, développeur, chef de projet, designer">
    <meta name="theme-color" content="#007BFF">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>AIM Global - Portail Emploi | Trouvez l'emploi idéal</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --secondary-color: #4b5563;
            --background-color: #f9fafb;
            --text-color: #1f2937;
            --light-gray: #e5e7eb;
            --white: #ffffff;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --rounded-sm: 0.25rem;
            --rounded-md: 0.5rem;
            --rounded-lg: 0.75rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-md);
        }

        nav {
            background-color: var(--secondary-color);
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            flex-wrap: wrap;
            gap: 1rem;
        }

        nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: var(--rounded-sm);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        nav a:hover, nav a:focus {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            flex: 1;
        }

        .hero {
            text-align: center;
            padding: 3rem 1rem;
            background: linear-gradient(135deg, var(--primary-color), #1e40af);
            color: var(--white);
            border-radius: var(--rounded-md);
            margin-bottom: 2rem;
            box-shadow: var(--shadow-lg);
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-bar {
            max-width: 800px;
            margin: 2rem auto 0;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
        }

        .search-bar input, .search-bar select {
            padding: 0.75rem 1rem;
            border: none;
            border-radius: var(--rounded-sm);
            flex: 1 1 200px;
            font-size: 1rem;
        }

        .search-bar button {
            background-color: var(--white);
            color: var(--primary-color);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: var(--rounded-sm);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-bar button:hover {
            background-color: var(--light-gray);
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
            font-size: 2rem;
            font-weight: 600;
        }

        .featured-jobs {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .job-card {
            background-color: var(--white);
            border: 1px solid var(--light-gray);
            border-radius: var(--rounded-md);
            padding: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .job-card h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
        }

        .job-card .company {
            font-weight: 500;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .job-card .location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .job-card .salary {
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px dashed var(--light-gray);
            font-weight: 500;
        }

        .job-card .apply-btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--white);
            text-align: center;
            padding: 0.75rem;
            border-radius: var(--rounded-sm);
            text-decoration: none;
            font-weight: 500;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }

        .job-card .apply-btn:hover {
            background-color: var(--primary-hover);
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: left;
        }

        .footer-column h3 {
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column li {
            margin-bottom: 0.5rem;
        }

        .footer-column a {
            color: var(--light-gray);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column a:hover {
            color: var(--white);
            text-decoration: underline;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: var(--white);
            font-size: 1.25rem;
        }

        .copyright {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .job-card {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .job-card:nth-child(1) { animation-delay: 0.1s; }
        .job-card:nth-child(2) { animation-delay: 0.2s; }
        .job-card:nth-child(3) { animation-delay: 0.3s; }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            nav ul {
                gap: 0.5rem;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 2rem 1rem;
            }
            
            .search-bar {
                flex-direction: column;
            }
            
            .search-bar input, 
            .search-bar select, 
            .search-bar button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>AIM Global - Portail Emploi</h1>
        <p>Connectons les talents aux opportunités</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="jobs.php"><i class="fas fa-briefcase"></i> Offres d'Emploi</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> À Propos</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            <li><a href="login.php"><i class="fas fa-user"></i> Espace Candidat</a></li>
        </ul>
    </nav>

    <div class="container">
        <section class="hero">
            <h1>Trouvez l'Emploi de Vos Rêves</h1>
            <p>Rejoignez AIM Global et explorez des milliers d'opportunités professionnelles dans divers secteurs d'activité.</p>
            
            <div class="search-bar">
                <input type="text" placeholder="Mots-clés, compétences">
                <input type="text" placeholder="Localisation">
                <select>
                    <option value="">Tous les secteurs</option>
                    <option value="it">Informatique</option>
                    <option value="finance">Finance</option>
                    <option value="health">Santé</option>
                </select>
                <button type="submit"><i class="fas fa-search"></i> Rechercher</button>
            </div>
        </section>

        <h2 class="section-title">Offres à la Une</h2>
        <section class="featured-jobs">
            <div class="job-card">
                <h3>Développeur Full Stack</h3>
                <p class="company">TechCorp International</p>
                <p class="location"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                <p class="description">Nous recherchons un développeur full stack expérimenté pour rejoindre notre équipe produit.</p>
                <p class="salary">Salaire: 45K-60K €/an</p>
                <a href="postuler_maintenant.php" class="apply-btn">Postuler maintenant</a>
            </div>
            <div class="job-card">
                <h3>Chef de Projet Digital</h3>
                <p class="company">Innovate Ltd</p>
                <p class="location"><i class="fas fa-map-marker-alt"></i> Lyon, France</p>
                <p class="description">Gestion de projets digitaux pour des clients internationaux dans un environnement agile.</p>
                <p class="salary">Salaire: 50K-70K €/an</p>
                <a href="postuler_maintenant.php" class="apply-btn">Postuler maintenant</a>
            </div>
            <div class="job-card">
                <h3>Designer UX/UI Senior</h3>
                <p class="company">CreativeMinds Studio</p>
                <p class="location"><i class="fas fa-map-marker-alt"></i> Marseille, France</p>
                <p class="description">Conception d'interfaces utilisateur innovantes pour nos applications mobiles et web.</p>
                <p class="salary">Salaire: 40K-55K €/an</p>
                <a href="postuler_maintenant.php" class="apply-btn">Postuler maintenant</a>
            </div>
            <div class="job-card">
                <h3>Data Scientist</h3>
                <p class="company">DataInnov</p>
                <p class="location"><i class="fas fa-map-marker-alt"></i> Toulouse, France</p>
                <p class="description">Analyse de données complexes pour aider à la prise de décision stratégique.</p>
                <p class="salary">Salaire: 55K-75K €/an</p>
                <a href="postuler_maintenant.php" class="apply-btn">Postuler maintenant</a>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>AIM Global</h3>
                <p>Leader en recrutement et placement de talents depuis 2010.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="offres_d'emploi.php">Offres d'emploi</a></li>
                    <li><a href="entreprises.php">Entreprises</a></li>
                    <li><a href="conseils_carriere.php">Conseils carrière</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Ressources</h3>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="temoignage.php">Témoignages</a></li>
                    <li><a href="centre_d'aide.php">Centre d'aide</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Rue de Paris, 75001</li>
                    <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                    <li><i class="fas fa-envelope"></i> contact@aimglobal.com</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 AIM Global. Tous droits réservés. | <a href="politique_de_confidentalite.php">Politique de confidentialité</a> | <a href="condition_d'utilisateur.php">Conditions d'utilisation</a></p>
        </div>
    </footer>
</body>
</html>