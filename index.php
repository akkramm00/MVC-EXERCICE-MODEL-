<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
   <h1>MVC exercice défi</h1>
    <h2>Ennoncé</h2>
    Vous êtes un développeur travaillant  sur une application de gestion de tâches. Votre tâche consiste à implémenter la fonctionnalité permettant à l'utilisateur d'ajouter des tâches et d'afficher la liste des tâches existantes. Pour cela, vous devez utiliser le modèle de conception MVC.

    <h3>Question</h3>
    En vous fiant au contenu de Task.php, et homeController.php,complétez le code attendu dans form_task.ph et TaskController.php.

<?php
// définition des constantes
define("BASE_URL", "/mvc_pratique");

// inclusion des classes:
require_once 'controllers/HomeController.php';
//Ajout de  controller TaskController:
require_once 'controllers/TaskContoller.php';
require_once 'models/Router.php';

// Inclusion de la class Task:
require_once 'models/Task.php';

// Instanciation du router:

$router = new Router();

// Définition des routes :
 $router->addRoute('POST', BASE_URL.'/', 'HomeController', 'index') ;

// Création des nouvelles routes:
 $router->addRoute('POST', BASE_URL.'/add-task','TaskController', 'addTask') ;
 $router->addRoute('POST', BASE_URL.'/taskList', 'TaskController', 'taskList' ) ;

// Récupération des informations de la requête :
$method = $_SERVER['REQUEST_METHOD'].
$uri = $_SERVER['REQUEST_URI'].

// Récupération du handler assicié à la requête :
  $handler = $router-> getHandler($method, $uri);

var_dump($method);
var_dump($uri);
var_dump($handler);

if($handler ==null) {
  header('HTTP/1.1 404 Not found');
  exit();
}

  // appel du controleur assicié à la requête :
$controller = new $handler['controller'] ();
$action = $handler['action'];
$controller->$action();


?>
      
  </body>
</html>