@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete Account</h1>
        
        <p>Are you sure you want to delete your account?</p>

        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
@endsection
