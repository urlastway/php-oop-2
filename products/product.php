<?php 

class product {

    public $name;
    public $price;
    public $quality;
    public $animalType;

    public function __construct(string $_name, int $_price, string $_quality, string $_animalType){
        $this->name = $_name;
        $this->price = $_price;
        $this->quality = $_quality;
        $this->animalType = $_animalType;
    }
}

?>