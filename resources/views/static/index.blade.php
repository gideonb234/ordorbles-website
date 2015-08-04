@extends('app')

@section('content')

    <div id="index">
        <div class="jumbotron" id="jumbo_index">
            <div class="row">
                <div class="col-xs-6">
                    <h1>{{trans('index.hello')}}!</h1>
                    <p>{{trans('index.intro')}}.</p>
                    <p>{{trans('index.developer')}}.</p>
                    <p>{{trans('index.develop')}}.</p>
                    <p>{{trans('index.email')}} <a href="mailto:gideon@ordorbles.uk">gideon@ordorbles.uk</a></p>
                </div>
                <div class="col-xs-6" id="mugshot">
                    <img src="{{asset('/images/mugshot.jpg')}}" alt="My Picture"/>
                </div>
            </div>
        </div>
    </div>

    <h1 id="project_title">{{trans('projects.things')}}</h1>

    <ul class="list-group" id="project_list">
        <li class="list-group-item">
            <h1>{{trans('projects.website')}} <a href="http://github.com/gideonb234/ordorbles-website/"><i class="fa fa-github"></i></a></h1>
            <p class="text-info">{{trans('projects.website_description')}}</p>
        </li>
        <li class="list-group-item">
            <h1>{{trans('projects.bee_trail')}}</h1>
            <p class="text-info">{{trans('projects.bee_trail_description')}}</p>
        </li>
    </ul>


@endsection