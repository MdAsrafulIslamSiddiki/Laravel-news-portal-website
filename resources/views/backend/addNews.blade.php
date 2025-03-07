@extends('layouts.BackendLayout')
@section('title', 'Add News')


@section('content')

<div class="card shadow m-5">
    <div class=" mt-3 d-flex justify-content-center fw-bold border-top border-bottom border-2">Add News</div>
    <div class="card-body">
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row my-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="d-block">
                            News Title <span class="text-danger">*</span>
                            <input name="news_title" type="text" class="form-control" value="{{ old('news_title') }}">
                            @error('news_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                        </label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="d-block">
                            News Image <span class="text-danger">*</span>
                            <input name="image" type="file"  class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            <label for="" class="d-block my-3">
                Short Details <span class="text-danger">*</span>
                <textarea name="short_details" class="form-control" >{{ old('short_details') }}</textarea>
                @error('short_detail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </label>
            
            <label for="" class="d-block my-3">
                Long Details
                <textarea name="long_details" class="form-control" >{{ old('long_details') }}</textarea>
            </label>
            <select class="form-select" name="category">
                <option value="">Select a news Category</option>
                <option value="Agriculture"  {{ old('category') == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
                <option value="Environment"  {{ old('category') == 'Environment' ? 'selected' : '' }}>Environment</option>
                <option value="Entertainment"  {{ old('category') == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                <option value="Science_&_Technology"  {{ old('category') == 'Science_&_Technology' ? 'selected' : '' }}>Science & Technology</option>
                <option value="Education"  {{ old('category') == 'Education' ? 'selected' : '' }}>Education</option>
                <option value="Health"  {{ old('category') == 'Health' ? 'selected' : '' }}>Health</option>
                <option value="Sports"  {{ old('category') == 'Sports' ? 'selected' : '' }}>Sports</option>
                <option value="Economy"  {{ old('category') == 'Economy' ? 'selected' : '' }}>Economy</option>
                <option value="Politics"  {{ old('category') == 'Politics' ? 'selected' : '' }}>Politics</option>
                <option value="International"  {{ old('category') == 'International' ? 'selected' : '' }}>International</option>
                <option value="National"  {{ old('category') == 'National' ? 'selected' : '' }}>National</option>
                <option value="Breaking_news"  {{ old('category') == 'Breaking_news' ? 'selected' : '' }}>Breaking News</option>
            </select>
            @error('category')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
            
            <div class="text-end my-3">
                <button class="btn btn-primary rounded-0">Add News</button>
            </div>
        </form>
    </div>
</div>

@endsection