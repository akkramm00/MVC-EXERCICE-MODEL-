<?php
require_once 'models/Task.php';

class HomeController {
  public function index() {
    include 'views/form_task.php';
  }
}
?>