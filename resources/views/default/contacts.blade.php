@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection


@section('content')
    <h2>Contact form</h2>
    {{ print_r(Session::all()) }}
    <form method="post" action="{{ route('contacts') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="inputEmail4">Name</label>
            <input name="text" type="text" class="form-control" value="{{ old('text') }}" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="address" type="text" class="form-control" value="{{ old('address') }}" id="inputAddress" placeholder="1234 Main St">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection
