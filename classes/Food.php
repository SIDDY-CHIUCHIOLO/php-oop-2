<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $ingrediants;
    public $deadline;
    /**
     * crea un nuovo cibo
     *
     * @param array $ingrediants sono gli ingredienti del prodotto
     * @param string $deadline è la scadenza del prodotto
     * 
     */
    function __construct($name, $description, $price,array $ingrediants,string $deadline){

        parent::__construct($name, $description, $price);

        $this->ingrediants = $ingrediants;
        $this->deadline = $deadline;
    }

    public function getIngrediants(){
        return $this->ingrediants;
    }

    public function setIngrediants($ingrediants){
        $this->ingrediants = $ingrediants;
    }

    public function getDeadline(){
        return $this->deadline;
    }

    public function setDeadline($deadline){
        $this->deadline = $deadline;
    }
}

?>