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
    }

?>