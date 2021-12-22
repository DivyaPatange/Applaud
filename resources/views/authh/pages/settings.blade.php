@extends('authh.layout.mainweb')

@section('customcss')
  <style>
 .home-section{
    background-image: url('assets/images/bg1.png'); 
    background-repeat:no-repeat;
    background-position: center;
    background-size: cover;
}
.head{
    font-size:25px;
}
.subhead{
    font-size:20px;
}
.subheading{
    font-size: 16px;
}
.head:hover {
    border: 2px solid white;
    padding: 3% 17% 3% 3%;
    text-decoration: none;
}
.laptop_view{
    margin-left:90px;
    height:90vh;
}
.btn-group-sm>.btn, .btn-sm {
    padding: 0.25rem -0.5rem;
}
@media only screen and (max-width: 500px) {
  .head{
    font-size:16px;
}
.subhead{
    font-size:13px;
}
.subheading{
    font-size: 10px;
}
.laptop_view{
    margin-left:10px;
    height:inherit;
}
.tab-content{
    border:1px solid white;
    padding:2%;
    margin:0 5% 3% 0;
}

}
  </style>
  @endsection

  @section('content')
  <section class="home-section">
    
    <div class="row pt-3 laptop_view">
      <div class="col-md-6 col-lg-6 col-xll-6 col-xl-6 col-sm-6">
            <ul class="nav-pills nav-stacked" style="list-style-type: none; line-height: 2.5;">
              <li><a data-toggle="pill" class="text-white head active" href="#creator">Creator</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#network">Network</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#mobile">Mobile</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#contact_us">Contact Us</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#check_network">Check Your Network</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#reboot">Reboot Applaud</a></li>
              <li><a data-toggle="pill" class="text-white head" href="#exit">Exit Applaud</a></li>
            </ul>
        
          </div>
          <div class="col-md-6 col-lg-6 col-xll-6 col-xl-6 col-sm-6"> 
            <div class="tab-content">
                <!-----------------------------create---------------------------->
                <div id="creator" class="tab-pane fade in active mt-2">
                    <div class="row">
                        <div class="col-2">
                            <span><img src="assets/images/31.png" alt="" class="img-fluid" style="border-radius:50%; height:35px; width:35px;"></span>
                        </div>
                        <div class="col-10 p-0">
                            <h5 class="text-white subhead">Profile Name<p class="subheading">rain</p></h5>
                            <h5 class="text-white subhead">Account telephone #<p class="subheading">+1 314 678 9000</p></h5>
                            <h5 class="text-white subhead">Country/Language<p class="subheading">US | en-US</p></h5>
                            <h5 class="text-white subhead">Profile Background Photo<p class="subheading"></p></h5>
                            <span><img src="assets/images/31.png" alt="" style=" height:100px; width:230px;"></span>
                        </div>
                    </div>
                   
                </div>
                <!-----------------------------network---------------------------->
                <div id="network" class="tab-pane fade">
                    <h5 class="text-white subhead">Environment<p class="subheading">prod</p></h5>
                    <h5 class="text-white subhead">Wireless<p class="subheading">Name:wlanO<br>IP Address:192.168.0.45<br>Connected:Yes<br>Default:Yes</p></h5>
                    <h5 class="text-white subhead">Wired<p class="subheading">Name:ethO<br>IP Address:<br>Connected:No</p></h5>
                    <h5 class="text-white subhead">DNS<p class="subheading">192.168.0.1<br>205.171.3.78</p></h5>
                </div>
                <!-----------------------------mobile---------------------------->
                <div id="mobile" class="tab-pane fade">
                    <h5 class="text-white subhead">ESN<p class="subheading">VIZTVMG2040000000098877</p></h5>
                    <h5 class="text-white subhead">Software Version<p class="subheading">V.1.5.16-UHD/4.1.5</p></h5>
                    <h5 class="text-white subhead">Applaud Version<p class="subheading">nrdapp2014.1.5/5/nrdlib2014mdxjsv4.9.24-1205/nrdis</p></h5>
                    <h5 class="text-white subhead">Platform Version<p class="subheading">4.1.5</p></h5>
                    <h5 class="text-white subhead">Device Model<p class="subheading">Vizio_D55u-D1</p></h5>
                    <h5 class="text-white subhead">UI Build<p class="subheading">UI-relese-20211018_18052-battle-r100</p></h5>
                </div>
                <!-----------------------------contact---------------------------->
                <div id="contact_us" class="tab-pane fade mt-5">
                    <h5 class="text-white subhead">Contact Customer Service
                        <p class="subheading">Visit 
                            <a href="" class="text-white">https://help.applaud.global/contactus</a>
                        </p>
                    </h5>
                    <h5 class="text-white">Call Us<p class="subheading">1-800-390-4440 [Service Code 7721]</p></h5>
                </div>
                <!-----------------------------check_network---------------------------->
                <div id="check_network" class="tab-pane fade mt-5">
                    <h5 class="text-white subhead">Network Check
                        <p class="subheading" class="text-white">Test your internet connection for any problems that restrict use of Applaud.</p>
                    </h5>
                </div>
                <!-----------------------------reboot---------------------------->
                <div id="reboot" class="tab-pane fade mt-5">
                    <h5 class="text-white subhead">Reboot
                        <p class="subheading" class="text-white">Reload Applaud App</p>
                    </h5>
                </div>
                <!-----------------------------exit---------------------------->
                <div id="exit" class="tab-pane fade mt-5">
                    <h5 class="text-white subhead mb-3">Do you want to exit Applaud? <br>
                        <p class="" style="display: contents;">
                            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" style="width: 35%;">
                                Yes
                            </a>    
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" style="width: 35%;">No</button>
                        </p>
                    </h5>
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
  