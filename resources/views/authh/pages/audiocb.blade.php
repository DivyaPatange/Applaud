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
        <div class="container" style="background-color:#4e4c4c;">
            <div class="d-flex justify-content-lg-between flex-wrap">
                <a href="photos" class="h_tab"> Photos</a>
                <a href="audio" class="h_tab active"><i class="fa fa-caret-left text-white pr-2"></i> Audio<i class="fa fa-caret-right text-white pl-2"></i></a>
                <a href="video" class="h_tab">Videos</a>
        </div>
        </div>
        <div class="row" style="background-color:#4e4c4c;">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="nav d-flex flex-wrap flex-column nav-pills text-center pt-5 justify-content-center" id="v-pills-tab" role="tablist">
                    <a class="nav-link active  v_pills_stacked" id="v-pills-Books-tab" data-toggle="pill" href="#v-pills-Books" role="tab">Books</a>
                    <a class="nav-link v_pills_stacked" id="v-pills-Class-tab" data-toggle="pill" href="#v-pills-Class" role="tab">Class</a>
                    <a class="nav-link v_pills_stacked" id="v-pills-Stories-tab" data-toggle="pill" href="#v-pills-Stories" role="tab" >Stories</a>
                    <a class="nav-link v_pills_stacked" id="v-pills-Radio-tab" data-toggle="pill" href="#v-pills-Radio" role="tab">Radio</a>
                    <a class="nav-link v_pills_stacked" id="v-pills-Ads-tab" data-toggle="pill" href="#v-pills-Ads" role="tab">Ads</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active d-flex flex-wrap justify-content-center" id="v-pills-Books" role="tabpanel">
                    <img src="assets/images/34.png" alt="">
                    <img src="assets/images/33.png" alt="">
                    <img src="assets/images/32.png" alt="">
                    <img src="assets/images/31.png" alt="">
                </div>
                <div class="tab-pane fade" id="v-pills-Class" role="tabpanel">..Class.</div>
                <div class="tab-pane fade" id="v-pills-Stories" role="tabpanel">.Stories..</div>
                <div class="tab-pane fade" id="v-pills-Radio" role="tabpanel">.Radio..</div>
                <div class="tab-pane fade" id="v-pills-Ads" role="tabpanel">.Ads..</div>
            </div>
        </div>
    </div>
</section>
<!--<section class="footer-section mt-0 pt-0">-->
<!--    <div class="pt-2">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--        <div class="float-right">-->
<!--            <a href="#" class="previous round"><i class="fa fa-caret-left text-white pr-2" aria-hidden="true"></i></a><strong class="text-white">MUSIC</strong>-->
<!--            <a href="#" class="next round"><i class="fa fa-caret-right text-white pl-2" aria-hidden="true"></i></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

@endsection