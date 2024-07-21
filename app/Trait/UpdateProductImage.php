<?php

namespace App\Trait;
use App\Models\Image;
use App\Models\Product;

trait updateProductImage{
    public function UpdateProduct($id,$data){
    


    $file=Product::findOrfail($id)->images;
    Image::DeleteImage($file);
    Image::where("product_id",$id)->delete();


    $product=$data->except("_token","_method","file");
    Product::where("id",$id)->update($product);
    Image::updateImage($id,$data->file);
    return to_route("product.index");


    
    }
}
