@extends('authh.layout.mainweb')
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

@section('content')
  <section class="home-section">
    <div class="main_wrapper p-0">
        <div class="d-flex justify-content-lg-between flex-wrap" style="background-color:#4e4c4c;">
            <a href="{{route('photo.index')}}" class="h_tab"> Photos</a>
            <a href="#" class="h_tab active"><i class="fa fa-caret-left text-white pr-2" aria-hidden="true"></i> Videos<i class="fa fa-caret-right text-white pl-2" aria-hidden="true"></i></a>
            <a href="{{route('audio.index')}}" class="h_tab">Audio</a>
        </div>
        <div class="row" style="background-color:#4e4c4c;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active d-flex" id="v-pills-Books" role="tabpanel">
                  @foreach($video as $key => $v)
                  <?php
                      $video=DB::table('upload-video')->get();
                      ++$key
                  ?>  
                      <img src="{{URL::asset('Img/Video/cover/' . $v->cover_img) }}" alt="" style="height:520px; width:330px">
                  @endforeach
                </div>
            </div>
        </div>
    </div>

  </section>
@endsection
  