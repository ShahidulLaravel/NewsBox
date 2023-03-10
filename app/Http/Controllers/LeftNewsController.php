<?php

namespace App\Http\Controllers;

use App\Models\LeftNews;
use App\Models\SideNews;
use App\Models\TitleNews;
use App\Models\PopularNews;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InternationalNews;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class LeftNewsController extends Controller
{
    public function show_left_news(){
        return view('Admin.LeftNews.add');
    }

    public function insert_left_news(Request $request){

            $uploaded_photo = $request->photo;
            $extension = $uploaded_photo->getClientOriginalExtension();
            $file_name = Str::lower(str_replace(' ', '-', 'left_news')) . '-' . rand(10, 100000) . '.' . $extension;
            Image::make($uploaded_photo)->save('Uploads/Popular/' . $file_name);

            LeftNews::insert([
                'news_headline' => $request->news_headline,
                'photo' => $file_name
            ]);
          return back();     
    }

    public function popular_news(Request $request){
        $uploaded_photo = $request->popular_photo;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'popular_news')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/Popular/' . $file_name);

        PopularNews::insert([
            'popular_headline' => $request->popular_headline,
            'author' => $request->author,
            'popular_photo' => $file_name
        ]);
        return back()->with('success','News Addedd Successfully');  
    }

    public function international_news(Request $request){
        $uploaded_photo = $request->inter_photo;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'inter_news')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/International/' . $file_name);

        InternationalNews::insert([
            'inter_headline' => $request->inter_headline,
            'author' => $request->author,
            'inter_photo' => $file_name
        ]);
        return back()->with('success_two', 'International News Addedd Successfully');
    }

    public function title_news(){
        return view('Admin.TitleNews.add');
    }
    public function insert_title_news(Request $request){
        $uploaded_photo = $request->title_photo;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'title_news')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/Title/' . $file_name);

        TitleNews::insert([
            'title_headline' => $request->title_headline,
            'title_photo' => $file_name
        ]);
        return back()->with('success_two', 'International News Addedd Successfully');
    }

    public function side_news(Request $request)
    {
        $uploaded_photo = $request->photo;
        $extension = $uploaded_photo->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(' ', '-', 'side_news')) . '-' . rand(10, 100000) . '.' . $extension;
        Image::make($uploaded_photo)->save('Uploads/Sidenews/' . $file_name);

        SideNews::insert([
            'headline' => $request->headline,
            'photo' => $file_name
        ]);
        return back()->with('success_three', 'International News Addedd Successfully');
    }
}
