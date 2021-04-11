<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EscapeCS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    article {
    width: 300px;
    text-align: center;
    background-color: #68b04d;
    border-radius: 10px;
    margin: 50px auto 20px;
    padding: 5px;
    overflow: hidden;
    box-shadow: 3px 3px 10px #ccc;
    position: fixed;
    top: 50px;
    left: 20px;
    }
    
    article h3 {
    padding: 10px;
    color: #fff;
    }
    article .count {
    padding: 5px;
    }
    article #timer{
    padding: 5px;
    color: crimson;
    background-color: aliceblue;
    border-radius: 2px;
    font-weight: bold;
    font-size: 20px;
    }
    
    </style>

    
    @yield('css')

   
</head>

<body>
@guest
@else    
<article class="clock" id="model3">
    <h3></h3>

    <div class="count">
        <div id="timer"></div>
    </div>
</article>
@endguest       
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                Website Hostage Escape
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">




                        @if(count(config('app.languages')) > 1)


                        @foreach (config('app.languages') as $locale => $langName)
                        <li class="nav-item">
                            <a class="nav-link" @if (app()->getLocale()== $locale) style="text-decoration: underline"
                                @endif
                                @if (\Request::isMethod('get'))
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                alt="">
                                @else
                                href="#" alt="">
                                @endif
                                <img
                                    src="{{ URL::to('/') }}/img/flags/{{ $locale . '.svg' }}">{{ strtoupper($locale) }}</a>
                        </li>
                        @endforeach

                        @endif



                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login',app()->getLocale()) }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout',app()->getLocale()) }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            

            @yield('content')
        </main>
    </div>
</body>
<script>

    if(document.getElementById("model3")){
    
    var h3 = document.getElementsByTagName("h3");
    h3[0].innerHTML = "Countdown Timer";

    timedelay=getCookie("countdown");

    if (typeof timedelay === 'undefined' || timedelay === null || timedelay ===''){
    console.log('no cookie');
    setCookie("countdown",3600,2);
    } else {
    console.log(' cookie exists');

    }


    var sec = getCookie("countdown"),
    countDiv = document.getElementById("timer"),
    secpass,
    countDown = setInterval(function () {
    'use strict';

    secpass();
    }, 1000);


    } else {
    console.log("clock does nto exist");
    setCookie("countdown",'',0);
  
    }
   

    
    
    function secpass() {
    'use strict';
    
    var min = Math.floor(sec / 60),
    remSec = sec % 60;
    
    
    if (remSec < 10) { remSec='0' + remSec; } if (min < 10) { min='0' + min; } countDiv.innerHTML=min + ":" + remSec; if
        (sec> 0) {
    
        sec = sec - 1;
        setCookie("countdown",sec,2);
    
        } else {
    
        clearInterval(countDown);
    
        countDiv.innerHTML = 'Expired, You lost';
    
        }
        }

        function setCookie(name,value,days) {
        var expires = "";
        if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
            }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }
        function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) { var c=ca[i]; while (c.charAt(0)==' ' ) c=c.substring(1,c.length); if
            (c.indexOf(nameEQ)==0) return c.substring(nameEQ.length,c.length); } return null; 
        }
       
       
            //set "user_email" cookie, expires in 30 days var
            
</script>
</html>