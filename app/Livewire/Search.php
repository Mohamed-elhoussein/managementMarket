<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $data;

    public function render()
    {
        $val="%".$this->data."%";
        $search=Product::where("name","like",$val)->get();
        return view('livewire.search',compact("search"));
    }
}
