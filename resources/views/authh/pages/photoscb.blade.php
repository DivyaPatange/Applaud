  @extends('authh.layout.mainweb')
  @section('content')
  @section('customcss')
 <style>
round {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;

}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  
  color: white;
}

.next {
  
  color: white;
}


</style>

 @endsection
  
  <section class="home-section">
    <div class="main_wrapper p-0">
        <div class="d-flex justify-content-between" style="background-color:#4e4c4c;">
            <a href="video" class="h_tab">Videos</a>
            <a href="photos" class="h_tab active"><i class="fa fa-caret-left text-white pr-2" aria-hidden="true"></i> Photos<i class="fa fa-caret-right text-white pl-2" aria-hidden="true"></i></a>
            <a href="audio" class="h_tab">Audio</a>
        </div>
        <div class="row" style="background-color:#4e4c4c;">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="nav flex-column nav-pills text-center pt-5" id="v-pills-tab" role="tablist">
                    <a class="nav-link active  v_pills_stacked" id="v-pills-Selfie-tab" data-toggle="pill" href="#v-pills-Selfie" role="tab">Selfie</a>
                    <a class="nav-link v_pills_stacked" id="v-pills-Ads-tab" data-toggle="pill" href="#v-pills-Ads" role="tab">Ads</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active d-flex img_content" id="v-pills-Selfie" role="tabpanel">
                    <div class="flex-column">
                        <img src="assets/images/45.png" alt="" style="height:40vh;">
                        <img src="assets/images/46.png" alt="" style="height:40vh;">
                    </div>
                    <img src="assets/images/33.png" alt="">
                    <img src="assets/images/32.png" alt="">
                    <img src="assets/images/31.png" alt="">
                </div>
                <div class="tab-pane fade" id="v-pills-Ads" role="tabpanel">.Ads..</div>
            </div>
        </div>
    </div>
  </section>
<!--  <section class="footer-section mt-0 pt-0">-->
<!--    <div class="pt-1">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--        <div class="float-right">-->
<!--            <a href="#" class="previous round"><i class="fa fa-caret-left text-white pr-2" aria-hidden="true"></i></a><strong class="text-white">PHOTOS</strong>-->
<!--            <a href="#" class="next round"><i class="fa fa-caret-right text-white pl-2" aria-hidden="true"></i></a>-->
<!--        </div>-->
<!--    </div>  -->
   
<!--</section>-->
@endsection

  