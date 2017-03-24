<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Http\Request;
use App\companies;
use App\Http\Requests\createRequest;
use App\Http\Controllers\Controller;



class CreateCompani extends Controller
{


	 


   public function create(createRequest $request){

    
    
    $us_conect=Auth()->user();
   

   	companies::create([
         'title'  => $request['title'],
         'slug'  => str_slug($request["title"]),
         'company_profile' => $request['company_profile'],
         'mission' => $request['mission'],
         'vision'  => $request['vision'],
         'meta_title' => $request['meta_title'],
         'meta_description' => $request['description'],
         'meta_keywords' => $request['keywords'],
         'updater_user_id' => $us_conect['id'],
         'owner_user_id' => $us_conect['id']
  
   		]);

   	  return back()->with('message', 'the task was created success');
 
   } 
}
