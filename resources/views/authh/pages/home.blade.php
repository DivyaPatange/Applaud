 
 @extends('authh.layout.mainweb')
 @section('content')
 @section('customcss')
 <style>
 .home-section{
    min-height:60vh;
    background-image: url('assets/images/statistics.png'); 
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
 </style>
  @endsection
  
  <section class=" home-section">
       
  </section>
  <section>
      
      <div class="d-flex flex-row bd-highlight">
          <div class="bd-highlight" id="sectionbox" style="background-color: #bf2025; width:20%"></div>
          <div class="bd-highlight" id="sectionbox" style="background-color: #e6654c; width:20%"></div>
          <div class="bd-highlight" id="sectionbox" style="background-color: #bf2025; width:20%"></div>
          <div class="bd-highlight" id="sectionbox" style="background-color: #e6654c; width:20%"></div>
          <div class="bd-highlight" id="sectionbox" style="background-color: #bf2025; width:20%"></div>
    </div>

     <!--<div class="container-fluid">-->
     <!--     <div class="row">-->
     <!--       <div class="col-3" id="sectionbox" style="background-color: #bf2025;"></div>-->
     <!--       <div class="col-3" id="sectionbox" style="background-color: #e6654c;"></div>-->
     <!--       <div class="col-3" id="sectionbox" style="background-color: #bf2025;"></div>-->
     <!--       <div class="col-3" id="sectionbox" style="background-color: #e6654c;"></div>-->
            <!--<div class="col-4" id="sectionbox" style="background-color: #bf2025;"></div>-->
     <!--   </div>-->
     <!--</div>-->
  </section>
<!--  <section class="footer-section mt-0 pt-0">-->
    <!--<a href="d_playlist" class="text-white mx-3">-->
    <!-- <img src="assets/images/menu3.png" height="20" width="25">-->
    <!--</a>-->
<!--    <section class="mt-2">-->
<!--    <a href="d_playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--        <i class="fas fa-list text-white"></i>-->
     <!--<img src="assets/images/menu3.png" height="20" width="25">-->
<!-- </a>-->
 
  <!--</section>-->
<!--</section>-->
<!--<section class="footer-section mt-0 pt-0">-->
<!--    <section class="pt-1">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--    </section>-->
<!--</section>-->
 
  @endsection
