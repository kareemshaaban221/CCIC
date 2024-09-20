<?php

namespace App\Models;

use App\Models\Interfaces\IPerson;
use App\Models\Interfaces\ITest;

abstract class Person implements IPerson, ITest {

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
