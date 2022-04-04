<?php
class User{
        public $name;
        public $surname;
        public $age; 
        public function save_to_sassion(){
            $_SESSION['name'] = $this->name;
            $_SESSION['surname'] = $this->surname;
            $_SESSION['age'] = $this->age;
        }
        public function load_from_form(){
            $this->name = $_POST['name'];
            $this->surname = $_POST['surname'];
            $this->age = $_POST['age'];
        }
        public function get_name(){
            if (isset($this->name)){
                return $this->name;
            }
            return '';
        }
        public function get_surname(){
            if (isset($this->surname)){
                return $this->surname;
            }
            return '';
        }
        public function get_age(){
            if (isset($this->age)){
                return $this->age;
            }
            return '';
        }
    }
abstract class Pet{
    private $name;
    private $poroda;
    private $toy;

    public function __construct($n, $p, $t){
        $this->name = $n;
        $this->poroda = $p;
        $this->toy = $t;
    }

    public function show(){
        echo sprintf('Привет, я %s и я %s <br>',  $this->name, $this->poroda);
    }

    abstract public function voice();

    public function game(){
        echo 'Я играю с ';
        $this->toy->display();
        echo '<br><br>';
    }
}
class Dog extends Pet{
    public function voice(){
        echo 'Гав-гав<br>';
    }
}

class Cat extends Pet{
    public function voice(){
        echo 'Мяу-мяу<br>';
    }
}
class Toy{
    private $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function display(){
        echo $this->name; 
    }
}
?>