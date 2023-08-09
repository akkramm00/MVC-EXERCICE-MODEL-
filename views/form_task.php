<!DOCTYPE html>
<html>
  <head>
    <title>Ajouter une tâche</title>
  </head>
  <body>
    <h1>Ajouter une tâche</h1>
    
    <!--complement de code -->
    <form action="<?= BASE_URL ?>/add-task" method="post">
      <label for="title">Titre : </label>
      <input type="text" name="title" id="title"><br><br>
      
      <label for="description">Dsecription : </label>
      <textarea type="description" name="description" id="description"></textarea><br><br>

      <button type="submit" name="task">Ajouter la tache</button>
    </form>

    <form action="<?= BASE_URL ?>/task-list" method="post">
      <button type="submit">Voir la liste des taches</button>
    </form>
    
  </body>
</html>