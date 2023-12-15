<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
class Productcontroller extends Controller
{
     public function create(Request $request){
        
          $data = [
               'name' =>$request->prodname,
               'description' => $request->description,
          ];
          
          Detail::insert($data);
          return redirect()->route('display');
     }

     public function displayData(){
         $data =  Detail::all();
          return view('display',compact('data'));
     }

     public function delete($id){

          if(!$id){
               return redirect()->back();
          }
          $product = Detail::find($id);
          if($product){
               $product->delete();
          }
          return redirect()->back();

     }

     public function edit($id){
          if(!$id){
               return redirect()->back();
          }
          $product = Detail::find($id);
          if($product){
               return view('edit',compact('product'));
          }
          return redirect()->back();
     }

     public function update(Request $request,$id){
          if(!$id){
               return redirect()->back();
          }
          $product = Detail::find($id);
          if($product){
               $data = [
                    'name' =>$request->prodname,
                    'description' => $request->description,
               ];
               
             $product->update($data);
               return redirect()->route('display');
          }
          return redirect()->back();
     }



}
