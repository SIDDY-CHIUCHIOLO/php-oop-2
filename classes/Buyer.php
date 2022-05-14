<?php
require_once __DIR__ . '/CreditCard.php';


class Buyer{
    public $firt_name;
    public $last_name;
    public $age;
    public $is_registred;
    public $discount;
    public $credit_card;

    /**
     * crea un nuovo acquirente
     *
     * @param string $firt_name è il nome dell'acquirente
     * @param string $last_name è il vognome dell'acquirente
     * @param int $age l'età dell'acquirente
     * @param bool $is_registred è la verifica se l'acquirente è registrato
     * @param int $discount è lo sconto dell'acquirente se è registrato
     * @param $credit_card è la carta di credito dell'acquirente
     * 
     * 
     */
    function __construct(string $firt_name,string $last_name,int $age, bool $is_registred,  $credit_card){
        $this->firt_name = $firt_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->is_registred = $is_registred;
        $this->discount = $this->setDiscount();
        $this->setCredit_card($credit_card);
    }

    public function getFirst_name(){
        return $this->firt_name;
    }
    
    public function setFirst_name($firt_name){
        $this->firt_name = $firt_name;
    }
    
    public function getLast_name(){
        return $this->last_name;
    }

    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getIs_registred(){
        return $this->is_registred;
    }

    
    public function setIs_registred($is_registred){
        $this->is_registred = $is_registred;
    }
    
    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount(){
        if ($this->is_registred == true) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
        return $this->discount;
    }

    public function getCredit_card(){
        return $this->credit_card;
    }

    public function setCredit_card($credit_card){
        if($credit_card instanceof CreditCard){
            return $this->credit_card = $credit_card;
        } else {
            return false;
        }
    }

    public function buyNewProduct($product){

        if ($this->credit_card->expiration_date < date('Y')) {
                return 'Transazione non riuscita, la tua carta di credito è scuduta';
            }

        if ($this->credit_card->balance < $product->price){
            return 'Credito insufficiente';
        }
        
        if ($this->discount > 0) {
            $price = $product->price - $product->price / 100 * $this->discount;
            $this->credit_card->balance -= $price;

            return "Transazione riuscita, hai uno sconto del $this->discount%";
        } else {
            $this->credit_card->balance -= $product->price;

            return "Transazione riuscita";
        }
    }
}

?>