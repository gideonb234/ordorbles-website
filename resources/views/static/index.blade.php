@extends('app')

@section('content')

    <div id="index">
        <div class="jumbotron">
            <h1>{{trans('index.hello')}}!</h1>
            <p>{{trans('index.intro')}}.</p>
            <p>{{trans('index.developer')}}.</p>
        </div>
    </div>


@endsection