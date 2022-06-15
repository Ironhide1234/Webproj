<?php
    $a = 10;//integer
    $b = 4.12;//float
    $c = "Hello World";//string
    $k = true;//boolean
    echo "$a" . "<br>";
    $array = array(
        'John',
        'Wick',
        'Hero',
    );//array
    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]}" . "<br>";
    }
    $f = [
        'name' => 'Arsenii',
        'surname' => 'Mets',
        'education' => 'kpi',
    ];//multi-dimension array
    foreach ($f as $name => $answer) {
        echo "{$name} data: $answer" . '<br>';
    }
    if($a > $b){
        echo "First is bigger" . "</br>";
    }else{
        echo "Second is bigger" . "</br>";
    }
    $textel = "6";
    $el = 6;
    if($textel === $el){
       echo "Equal by all means" . "</br>";
    }else if($textel = $el){
        echo "Equal by values" . "</br>";
    }else{
        echo "Variables aren't equal at all";
    }

    var_dump($textel + $el);
    class Human{
        private $name;
        private $surname;
        private $age;
        public function __construct(){
        }
        ///
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        ///
        public function getSurname(){
            return $this->surname;
        }
        public function setSurname($name){
            $this->surname = $surname;
        }
        ///
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            $this->age = $age;
        }
    }
    class Man extends Human{
        private $male;
        private $mindset;
        public function __constructor($male, $mindset){
            parent::__construct();
            $this->male = male;
            $this->mindset = mindset;
        }
    }
    class Singleton{
        private static $_instance = null;
        private function __construct(){

        }
        public function __clone(){

        }
        static public function getInstance(){
            if(is_null(self::$_instance)){
                self::$_instance = new self();
            }
            return self::$_instance;
        }
    }
    $inst1 = Singleton::getInstance();
    $inst2 = Singleton::getInstance();
    if(inst1 === inst2){
        echo "<br>Instances are same";
    }else{
        echo "<br>Instances are different";
    }

    $person = new Human;
    $person->setName(Arsenii);
    $name = $person->getName();
    echo "<br>" . "$name";