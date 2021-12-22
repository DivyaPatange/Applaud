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
            @foreach($video as $key => $v)
                  <?php
                      $video=DB::table('upload-video')->get();
                      ++$key
                  ?>  
              <video width="320" height="530" controls style="margin-top: -15%;">
                  <source src="{{URL::asset('Img/Video/file/' . $v->file_img) }}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
              @endforeach
            </div>
          </div>
        </div>

  </section>
@endsection