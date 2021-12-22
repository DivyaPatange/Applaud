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
            <a href="{{route('photo.index')}}" class="h_tab">Photos</a>
            <a href="#" class="h_tab active"><i class="fa fa-caret-left text-white pr-2" aria-hidden="true"></i>Audio<i class="fa fa-caret-right text-white pl-2" aria-hidden="true"></i></a>
            <a href="{{route('video.index')}}" class="h_tab">Videos</a>
        </div>
        <div class="row" style="background-color:#4e4c4c;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active d-flex flex-wrap justify-content-center" id="v-pills-Books" role="tabpanel">
                    
                    <div class="container-fluid">
                         <div class="row">
                               @foreach($audio as $key => $a)
                                        <?php
                                            $audio=DB::table('upload-audio')->get();
                                            ++$key
                                        ?>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                 <img src="{{URL::asset('Img/Audio/cover/' .$a->cover_img) }}" alt="" style="height:520px; width:330px">
                            </div>
                        </div>
                        @endforeach
                    </div>
                   
                  </div>
                </div>
            </div>
        </div>
  </section>
@endsection