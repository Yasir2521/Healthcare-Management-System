

<!DOCTYPE html>
<html lang="en">
  <head>

  @include('admin.css')
  
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.navbar')
      @include('admin.sidebar')
          @include('admin.body')

      
  </body>
  @include('admin.script')
  @include('admin.logout')
</html>

