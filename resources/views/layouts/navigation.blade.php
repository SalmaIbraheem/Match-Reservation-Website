@extends('layouts.app')

@section('navigation')
<nav class="nav">
    <ul class="container">
        <li class="logo">
            <div class="logo">
                <img src='/images/logo1.png' >
            </div> 
        </li>
        <li>
        @auth   
        @if(Auth::user()->type == 0)
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">Matches</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Reservations</a></li>
                <li class = "dropdown">
                    <a href="#">
                        <img class="rounded-circle"  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                        data-holder-rendered="true">
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>
                </li>
            </ul>
        </div>
        @elseif(Auth::user()->type == 1)
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">Matches</a></li>
                <li><a href="/m/create">Create Match</a></li>
                <li><a href="/s/create">Create Stadium</a></li>
                <li><a href="#">Reservations</a></li>
                <li class = "dropdown">
                    <a href="#">
                        <img class="rounded-circle"  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                        data-holder-rendered="true">
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>
                </li>
            </ul>
        </div>
        @elseif(Auth::user()->type == 2) 
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">Matches</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Reservations</a></li>
                <li class = "dropdown">
                    <a href="#">
                        <img class="rounded-circle"  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
                        data-holder-rendered="true">
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('profile') }}"  class="dropdown-item" >Profile</a>
                        <a href="#"  class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>
                </li>
            </ul>
        </div>
        @endif
        @else
        <div id="mainListDiv" class="main_list" >
            <ul class="navlinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">Matches</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </div>
        @endauth
    </div>
        </li>
    </ul>
    <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
    </span>
    </div>
</nav>
<section class="home">

</div>

<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/navbar.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
@stop