<?php

// php is functional prog language
// php is an oop language from version 5

// object-oriend programming

class Car {

    // properties / attributes
    /**
     * <access-modifier> [<data-type>] <var-name> [= <default-value>];
     * 
     * access modifiers:
     *      private
     *      public
     *      protected
     * 
     * <data-type>:
     *      string, bool, int, float, resource, object, null
     * 
     * var name:
     *      start by $
     * 
     */
    public $brand;
    public $color;
    private $owner;

    // methods / behaviors
    /**
     * [<access-modifier>] function <func-name>() { body; };
     * default access modifier ===> public
     */

    public function move() {
        echo "Car of {$this->brand} is moving";
    }


    // Encapsulation
    // Getter   / Setter
    // Accessor / Mutatur
    function setOwner($owner) {
        if (strlen($owner) < 3) {
            echo "invalid owner name";
        } else {
            $this->owner = $owner;
            echo "owner name is stored successfully";
        }
    }

    function getOwner() {
        return $this->owner;
    }


    // constuctors
    function __construct($brand, $color, $owner) {
        $this->brand = $brand;
        $this->color = $color;
        // $this->setOwner($owner);
        $this->owner = $owner;
    }

    // function __destruct() {
    //     echo "object is destroyed";
    // }

    function __toString(): string {
        return sprintf(
            '[%s] brand: %s, color: %s, owner: %s',
            get_class($this),
            $this->brand ?? "Unknown",
            $this->color ?? "Unknown",
            $this->owner ?? "Unknown",
        );
    }

}

$BMW = new Car('BMW', 'blue', 'ali');
// $BMW->owner = 'Ahmed';

$fiat = new Car('fiat', 'red', null);

echo "<pre>";

// var_dump($BMW);
// die;

// $BMW->move();
// $fiat->move();

// $fiat->owner = 'aa';

// $fiat->setOwner('aaa');
// echo $fiat->getOwner();

// echo "<br>";

// var_dump($fiat);
// die;

echo $fiat;

echo "</pre>";

