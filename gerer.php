<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer Mes Offres - AIM Global</title>
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
            --danger-color: #f72585;
            --warning-color: #f8961e;
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
            line-height: 1.6;
        }

        .home-link {
            position: fixed;
            top: 30px;
            left: 30px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-weight: 600;
            z-index: 100;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 12px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px);
        }

        .home-link i {
            margin-right: 10px;
            font-size: 18px;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 20px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
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
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: -40px auto 60px;
            padding: 0 20px;
            position: relative;
        }

        .offers-list {
            display: grid;
            gap: 25px;
        }

        .offer-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--box-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .offer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(67, 97, 238, 0.2);
        }

        .offer-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-color), var(--primary-light));
        }

        .offer-details {
            flex: 1;
            padding-right: 20px;
        }

        .offer-details h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .offer-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .meta-item i {
            margin-right: 8px;
            font-size: 1rem;
            color: var(--primary-color);
        }

        .offer-actions {
            display: flex;
            gap: 10px;
            flex-shrink: 0;
        }

        .action-button {
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .action-button i {
            font-size: 1rem;
        }

        .edit-button {
            background: linear-gradient(135deg, var(--warning-color), #f9c74f);
            color: white;
        }

        .edit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(248, 150, 30, 0.3);
        }

        .delete-button {
            background: linear-gradient(135deg, var(--danger-color), #f15bb5);
            color: white;
        }

        .delete-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(247, 37, 133, 0.3);
        }

        .view-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .view-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 90%;
            max-width: 600px;
            position: relative;
            transform: translateY(0);
            animation: slideUp 0.4s ease-out;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        .modal-close:hover {
            color: var(--danger-color);
        }

        .modal-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-color);
        }

        .input-group input,
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .input-group input:focus,
        .input-group select:focus,
        .input-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .input-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .modal-button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .save-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .save-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .cancel-button {
            background-color: #e9ecef;
            color: var(--text-color);
        }

        .cancel-button:hover {
            background-color: #dee2e6;
        }

        .candidate-list {
            list-style: none;
        }

        .candidate-item {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .candidate-item:last-child {
            border-bottom: none;
        }

        .candidate-actions {
            display: flex;
            gap: 10px;
        }

        .candidate-button {
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .view-profile {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }

        .view-profile:hover {
            background-color: #3a56d5;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .offer-card {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .offer-actions {
                margin-top: 20px;
                width: 100%;
                justify-content: flex-start;
            }
            
            .action-button {
                flex: 1;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 80px 20px 60px;
            }
            
            .home-link {
                top: 20px;
                left: 20px;
                padding: 10px 15px;
                font-size: 14px;
            }
            
            .offer-actions {
                flex-wrap: wrap;
            }
            
            .action-button {
                flex: 1 0 calc(50% - 10px);
            }
            
            .modal-content {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 70px 15px 50px;
            }
            
            header h1 {
                font-size: 2rem;
            }
            
            .action-button {
                flex: 1 0 100%;
            }
            
            .modal-content {
                width: 95%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">
        <i class="fas fa-arrow-left"></i>
        Retour à l'accueil
    </a>

    <header>
        <h1>Gérer Mes Offres</h1>
    </header>

    <div class="container">
        <div class="offers-list">
            <!-- Exemple d'offre -->
            <div class="offer-card">
                <div class="offer-details">
                    <h3>Développeur Full Stack</h3>
                    <div class="offer-meta">
                        <div class="meta-item">
                            <i class="fas fa-building"></i>
                            <span>TechCorp International</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Paris (Hybride)</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Temps Plein</span>
                        </div>
                    </div>
                </div>
                <div class="offer-actions">
                    <button class="action-button edit-button" onclick="openModal('editModal')">
                        <i class="fas fa-edit"></i>
                        Modifier
                    </button>
                    <button class="action-button delete-button" onclick="confirmDelete()">
                        <i class="fas fa-trash-alt"></i>
                        Supprimer
                    </button>
                    <button class="action-button view-button" onclick="openModal('candidatesModal')">
                        <i class="fas fa-users"></i>
                        Candidats
                    </button>
                </div>
            </div>

            <!-- Autre offre -->
            <div class="offer-card">
                <div class="offer-details">
                    <h3>Designer UI/UX Senior</h3>
                    <div class="offer-meta">
                        <div class="meta-item">
                            <i class="fas fa-building"></i>
                            <span>CreativeMinds</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Télétravail</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Contrat</span>
                        </div>
                    </div>
                </div>
                <div class="offer-actions">
                    <button class="action-button edit-button" onclick="openModal('editModal')">
                        <i class="fas fa-edit"></i>
                        Modifier
                    </button>
                    <button class="action-button delete-button" onclick="confirmDelete()">
                        <i class="fas fa-trash-alt"></i>
                        Supprimer
                    </button>
                    <button class="action-button view-button" onclick="openModal('candidatesModal')">
                        <i class="fas fa-users"></i>
                        Candidats
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour la modification -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('editModal')">&times;</button>
            <h3 class="modal-title">Modifier l'Offre</h3>
            <form>
                <div class="input-group">
                    <label for="editTitle">Titre de l'Offre</label>
                    <input type="text" id="editTitle" value="Développeur Full Stack">
                </div>
                <div class="input-group">
                    <label for="editCompany">Entreprise</label>
                    <input type="text" id="editCompany" value="TechCorp International">
                </div>
                <div class="input-group">
                    <label for="editLocation">Localisation</label>
                    <input type="text" id="editLocation" value="Paris (Hybride)">
                </div>
                <div class="input-group">
                    <label for="editType">Type de Contrat</label>
                    <select id="editType">
                        <option value="full-time">Temps Plein</option>
                        <option value="part-time">Temps Partiel</option>
                        <option value="contract">Contrat</option>
                        <option value="internship">Stage</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="editDescription">Description</label>
                    <textarea id="editDescription" rows="6">Nous recherchons un développeur full stack expérimenté pour rejoindre notre équipe produit. Vous travaillerez sur des projets innovants avec les dernières technologies.</textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-button cancel-button" onclick="closeModal('editModal')">Annuler</button>
                    <button type="submit" class="modal-button save-button">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal pour les candidatures -->
    <div id="candidatesModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('candidatesModal')">&times;</button>
            <h3 class="modal-title">Candidatures - Développeur Full Stack</h3>
            <ul class="candidate-list">
                <li class="candidate-item">
                    <span>Jean Dupont - Développeur Full Stack</span>
                    <div class="candidate-actions">
                        <button class="candidate-button view-profile">Voir profil</button>
                    </div>
                </li>
                <li class="candidate-item">
                    <span>Marie Martin - Ingénieure Logicielle</span>
                    <div class="candidate-actions">
                        <button class="candidate-button view-profile">Voir profil</button>
                    </div>
                </li>
                <li class="candidate-item">
                    <span>Pierre Durand - Développeur Front-end</span>
                    <div class="candidate-actions">
                        <button class="candidate-button view-profile">Voir profil</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        // Gestion des modales
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Fermer la modal en cliquant à l'extérieur
        window.onclick = function(event) {
            if (event.target.className === 'modal') {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Confirmation de suppression
        function confirmDelete() {
            if (confirm('Êtes-vous sûr de vouloir supprimer cette offre ? Cette action est irréversible.')) {
                // Ajouter ici la logique pour supprimer l'offre
                alert('Offre supprimée avec succès.');
                // window.location.reload(); // Recharger la page après suppression
            }
        }

        // Animation pour les cartes d'offres
        document.addEventListener('DOMContentLoaded', () => {
            const offerCards = document.querySelectorAll('.offer-card');
            offerCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>