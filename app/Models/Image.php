<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable=["product_id","file"];
    public function product(){
        return $this->belongsTo(Product::class,"id","product_id");
    }


    public static function CreateImage($product_id,$img){
        foreach($img["file"] as $file){
            
            $new_name=md5(uniqid()).".".$file->extension();
            Image::create([
                "product_id"=>$product_id,
                "file"=>$new_name
            ]);
            $file->storeAs("public/images/$new_name");
        }
    }


    public static function updateImage($product_id,$img){
        foreach($img as $file){
            
            $new_name=md5(uniqid()).".".$file->extension();
            Image::create([
                "product_id"=>$product_id,
                "file"=>$new_name
            ]);
            $file->storeAs("public/images/$new_name");
        }


    }


    public static function DeleteImage($file){
    
        foreach($file as $file){
            unlink(storage_path("app/public/images/".$file["file"]));
        }
    }
}
