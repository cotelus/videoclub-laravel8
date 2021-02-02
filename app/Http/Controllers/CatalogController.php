<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller{
    /**
     * This method is invoked when 'catalog/' route is selected
     * @return view relative view to this method. 
     */
    public function getIndex(){
        return view("catalog.index");
    }

    /**
     * This method is invoked when 'catalog/show/{id}' route is selected
     * @return view relative view to this method. 
     */
    public function getShow($id){
        return view('catalog.show', array('id'=>$id));
    }

    /**
     * This method is invoked when 'catalog/create' route is selected
     * @return view relative view to this method. 
     */
    public function getCreate(){
        return view("catalog.create");
    }

    /**
     * This method is invoked when 'catalog/edit/{id}' route is selected
     * @return view relative view to this method. 
     */
    public function getEdit($id){
        return view("catalog.edit", array('id'=>$id));
    }
}
