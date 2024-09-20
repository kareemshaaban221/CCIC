<?php

namespace App\Models;

class Employee extends Person {

    public $salary;

    function work() {
        echo static::class ." is working";
    }

    function testing() {

    }

}
