<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ordorbles</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-language"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" id="locale">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li value="en"><a rel="alternate" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}"><img src="{{ asset('/images/flags/'. $localeCode .'.png') }}"/> {{trans('navbar.'. $localeCode)}}</a></li>
                        @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    @yield('content')
    </div>
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="javascript">
        $('#locale').click(function (e) {
            console.log("I work!");
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63457728-1', 'auto');
        ga('send', 'pageview');

    </script>
    @yield('footer')
</body>
</html>