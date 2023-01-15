<?php

namespace App\Http\Controllers;

use App\Models\LeftNews;
use App\Models\BreakingNews;
use App\Models\InternationalNews;
use App\Models\PopularNews;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function front_end(){
        $all_news_show = BreakingNews::all();
        $left_news = LeftNews::all();
        $popular_news = PopularNews::all();
        $international_news = InternationalNews::all();
        return view('index',[
            'all_news_show' => $all_news_show,
            'left_news' => $left_news,
            'popular_news' => $popular_news,
            'international_news' => $international_news
        ]);
    }

}
