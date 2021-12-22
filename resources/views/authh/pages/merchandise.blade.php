@extends('authh.layout.mainweb')
@section('customcss')
<style>
   .modal-backdrop{
       background-color:transparent;
   } 
    .modal-header {
       border:none;
    }
    a{
        text-decoration:none;
    }
</style>
@endsection
 
@section('content') 

  <section class="upper-section">
     
   <nav class="navbar1">
      <h4 class="text-white text-right"><b style="position: relative;right: 540px;"> photos </b></h4> 
  </nav>
  
  <div class="main_wrapper">
        <div class="d-flex specs_cntnr">
            <a onclick="show()" class="ml-auto mr-5 specsbtn">specs</a>
        </div>
        <div class="d-flex content_div">
            <div id="overlay_div" class="overlay_div w-100">
                <div class="cancel_btn_div d-flex">
                    <span onclick="hide()" class="cancel_btn ml-auto mr-5 p-2">X</span>
                </div>
                <div class="content_inner_div text-center p-5">
                   adidas YEEZY <br>YEEZY 450 "Dark Slate" sneakers<br>$399
                   <div style="background-color: white; color: black;">size 9.5</div>
                   <!--<div style="background-color: #a41d21; color: white;">BUY</div> -->
                   <!--modal-->
                   <!-- Button trigger modal -->
<button type="button" style="background-color: #a41d21; color: white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  BUY
</button>

<!-- Modal -->
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
            <img src="assets/images/11.png" height="100" width="160">
            <div style="margin-top:30px;">
                <div style="float:left;"><a href="#" class="text-white">PAY NOW</a></div>
                <div style="float:right;"><a href="#" class="text-white">ADD TO CART</a></div>
            </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
      <!--  <button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
                   <!------------>
                   
                </div>

            </div>
            <img class="w-100" src="52.png" alt="">
        </div>
    </div>
  </section>

  
  <section class="home1-section">
    <img src="assets/images/back.jpg" width="100%">
  </section>
  
<!--  <section class="footer-section mt-0 pt-0">-->
   
<!--    <div class="mt-2">-->
<!--    <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--        <i class="fas fa-list text-white"></i>-->
<!--    </a-->
<!--    </div>-->
<!--</section>-->
@endsection


