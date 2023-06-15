<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Knowledgebase</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="{{asset('assets/dist/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-payments.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/demo.min.css?1674944402') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }


        .bdge {
            height: 21px;
            background-color: orange;
            color: #fff;
            font-size: 11px;
            padding: 8px;
            border-radius: 4px;
            line-height: 3px;
        }

        .comments {
            text-decoration: underline;
            text-underline-position: under;
            cursor: pointer;
        }

        .dot {
            height: 7px;
            width: 7px;
            margin-top: 3px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .hit-voting:hover {
            color: blue;
        }

        .hit-voting {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <script src="{{ 'assets/dist/js/demo-theme.min.js?1674944402' }}"></script>
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
                  <input name="search" type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
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
                    <a href="#" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Logout</a>
                  </div>
                </div>
            </div>
          </header>

        <div class="page-wrapper">

            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 mb-3 ">
                        
                        <!-- Page title actions -->
                        <div class=" col-md-8  d-flex mx-auto justify-content-between ">
                            <a href="{{route('home')}}" class="btn btn-clear">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M5 12l4 4"></path>
                                    <path d="M5 12l4 -4"></path>
                                 </svg>
                                Back
                            </a>

                            <a href="{{route('edit',[$post->id])}}" class="  btn btn-clear">
                              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                              </svg>
                               Edit
                          </a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="container mb-5">
                <div class="d-flex justify-content-center row">
                  
                    <div class="d-flex flex-column col-md-8">
                      
                        <div
                            class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                            
                            <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1"><i
                                class="fa fa-sort-up fa-2x hit-voting"></i><span>0</span><i
                                class="fa fa-sort-down fa-2x hit-voting"></i>
                        </div>
                            <div class="d-flex flex-column ml-3 pt-4">
                                <div class="d-flex flex-row post-title">
                                <div class=" d-flex flex-column text-sm mb-3">
                                    <h2 class="">{{$post->title}}</h2>
                                    <span>Added by <i>{{$post->getUserRelation->name}}</i></span>
                                </div>
                                
                                </div>
                                <div>
                                    {!!$post->body!!}
                                </div>
                                <div class="mt-3 d-flex flex-row align-items-center align-content-center post-title"><span class="mr-2 comments">{{count($comments)}}
                                        comments&nbsp;</span><span class="mr-2 dot"></span><span>{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="coment-bottom bg-white p-2 px-4">
                            <div class="mt-3"></div>
                          
                            @foreach ($comments as $comment)
                            
                            <div class="commented-section mt-2 mx-4">
                                <div class="d-flex flex-row align-items-center  commented-user">
                                    <h5 class="mr-2">{{ $comment->getCommentRelation->name }}</h5><span class="dot mb-1"></span><span
                                        class="mb-1 ml-2">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                <div class="comment-text-sm"><span>  {{ $comment->comment }}</span>
                                </div>
                                <div class="reply-section">
                                    <div class="d-flex flex-row align-items-center voting-icons"><i
                                            class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i
                                            class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span
                                            class="ml-2">0</span><span class="dot ml-2"></span>
                                        <h6 class="ml-2 mt-1">Reply</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          
                            
                            <form action="{{route('storecomment')}}" method=POST>
                                @csrf

                            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                    <input type="hidden" value="{{$post->id}}" name="id">
                                <input name="comment" type="text" class="form-control mr-3" placeholder="Add comment">
                                <button class="btn btn-primary" type="submit">Comment</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
            
<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
      <div class="row text-center align-items-center flex-row-reverse">
        <div class="col-lg-auto ms-lg-auto">
          
        </div>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
          <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item">
              Copyright &copy; {{Illuminate\Support\Carbon::now()->year}}
              <a href="https://www.github.com/devngugi" class="link-secondary">Phil</a>.
              All rights reserved.
            </li>
            <li class="list-inline-item">
              <a href="#" class="link-secondary" rel="noopener">
                v1.0.0
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js?1674944402') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js?1674944402') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>
