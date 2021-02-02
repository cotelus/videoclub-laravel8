<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    /**
     * This method is invoked when '/' route is selected
     * @return view relative view to this method. 
     */
    public function getHome(){
        return view ("home");
    }
}
