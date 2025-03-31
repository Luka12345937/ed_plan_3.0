<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - AIM Global</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Styles spécifiques à la page de solutions */
        :root {
            --primary-color: #007BFF;
            --secondary-color: #6C757D;
            --background-color: #F8F9FA;
            --accent-color: #FFC107;
            --dark-color: #343A40;
            --light-color: #FFFFFF;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--dark-color);
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #0056b3);
            color: white;
            padding: 60px 20px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
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

        .home-link {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            z-index: 10;
        }

        .home-link:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-3px);
        }

        .home-link i {
            margin-right: 8px;
            font-size: 1.1em;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .solution-section {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            border-left: 5px solid var(--primary-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .solution-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .solution-section h2 {
            color: var(--primary-color);
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .solution-section h2 svg {
            margin-right: 15px;
            width: 28px;
            height: 28px;
        }

        .solution-section p {
            color: var(--secondary-color);
            margin-bottom: 15px;
            line-height: 1.7;
        }

        .solution-section strong {
            color: var(--dark-color);
        }

        .faq-section {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            border-left: 5px solid var(--accent-color);
        }

        .faq-section h2 {
            color: var(--primary-color);
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .faq-section h2 svg {
            margin-right: 15px;
            width: 28px;
            height: 28px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item h3 {
            color: var(--dark-color);
            cursor: pointer;
            padding: 15px 20px;
            background-color: var(--background-color);
            margin: 0;
            display: flex;
            align-items: center;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .faq-item h3::before {
            content: '+';
            margin-right: 15px;
            font-weight: bold;
            color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .faq-item.active h3::before {
            content: '-';
        }

        .faq-item h3:hover {
            background-color: #e9ecef;
        }

        .faq-item p {
            color: var(--secondary-color);
            display: none;
            padding: 20px;
            margin: 0;
            background-color: var(--light-color);
            border-left: 3px solid var(--accent-color);
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .faq-item.active p {
            display: block;
        }

        .contact-section {
            background: linear-gradient(135deg, var(--light-color), #f1f3f5);
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .contact-section h2 {
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .contact-section h2 svg {
            margin-right: 15px;
            width: 28px;
            height: 28px;
        }

        .contact-section p {
            color: var(--secondary-color);
            margin-bottom: 25px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .contact-section button {
            background: linear-gradient(135deg, var(--primary-color), #0056b3);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        .contact-section button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
        }

        .contact-section button::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .contact-section button:hover::after {
            opacity: 1;
        }

        /* Effets modernes */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
                margin: 30px auto;
            }

            header {
                padding: 50px 15px 30px;
            }

            .home-link {
                top: 15px;
                left: 15px;
                padding: 6px 12px;
                font-size: 0.9em;
            }

            .solution-section,
            .faq-section,
            .contact-section {
                padding: 25px;
            }

            .contact-section button {
                padding: 13px 30px;
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="home-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
        <h1>Solutions et Assistance</h1>
        <p>Trouvez des réponses à vos questions et des solutions à vos problèmes</p>
    </header>

    <div class="container">
        <section class="solution-section floating">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    <path d="M12 12l-4 4h8l-4-4z"></path>
                </svg>
                Solutions Courantes
            </h2>
            <p><strong>Problème de connexion :</strong> Assurez-vous que votre email et votre mot de passe sont corrects. Si vous avez oublié votre mot de passe, utilisez l'option "Mot de passe oublié" pour le réinitialiser.</p>
            <p><strong>Problème de candidature :</strong> Vérifiez que tous les champs obligatoires sont remplis et que votre CV est au format PDF.</p>
            <p><strong>Problème de notification :</strong> Vérifiez vos paramètres de notification dans votre profil pour vous assurer que les alertes sont activées.</p>
        </section>

        <section class="faq-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
                Questions Fréquentes
            </h2>
            <div class="faq-item" onclick="toggleFAQ(this)">
                <h3>Comment réinitialiser mon mot de passe?</h3>
                <p>Rendez-vous sur la page de connexion et cliquez sur "Mot de passe oublié". Suivez les instructions pour réinitialiser votre mot de passe. Un email contenant un lien de réinitialisation vous sera envoyé. Ce lien est valable pendant 24 heures.</p>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
                <h3>Comment postuler à une offre d'emploi?</h3>
                <p>Connectez-vous à votre compte, allez sur l'offre qui vous intéresse et cliquez sur "Postuler". Remplissez le formulaire et téléversez votre CV. Vous recevrez une confirmation par email une fois votre candidature envoyée avec succès.</p>
            </div>
            <div class="faq-item" onclick="toggleFAQ(this)">
                <h3>Comment gérer mes alertes?</h3>
                <p>Allez dans votre profil et sélectionnez "Recevoir des Alertes". Vous pouvez activer ou désactiver les alertes par email ou SMS. Personnalisez vos préférences pour ne recevoir que les offres correspondant à vos critères.</p>
            </div>
        </section>

        <section class="contact-section">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 2H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
                    <polyline points="22 6 12 13 2 6"></polyline>
                </svg>
                Contactez-Nous
            </h2>
            <p>Si vous n'avez pas trouvé la réponse à votre question, notre équipe est disponible pour vous aider. Nous nous engageons à vous répondre dans les 24 heures.</p>
            <button onclick="window.location.href='contact.php'">Nous Contacter</button>
        </section>
    </div>

    <script>
        // Gestion des FAQ
        function toggleFAQ(item) {
            item.classList.toggle('active');
        }

        // Animation au scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.solution-section, .faq-section, .contact-section');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            sections.forEach(section => {
                section.style.opacity = 0;
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(section);
            });
        });
    </script>
</body>
</html>