<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = "food_categories";

    protected $fillable = ['title', 'description', 'image_url' ];

    public function foodItems()
    {
        return $this->hasMany('App\FoodItem', 'category_id');
    }
}
