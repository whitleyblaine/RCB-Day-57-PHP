<?php

class User {
  public $first_name;
  private $last_name;
  private $email;
  private $imageUrl;

  public function __contruct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  private function println ($string) {
    echo "$string\n";
  }

  public function setImageUrl ($url) {
    return $this->pic = $url;
  }

  public function getFullName ()
}












?>