<?php
// app.php

// Chargement des fichiers de configuration et des dépendances
require_once __DIR__ . '/vendor/autoload.php'; // Pour les dépendances Composer
require_once __DIR__ . '/src/config.php'; // Fichier de configuration

// Initialisation des classes utiles
use App\Core\Router;
use App\Core\Request;
use App\Core\Response;

// Gestion des erreurs
error_reporting(E_ALL);
ini_set('display_errors', DEBUG_MODE ? '1' : '0');

// Initialisation de la session
session_start();

// Création d'une instance de Router
$router = new Router();

// Définition des routes
$router->get('/', function (Request $request, Response $response) {
    return $response->render('home.php', ['title' => 'Accueil']);
});

$router->get('/about', function (Request $request, Response $response) {
    return $response->render('about.php', ['title' => 'À Propos']);
});

$router->get('/jobs', 'JobController@index');
$router->post('/jobs', 'JobController@store');
$router->get('/jobs/{id}', 'JobController@show');

$router->get('/login', function (Request $request, Response $response) {
    return $response->render('login.php', ['title' => 'Connexion']);
});

$router->post('/login', 'AuthController@login');

// Gestion des erreurs 404
$router->set404Handler(function (Request $request, Response $response) {
    return $response->render('404.php', ['title' => 'Page Non Trouvée'], 404);
});

// Exécution du routeur
try {
    $router->run();
} catch (Exception $e) {
    if (DEBUG_MODE) {
        log_message('error', 'Erreur dans l\'application: ' . $e->getMessage());
    }
    http_response_code(500);
    echo 'Une erreur interne est survenue.';
}

// Classes utiles (à placer dans des fichiers séparés dans un projet réel)
class Request {
    public function __construct() {
        $this->params = $_REQUEST;
        $this->headers = getallheaders();
    }

    public function getParam($key, $default = null) {
        return $this->params[$key] ?? $default;
    }
}

class Response {
    public function render($view, $data = [], $status = 200) {
        extract($data);
        http_response_code($status);
        require __DIR__ . "/src/views/$view";
    }

    public function json($data, $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

class Router {
    private $routes = [];
    private $notFoundHandler;

    public function get($path, $handler) {
        $this->addRoute('GET', $path, $handler);
    }

    public function post($path, $handler) {
        $this->addRoute('POST', $path, $handler);
    }

    private function addRoute($method, $path, $handler) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler
        ];
    }

    public function set404Handler($handler) {
        $this->notFoundHandler = $handler;
    }

    public function run() {
        $request = new Request();
        $response = new Response();

        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->matchPath($route['path'], $path, $params)) {
                if (is_callable($route['handler'])) {
                    return $route['handler']($request, $response);
                } elseif (strpos($route['handler'], '@')) {
                    list($controller, $method) = explode('@', $route['handler']);
                    $controllerInstance = new $controller();
                    return $controllerInstance->$method($request, $response, $params);
                }
            }
        }

        if ($this->notFoundHandler) {
            return $this->notFoundHandler($request, $response);
        }

        http_response_code(404);
        echo 'Page non trouvée.';
    }

    private function matchPath($pattern, $path, &$params = []) {
        $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([^/]+)', $pattern);
        $regex = '#^' . $pattern . '$#';
        if (preg_match($regex, $path, $matches)) {
            array_shift($matches);
            $params = array_combine(array_map(function ($key) use ($pattern) {
                preg_match_all('/\{([a-zA-Z0-9_]+)\}/', $pattern, $keys);
                return $keys[1][$key];
            }, array_keys($matches)), $matches);
            return true;
        }
        return false;
    }
}

// Exemple de contrôleur (à placer dans des fichiers séparés dans un projet réel)
class JobController {
    public function index(Request $request, Response $response) {
        // Logique pour afficher la liste des offres d'emploi
        $jobs = [/* ... */];
        return $response->render('jobs/index.php', ['jobs' => $jobs]);
    }

    public function show(Request $request, Response $response, $params) {
        // Logique pour afficher une offre d'emploi spécifique
        $job = /* ... */;
        return $response->render('jobs/show.php', ['job' => $job]);
    }

    public function store(Request $request, Response $response) {
        // Logique pour créer une nouvelle offre d'emploi
        // ...
        return $response->json(['message' => 'Offre créée avec succès'], 201);
    }
}

class AuthController {
    public function login(Request $request, Response $response) {
        // Logique de connexion
        // ...
        return $response->json(['message' => 'Connexion réussie']);
    }
}
