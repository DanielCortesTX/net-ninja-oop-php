<?php 

  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      return "$this->email added a new friend";
    }

    // getters
    public function getEmail(){
      return $this->email;
    }

    //setters
    public function setEmail(){
      if(strpos($email, '@') > -1){
        $this->email = $email;
      }
    }
  }

  class AdminUser extends User {
    // this has inherited everything from User
    public $level;

    public function __construct($username, $email, $level){
      //have to redeclare previous properties
      $this->level = $level;
      // use parent to inherit 
      parent::__construct($username, $email);

    }

  }

  $userOne = new User('mario', 'mario@gmail.com');
  $userTwo = new User('luigi', 'luigi@gmail.com');
  $userThree = new AdminUser('yoshi', 'yoshi@gmail.com', 5);

  echo $userThree->username . '<br>';
  echo $userThree->getEmail() . '<br>';
  echo $userThree->level . '<br>';
  // echo $userThree->username . '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>