<?php
/**
 * Classes to Compute Abstraction Problem
 */
abstract class Bike{
    public abstract function getCompanyName($name);
    public abstract function getPrice($price);
}

class Sports extends Bike{
    /**
     * Function to get the Company name
     * passing name as a parameter and 
     * printing the company name
     */
    public function getCompanyName($name)
    {
        echo "The Bike is of " . $name ." Company ";
    }

    /**
     * Function to get the Bike Price
     * passing the price as a parameter and 
     * printing the Bike Price
     */
    public function getPrice($price){
        echo "and its Price is " . $price; 
    }
}

$sports = new Sports();

$name = readline('Enter the Name of Bike Company: ');
$price = readline('Enter the Bike Price: ');

$sports->getCompanyName($name);
$sports->getPrice($price);
?>