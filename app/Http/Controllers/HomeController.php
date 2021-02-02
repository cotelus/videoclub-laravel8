<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    /**
     * This method is invoked when '/' route is selected
     * @return view redirect to catalog's view
     */
    public function getHome(){
        return redirect()->action([CatalogController::class, 'getIndex']);
    }
}
