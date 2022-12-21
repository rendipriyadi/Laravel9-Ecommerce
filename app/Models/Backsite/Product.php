<?php

namespace App\Models\Backsite;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'product';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'weight',
        'quantity',
        'status',
        'description',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Backsite\Category', 'category_id', 'id');
    }
}
