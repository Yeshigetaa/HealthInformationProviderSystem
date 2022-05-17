<?php

namespace App\Http\Controllers;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('Disease.register');
  }
    function store(Request $request)
    
    {
      $Disease =new Disease();
      $Disease->id = $request->id;
      $Disease->name = $request->name;
      $Disease->description = $request->description;
      $Disease->cause = $request->cause;
      $Disease->symptom = $request->symptom;
      $Disease->treatment = $request->treatment;
      $Disease->transmition = $request->transmition;
     $is_saved = $Disease->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Disease = Disease::all();
     return view('Disease.list', compact('Disease'));
    } 
    public function edit($id)
 {
 $Disease = Disease::find($id);
 return view('Disease.edit', compact('Disease'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $Disease= Disease::find($request->id);
    $Disease->id = $request->id;
    $Disease->name = $request->name;
    $Disease->description = $request->description;
    $Disease->cause = $request->cause;
    $Disease->symptom = $request->symptom;
    $Disease->treatment = $request->treatment;
    $Disease->transmition = $request->transmition;
    $Disease->save();
    return redirect('Disease/list');
    }
    public function delete($id)
 {
  Disease::where('id', $id)->delete();
 return redirect('Disease/list');
   
}

public function search($id)
    {
     $Disease = Disease::where('id',$id)->first();
     return view('Disease.search', compact('Disease'));
    } 
  }