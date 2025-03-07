<div class="col-md-4">
    <div class="sidebar">
        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>বিভাগ</h2>
            <div class="category">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'National') }}">জাতীয়</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'International') }}">আন্তর্জাতিক</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Politics') }}">রাজনীতি</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Economy') }}">অর্থনীতি</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Sports') }}">খেলাধুলা</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Health') }}">স্বাস্থ্য</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Education') }}">শিক্ষা</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Science_&_Technology') }}">বিজ্ঞান ও প্রযুক্তি</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Entertainment') }}">বিনোদন</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Environment') }}">পরিবেশ</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Agriculture') }}">কৃষি</a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>ট্যাগ</h2>
            <div class="tags">
                <a href="{{ route('category.news', 'National') }}" class="">জাতীয়</a>
                <a href="{{ route('category.news', 'International') }}" class="">আন্তর্জাতিক</a>
                <a href="{{ route('category.news', 'Politics') }}" class="">রাজনীতি</a>
                <a href="{{ route('category.news', 'Economy') }}" class="">অর্থনীতি</a>
                <a href="{{ route('category.news', 'Sports') }}" class="">খেলাধুলা</a>
                <a href="{{ route('category.news', 'Health') }}" class="">স্বাস্থ্য</a>
                <a href="{{ route('category.news', 'Education') }}" class="">শিক্ষা</a>
                <a href="{{ route('category.news', 'Science_&_Technology') }}" class="">বিজ্ঞান ও প্রযুক্তি</a>
                <a href="{{ route('category.news', 'Entertainment') }}" class="">বিনোদন</a>
                <a href="{{ route('category.news', 'Environment') }}" class="">পরিবেশ</a>
                <a href="{{ route('category.news', 'Agriculture') }}" class="">কৃষি</a>
            </div>
        </div>


        {{-- add 1 column --}}
        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>বিজ্ঞাপন</h2>
            <div class="image">
                <a href=""><img src="{{ asset('frontend/assets/img/adds-1.jpg') }}"   alt="Image"></a>
            </div>
        </div>

        {{-- add 2 column --}}
        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>বিজ্ঞাপন</h2>
            <div class="image">
                <div class="row">
                    <div class="col-sm-6">
                        <a href=""><img src="{{ asset('frontend/assets/img/adds-2.jpg') }}"   alt="Image"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href=""><img src="{{ asset('frontend/assets/img/adds-2.jpg') }}"   alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>