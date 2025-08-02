<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendNewsController extends Controller
{
    function categoryNews($slug) {
        $news = News::where('category', $slug)->latest()->paginate(5);
        return view('frontend.newsArchive', compact('news','slug'));
    }
    function search(Request $request) {
        $query = $request->input('query');

        $news = News::where('news_title', 'LIKE', "%{$query}%")->orWhere('short_details', 'LIKE', "%{$query}%")->orWhere('slug', 'LIKE', "%{$query}%")->get();

        // dd($news);
        return view('frontend.search', compact('news', 'query'));
    }
    public function show($title){
        $decodedTitle = urldecode($title);

        $news = News::where('news_title', $decodedTitle)->firstOrFail();

        $news->increment('views');

        $relatedNews = News::where('category', $news->category)
                        ->where('id', '!=', $news->id)
                        ->latest()
                        ->take(4)
                        ->get();
        // dd($news);
        return view('frontend.singleNews', compact('news', 'relatedNews'));
    }
}
