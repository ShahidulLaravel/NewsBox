<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Support\Str;
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
}
