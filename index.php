<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); // code to report ERRORS


function orderPizza($typePizza, $forWho)
{
    
    echo 'Creating new order... <br>';

    $orderBill = pizzaPrice($typePizza);
    
        if($forWho == 'Koen')
        {
            $address = 'SS Antwerp in Antwerp Poort 1783';
        }
        else if ($forWho == 'Manuele')
        {
            $address = ' Lommelstraat 80, 8400 Oostende';
        } 
        else if ($forWho == 'Students')
        {
            $address = 'BeCode office';
        }
        else if ($forWho == 'Colin')
        {
            $address = 'Schommelstraat 71, 9000 Gent';
        }

        $letterA = 'A '.$typePizza;
        $letterA .=' pizza should be sent to '.$forWho.". <br>The address: {$address}.";
        echo $letterA; 
        echo '<br>';
        echo 'The bill is €'.$orderBill.'.<br>';
        echo "Order finished.<br><br>";
   
    }
    
    function pizzaPrice($typePizza)
    {
        if ($typePizza == 'Marguerita')
        {
            $cost = 5;
        }
        if ($typePizza == 'Golden')
        {
            $cost = 100;
        }
        if ($typePizza == 'Calzone')
        {
            $cost = 10;
        }
        if ($typePizza == 'Hawaii')
        {
            $cost = ' Computer says no';
        }
        return $cost;  
    }

    function order()
    {
        orderPizza('Calzone', 'Koen');
        orderPizza('Marguerita', 'Manuele');
        orderPizza('Golden', 'Students');
        orderPizza('Hawaii', 'Colin');
    }

    function send($send)
    {
    if ($send)
    {
        order();
    }
    else
    {
        // Should not do anything when false
    }
}
    send(true);