@extends('app')

@section('content')

    <h1 id="project_title">{{trans('projects.things')}}</h1>

    <ul class="list-group" id="project_list">
        <li class="list-group-item">
            <h1>{{trans('projects.website')}}</h1>
            <p class="text-info">{{trans('projects.website_description')}}</p>
        </li>
        <li class="list-group-item">
            <h1>{{trans('projects.popn')}}</h1>
            <p class="text-info">{{trans('projects.popn_description')}}</p>
            <p class="text-info">{{trans('projects.popn_platform')}}</p>
        </li>
    </ul>

@endsection