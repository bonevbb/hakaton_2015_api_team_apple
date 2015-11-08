@extends('apicontent')

@section('header')
        <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand no_padding" href="#"><img id="logo" src="img/wm.png" alt="logo"></a>
    <a class="navbar-brand " href="#">Weather Masters</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <!--TO DO rigth nav-->
    </ul>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" name="location" class="form-control" placeholder="Please enter location">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
        <!--TO DO rigth nav-->
    </ul>
</div><!-- /.navbar-collapse -->
@stop
@section('content')
    <div class="row hidden-lg hidden-md hidden-sm">
        <div class="col-sm-6">
        <form class="navbar-form navbar-left " role="search">
            <div class="form-group">
                <input type="text" name="location" class="form-control" placeholder="Please enter location">
                <button type="submit" class="btn btn-default">Search</button>
            </div>
        </form>
        </div>
        </div>
        <div class="jumbotron light_green">
            <div class="col-sm-4 text-center">
                <div class="well weather_block mw no_margin">
                    <img id="logo" src="img/wm.png" alt="logo">
                    <p class="no_margin_bottom"><img class="icon" src="http://openweathermap.org/img/w/{{$icon}}.png"> <span class="temp_center">{{round($new_value_temp , 2)}} &deg;C</span></p>
                    <p><span class="temp_center">{{(round($pressure_new , 2))}} hpa</span></p>
                </div>
            </div>
            <h2><?php echo 'Today is '. date("l") .', '. date("Y-m-d"); ?></h2>
            <h1>Weather in {{$name}} is <span>{{$weather}}</span></h1>
            <p style="text-transform: uppercase;">{{$weather_description}}</p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4 text-center">
                    <div class="well weather_block light_orange">
                        <img src="img/logo_open.jpg" alt="a picture">
                        <p class="no_margin_bottom"><img class="icon" src="http://openweathermap.org/img/w/{{$icon}}.png"> <span class="temp_other">{{$city_temp}} &deg;C</span></p>
                        <p class="hpa"><span>{{$pressure}} hpa</span></p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="well weather_block light_orange">
                        <img src="img/logo_forecast.jpg" alt="logo">
                        <p class="no_margin_bottom"><img class="icon" src="http://openweathermap.org/img/w/{{$icon}}.png"> <span class="temp_other">{{$city_temp_third}} &deg;C</span></p>
                        <p class="hpa"><span>{{$pressure_third}} hpa</span></p>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="well weather_block light_orange">
                        <img src="img/logo_apixu.jpg" alt="a picture">
                        <p class="no_margin_bottom"><img class="icon" src="http://openweathermap.org/img/w/{{$icon}}.png"> <span class="temp_other">{{$city_temp_apixu}} &deg;C</span></p>
                        <p class="hpa"><span>{{$pressure_apixu}} hpa</span></p>
                    </div>
                </div>
            </div>
        </div>
@stop
@section('footer')
    <!--<div id="footer">
        <div class="container">
            <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
        </div>
    </div>-->
@stop