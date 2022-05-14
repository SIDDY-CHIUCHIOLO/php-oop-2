<?php

class Product{
    public $name;
    public $description;
    public $price;
    /**
     * crea un nuovo prodotto
     *
     * @param string $name è il nome del prodotto
     * @param string $description è la descrizione del prodotto
     * @param float $price è il prezzo del prodotto
     * 
     */
    function __construct(string $name,string $description,float $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

}

?>