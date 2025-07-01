<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class Product extends Model
{
    //
    public $incrementing = false;

    protected $table = 'products';

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'image',
        'description',
        'inStock',
        'price',
        'details',
        'rating'
    ];

    public static function getProductsById($id)
    {
        return self::find($id);
    }


}
