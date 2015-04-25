@extends('app')

@section('content')

    <h1>{{trans('projects.things')}}</h1>

    <ul>
        <li><h1>{{trans('projects.website')}}</h1></li>
            <p>You're on the site fam</p>
        <li><h1>Pop'n score tracker</h1></li>
            <p>Tracks your score per song because why not</p>
            <p>For Android soooooooon (as I actually start making it)</p>
        <li><h1>DEEZ NUTS!</h1></li>
            <p>haha funny memes</p>
    </ul>

@endsection