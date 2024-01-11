@extends('layouts.app')

@section('content')

<div class="container">
<h1>Name : {{ Auth::user()->name }}</h1>
<h2>Mail : {{ Auth::user()->email }}</h1>

<div class="mt-3">
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
    <a href="{{ route('profile.destroy') }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete Account</a>
    <form id="delete-form" action="{{ route('profile.destroy') }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>
</div>
@endsection