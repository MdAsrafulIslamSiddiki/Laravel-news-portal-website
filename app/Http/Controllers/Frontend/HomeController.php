<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index() {
        $breakingNews = News::where('category', 'Breaking_news')->latest()->take(5)->get();
        $nationalNews = News::where('category', 'National')->latest()->get();
        $internationalNews = News::where('category', 'International')->latest()->get();
        $politicsNews = News::where('category', 'Politics')->latest()->get();
        $economyNews = News::where('category', 'Economy')->latest()->get();
        $sportsNews = News::where('category', 'Sports')->latest()->take(6)->get();
        $healthNews = News::where('category', 'Health')->latest()->get();
        $technologyNews = News::where('category', 'Science_&_Technology')->latest()->get();
        $educationNews = News::where('category', 'Education')->latest()->get();
        $entertainmentNews = News::where('category', 'Entertainment')->latest()->get();
        $environmentNews = News::where('category', 'Environment')->latest()->get();
        $agricultureNews = News::where('category', 'Agriculture')->latest()->get();

        // dd($breakingNews);
        return view('frontend.HomePage', compact('breakingNews' , 'nationalNews', 'internationalNews', 'politicsNews', 'economyNews', 'sportsNews', 'healthNews', 'educationNews', 'technologyNews', 'entertainmentNews', 'environmentNews', 'agricultureNews'));
    }
}
