<?php

namespace App\Models\Entity;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Produto extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'produtos';
    use SoftDeletes;
}
