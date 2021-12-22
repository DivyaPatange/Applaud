@extends('authh.layout.mainweb')
@section('customcss')
<style>

</style>
@endsection

@section('content')
  <section class="home-section">
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <img src="assets/images/statistics.png"  id="img1" style="width:100%;height:430px;">
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 bg-dark">
                
            </div> 
        </div> -->
        <div class="row">
            <div class="col mt-2">
              <video width="320" height="517" controls>
                  <source src="{{URL::asset("/assets/images/1.png")}}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>

  </section>
@endsection