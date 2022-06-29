<?php 

require_once __DIR__ . '/product.php';

class food extends product{
    public $type;
    public $expire_date;

    public function __construct(string $_name, int $_price, string $_quality, string $_animalType, string $_type, string $_expire_date){

        parent::__construct($_name, $_price, $_quality, $_animalType);

        $this->type = $_type;
        $this->expire_date = $_expire_date;
    }
}

?>