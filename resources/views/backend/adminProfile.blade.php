@extends('layouts.BackendLayout')
@section('title','Admin Profile')


@section('content')
 
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4 col-md-3 col-lg-2 mx-auto">
                            <img class="rounded-circle w-100" src="{{ getProfileImage() }}" alt="">
                        </div>
                        <div class="col-12 col-md-9 col-lg-9">
                            <h1 class="fs-2">{{ auth()->user()->name }}</h1>
                            <p class="fs-5 text-muted"><i class='bx bxs-envelope'></i> {{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body d-flex flex-column">
                    {{-- <a class="mb-3 shadow-lg p-2 fw-bold" href="{{ route('admin.profile.update') }}">Update Profile</a> --}}
                    <a class="mb-3 shadow-lg p-2 fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#updateProfileModal">Update Profile</a>
                    <a class="mb-3 shadow-lg p-2 fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</a>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Profile Modal -->
<div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileModalLabel">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Profile Update Form -->
                <form id="updateProfileForm" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                        <div id="name-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                        <div id="email-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="profile_image" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                        <div id="profile_image-error" class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Change Password Form -->
                <form id="changePasswordForm">
                    @csrf
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <div class="invalid-feedback" id="current_password-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                        <div class="invalid-feedback" id="new_password-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        <div class="invalid-feedback" id="password_confirmation-error"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

@section('script')

    {{-- update profile script --}}
    <script>
        $(document).ready(function() {
            $('#updateProfileForm').submit(function(e) {
                e.preventDefault(); 

                var formData = new FormData(this); 

                $.ajax({
                    url: '{{ route('admin.profile.update') }}', 
                    method: 'POST',
                    data: formData,
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        $('#updateProfileModal').modal('hide');
                        window.location.reload(); 
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        if (errors.name) {
                            $('#name').addClass('is-invalid');
                            $('#name-error').text(errors.name[0]);
                        }
                        if (errors.email) {
                            $('#email').addClass('is-invalid');
                            $('#email-error').text(errors.email[0]);
                        }
                        if (errors.profile_image) {
                            $('#profile_image').addClass('is-invalid');
                            $('#profile_image-error').text(errors.profile_image[0]);
                        }
                    }
                });
            });
        });
    </script>

    {{-- change password script --}}
    <script>
        $(document).ready(function() {
            $('#changePasswordForm').submit(function(e) {
                e.preventDefault(); // Prevent default form submission
    
                var formData = new FormData(this); // FormData object create
    
                $.ajax({
                    url: '{{ route('admin.profile.changePassword') }}', // Route to change password
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#changePasswordModal').modal('hide'); 
                        window.location.reload(); // Reload page to reflect changes
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
    
                        // Handle validation errors for current password
                        if (errors.current_password) {
                            $('#current_password').addClass('is-invalid');
                            $('#current_password-error').text(errors.current_password[0]);
                        } else {
                            $('#current_password').removeClass('is-invalid');
                            $('#current_password-error').text('');
                        }
    
                        // Handle validation errors for new password
                        if (errors.new_password) {
                            $('#new_password').addClass('is-invalid');
                            $('#new_password-error').text(errors.new_password[0]);
                        } else {
                            $('#new_password').removeClass('is-invalid');
                            $('#new_password-error').text('');
                        }
    
                        // Handle validation errors for password confirmation
                        if (errors.password_confirmation) {
                            $('#password_confirmation').addClass('is-invalid');
                            $('#password_confirmation-error').text(errors.password_confirmation[0]);
                        } else {
                            $('#password_confirmation').removeClass('is-invalid');
                            $('#password_confirmation-error').text('');
                        }
                    }
                });
            });
        });
    </script>
    
    
    
    

@endsection