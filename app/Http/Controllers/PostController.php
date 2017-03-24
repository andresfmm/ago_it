<?php

namespace App\Http\Controllers;

use App\companies;
use Illuminate\Http\Request;
use Datatables;
use DB;

class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
    	$users = DB::table('companies')
        ->whereNull('deleted_at')
        ->get();

        return Datatables::of($users)
            ->make(true);
    }


    public function deletecompanie($id)
    {
    	
        $id= companies::findOrFail($id);
        $id->delete();
        return back()->with('message', 'the task was delete success');

        
    }

   
    
}
