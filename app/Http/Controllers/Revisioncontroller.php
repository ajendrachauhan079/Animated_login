<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revision;
class Revisioncontroller extends Controller
{
  public function displayForm(){
    return view('revision');
  }

  public function create(Request $request){

    $request->validate([
      'name' => 'required',
      'age' => 'required|numeric:5',
      'mobile' =>'required|numeric:10'
  ]);


      $data =[
        'name' => $request->get('name'),
        'age' => $request->age,
        'mobile' =>bcrypt( $request->mobile) ?? 12,
        'gender' => $request->gender,
        'status' => $request->status ?? 1,
      ];
     
    Revision:: create($data);
      return redirect()->route('revision.index') ->withInput();
  }

  public function index(){
    $data['revisions'] = Revision:: latest()->paginate(5);
    return view('revision_index',$data);
  }

  public function edit($id){
    if(!$id){
      return redirect()->route('revision.index'); 
    }
    $data['revision'] = Revision:: find($id);
    if($data['revision']){
      return view('revision_edit',$data);
    }
    return redirect()->route('revision.index'); 
  }
  public function update(Request $request,$id){

    if(!$id){
      return redirect()->route('revision.index'); 
    }
    $data['revision'] = Revision:: find($id);
    if($data['revision']){
      $update_data =[
        'name' => $request->get('name'),
        'age' => $request->age,
        'mobile' => bcrypt( $request->mobile) ?? 12,
        'gender' => $request->gender,
        'status' => $request->status ?? 1,
      ];
      $data['revision']->update($update_data);
      return redirect()->route('revision.index'); 
    }
    return redirect()->route('revision.index'); 
  }
  public function delete($id){

    if(!$id){
      return redirect()->route('revision.index'); 
    }

    try{
        $revision = Revision:: find($id);
        $revision->delete();
        return redirect()->route('revision.index'); 
    }catch(\Exception $e){
      return redirect()->route('revision.index'); 
    }

    
  }


}
