<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use DB;

class UserController extends Controller
{
    //
    public function getUsers(Request $request){

        $page = $request->page > 0 ? $request->page : 1;       // taking page from url
        $limit = $request->size > 0 ? $request->size : 20000;  // limit defined or from url
        $offset = $page-1 * $limit;                            // offset means how many records to skip

        $data = DB::table("users")->skip($offset)->simplePaginate($limit); // Results are faster (~1200 ms) and it is along with meta data of pagination.
        
        // $data =  DB::select("SELECT * from users LIMIT " .$offset ."," .$limit); // Results appear in ~1213ms and we need to manually send pagination's metadata here.
        
        // $data=User::skip($offset)->simplePaginate($limit); //This takes 15-16 secs.
        
        return response()->json($data);  
    }

    public function getGrades(){

        $userData = User::where('grades',"like", '1,3%')
                    ->orWhere('grades',"like", '1,3,2%')->get();

        return view('users',compact('userData'));
    }
    
    public function backupDB(){

        return view('cron');
    }
    
}
