<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Trait\updateProductImage;

class ProductController extends Controller
{

    use updateProductImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::with("images")->get();
        return view("dash.products.view",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dash.products.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=$request->except("file","_token","proengsoft_jsvalidation");
        try{
            DB::beginTransaction();
            $data=Product::create($product);
            $product_id=$data->id;
             $img=$request->only("file");

             Image::CreateImage($product_id,$img);

            DB::commit();

            return to_route('product.index');

        }catch(Exception $e){

            DB::rollback();
            return $e->getMessage();

        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
         return view("dash.Products.edit",compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        if(empty($request->file)){
            $product=$request->except("_token","_method");
            Product::where("id",$id)->update($product);
            return to_route('product.index');
        }else{
        return    $this->UpdateProduct($id,$request);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file=product::findOrfail($id)->images;
        Product::findOrfail($id)->delete();
        Image::DeleteImage($file);
        return to_route('product.index');
    }
}
