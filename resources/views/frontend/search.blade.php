@extends('layouts.FrontendLayout')
@section('title', $query)


@section('content')
<div class="container">
    

    @if($news->count() > 0)
    <div class="main-news mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ms-0">Search Results for "{{ $query }}"</h2> 
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
                                            <a href="{{ route('news.show', urlencode($item->news_title)) }}" class="btn btn-sm btn-dark">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        
                        </div>
                    </div>
                </div>

                @include('layouts.FrontendSidebar')
            </div>
        </div>
    </div>
        
    @else
    <p>No results found.</p>
@endif

        
</div>
@endsection
