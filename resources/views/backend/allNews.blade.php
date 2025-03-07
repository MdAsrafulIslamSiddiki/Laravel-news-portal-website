@extends('layouts.BackendLayout')
@section('title','All News')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
        
                        {{-- ! Table Start  --}}
        
                        <table class="table">
                            <tr>
                                <th>Sl.</th>
                                <th>News Heading</th>
                                <th class="text-start" >categoy</th>
                                <th class="text-center">Action</th>
                            </tr>
                            @if ($news->isEmpty())
                            <tr>
                                <td colspan="3" class="text-center"><p>No News has been found!</p></td>
                            </tr> 
                            @else
                                @foreach ($news as $key => $news)
                                    <tr>
                                        <td>{{ ++$key}}</td>        
                                        <td class="text-start">
                                            <p>{{ $news->news_title }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $news->category }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNewsModal{{ $news->id }}">
                                                    <i class='bx bx-message-alt-edit'></i>
                                                </a>                                                                                              
                                                {{-- <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNewsModal" data-id="1"><i class='bx bx-message-alt-edit'></i></a> --}}
                                                <a href="{{route('news.delete', $news->id)}}" class="btn btn-sm btn-danger"><i class='bx bx-message-square-x'></i></a>
                                            </div>
                                        </td>
                                    </tr>  
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="editNewsModal{{ $news->id }}" tabindex="-1" aria-labelledby="editNewsModalLabel{{ $news->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title">Update News</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <!-- Update Form -->
                                            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                
                                                <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="news_title" value="{{ $news->news_title }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Old Image</label>
                                                    <img src="{{asset('storage/'.$news->image)}}" alt="" width="150px">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Select new Image</label>
                                                    <input name="image" type="file"  class="form-control">
                                                </div>
                                                            
                                                <div class="mb-3">
                                                    <label class="form-label">Short Details</label>
                                                    <textarea class="form-control" name="short_details" required>{{ $news->short_details }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Long Details</label>
                                                    <textarea class="form-control" name="long_details" >{{ $news->long_details }}</textarea>
                                                </div>
                                                <select class="form-select mb-3" name="category" required>
                                                    <option value="">Select a news Category</option>
                                                    <option value="Agriculture"  {{ $news->category == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
                                                    <option value="Environment"  {{ $news->category == 'Environment' ? 'selected' : '' }}>Environment</option>
                                                    <option value="Entertainment"  {{ $news->category == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
                                                    <option value="Science_&_Technology"  {{ $news->category == 'Science_&_Technology' ? 'selected' : '' }}>Science & Technology</option>
                                                    <option value="Education"  {{ $news->category == 'Education' ? 'selected' : '' }}>Education</option>
                                                    <option value="Health"  {{ $news->category == 'Health' ? 'selected' : '' }}>Health</option>
                                                    <option value="Sports"  {{ $news->category == 'Sports' ? 'selected' : '' }}>Sports</option>
                                                    <option value="Economy"  {{ $news->category == 'Economy' ? 'selected' : '' }}>Economy</option>
                                                    <option value="Politics"  {{ $news->category == 'Politics' ? 'selected' : '' }}>Politics</option>
                                                    <option value="International"  {{ $news->category == 'International' ? 'selected' : '' }}>International</option>
                                                    <option value="National"  {{ $news->category == 'National' ? 'selected' : '' }}>National</option>
                                                    <option value="Breaking_news"  {{ $news->category == 'Breaking_news' ? 'selected' : '' }}>Breaking News</option>
                                                </select>
                                                
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary">Update News</button>
                                                  </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    {{-- end modal --}}


                                @endforeach
                            @endif
                            

                        </table>
                      {{-- ! Table End  --}}
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection