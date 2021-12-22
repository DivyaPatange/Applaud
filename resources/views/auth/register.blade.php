<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Applaud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
    #results { padding:20px; border:1px solid; background:#ccc; }
    body{
        background-color:#bd2025;
    }
    body{
    
    background-color:#bd2025;
    }
    @media only screen and (max-width: 400px) {
        #camlogo{
        margin-top:5%;
         margin-left:90px;
          /*height:10%;*/
          /*width:25%;*/
          
    }
    #regilogo{
        display:flex;
        justify-content:center;
        margin-left:3%;
    }
    }
    #results {
    padding: 0px;
    border: none;
    background:none;
    }
    .invalid-feedback {
    color: white;
}
</style>
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center">
    <img src="assets/images/11.png" alt="" height="100" width="160" id="img1">
</div>


<div class="container" style="background-color:#bd2025">
    <div class="row">
        <div class="col-md-4 login_wrapper">
            <div class="">
            <form method="POST"  action="{{ route('register') }}">
                 @csrf
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <input type="text"  name="name" class="form-control @error('name') is-invalid @enderror my-2"  placeholder="Username"/>
                        @error('name')
                        <span class="invalid-feedback login__signup" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                        <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror my-2"  placeholder="Email"/>
                        @error('email')
                        <span class="invalid-feedback login__signup" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror my-2" placeholder="Password"  />
                            @error('password')
                            <span class="invalid-feedback login__signup" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                        <input type="password" name="password_confirmation" class="form-control my-2" placeholder="Password confirmation" />

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-outline-danger text-white" onclick="return showWebCam()" id="webCamButton">
                                Take Selfie
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                        <button type="submit" class="btn btn-dark my-3">Submit</button>
                            <p  class=" my-3">Got to login page &nbsp;<a href="signin">Sign In</a></p>
                        </div>
                    </div>
                </div>
               
            
        </div>
       
        <div class="col-md-8 login_wrapper">
            <div id="cameradiv" style="display:none">
                <div class="row">
                    <div class="col-md-6">
                        <div id="my_camera"></div>
                        <button type="button" class="btn btn-danger" value="Click" onClick="take_snapshot()">Click</button>
                        <input type="hidden" name="image" class="image-tag">
                    </div>

                    <div class="col-md-6">
                            <div id="results" style="color:white;">Your captured image will appear here...</div>
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>        
    </div>   
</div>      
</form>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

<script>
    $(document).ready(function() {

        var animating = false,
            submitPhase1 = 1100,
            submitPhase2 = 400,
            logoutPhase1 = 800,
            $login = $(".login"),
            $app = $(".app");

        function ripple(elem, e) {
            $(".ripple").remove();
            var elTop = elem.offset().top,
                elLeft = elem.offset().left,
                x = e.pageX - elLeft,
                y = e.pageY - elTop;
            var $ripple = $("<div class='ripple'></div>");
            $ripple.css({top: y, left: x});
            elem.append($ripple);
        };

        $(document).on("click", ".login__submit", function(e) {
            if (animating) return;
            animating = true;
            var that = this;
            ripple($(that), e);
            $(that).addClass("processing");
            setTimeout(function() {
                $(that).addClass("success");
                setTimeout(function() {
                    $app.show();
                    $app.css("top");
                    $app.addClass("active");
                }, submitPhase2 - 70);
                setTimeout(function() {
                    $login.hide();
                    $login.addClass("inactive");
                    animating = false;
                    $(that).removeClass("success processing");
                }, submitPhase2);
            }, submitPhase1);
        });

        $(document).on("click", ".app__logout", function(e) {
            if (animating) return;
            $(".ripple").remove();
            animating = true;
            var that = this;
            $(that).addClass("clicked");
            setTimeout(function() {
                $app.removeClass("active");
                $login.show();
                $login.css("top");
                $login.removeClass("inactive");
            }, logoutPhase1 - 120);
            setTimeout(function() {
                $app.hide();
                animating = false;
                $(that).removeClass("clicked");
            }, logoutPhase1);
        });

    });

    function showWebCam() 
    {
        $("#webCamButton").hide();
        $("#cameradiv").show();
    }

    
</script>
<script language="JavaScript">
    Webcam.set({
        width: 270,
        height: 270,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'" width="100%" height="270px"/><h5>Click Submit and you are DONE</h5>';
        } );
    }
</script>
</body>
</html>
