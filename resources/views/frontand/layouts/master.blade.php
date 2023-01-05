<!DOCTYPE html>
<html lang="en">

  <head>
    @include('frontand/includes.head_section')
    @include('frontand/includes.single-post-css')
  </head>

  <body>
    <div class="container bg">
     @include('frontand/includes.head_content')
      <section class="blog-posts">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">
                  @yield('content')
                </div>
              </div>
            </div>
            @include('frontand.includes.sidebar')
            
          </div>
        </div>
      </section>

  </div>


    
  

   @include('frontand.includes.footer')

  </body>
</html>