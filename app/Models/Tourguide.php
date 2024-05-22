<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Tourguide extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'tourguides';
}
