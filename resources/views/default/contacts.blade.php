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

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('contacts') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input name="name" type="text" class="form-control" value="{{ old('name') }}" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" value="{{ old('email') }}" id="inputAddress" placeholder="Email">
        </div>
        <div class="form-group">
            <input name="url" type="text" class="form-control" value="{{ old('url') }}" id="inputAddress" placeholder="Site">
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection
