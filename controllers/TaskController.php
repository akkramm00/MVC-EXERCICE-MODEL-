<?php
require_once 'models/Task.php';
require_once 'config.php';
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

    // Ajout d'une method dans la class TaskController.php

    public function taskList()
    {
      if($_SERVER['RESQUEST_METHOD'] === "POST") {
        // code pour récupérer la liste des taches depuis la base de données:
        //Nouvelle connexion mysqli

        include 'config.php';
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // récupere la liste des taches dans la bdd
        $result = mysqli_query($conn, "SELECT * FROM task");
        echop "<h1>Liste des taches</h1>";

        // Boucle pour afficher chaque tache:
        while("$row = mysqli_fetch_assoc($result)) {

          echo "Titre de la tache : ".$row["title"] ."</br>";
        echo "Description de la tache : " . $row["description"];
        }

      // Fermeture de la connexion Mysqli :
       mysqli_close($conn);

      // affichage de la liste des taches avec la vue  task-list.php

      require_once 'views/task-list.php';
      }
    }
  }
?>