<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public  function index(){
        $videos = video::all();
        return view('index', compact('videos'));
    }
    public function search(Request $request){
        $search = $request->keyWord;
        $videos = Video::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('description','LIKE', "%{$search}%")
        ->get();
        return view('index', compact('videos'), ['succesMsg'=>'Search results for' .$search]);
    }
   
}
