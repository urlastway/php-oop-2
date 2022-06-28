<?php 

require_once __DIR__ . '/product.php';

class toy extends product{
    public $type;
    public $size;

    public function __construct(string $_name, int $_price, string $_quality, string $_animalType, string $_type, int $_size){

        parent::__construct($_name, $_price, $_quality, $_animalType);
        $this->type = $_type;
        $this->size = $_size;
    }
}

?>