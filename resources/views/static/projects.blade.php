@extends('app')

@section('content')

    <h1 id="project_title">{{trans('projects.things')}}</h1>

    <ul class="list-group" id="project_list">
        <li class="list-group-item">
            <h1>{{trans('projects.website')}} <a href="http://github.com/gideonb234/ordorbles-website/"><i class="fa fa-github"></i></a></h1>
            <p class="text-info">{{trans('projects.website_description')}}</p>
        </li>

    </ul>

@endsection