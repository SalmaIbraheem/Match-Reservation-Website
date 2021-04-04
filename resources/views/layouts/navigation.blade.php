@extends('layouts.app')

@section('navigation')
<nav class="navbar navbar-expand-lg navbar-dark py-5 transparent ">
  <a class="navbar-brand img-fluid" href="#"><img src='/images/logo1_50.png' ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarColor02">
  @auth   
  @if(Auth::user()->type == 0)  
    <ul class="navbar-nav mr-auto" style = 'font-size: 20px;padding-top: 70px;'>
      <li class="nav-item active" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/reserve">Reservations</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a href="#"  class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> 
      </li>
    </ul>
    @elseif(Auth::user()->type == 1)
    <ul class="navbar-nav mr-auto" style = 'font-size: 20px;padding-top: 70px;'>
      <li class="nav-item active" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/m/create">Create Match</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/s/create">Create Stadium</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a href="#"  class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> 
      </li>
    </ul>
    @elseif(Auth::user()->type == 2) 
    <ul class="navbar-nav mr-auto" style = 'font-size: 20px;padding-top: 70px;'>
      <li class="nav-item active" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/users">Users</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a href="#"  class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> 
      </li>
    </ul>
    @endif
    @else
    <ul class="navbar-nav mr-auto" style = 'font-size: 20px;padding-top: 70px;'>
      <li class="nav-item active" style = 'padding-left: 20px;'>
        <a class="nav-link" href="/m">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item" style = 'padding-left: 20px;'>
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
    </ul>
    @endauth
  </div>
</nav>