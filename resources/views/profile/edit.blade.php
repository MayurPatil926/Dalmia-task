@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
