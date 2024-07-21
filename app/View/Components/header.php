<?php

namespace App\View\Components;

use Closure;
use App\Models\cart;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class header extends Component
{
    public $item;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
            $user_login=Auth::user()->id;
        $this->item=cart::where("user_id",$user_login)->with("products.images")->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
