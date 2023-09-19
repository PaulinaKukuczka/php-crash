<?php

class User {

    //properties are attributes that belong to a class

    //public, private, protected(can only be accessed from inside the class and by inheriting classes)
    public $name;
    public $email;
    public $password;

    //a constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        // echo 'constructor ran <br>';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //methid is a function that belongs to a class
    //setter - setting properties
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

//instatiate a user object
$user1 = new User('Brad', 'brad@.org', 'dddo9975');
$user2 = new User('Brad', 'brad@.org', 'dddo9975');
$user3 = new User('Brad', 'brad@.org', 'dddo9975');

echo $user1->email;

// $user1 -> name = 'Brad';
// $user1 -> set_name('Brad');
// $user2 -> set_name('John');

// echo $user1->get_name();
// echo $user2->get_name();

// var_dump($user1);
// var_dump($user2);

//Inheritence

class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara2or.org', 'adsd7646efh', 'Manager');
echo $employee1->get_title();