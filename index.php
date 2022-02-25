<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); // code to report ERRORS

function orderPizza($typePizza, $forWho)
{
    echo 'Creating new order... <br>';

    $price = calculatCost($typePizza);
        if($forWho == 'koen')
        {
            $address = 'a yacht in Antwerp';
        }
        else if ($forWho == 'manuele')
        {
            $address = 'somewhere in Belgium';
        } 
        else if ($forWho == 'students')
        {
            $address = 'BeCode office';
        }

        $letterA = 'A '.$typePizza;
    
        $letterA .=' pizza should be sent to '.$forWho.". <br>The address: {$address}.";
        echo $letterA; 
        echo '<br>';
        echo 'The bill is €'.$price.'.<br>';
        echo "Order finished.<br><br>";
    }

    function calculatCost($typePizza)
    {
        if ($typePizza == 'marguerita')
        {
            $cost = 5;
        }
        if ($typePizza == 'golden')
        {
            $cost = 100;
        }
        if ($typePizza == 'calzone')
        {
            $cost = 10;
        }
        if ($typePizza == 'hawaii')
        {
            throw new Exception('Computer says no');
        }
        return $cost;
    }
    
    function allPizzasOrderd()
    {
        orderPizza('calzone', 'koen');
        orderPizza('marguerita', 'manuele');
        orderPizza('golden', 'students');
    }
    
    function make_Allhappy($do_it)
    {
    if ($do_it)
    {
        allPizzasOrderd();
    }
    else
    {
        // Should not do anything when false
    }
}
    make_Allhappy(true);