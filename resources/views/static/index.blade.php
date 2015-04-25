@extends('app')

@section('content')

    <div id="index">
        <div class="jumbotron" id="jumbo_index">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{trans('index.hello')}}!</h1>
                    <p>{{trans('index.intro')}}.</p>
                    <p>{{trans('index.developer')}}.</p>
                    <p>{{trans('index.develop')}}</p>
                    <p>{{trans('index.email')}} <a href="mailto:gideon@ordorbles.uk">gideon@ordorbles.uk</a></p>
                </div>
                <div class="col-md-6" id="mugshot">
                    <img src="{{asset('/images/mugshot.jpg')}}" alt="My Picture"/>
                </div>
            </div>
        </div>
    </div>


@endsection