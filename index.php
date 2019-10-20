<?php 

  class User {

    public $username;
    // protected allows inheritance to be changed
    protected $email;
    public $role = 'member';

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function __destruct(){
      // removes reference to created object
      echo "the user $this->username was removed" . '<br>';
    }

    public function __clone(){
      $this->username = $this->username . '(cloned)<br>';
    }

    public function addFriend(){
      return "$this->email added a new friend";
    }

    public function message(){
      return "$this->email sent a new nessage";
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
    // override a property that was inherited
    public $role = 'admin';
    

    public function __construct($username, $email, $level){
      //have to redeclare previous properties
      $this->level = $level;
      // use parent to inherit 
      parent::__construct($username, $email);

    }

    public function message(){
      return "$this->email, an admin, sent a new nessage";
    }

  }

  $userOne = new User('mario', 'mario@gmail.com');
  $userTwo = new User('luigi', 'luigi@gmail.com');
  $userThree = new AdminUser('yoshi', 'yoshi@gmail.com', 5);

  // unset($userOne);
  $userFour = clone $userOne;
  echo $userFour->username;

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