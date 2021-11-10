<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Request;

class HomeController extends BaseController{
    public function about(){
        return view::make('about');
    }
}
