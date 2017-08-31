<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['imagePath', 'title', 'description', 'price', 'subcategory_id'];

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
