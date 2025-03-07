@extends('layouts.BackendLayout')

@section('content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">Congratulations {{auth()->user()->name}} 🎉</h5>
                          <p class="mb-6">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-6">
                          <img
                            src="{{ asset('backend/dashboard_assets/assets/img/illustrations/man-with-laptop.png') }}"
                            height="175"
                            class="scaleX-n1-rtl"
                            alt="View Badge User" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 bg-primary text-white mx-2">
                  <p class="text-center fs-4">{{$news->count()}}</p>
                  <p class="text-center">News</p>
                </div>
                <div class="col-lg-2 bg-primary text-white mx-2">
                  <p class="text-center fs-4">12</p>
                  <p class="text-center">Categories</p>
                </div>
                <div class="col-lg-2 bg-primary text-white mx-2">
                  <p class="text-center fs-4">{{ $totalViews }}</p>
                  <p class="text-center">Total Views</p>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection