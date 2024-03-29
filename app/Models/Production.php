<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Production extends Model
{
    use CrudTrait;
    protected $table = 'productions';
    protected $fillable = [
        'divisi',
        'shift',
        'machine',
        'start',
        'finish',
        'batch',
        'wip',
        'bs',
        'gas',
        'person',
        'description',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}