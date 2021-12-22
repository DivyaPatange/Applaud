@extends('authh.layout.mainweb')
@section('customcss')
<style>
input {
     background-color: #929292 !important; 
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
        <div class="col-lg-4 col-md-4 col-sm-12" style="background-color:#464646">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="topbar d-flex w-100">
                  <button class="topbarbtns spacebtn">SPACE</button>
                  <button class="topbarbtns dltbtn">DELETE</button>
                  <button class="topbarbtns clrebtn">CLEAR</button>
              </div>.
              <div class="downdiv d-flex flex-column w-100">
                  <div class="d-flex justify-content-center align-items-center w-100">
                        <button class="btnclck">A</button>
                        <button class="btnclck">B</button>
                        <button class="btnclck">C</button>
                        <button class="btnclck">D</button>
                        <button class="btnclck">E</button>
                        <button class="btnclck">F</button>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                        <button class="btnclck">G</button>
                        <button class="btnclck">H</button>
                        <button class="btnclck">I</button>
                        <button class="btnclck">J</button>
                        <button class="btnclck">K</button>
                        <button class="btnclck">L</button>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                        <button class="btnclck">M</button>
                        <button class="btnclck">N</button>
                        <button class="btnclck">O</button>
                        <button class="btnclck">P</button>
                        <button class="btnclck">Q</button>
                        <button class="btnclck">R</button>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                        <button class="btnclck">S</button>
                        <button class="btnclck">T</button>
                        <button class="btnclck">U</button>
                        <button class="btnclck">V</button>
                        <button class="btnclck">W</button>
                        <button class="btnclck">X</button>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                        <button class="btnclck">Y</button>
                        <button class="btnclck">Z</button>
                        <button class="btnclck">0</button>
                        <button class="btnclck">1</button>
                        <button class="btnclck">2</button>
                        <button class="btnclck">3</button>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                        <button class="btnclck">4</button>
                        <button class="btnclck">5</button>
                        <button class="btnclck">6</button>
                        <button class="btnclck">7</button>
                        <button class="btnclck">8</button>
                        <button class="btnclck">9</button>
                  </div>
              </div>
            </div>
        </div>
  
        <div class="col-lg-8 col-md-8 c0l-sm-12">
            <div class="tab-pane fade show active d-flex justify-content-center flex-wrap img_content" id="v-pills-Selfie" role="tabpanel">
                <img src="assets/images/33.png" style="height:inherit" alt="">
                <img src="assets/images/32.png" alt="">
                <img src="assets/images/31.png" alt="">
            </div>
        </div>
         </div>
    </div>
</div>

  </section>
<!--<section class="footer-section mt-0 pt-0">-->
<!--    <div class="pt-1">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--    </div>-->
<!--</section>    -->
@endsection




  
 
