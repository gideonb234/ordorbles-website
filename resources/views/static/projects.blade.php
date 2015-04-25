@extends('app')

@section('content')

    <h1>{{trans('projects.things')}}</h1>

    <ul class="list-group">
        <li class="list-group-item">
            <h1>{{trans('projects.website')}}</h1>
            <p>{{trans('projects.website_description')}}</p>
        </li>
        <li class="list-group-item">
            <h1>{{trans('projects.popn')}}</h1>
            <p>{{trans('projects.popn_description')}}</p>
            <p>{{trans('projects.popn_platform')}}</p>
        </li>
    </ul>

@endsection