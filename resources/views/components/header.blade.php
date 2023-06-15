<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Knowledgebase</title>
   
    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('assets/ist/css/tabler-flags.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/tabler-payments.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/demo.min.css?1674944402')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" />
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="{{('assets/dist/js/demo-theme.min.js?1674944402')}}"></script>
    <div class="page">
      <!-- Navbar -->
    
        <header  class="navbar navbar-expand-md navbar-light d-print-none">
          <div class="container-xl">
            
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href=".">
                <img src="{{asset('assets/static/logo.svg')}}" width="110" height="32" alt="Knowledge Base" class="navbar-brand-image">
              </a>
            </h1>
              
              <form action="{{route('search')}}" method="post" autocomplete="off" novalidate="">
                @csrf
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                  </span>
                  <input  name="search" type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                </div>
              </form>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm" style="background-image: url({{asset('assets/static/avatars/000m.jpg')}})"></span>
                  <div class="d-none d-xl-block ps-2">
                    <div>{{Auth::User()->name}}</div>
                    <div class="mt-1 small text-muted">User</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <a href="{{route('profile.edit')}}" class="dropdown-item">Profile</a>
                  <div class="dropdown-divider"></div>
                  
                    
                  
                    <form  action="{{ route('logout') }}" method="POST" >
                      @csrf
                      <button class="dropdown-item">Logout</button>
                  </form>
                 
                </div>
              </div>
          </div>
        </header>