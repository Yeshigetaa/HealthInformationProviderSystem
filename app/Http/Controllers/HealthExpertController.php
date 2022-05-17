<?php

namespace App\Http\Controllers;
use App\Models\HealthExpert;
use Illuminate\Http\Request;

class HealthExpertController extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('HealthExpert.register');
  }
    function store(Request $request)
    
    {
      $HealthExpert =new HealthExpert();
      $HealthExpert->id = $request->id;
      $HealthExpert->fname = $request->fname;
      $HealthExpert->lname = $request->lname;
      $HealthExpert->sex = $request->sex;
      $HealthExpert->email = $request->email;
      $HealthExpert->profession = $request->profession;
     $is_saved = $HealthExpert->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    
  }