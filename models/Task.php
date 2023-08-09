<?php

class Task
  {
    private $title:;
    private $description;

    public function __construct(string $title, string $description) {
      $this->titlle = $title;
      $this->description = $description;
    }

    public function getTitle() :string
    {
      return $this ->title;
    }

    public function getDescription() :string
    {
      return $this->description ;
    }
  }



?>