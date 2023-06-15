@include('components/header')

      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class=" col-md-8  d-flex mx-auto">
                <h2 class="page-title">
                  Edit Post
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row g-2 mb-3 ">
                        
              <!-- Page title actions -->
              <div class=" col-md-8  d-flex mx-auto justify-content-between ">
                  <a href="{{route('show',[$post->id])}}" class="btn btn-clear">
                      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M5 12l14 0"></path>
                          <path d="M5 12l4 4"></path>
                          <path d="M5 12l4 -4"></path>
                       </svg>
                      Back
                  </a>

                  
                 
              </div>
          </div>
            <div class="card col-md-8 mx-auto">
              <div class="card-body">
                <form method="post" action="{{route('update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="mb-3">
                  <label class="form-label"> Title</label>
                  <input name="title" type="text" class="form-control" value="{{$post->title}}" placeholder="Title">
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                    <textarea name="body" id="tinymce-mytextarea">{{ $post->body }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Update Knowledge</button>
              </form>

              </div>
            </div>
          </div>
        </div>
@include('components/footer')
        
    <script src="{{asset('assets/dist/libs/tinymce/tinymce.min.js?1674944402')}}" defer></script>

    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        let options = {
          selector: '#tinymce-mytextarea',
          height: 300,
          menubar: false,
          statusbar: false,
          plugins: [
            
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
          ],
          menubar:['insert'],
          toolbar: 'undo redo | formatselect link| ' +'image'+
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
          content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if (localStorage.getItem("tablerTheme") === 'dark') {
          options.skin = 'oxide-dark';
          options.content_css = 'dark';
        }
        tinyMCE.init(options);
      })
      // @formatter:on
    </script>
  </body>
</html>