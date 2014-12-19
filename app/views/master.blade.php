
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
    {{ HTML::style('css/styles.css') }}

  </head>

  <body>
    <div class="container">
      @include('widgets.nav')
      @yield('content')
      <!-- Container -->

      <!-- Site footer -->
      <div class="bottom">
          <div class="container">
            <p class="pull-right"><a href="#master-top" class="scroll-to">Back to top</a></p>
            <p>&copy; 2014 ws-db &middot;
              <a href="mailto:tanprasitp@gmail.com?subject=Hi!">
                <span class="icon-envelope-alt"></span>Contact
              </a>
              &middot; 
              <a href="">
                Terms
              </a>
              &middot; Created by 
              <a href="https://www.facebook.com/luke.tanprasit">
                Tanprasit
              </a>
              &middot; 
              <a class="" href="">
                <span class="icon-exclamation-sign"></span> Report a Problem
              </a>
            </p>
          </div>
      </div>

    </div> <!-- /container -->
  </body>
  @section('scripts')
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', ["type" => "text/javascript"]) }}
      {{ HTML::script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', ["type" => "text/javascript"]) }}
  @show
</html>
