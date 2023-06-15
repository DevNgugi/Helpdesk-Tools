@include('components/header')

      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Add Knowledge
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <form method="post" action="{{route('store')}}">
                @csrf
                <div class="mb-3">
                  <label class="form-label"> Title</label>
                  <input name="title" type="text" class="form-control" placeholder="Title">
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                    <textarea name="body" id="tinymce-mytextarea">Teach something, <b>Awesome</b>!</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Save Knowledge</button>
              </form>

              </div>
            </div>
          </div>
        </div>
@include('components/footer')
        
    <script src="{{('assets/dist/libs/tinymce/tinymce.min.js?1674944402')}}" defer></script>

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