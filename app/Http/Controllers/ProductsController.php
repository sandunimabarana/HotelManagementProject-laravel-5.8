<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function update(){

        $updateData=Products::all();
        //dd($updateData);

        return view('products')->with('products',$updateData);
       
    }

      public function UpdateAsPresent($id){

        $updateData=Products::find($id);
        $updateData->status=1;
        $updateData->save();
        return "You are there";
    }



}
