@extends('layouts.FrontendLayout')
@section('title', str_replace(['_', '-'], ' ', $slug))    


@section('content')
    
    @if($news->count() > 0)
    <div class="main-news mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <h3>Search Results for: {{ str_replace(['_', '-'], ' ', $slug) }}</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach($news as $item)
                                <div class="news-item border border-2 p-3">
                                    <h5><a href="{{ route('news.show', urlencode($item->news_title)) }}">{{ $item->news_title }}</a></h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('news.show', urlencode($item->news_title)) }}">
                                                <img width="100%" height="240px" src="{{ File::exists(public_path('storage/' . $item->image)) ? asset('storage/' . $item->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $item->news_title }}" />
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-elllipsis-8">{{$item->short_details }}</p>
                                            <a href="{{ route('news.show', urlencode($item->news_title)) }}" class="btn btn-sm btn-dark">আরও পড়ুন</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="mt-3">
                                {{ $news->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.FrontendSidebar')
            </div>
        </div>
    </div>
        

        
    @else
        <p class="text-center">এই বিভাগে কোন খবর পাওয়া যায়নি।</p>
    @endif
@endsection
