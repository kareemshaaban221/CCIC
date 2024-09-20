<?php

abstract class Person {

    public static int $class_id = 0;
    public $id;
    public $name;
    public $email;
    public $address;

    function __construct() {
        static::$class_id++;
        $this->id = static::$class_id;
    }

    function walk() {
        echo static::class . " is walking";
    }

    abstract function work();

}

class Employee extends Person {

    public $salary;

    function work() {
        echo static::class ." is working";
    }

}


class Manager extends Employee {

    public $reports;

}

$emp = new Employee();
$emp2 = new Employee();
$emp3 = new Employee();
$emp4 = new Employee();
$mang = new Manager();
// $per = new Person();


echo $emp->id;
echo $emp2->id;
echo $emp3->id;
echo $emp4->id;
echo $mang->id;
echo $mang->work();
// echo $per->id;




