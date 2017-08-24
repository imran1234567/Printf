<!DOCTYPE html>
  <html>
    <head>
      <title>@yield('title')</title>
      <link rel="icon" href="img/logo23.png" type="image/x-icon" height="20px" width="20px;">
      @yield('meta')
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
       
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="{{ URL::to('css/app.css')}}">

      @yield('styles')
    </head>

    <body>
     @include('partials.header')

     <div class="center col s6 offset-s6">
     @yield('content')    
     </div>

     <div class="center container">
      @yield('content1')
     </div>
     
     <div class="container">
         @yield('cards')
     </div>
     
     
         @yield('review')
     @include('partials.footer')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/599eaa86b6e907673de0950a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    @yield('scripts')
          
    </body>
  </html>