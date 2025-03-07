@extends('layouts.FrontendLayout')

@section('content')

        <!-- Top News Start-->


        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        @if ($breakingNews->count() > 0)
                            @php
                                $latestBreakingNews = $breakingNews->first(); 
                            @endphp

                            <div class="tn-img">
                                <a href="{{ route('news.show', urlencode($latestBreakingNews->news_title)) }}">
                                    <img src="{{ File::exists(public_path('storage/' . $latestBreakingNews->image)) ? asset('storage/' . $latestBreakingNews->image) : asset('frontend/assets/img/no_image.jpg') }}" alt="{{ $latestBreakingNews->news_title }}" />
                                </a>
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-title text-elllipsis-2" href="{{ route('news.show', urlencode($latestBreakingNews->news_title)) }}">
                                            {{ $latestBreakingNews->news_title }}
                                        </a>
                                        <p class="tn-date" >
                                            <i class="far fa-clock"></i> 
                                            {{ $latestBreakingNews->created_at->format('d-m-Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach ($breakingNews->skip(1)->take(4) as $news)
                                <div class="col-md-6">
                                    <div class="tn-img">
                                        <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}" />
                                        </a>
                                        <div class="tn-content">
                                            <div class="tn-content-inner">
                                                <a class="tn-title text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                <p class="tn-date" ><i class="far fa-clock"></i> {{ $news->created_at->format('d-m-Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Top News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>জাতীয়</h2>
                        <div class="row cn-slider">
                            @foreach ($nationalNews as $news)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <a  href="{{ route('news.show', urlencode($news->news_title)) }}">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                        </a>
                                        <div class="cn-content">
                                            <div class="cn-content-inner">
                                                <a class="cn-title text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                <p class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>আন্তর্জাতিক</h2>
                        <div class="row cn-slider">
                            @foreach ($internationalNews as $news)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-title text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                            <p class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>রাজনীতি</h2>
                        <div class="row cn-slider">
                            @foreach ($politicsNews as $news)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                        </a>
                                        <div class="cn-content">
                                            <div class="cn-content-inner">
                                                <a class="cn-title text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                <p class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>অর্থনীতি</h2>
                        <div class="row cn-slider">
                            @foreach ($economyNews as $news)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-title text-elllipsis-2" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                            <p class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 large-news">
                                <h2><i class="fas fa-align-justify"></i>খেলাধুলা</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        @if ($sportsNews->count() > 0)
                                            @php
                                                $latestSportsNews = $sportsNews->first();    
                                            @endphp
                                            <div class="mn-img">
                                                <a href="{{ route('news.show', urlencode($latestSportsNews->news_title)) }}">
                                                    <img src="{{ File::exists(public_path('storage/'. $latestSportsNews->image)) ? asset('storage/'. $latestSportsNews->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $latestSportsNews->news_title }}"/>
                                                </a>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{ route('news.show', urlencode($latestSportsNews->news_title)) }}">{{ $latestSportsNews->news_title }}</a>
                                                <p class="mn-date"><i class="far fa-clock"></i>{{ $latestSportsNews->created_at->format('d-m-Y') }}</p>
                                                <p class="text-elllipsis-3">
                                                    {{  $latestSportsNews->short_details }}
                                                </p>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('news.show', urlencode($latestSportsNews->news_title)) }}" class="btn-sm btn-secondary">আরও পড়ুন</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($sportsNews->skip(1)->take(5) as $news)  
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                                    </a>
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                    <p class="mn-date" ><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 large-news">
                                <h2><i class="fas fa-align-justify"></i>স্বাস্থ্য</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        @if ($healthNews->count() > 0)
                                            @php
                                                $latestHealthNews = $healthNews->first();    
                                            @endphp
                                            <div class="mn-img">
                                                <a href="{{ route('news.show', urlencode($latestHealthNews->news_title)) }}">
                                                    <img src="{{ File::exists(public_path('storage/'. $latestHealthNews->image)) ? asset('storage/'. $latestHealthNews->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $latestHealthNews->news_title }}"/>
                                                </a>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{ route('news.show', urlencode($latestHealthNews->news_title)) }}">{{ $latestHealthNews->news_title }}</a>
                                                <p class="mn-date"><i class="far fa-clock"></i>{{ $latestHealthNews->created_at->format('d-m-Y') }}</p>
                                                <p class="text-elllipsis-3">
                                                    {{  $latestHealthNews->short_details }}
                                                </p>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('news.show', urlencode($latestHealthNews->news_title)) }}" class="btn-sm btn-secondary">আরও পড়ুন</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($healthNews->skip(1)->take(5) as $news)  
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                                    </a>
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                    <p class="mn-date"><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 large-news">
                                <h2><i class="fas fa-align-justify"></i>বিজ্ঞান ও প্রযুক্তি</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        @if ($technologyNews->count() > 0)
                                            @php
                                                $latestTechnologyNews = $technologyNews->first();    
                                            @endphp
                                            <div class="mn-img">
                                                <a href="{{ route('news.show', urlencode($latestTechnologyNews->news_title)) }}">
                                                    <img src="{{ File::exists(public_path('storage/'. $latestTechnologyNews->image)) ? asset('storage/'. $latestTechnologyNews->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $latestTechnologyNews->news_title }}"/>
                                                </a>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{ route('news.show', urlencode($latestTechnologyNews->news_title)) }}">{{ $latestTechnologyNews->news_title }}</a>
                                                <p class="mn-date"><i class="far fa-clock"></i>{{ $latestTechnologyNews->created_at->format('d-m-Y') }}</p>
                                                <p class="text-elllipsis-3">
                                                    {{  $latestTechnologyNews->short_details }}
                                                </p>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('news.show', urlencode($latestTechnologyNews->news_title)) }}" class="btn-sm btn-secondary">আরও পড়ুন</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($technologyNews->skip(1)->take(5) as $news)  
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <a href="{{ route('news.show', urlencode($news->news_title)) }}">
                                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                                    </a>
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="{{ route('news.show', urlencode($news->news_title)) }}">{{ $news->news_title }}</a>
                                                    <p class="mn-date"><i class="far fa-clock"></i>{{ $news->created_at->format('d-m-Y') }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layouts.FrontendSidebar')
                </div>
            </div>
        </div>
        <!-- Main News End-->

@endsection