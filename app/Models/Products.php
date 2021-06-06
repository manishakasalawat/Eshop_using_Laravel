<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
        'image'
    ];
    protected $attributes = [
    	'image' => ' ',
    ];

    public function category(){
    	//hasOne,hasMany,belongsTO,belongsToMany
    	return $this->belongsTO(Category::class,'category_id');
    }
}
