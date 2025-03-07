@extends('layouts.FrontendLayout')
@section('title', $news->news_title)

@section('content')

<div class="main-news mt-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Main News Section -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <h3 class="">{{ $news->news_title }}</h3>
                            <div class="">
                                <span class="category">ক্যাটাগরি: <strong>{{ str_replace(['_', '-'], ' ', $news->category) }}</strong></span> |
                                <span class="date">প্রকাশের তারিখ: {{ $news->created_at->format('d M Y') }}</span>
                            </div>
                            <div class=" my-5">
                                <img width="100%" height="100%" src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->title }}" >
                            </div>
                            <div class="fw-bold fs-5">
                                <p>{{ $news->short_details }}</p>
                            </div>
                            <p>{{ $news->long_details }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Related News Section -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h3 class="related-news-title">সম্পর্কিত সংবাদ</h3>
                        <div class="related-news">
                            <ul class="list-unstyled d-flex">
                                @foreach($relatedNews as $related)
                                <li class="col-lg-3">
                                    <div >
                                        <a href="{{ route('news.show', urlencode($related->news_title)) }}">
                                            <img  src="{{asset('storage/'.$related->image)}}" alt="">
                                        </a>
                                        <a class="text-elllipsis-2" href="{{ route('news.show', urlencode($related->news_title)) }}">{{ $related->news_title }}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            @include('layouts.FrontendSidebar')
        </div>
    </div>
</div>

    


@endsection