<?php

namespace App\Models\Entity;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class ListaCompras extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'listas_compras';
    use SoftDeletes;
}
