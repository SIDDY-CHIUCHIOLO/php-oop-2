<?php

class CreditCard{
    public $number;
    public $expiration_date;
    public $balance;
    
    /**
     * crea una carta di credito
     *
     * @param float $number è il numero della carta di credito
     * @param int $expiration_date è la scadenza della cata di craedito
     * @param int $balance è il saldo corrente nella cata di craedito
     * 
     * 
     */
    function __construct(float $number,int $expiration_date,int $balance){
        $this->number = $number;
        $this->expiration_date = $expiration_date;
        $this->balance = $balance ;

    }

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $this->number = $number;
    }
    
    public function getExpiration_date(){
        return $this->expiration_date;
    }

    public function setExpiration_date($expiration_date){
        $this->expiration_date = $expiration_date;
    }


    public function getBalance(){
        return $this->balance;
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }
}

?>