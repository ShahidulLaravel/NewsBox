<?php

namespace App\Http\Controllers;

use App\Models\LeftNews;
use App\Models\TitleNews;
use App\Models\PopularNews;
use App\Models\BreakingNews;
use Illuminate\Http\Request;
use App\Models\InternationalNews;
use App\Models\NewsCategory;
use App\Models\SideNews;

class Frontend extends Controller
{
    public function front_end(){
        $all_news_show = BreakingNews::all();
        $left_news = LeftNews::all();
        $popular_news = PopularNews::all();
        $international_news = InternationalNews::all();
        $title_news = TitleNews::all();
        $category = NewsCategory::all();
        $side_news = SideNews::all();
        return view('index',[
            'all_news_show' => $all_news_show,
            'left_news' => $left_news,
            'popular_news' => $popular_news,
            'international_news' => $international_news,
            'title_news' => $title_news,
            'category' => $category,
            'side_news'=> $side_news
        ]);
    }

    

}
