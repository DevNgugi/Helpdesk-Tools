@include('components/header')
      
      <div class="page-wrapper">
        
        <!-- Page header -->
        <div class="page-header mb-3 mt-5">
          <div class="container-xl ">
            <div class="row g-4 align-items-center">
              
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <a href="{{route('create')}}" class="btn btn-primary">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                 Add Knowledge
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl  ">
            <div class="row g-4">

              <div class="col-md-3">
                <div class="form-label">Pinned Links</div>
                <div class="mb-4">
                  
                  <ul class="list-unstyled">
                    <li class="mb-2"><a  href="post/12">Link Down Escalation Matrix</a></li>
                    <li class="mb-2"><a  href="post/5">IT Purchase Process</a></li>
                    <li class="mb-2"><a  href="post/8">IT Resolution Documentation</a></li>
                    <li class="mb-2"><a  href="post/11">Tablet Setup Process</a></li>
                    <li class="mb-2"><a  href="post/9">Daily todo Tasks</a></li>
                    
                    
                  </ul>
                </div>
                {{-- <form action="./" method="get" autocomplete="off" novalidate class="sticky-top">
                  <div class="form-label">Job Types</div>
                  <div class="mb-4">
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-type[]" value="1" checked>
                      <span class="form-check-label">Programming</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-type[]" value="2" checked>
                      <span class="form-check-label">Design</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-type[]" value="3">
                      <span class="form-check-label">Management / Finance</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-type[]" value="4">
                      <span class="form-check-label">Customer Support</span>
                    </label>
                    <label class="form-check">
                      <input type="checkbox" class="form-check-input" name="form-type[]" value="5">
                      <span class="form-check-label">Sales / Marketing</span>
                    </label>
                  </div>
                  <div class="form-label">Remote</div>
                  <div class="mb-4">
                    <label class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" >
                      <span class="form-check-label form-check-label-on">On</span>
                      <span class="form-check-label form-check-label-off">Off</span>
                    </label>
                  </div>
                  <div class="form-label">Salary Range</div>
                  <div class="mb-4">
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-salary" value="1" checked>
                      <span class="form-check-label">$20K - $50K</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-salary" value="2" checked>
                      <span class="form-check-label">$50K - $100K</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-salary" value="3">
                      <span class="form-check-label">> $100K</span>
                    </label>
                    <label class="form-check">
                      <input type="radio" class="form-check-input" name="form-salary" value="4">
                      <span class="form-check-label">Drawing / Painting</span>
                    </label>
                  </div>
                  <div class="form-label">Immigration</div>
                  <div class="mb-4">
                    <label class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" >
                      <span class="form-check-label form-check-label-on">On</span>
                      <span class="form-check-label form-check-label-off">Off</span>
                    </label>
                    <div class="small text-muted">Only show companies that can sponsor a visa</div>
                  </div>
                  <div class="form-label">Location</div>
                  <div class="mb-4">
                    <select class="form-select">
                      <option>Anywhere</option>
                      <option>London</option>
                      <option>San Francisco</option>
                      <option>New York</option>
                      <option>Berlin</option>
                    </select>
                  </div>
                  <div class="mt-5">
                    <button class="btn btn-primary w-100">
                      Confirm changes
                    </button>
                    <a href="#" class="btn btn-link w-100">
                      Reset to defaults
                    </a>
                  </div>
                </form> --}}
              </div>
              
              <div class="col-md-9 mx-auto mt-2 mb-5">
                <div class="row row-cards">
                  <div class="space-y">
                  @if (!$posts->isEmpty())
                  @foreach ($posts as $post)
                  <div class="card" onclick="window.location='{{ url('post').'/'.$post->id }}'">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url({{asset('assets/static/qa.jpg')}})"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">{{ucwords(strtolower($post->title))}}</a></h3>
                              <span class="font-weight-light">by <i class="text-primary">{{$post->getUserRelation->name}}</i></span>
                            </div>
                            <div class="col-auto fs-4 text-info">{{$post->created_at->diffForHumans()}}</div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class=" text-truncate mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                                {{strip_tags(html_entity_decode(strtolower($post->body)))}}
                                {{-- <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" /><path d="M13 7l0 .01" /><path d="M17 7l0 .01" /><path d="M17 11l0 .01" /><path d="M17 15l0 .01" /></svg>
                                  Center Pixel, Inc</div>
                                <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" /><path d="M9 7l4 0" /><path d="M9 11l4 0" /></svg>
                                  Full-time or Contract</div>
                                <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 11m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                  Remote / Palo Alto, CA</div> --}}
                              </div>
                              {{-- <div class="mt-3 list mb-0 text-muted d-block d-sm-none">
                                <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" /><path d="M13 7l0 .01" /><path d="M17 7l0 .01" /><path d="M17 11l0 .01" /><path d="M17 15l0 .01" /></svg>
                                  Center Pixel, Inc</div>
                                <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" /><path d="M9 7l4 0" /><path d="M9 11l4 0" /></svg>
                                  Full-time or Contract</div>
                                <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 11m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                                  Remote / Palo Alto, CA</div>
                              </div> --}}
                            </div>
                            <div class="col-md-auto">
                              {{-- <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">React</a>
                                <a href="#" class="badge badge-outline text-muted border fw-normal badge-pill">+3</a>
                              </div> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  @else
                 
                    <h2 class="d-flex justify-content-center">No records found !</h2>
                  
                  
                  @endif
                    

                  </div>
                </div>
              </div>
           
              
            </div>
          </div>
          <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
          </div>
         
        </div>
        
@include('components/footer')
  </body>


  @if (session('post_added'))
<script>
    toastr["success"](" {{ session('post_added') }}");
</script>
@endif
@if (session('post_not_added'))
<script>
    toastr["error"](" {{ session('post_not_added') }}");
</script>
@endif
</html>