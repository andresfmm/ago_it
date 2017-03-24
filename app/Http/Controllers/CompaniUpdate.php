<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\unoRequest;

use App\companies;
use DB;
use Carbon\Carbon;

class CompaniUpdate extends Controller
{
    
    public function edit(unoRequest $request, $id)
    {   

      
    
    $Date = Carbon::now(); 
    $us_conect=Auth()->user();
    $companis = DB::table('companies')
        ->where('id', '=', $id)
        ->update(['title'  => $request['title'],
         'slug'  => str_slug($request["title"]),
         'company_profile' => $request['company_profile'],
         'mission' => $request['mission'],
         'vision'  => $request['vision'],
         'meta_title' => $request['meta_title'],
         'meta_description' => $request['description'],
         'meta_keywords' => $request['keywords'],
         'updater_user_id' => $us_conect['id'],
         'owner_user_id' => $us_conect['id'],
         'updated_at' => $Date
                ]);

        return back()->with('message', 'the company was Update');

    }
}

