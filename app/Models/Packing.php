<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Packing extends Model
{
    use CrudTrait;
    protected $table = 'packings';
    protected $fillable = [
        'shift',
        'machine',
        'start',
        'finish',
        'carton',
        'person',
        'description',
        'product_id'

    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}