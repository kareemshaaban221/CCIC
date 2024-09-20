<?php

namespace App\Models;

class Admin extends BaseModel
{

    protected $guarded = [];

    function getTest() {
        return $this->test;
    }

}
