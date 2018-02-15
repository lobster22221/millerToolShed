
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    
    @include('layouts.headerScript')
    
  </head>

  <body>

    <div class="container">
    @include('layouts.nav')
        
    @include('layouts.categories')
        
    @include('layouts.jumboSample')
        
    @include('layouts.featuredPost')
        
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                Latest Post
                </h3>
            @include('layouts.BlogPostContents')
            @include('layouts.pagination')
            </div><!-- /.blog-main -->
            @include('layouts.sidebar')
        </div><!-- /.row -->
    </main><!-- /.container -->

    @include('layouts.Footer')

    @include('layouts.footerscript')
  </body>
</html>
