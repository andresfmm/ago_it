<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companies;
use DB;

class updatecompanie extends Controller
{
    public function update($id)
    {
        $companis = DB::table('companies')
                   ->where('id',$id)
                   ->get();
        
        return view("vendor/adminlte/layouts.edit", compact('companis'));
    }
}
