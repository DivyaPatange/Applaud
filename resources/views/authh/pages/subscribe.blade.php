@extends('authh.layout.mainweb')
@section('customcss')
<style>
.modal-backdrop{background-color:transparent;}

.subscribe-section{
    font-family:'Montserrat',sans-serif !important;
    background-color:#424442 !important;
    color:white !important;
    /*height:83vh;*/
}
input.sub-input{
    padding:0px !important;
    box-sizing:border-box !important;
    background:none !important;
    outline:none !important;
    resize:none !important;
    border:0 !important;
    font-family:'Montserrat',sans-serif !important;
    transition:all .3s;
    border-bottom:2px solid #bebed2 !important;
    color:white !important;
    }
input.sub-input:focus{
    border-bottom:2px solid #78788c;
    color:white;
    }
p.sub-para:before{
    color:white !important;
    content:attr(type);
    display:block;
    margin:28px 0 0;
    font-size:14px;
    color:#5a5a5a;
    }
#btn2{
    background-color:#a41d21;
    color:white;
    padding:5px 35px;
    border:none;
    cursor:pointer;
}
.img11{
    border-radius:50%;
}
p[type] {
  color:white !important;
}
.link1{
    display:block;
    margin-left:15%;
}
.btn3{
    display:block;
    padding:2% 10%;
}

.modal-header {
   border:none;
}
a{
    text-decoration:none;
}
@media screen and (max-width: 992px) {
  .subscribe-section {
    height: 100vh;
  }
}
@media screen and (max-width: 600px) {
  .subscribe-section {
    height: 100vh;
  }
}
</style>
@endsection

 @section('content')
<section class="subscribe-section pb-5">

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12">
           
            <!--<button class="btn2">Subscribe now for $9.99!</button>-->
            
            <!--modal-->
            <!-- Button trigger modal -->
            <!--<button type="button" class="btn btn-primary" id="btn2" data-toggle="modal" data-target="#exampleModal">-->
            <!--  Subscribe now for $9.99!-->
            <!--</button>-->
        
            <!-- Modal block -->
            <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
            <!--  <div class="modal-dialog modal-dialog-centered">-->
            <!--    <div class="modal-content" style="background-color:#c40c00">-->
            <!--      <div class="modal-header">-->
            <!--        <h5 class="modal-title" id="exampleModalLabel"></h5>-->
            <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--          <span aria-hidden="true">&times;</span>-->
            <!--        </button>-->
            <!--      </div>-->
            <!--      <div class="modal-body">-->
            <!--            <img src="assets/images/11.png" height="100" width="160" style="margin-left: 32%;">-->
            <!--            <div style="margin-top:50px;">-->
            <!--                  <div style="float:left;"><a href="#" class="text-white">PAY NOW</a></div>-->
            <!--                  <div style="float:right;"><a href="#" class="text-white">ADD TO CART</a></div>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
                   <!------------>
            <p class="sub-para" type="card holder name">
                <div class="row">
                    <input class="col-11 mx-1 sub-input" placeholder="John Doe"></input>
                </div>
            </p>
            
            <p class="sub-para" type="card number">
                <div class="row">
                    <input class="col-2 mx-1 sub-input" placeholder="xxxx"></input>
                    <input class="col-2 mx-1 sub-input" placeholder="xxxx"></input>
                    <input class="col-2 mx-1 sub-input" placeholder="xxxx"></input>
                    <input class="col-2 mx-1 sub-input" placeholder="xxxx"></input>
                </div>
            </p>
            <p class="sub-para" type="cvc"><input class="col-3 sub-input" placeholder="123"></input></p>
            <!--<p class="sub-para" type="zipcode"><input class="sub-input" placeholder=""></input></p>-->
            <p class="sub-para" type="expiry date"><input class="col-4 sub-input" placeholder="mm/yy"></input></p>

        </div>

        <div class="col-md-4">
            <!--<img src="assets/images/cont1.jpg" class="img11" alt="">-->
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-5" id="btn2" data-toggle="modal" data-target="#exampleModal">
              Subscribe now for $9.99!
            </button>
        
            <!-- Modal block -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color:#c40c00">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <img src="assets/images/11.png" height="100" width="160" style="margin-left: 32%;">
                        <div style="margin-top:50px;">
                              <div style="float:left;"><a href="#" class="text-white">PAY NOW</a></div>
                              <div style="float:right;"><a href="#" class="text-white">ADD TO CART</a></div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
                   <!------------>
            
            
            <!--<button class="btn2 m-4">selfie to upload</button>-->
            
             <!--modal-->
            <!-- Button trigger modal -->
            <!--<button type="button" class="btn btn-primary m-4" id="btn2" data-toggle="modal" data-target="#exampleModal">-->
            <!--  selfie to upload-->
            <!--</button>-->
        
            <!-- Modal block -->
            <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
            <!--  <div class="modal-dialog modal-dialog-centered">-->
            <!--    <div class="modal-content" style="background-color:#c40c00">-->
            <!--      <div class="modal-header">-->
            <!--        <h5 class="modal-title" id="exampleModalLabel"></h5>-->
            <!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
            <!--          <span aria-hidden="true">&times;</span>-->
            <!--        </button>-->
            <!--      </div>-->
            <!--      <div class="modal-body">-->
            <!--            <img src="assets/images/11.png" height="100" width="160" style="margin-left: 32%;">-->
            <!--            <div style="margin-top:50px;">-->
            <!--                <div style="float:left;">PAY NOW</div>-->
            <!--                <div style="float:right;">ADD TO CART</div>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
                   <!------------>
           
            
            <a href="" class="text-white link1 mt-3">secure your wallet</a>
        </div>

        <div class="col-md-4 mt-3">
            <form>
                
<!--                <div class="form-check">-->
<!--  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">-->
<!--</div>-->
                
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label mx-2 my-1" for="exampleRadios1">
                XXXX XXXX XXXX 5423
              </label>
            </div>
            
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label mx-2 my-1" for="exampleRadios1">
                XXXX XXXX XXXX 1733
              </label>
            </div>
            
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label mx-2 my-1" for="exampleRadios1">
                XXXX XXXX XXXX 5423
              </label>
            </div>
                
            <!--<button class="btn btn-outline-light px-4 py-2 my-2 btn3">visa</button>-->
            <!--<input class="sub-input" placeholder=""></input>-->
            <!--<button class="btn btn-outline-light px-4 py-2 my-2 btn3">visa</button>-->
            <!--<input class="sub-input" placeholder=""></input>-->
            <!--<button class="btn btn-outline-light px-4 py-2 my-2 btn3">visa</button>-->
            <!--<input class="sub-input" placeholder=""></input>-->
            
            
        </form>
        </div>


    </div>
</div>
</section>
<!--<section class="footer-section mt-0 pt-0">-->
<!--    <section class="pt-1">-->
<!--    <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--        <i class="fas fa-list text-white"></i>-->
<!--    </a>-->
<!--</section>-->

@endsection
