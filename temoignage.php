<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Témoignages - AIM Global</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --dark-color: #2b2d42;
            --light-color: #f8f9fa;
            --success-color: #4ad66d;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.7;
        }

        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            z-index: 1000;
            display: inline-flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 12px 20px;
            border-radius: 50px;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            box-shadow: var(--shadow);
            transition: var(--transition);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .home-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background-color: white;
            color: var(--secondary-color);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNwYXR0ZXJuKSIvPjwvc3ZnPg==');
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }

        .container {
            max-width: 1200px;
            margin: -40px auto 60px;
            padding: 0 20px;
            position: relative;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            right: 30px;
            font-family: serif;
            font-size: 5rem;
            color: var(--accent-color);
            opacity: 0.1;
            line-height: 1;
        }

        .testimonial-card .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .testimonial-card img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid var(--accent-color);
        }

        .testimonial-card .user-text h3 {
            margin: 0 0 5px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .testimonial-card .user-text p.role {
            color: var(--secondary-color);
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .testimonial-card blockquote {
            font-style: italic;
            color: #555;
            margin: 0;
            position: relative;
            padding-left: 20px;
            border-left: 3px solid var(--accent-color);
        }

        .add-testimonial {
            text-align: center;
            margin-top: 60px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, var(--accent-color), var(--primary-color));
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        }

        .cta-button i {
            margin-left: 10px;
        }

        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 60px;
        }

        footer p {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            header {
                padding: 80px 20px 60px;
            }
            
            header h1 {
                font-size: 2.2rem;
            }
            
            .home-link {
                top: 15px;
                left: 15px;
                padding: 10px 15px;
                font-size: 0.9rem;
            }
            
            .testimonial-card .user-info {
                flex-direction: column;
                text-align: center;
            }
            
            .testimonial-card img {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <i class="fas fa-home"></i> Retour à l'accueil
    </a>

    <header>
        <h1>Témoignages de Nos Utilisateurs</h1>
        <p>Découvrez ce que nos utilisateurs pensent de AIM Global</p>
    </header>

    <div class="container">
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="user-info">
                    <img src="assets/user1.jpg" alt="Photo de Jean Dupont">
                    <div class="user-text">
                        <h3>Jean Dupont</h3>
                        <p class="role">Développeur Web</p>
                    </div>
                </div>
                <blockquote>
                    AIM Global a révolutionné ma recherche d'emploi. En seulement deux semaines, j'ai découvert des opportunités parfaitement adaptées à mon profil. L'interface est intuitive et les fonctionnalités de suivi sont exceptionnelles.
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="user-info">
                    <img src="assets/user2.jpg" alt="Photo de Marie Martin">
                    <div class="user-text">
                        <h3>Marie Martin</h3>
                        <p class="role">Chef de Projet</p>
                    </div>
                </div>
                <blockquote>
                    En tant que recruteuse, AIM Global m'a fait gagner un temps précieux. L'algorithme de matching est incroyablement précis et j'ai pu constituer une équipe talentueuse en un temps record. Une plateforme indispensable !
                </blockquote>
            </div>

            <div class="testimonial-card">
                <div class="user-info">
                    <img src="assets/user3.jpg" alt="Photo de Thomas Leroy">
                    <div class="user-text">
                        <h3>Thomas Leroy</h3>
                        <p class="role">Designer UX/UI</p>
                    </div>
                </div>
                <blockquote>
                    La qualité des offres sur AIM Global dépasse largement les autres plateformes. J'ai particulièrement apprécié les conseils personnalisés pour améliorer mon profil, qui ont abouti à plusieurs propositions intéressantes.
                </blockquote>
            </div>
        </div>

        <div class="add-testimonial">
            <button class="cta-button" onclick="window.location.href='ajouter_temoignage.php'">
                Partagez votre expérience <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 AIM Global. Tous droits réservés.</p>
    </footer>

    <script>
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.testimonial-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            cards.forEach((card, index) => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                observer.observe(card);
            });
        });
    </script>
</body>
</html>