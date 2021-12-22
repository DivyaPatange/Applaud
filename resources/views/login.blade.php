@extends('authh.layout.main')
@section('customcss')
<style>
    body{
        background-color:#bd2025;
    }
    #login_wrapper_index {
        height: 80vh;
        width: 100%;
    }
    .row>* {
        width: 50%;
    }
    .invalid-feedback {
    color: white;
}
.form-control.is-invalid, .was-validated .form-control:invalid {
    border-color: white;
}
    .form-control:focus {
    background-color: transparent;
}
</style>
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="my-5">
            <img src="assets/images/11.png" height="100" width="160">
    </div>
</div>

<div class="container" style="background-color:#bd2025">
    <div class="row">
        <div class="col-md-6 login_wrapper">
            <div class="">
                <form method="POST" class="text-center" action="{{ route('login') }}">
                 @csrf
                 
                    <div class="row mb-3"> 
                        <input type="text" name="email" class="form-control text-white @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Email"/>
                            @error('email')
                            <span class="invalid-feedback login__signup" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                    </div>

                    <div class="row mb-3">
                        <input type="password" name="password" class="form-control text-white @error('password') is-invalid @enderror" placeholder="Password"/>
                            @error('password')
                            <span class="invalid-feedback login__signup" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                    </div>

                    <div class="row mb-2">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-white" >
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- --------  -->
                    <div class="row mb-2">
                        <button type="button" class="btn btn-light w-50 @error('selfie') is-invalid @enderror" onclick="return showWebCam()" id="webCamButton" style="color: red;">
                            <b>Take Selfie </b>
                        </button>
                        @error('selfie')
                            <span class="invalid-feedback login__signup" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                     <!-- --------  -->
                     <div class="row mb-2">
                        <button type="submit" class="my-3 btn btn-light w-50" style="color: red;">Sign in</button>
                    </div>
                    <!-- -----------  -->
                </div>
                <a href="{{ route('register') }}" class="text-white" >New to applaud ? Sign up now</a>
            
        </div>
       
        <div class="col-md-6 login_wrapper">
            <div id="cameradiv" style="display:none">
                <div class="row">
                    <div class="col-md-3">
                        <div id="my_camera"></div>
                        <button type="button" class="btn btn-danger" value="Click" onClick="take_snapshot()">Click</button>
                        <input type="hidden" name="image" class="image-tag">
                    </div>

                    <div class="col-md-3">
                            <div id="results" style="color:white;">Your captured image will appear here...</div>
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>        
    </div>   
</div>
</form>

@yield('customjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

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
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/><button style="margin-top:2%;; background-color:white; color:#bd2025;" onclick="myFunction()"> Click to verify </p>';
        } );
    }
</script>
<script>
function myFunction() {
  alert("Image verified! You can signin now");
}
</script>

@endsection

