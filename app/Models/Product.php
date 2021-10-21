<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $collection = 'products';
    protected $primaryKey = 'id';
    protected $connection = 'mongodb';
    protected $softDate = ['deleted_at'];

}
