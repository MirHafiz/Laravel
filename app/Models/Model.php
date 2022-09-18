<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Basemodel;

class Model extends Basemodel
{
    protected $connection = "mongodb";
} 