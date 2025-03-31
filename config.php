<?php
// config.php

// Paramètres de la base de données
define('DB_HOST', 'localhost'); // Adresse du serveur de base de données
define('DB_NAME', 'job_portal_aim_global'); // Nom de la base de données
define('DB_USER', 'root'); // Nom d'utilisateur de la base de données
define('DB_PASS', ''); // Mot de passe de la base de données
define('DB_CHARSET', 'utf8mb4'); // Encodage des caractères

// Paramètres de l'application
define('APP_NAME', 'AIM Global Job Portal'); // Nom de l'application
define('APP_VERSION', '1.0.0'); // Version de l'application
define('APP_URL', 'http://localhost/aim-global'); // URL de base de l'application

// Paramètres de sécurité
define('SECRET_KEY', 'your_secret_key_here'); // Clé secrète pour les sessions et les tokens
define('PASSWORD_SALT', 'your_password_salt_here'); // Sel pour le hachage des mots de passe
define('ALLOWED_ORIGINS', ['http://localhost:3000', 'https://aimglobal.com']); // Origines autorisées pour CORS

// Paramètres de messagerie
define('MAIL_HOST', 'smtp.example.com'); // Serveur SMTP
define('MAIL_PORT', 587); // Port SMTP
define('MAIL_USERNAME', 'no-reply@aimglobal.com'); // Nom d'utilisateur SMTP
define('MAIL_PASSWORD', 'your_email_password_here'); // Mot de passe SMTP
define('MAIL_FROM', 'no-reply@aimglobal.com'); // Adresse email d'envoi

// Paramètres de débogage
define('DEBUG_MODE', true); // Activer ou désactiver le mode débogage
define('LOG_FILE', __DIR__ . '/logs/app.log'); // Chemin du fichier de log

// Fonction pour se connecter à la base de données
function db_connect() {
    try {
        $pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        if (DEBUG_MODE) {
            error_log("Erreur de connexion à la base de données: " . $e->getMessage());
        }
        throw new Exception("Impossible de se connecter à la base de données.");
    }
}

// Fonction pour enregistrer les logs
function log_message($message, $level = 'info') {
    if (!DEBUG_MODE) return;

    $logEntry = sprintf(
        "[%s] [%s] %s\n",
        date('Y-m-d H:i:s'),
        strtoupper($level),
        $message
    );

    file_put_contents(LOG_FILE, $logEntry, FILE_APPEND);
}

// Exemple d'utilisation des logs
log_message('Application démarrée.', 'info');

// Sécurité : Empêcher l'accès direct au fichier
if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    http_response_code(403);
    exit('Accès interdit.');
}
?>
