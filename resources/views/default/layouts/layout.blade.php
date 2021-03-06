<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <style>
			.page {
				padding: 200px 0;
			}
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Laravel Project:</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main-menu">
                    <li>
                        <a href="<?php echo route( 'home' ); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo route( 'about' ); ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo route( 'articles' ); ?>">Articles</a>
                    </li>
                    <li>
                        <a href="<?php echo route( 'article', array( 'id' => 10 ) ); ?>">Article</a>
                    </li>
                    <li>
                        <a href="<?php echo route( 'contacts' ); ?>">Contacts</a>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>
@show
{{--@endsection--}}
{{--@yield('navbar')--}}

<!-- Main jumbotron for a primary marketing message or call to action -->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $title }}</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a>
            </p>
        </div>
    </div>
@show

<div class="page">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-3">
                @section('sidebar')
                    <div class="sidebar-module">
                        <h2>Archives</h2>
                        <ol class="list-unstyled">
                            <li>
                                <a href="#">March 2014</a>
                            </li>
                            <li>
                                <a href="#">February 2014</a>
                            </li>
                            <li>
                                <a href="#">January 2014</a>
                            </li>
                            <li>
                                <a href="#">December 2013</a>
                            </li>
                            <li>
                                <a href="#">November 2013</a>
                            </li>
                            <li>
                                <a href="#">October 2013</a>
                            </li>
                            <li>
                                <a href="#">September 2013</a>
                            </li>
                            <li>
                                <a href="#">August 2013</a>
                            </li>
                            <li>
                                <a href="#">July 2013</a>
                            </li>
                            <li>
                                <a href="#">June 2013</a>
                            </li>
                            <li>
                                <a href="#">May 2013</a>
                            </li>
                            <li>
                                <a href="#">April 2013</a>
                            </li>
                        </ol>
                    </div>
                @show
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>

        <hr>

        <footer>

            <p>&copy; 2015 Company, Inc.</p>
        </footer>
    </div>
</div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    let siteHref = window.location.href;

                    $('.main-menu li').each(function(){
                        if(siteHref === $(this).find('a').attr('href')){
                            $(this).addClass('active');
                        } 
                    });
                    if(siteHref === 'http://tlaravel.local/'){
                        $('.main-menu li').eq(0).addClass('active');
                    }
                });
            </script>
</body>
</html>
