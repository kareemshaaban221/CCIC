<?php

namespace App;

use App\Models\Employee;

require "vendor/autoload.php";

$emp = new Employee();
echo $emp->id;
