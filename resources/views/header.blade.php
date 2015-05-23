@extends('app')

@section('header')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{trans('navbar.brand')}}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">{{trans('navbar.home')}}</a></li>
                <li><a href="{{ url('projects') }}">{{trans('navbar.projects')}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://uk.linkedin.com/in/gideonbrett"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="http://twitter.com/ordorbles"><i class="fa fa-twitter" ></i></a></li>
                <li><a href="http://github.com/gideonb234"><i class="fa fa-github"></i></a></li>
                {{--Not Working Right Now--}}
                {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{trans('navbar.language')}} <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu" role="menu" id="locale">--}}
                {{--<li value="en"><a href="#"><img src="{{ asset('/images/flags/gb.png') }}" alt=""/> {{trans('navbar.english')}}</a></li>--}}
                {{--<li value="ko"><a href="#"><img src="{{ asset('/images/flags/ko.png') }}" alt=""/> {{trans('navbar.korean')}}</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
</nav>
@endsection