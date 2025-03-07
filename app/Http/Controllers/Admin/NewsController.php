<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadMedia;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    use UploadMedia;
    
    function add_news() {
        return view('backend.addNews');
    }
    
    function all_news(){
        $news = News::latest()->get();
        // dd($news);
        return view('backend.allNews', compact('news'));
    }
    function store_news(Request $request) {
        $request->validate([
            'news_title' => 'required|unique:news,news_title',
            'image' => 'required|mimes:webp,png,jpg,jpeg',
            'short_details' => 'required',
            'category' => 'required',

        ]);

        // $image_name = str($request->news_title)->slug() . '.' . $request->image->extension();
        // $upload = $request->image->storeAs('news_images', $image_name, 'public');

        $upload = $this->uploadSingleMedia($request->image, str($request->news_title)->slug(), 'news_images');
        // dd($upload);
        $news = new News();
        $news->news_title = $request->news_title;
        $news->slug = str($request->news_title)->slug();
        // $news->slug = Str::slug($request->news_title, '-', 'bn');
        $news->image = $upload;
        $news->short_details = $request->short_details;
        $news->long_details = $request->long_details;
        $news->category = $request->category;
        // dd($news);
        $news->save();

        if ($news) {
            notify()->success('News added successfully!', 'Success');
            return back();
        }

    }
    function delete_news($id) {
        $news = News::findOrFail($id);

        if($news->image && Storage::disk('public')->exists($news->image)){
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        notify()->success('News deleted successfully!', 'Success');
        return back();
        
    }
    function update_news(Request $request, $id) {        
        $slug = str($request->news_title)->slug();
        $news = News::findOrFail($id);

        $new_image = $request->hasFile('image') ? $this->uploadSingleMedia($request->image,$slug , 'news_images', $news->image) : null;

        // dd($new_image);
        $news->news_title = $request->news_title ?? $news->news_title;
        $news->slug = $slug ?? $news->slug;
        $news->image = $new_image ?? $news->image;
        $news->short_details = $request->short_details ?? $news->short_details;
        $news->long_details = $request->long_details ?? $news->long_details;
        $news->category = $request->category ?? $news->category;
        $news->save();
        notify()->success('News updated successfully!', 'Success');
        return back();
        
    }
}
