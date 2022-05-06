<?php
/**
 * Classes to Compute Multi level inheritance Problem
 */
class MyName
{
    /**
     * Function to print name
     * passing name as parameter
     */
    public function myName($name)
    {
        echo "My name is " . $name.".";
    }
}
class MyAge extends MyName
{
    /**
     * Function to print age
     * passing age as parameter
     */
    public function myAge($age)
    {
        echo " I am " . $age . " years old";
    }
}
class MyNumber extends MyAge
{
    /**
     * Function to print number
     * passing number as parameter
     */
    public function myNumber($number)
    {
        echo " and my Phone Number is " . $number;
    }
}
$myNumberObj = new MyNumber();

$name = readline('Enter Your Name: ');
$age = readline('Enter Your Age: ');
$number = readline('Enter Your Phone Number: ');
$myNumberObj->myName($name);
$myNumberObj->myAge($age);
$myNumberObj->myNumber($number);

?>