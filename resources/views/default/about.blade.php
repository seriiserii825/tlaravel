@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
{{--    @parent--}}
@endsection

@section('sidebar')
{{--    @parent--}}
@endsection


@section('content')
<div class="jumbotron">
<h2>{{ $about_title }}</h2>
{!! $about_text !!}
</div>
@endsection
