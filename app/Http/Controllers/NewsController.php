<?php

namespace App\Http\Controllers;

use App\Models\BreakingNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function add_breaking(){
        $all_news_show = BreakingNews::all();
        return view('Admin.Breaking.add',[
            'all_news_show' => $all_news_show
        ]);
    }


    public function insert_breaking(Request $request){
        if(!empty($request->breaking_news)){
            BreakingNews::insert([
                'breaking_news' => $request->breaking_news
            ]);
            return back();

        }else{
            return back()->with('error', 'Please insert a News');
        }
        
    }
}
