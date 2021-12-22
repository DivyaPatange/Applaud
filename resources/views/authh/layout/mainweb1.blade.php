<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================--> 
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Applaud</title>   

    
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    @include('authh.layout.link')
    @yield('customcss')

  </head>


    <body>
        <main class="main" id="top">
            @include('authh.layout.header')
            @yield('content')
            @include('authh.layout.script')
        </main>   
    </body>  
</html>