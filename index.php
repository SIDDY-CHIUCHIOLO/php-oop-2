<?php
    /**
     *
        L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
        Il pagamento avviene con la carta di credito, che non deve essere scaduta.
     */
    require_once __DIR__ .'/classes/Product.php';
    require_once __DIR__ .'/classes/Food.php';
    require_once __DIR__ .'/classes/Buyer.php';
    require_once __DIR__ .'/classes/CreditCard.php';

    $carne = new Food('carne','carne in scatola', 10.99, ['pollo', 'vitello', 'carote'], '22/06/2023');
    $cartaDiCredito = new CreditCard(2394484747781, 2023, 11.99);
    $acquirente = new Buyer('Marco', 'Pinamonti', 20, true, $cartaDiCredito)

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OPP 2</title>
</head>
<body>
    <h1>OOP 2</h1>
    <?php
        var_dump($carne);
        var_dump($cartaDiCredito);
        var_dump($acquirente);
        echo $acquirente->buyNewProduct($carne);
    ?>
</body>
</html>