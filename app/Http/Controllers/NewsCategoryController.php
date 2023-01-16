<?php

namespace App\Http\Controllers;

use App\Models\NewsBody;
use App\Models\TitleNews;
use App\Models\PopularNews;
use Illuminate\Support\Str;
use App\Models\BreakingNews;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsCategoryController extends Controller
{
    public function news_category(){
        return view('Admin.Category.add');
    }

    public function news_category_insert(Request $request){
        $uploaded_photo = $request->category_image;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'category')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/Category/' . $file_name);

        NewsCategory::insert([
            'category_name' => $request->category_name,
            'category_image' => $file_name
        ]);
        return back()->with('success_two', ' News Category Addedd Successfully');
    }

    public function news_body(){
        return view('Admin.NewsBody.add_body');
    } 

    public function news_body_insert(Request $request){
        $uploaded_photo = $request->feature_image;
        $uploaded_photo_two = $request->inside_image;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $extension_two = $uploaded_photo_two->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'feature_image')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/Feature/' . $file_name);

        $file_name_two = Str::lower(str_replace(' ', '-', 'inside_image')) . '-' . rand(10, 100000) . '.' . $extension_two;
        Image::make($uploaded_photo)->save('Uploads/Inside/' . $file_name_two);

        NewsBody::insert([
            'title' => $request->title,
            'desp' => $request->desp,
            'feature_image' => $file_name,
            'inside_image' => $file_name_two
        ]);
        return back()->with('success', ' News Body Addedd Successfully');
    }
    
    public function news_body_show(){
        $all_news_show = BreakingNews::all();
        $title = NewsBody::all();
        $title_news = TitleNews::all();
        $popular_news = PopularNews::all();
        return view('single_post',[
            'all_news_show' => $all_news_show,
            'title' => $title,
            'title_news' => $title_news,
            'popular_news' => $popular_news,
        ]);
    }
}
