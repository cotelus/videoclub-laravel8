<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Needed to use movies model
use App\Models\Movie;

class CatalogController extends Controller{
    /**
     * This method is invoked when 'catalog/' route is selected. This methos call movies model and get all 
     * movies stored in database.
     * 
     * @return view relative view to this method. 
     */
    public function getIndex(){
        $movies = Movie::all();

        return view("catalog.index", array('movies'=>$movies));

    }

    /**
     * This method is invoked when 'catalog/show/{id}' route is selected. It calls movies model to get
     * a specific id
     * 
     * @return view relative view to this method. 
     */
    public function getShow($id){
        // Database id start on 1, but array index start on 0. 
        // That's the reason why Movie::find($id + 1 )
        $movie = Movie::findOrFail($id + 1);

        return view('catalog.show', array('id'=>$id, 'movie'=>$movie));
    }

    /**
     * This method is invoked when 'catalog/create' route is selected.
     * 
     * @return view relative view to this method. 
     */
    public function getCreate(){
        return view("catalog.create");
    }

    /**
     * This method is invoked when 'catalog/edit/{id}' route is selected. It calls movies model to get
     * a specific id
     * 
     * @return view relative view to this method. 
     */
    public function getEdit($id){
        // Database id start on 1, but array index start on 0. 
        // That's the reason why Movie::find($id + 1 )
        $movie = Movie::findOrFail($id + 1);

        return view('catalog.edit', array('id'=>$id, 'movie'=>$movie));
    }
}
