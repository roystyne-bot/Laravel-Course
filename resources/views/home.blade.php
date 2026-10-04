@extends('layouts.default')

@section('header')
<h2>This is the header!</h2>

@endsection

@section('maincontent')
<h1 class="italic font-bold text-amber-700">Home Page</h1>

<form action="{{ route('formsubmitted') }}" method="POST">
    @csrf
    <label for="fullname">Full name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Type your full name!" required>
    <label for="fullname">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="Type your email!" required>
    <button type="submit">Submit</button>
</form>
@endsection

@section('footer')
<h2>This is the footer!</h2>
@endsection