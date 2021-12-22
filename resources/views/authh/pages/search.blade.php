@extends('authh.layout.mainweb')
@section('customcss')
<style>
#searchbox {
     background-color: #929292 !important; 
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  .img {
      height: 200px;
      width:100%;
  }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
  .img {
      height: 450px;
     
  }

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .img {height: 76vh;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .img {height: 76vh;}
}
</style>
@endsection

@section('content')
   
<section class="home-section">
 
<div class="main_wrapper">
    <div class="d-flex justify-content-between w-100 searchbox">
        <input id="searchbox" value="" type="text" placeholder="SEARCH">
    </div>
    <div class="container-fluid">
    <div class="row">
  
        <div class="col-lg-12 col-md-12 c0l-sm-12">
            <div class="tab-pane fade show active d-flex justify-content-center flex-wrap img_content" id="v-pills-Selfie" role="tabpanel">
                <img src="assets/images/33.png" alt="" class="img">
                <img src="assets/images/32.png" alt="" class="img">
                <img src="assets/images/31.png" alt="" class="img">
            </div>
        </div>
         </div>
    </div>
</div>

  </section>
<!--<section class="footer-section mt-0 pt-0">-->
<!--    <div class="">-->
<!--        <a href="playlist" class="text-white pl-3 pt-2" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--        <div class="float-right">-->
<!--            <span class="pr-2"><strong class="text-white">John car Blackish</strong></span>-->
<!--            <span><img src="assets/images/playlisticon.png" height="35" width="30"></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>  -->
@endsection




  
 
