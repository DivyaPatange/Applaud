@extends('authh.layout.mainweb')
 @section('customcss')
 <style>
   
 </style>
 @endsection

 @section('content')
  <section class="nav2-section">
    <nav class="navbar"style="background-color: #3b3b3b;">
      <h4 style="color:#5a5f58;" class="text-left"><b> video </b></h4>
      <h4 class="text-white text-center"><b> photos </b></h4> 
      <h4  style="color:#5a5f58;"class="text-right"><b> audio </b></h4>    
    </nav>
  </section>

  <section class="home2-section">
      <style type="text/css">
        .row>div {
          padding: 0 !important;
        }
      </style>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
              <img onclick="show1()" src="assets/images/cont1.jpg" style= "width: 100%;height: 500px;">          
          </div>
        <div class="col-md-6">
          <img id="tbl_hide_img" src="assets/images/cont2.jpg"style="width: 100%; height: 500px;">
          <table id="tbl" class="table table-striped">
                    <thead>
                      <tr class="">
                        <th class="ml-auto"></th>
                        <th class="ml-auto"></th>
                        <th class="ml-auto"></th>
                        <th class="ml-auto"></th>
                        <th class="ml-auto"></th>
                        <th style="cursor:pointer;" onclick="hide1()" class="ml-auto">X</th>
                      </tr>
                      <tr>
                        <th>Track</th>
                        <th>Artist</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Duration</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Happy</td>
                        <td>Tribe call guest</td>
                        <td>The low end</td>
                        <td>2020</td>
                        <td>03:33</td>
                        <td>$0.25</td>
                      </tr>
                      <tr>
                        <td>Happy</td>
                        <td>Tribe call guest</td>
                        <td>The low end</td>
                        <td>2020</td>
                        <td>03:33</td>
                        <td>$0.25</td>
                      </tr>
                      <tr>
                        <td>Happy</td>
                        <td>Tribe call guest</td>
                        <td>The low end</td>
                        <td>2020</td>
                        <td>03:33</td>
                        <td>$0.25</td>
                      </tr>
                       <tr>
                        <td>Happy</td>
                        <td>Tribe call guest</td>
                        <td>The low end</td>
                        <td>2020</td>
                        <td>03:33</td>
                        <td>$0.25</td>
                      </tr>
                      <tr style="background-color:#a41d21;color: white;position: relative;top: 187px;">
                        <td></td>
                        <td></td>
                        <td>Buy</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
        </div>   
        <div class="col-md-3">
          <img src="assets/images/cont3.jpg"style="width: 100%;height: 500px;">
        </div>
      </div>
    </div>
  </section>
  
<!--  <section class="footer-section pt-0">-->
    
<!--    <div class="pt-1">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--    </div>-->

 <!--</section>-->
<!--</section>-->
  @endsection

  
