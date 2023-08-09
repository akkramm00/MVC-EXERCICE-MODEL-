<?php
require_once 'models/Task.php';
require_once 'configphp';
class TaskController
  {
    public function addTask()
    {
      //CODE A COMPLETER

      // récupéer les informations du formulaire
      $title = $_POST['title'];
      $description = $_POST['description'];

      // Création de nouvelle tache en prrenat compte des valeurs du formulaire
      $task = new Task(string $title, string $description);
      echo "Title : ".$task->getTitle();
      echo "<br>Description de la tache : ".$task->getDescription();

      include 'config.php';
      $conn = mysqli_connect($host, $username, $password, $dbname);
      
      // Enregistrer tache dans la bdd:
      $stmt = $conn->prepare("INSERT INTO task (title, description) VALUES(?, ?)");
      $stmt->bind_param("ss", $title, $description);
      $stmt->execute();

      //fermeture de la connexion a la bdd
      $stmt->close();

      include 'views\form_task.php'
    }
  }
?>