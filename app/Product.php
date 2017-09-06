<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['imagePath', 'title', 'description', 'price', 'sub_category_id'];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
