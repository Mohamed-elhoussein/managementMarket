<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable=["name","price","sale","count","cateogry"];

    public function images(){
        return $this->hasMany(Image::class,"product_id","id");
    }



    public function users(){
        return $this->belongsToMany(User::class,"carts");
    }
}
