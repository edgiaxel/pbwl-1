@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Profile') }}</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 text-center">
                            <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/placeholder.jpg') }}"
                                alt="Profile Picture" class="rounded-circle mb-3"
                                style="width: 120px; height: 120px; object-fit: cover;">

                            <label for="profile_picture"
                                class="form-label d-block">{{ __('Upload Profile Picture') }}</label>
                            <input id="profile_picture" type="file" class="form-control" name="profile_picture"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name"
                                value="{{ Auth::user()->name }}" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control" name="email"
                                value="{{ Auth::user()->email }}" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}" required>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">{{ __('Nomor Telepon') }}</label>
                            <input id="no_telepon" type="text"
                                class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                value="{{ old('no_telepon', Auth::user()->no_telepon) }}" required>
                            @error('no_telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <hr>
                        <h5>Change Password</h5>

                        <div class="mb-3">
                            <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                            <input id="current_password" type="password" class="form-control" name="current_password"
                                autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">{{ __('New Password') }}</label>
                            <input id="new_password" type="password" class="form-control" name="new_password"
                                autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation"
                                class="form-label">{{ __('Confirm New Password') }}</label>
                            <input id="new_password_confirmation" type="password" class="form-control"
                                name="new_password_confirmation" autocomplete="off">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection