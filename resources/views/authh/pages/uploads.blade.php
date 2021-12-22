@extends('authh.layout.mainweb')
@section('customcss')
<style>
    ::placeholder {
  color: #A41D21 !important;
  padding-left: .5rem;
  font-weight: 900;
  }
  input::placeholder {
  color: #A41D21;
  padding-left: .5rem;
  font-weight: 900;
  }
  input::-webkit-input-placeholder {
  color: #A41D21;
  padding-left: .5rem;
  font-weight: 900;
  }
  input::-moz-placeholder {
  color: #A41D21;
  padding-left: .5rem;
  font-weight: 900;
  }
  .nav-tabs {
      border: 0 !important;
      margin-bottom: 2rem;
  }
  .nav-item {
      width:20%;
      min-width: 180px;
  }
  .nav-link {
      width: 100%;
  }
  #main_section{
      background-color:#ac0000;
  }
  .input_filds>input {
      width: 15.5%;
      min-width:120px;
  }
  .input_filds>div {
      width: 12%;
      min-width:150px;
  }
</style>
@endsection

@section('content')

<section id="main_section">
<div class="main_wrapper" id="hey">
    <ul class="nav nav-tabs d-flex flex-wrap" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active h_tab" id="home-tab" data-toggle="tab" href="#pills-Music" role="tab">Music</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" id="profile-tab" data-toggle="tab" href="#pills-Merch" role="tab">Merch</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" id="contact-tab" data-toggle="tab" href="#pills-Video" role="tab">Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" id="contact-tab" data-toggle="tab" href="#pills-Photo" role="tab">Photo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" id="contact-tab" data-toggle="tab" href="#pills-Audio" role="tab">Audio</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-Music" role="tabpanel">
            <form action="" method="POST">
                @csrf
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="free" name="option" value="free">
                            <label for="html" class="text-white">Free</label>
                            <input style="width:50px;" class="d-none ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Artist" name="artist">
                        <input type="text" placeholder="Add Tag" name="tag">
                        <input type="text" placeholder="Title" name="title">
                        <input type="text" placeholder="Publisher" name="publisher">
                    </div>
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="price" name="option" value="price">
                            <label for="html" class="text-white">Price</label>
                            <input style="width:50px;" class="ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Composer" name="composer">
                        <input type="text" placeholder="Date" name="date">
                        <input type="text" placeholder="Category" name="category">
                        <input type="text" placeholder="Licensing" name="license">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap px-5 mb-3">
                        <label for="file_upload1" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Cover</span></label>
                        <input id="file_upload1" type="file" name="cover_img">
                        <label for="file_upload2" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop File</span></label>
                        <input id="file_upload2" type="file" name="file_img">
                        <label for="file_upload3" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Logo</span></label>
                        <input id="file_upload3" type="file" name="logo_img">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="submit_buttom mb-5" type="submit">Submit</button>
                    </div>
            </form>
        </div>
        
        <div class="tab-pane fade" id="pills-Merch" role="tabpanel">
            <form action="">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap px-md-5 mb-3">
                    <div class="merch_flds pricediv mx-2">
                        <label for="">Price:</label>
                         <input type="text" name="" id="">

                    </div>
                    <div class="merch_flds sizediv mx-2">
                        <label for="">Size:</label>
                          <input type="text" name="" id="">
                        
                    </div>
                    <div class="merch_flds cmntediv mx-2">
                        <label for="">Comments</label><br>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap px-5 mb-3">
                    <label for="file_upload1" class="file_upload_style w-100 d-flex justify-content-center align-items-center"><span>Drag & Drop Album</span></label>
                    <input id="file_upload1" type="file">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="submit_buttom mb-5" type="submit">Submit</button>
                </div>
            </form>
        </div>

        <div class="tab-pane fade" id="pills-Video" role="tabpanel">
            <form action="">
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Free</label>
                            <input style="width:50px;" class="d-none ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Creator">
                        <input type="text" placeholder="Add Tag">
                        <input type="text" placeholder="Title">
                        <input type="text" placeholder="Publisher">
                    </div>
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Price</label>
                            <input style="width:50px;" class="ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Videographer">
                        <input type="text" placeholder="Date">
                        <input type="text" placeholder="Category">
                        <input type="text" placeholder="Licensing">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap px-5 mb-3">
                        <label for="file_upload1" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Cover</span></label>
                        <input id="file_upload1" type="file">
                        <label for="file_upload2" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop File</span></label>
                        <input id="file_upload2" type="file">
                        <label for="file_upload3" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Logo</span></label>
                        <input id="file_upload3" type="file">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="submit_buttom mb-5" type="submit">Submit</button>
                    </div>
            </form>
        </div>

        <div class="tab-pane fade" id="pills-Photo" role="tabpanel">
            <form action="">
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Free</label>
                            <input style="width:50px;" class="d-none ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Creator">
                        <input type="text" placeholder="Add Tag">
                        <input type="text" placeholder="Title">
                        <input type="text" placeholder="Publisher">
                    </div>
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Price</label>
                            <input style="width:50px;" class="ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Photographer">
                        <input type="text" placeholder="Date">
                        <input type="text" placeholder="Category">
                        <input type="text" placeholder="Licensing">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap px-5 mb-3">
                        <label for="file_upload1" class="file_upload_style w-100 d-flex justify-content-center align-items-center"><span>Drag & Drop Photo</span></label>
                        <input id="file_upload1" type="file">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="submit_buttom mb-5" type="submit">Submit</button>
                    </div>
            </form>
        </div>

        <div class="tab-pane fade" id="pills-Audio" role="tabpanel">
                <form action="">
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Free</label>
                            <input style="width:50px;" class="d-none ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Creator">
                        <input type="text" placeholder="Add Tag">
                        <input type="text" placeholder="Title">
                        <input type="text" placeholder="Publisher">
                    </div>
                    <div class="input_filds d-flex justify-content-between flex-wrap px-5 mb-3">
                        <div class="item d-flex">
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="html" class="text-white">Price</label>
                            <input style="width:50px;" class="ml-3" type="text">
                        </div>
                        <input type="text" placeholder="Audiographer">
                        <input type="text" placeholder="Date">
                        <input type="text" placeholder="Category">
                        <input type="text" placeholder="Licensing">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap px-5 mb-3">
                        <label for="file_upload1" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Cover</span></label>
                        <input id="file_upload1" type="file">
                        <label for="file_upload2" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop File</span></label>
                        <input id="file_upload2" type="file">
                        <label for="file_upload3" class="file_upload_style d-flex justify-content-center align-items-center"><span>Drag & Drop Logo</span></label>
                        <input id="file_upload3" type="file">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="submit_buttom mb-5" type="submit">Submit</button>
                    </div>
            </form>
        </div>
    </div>

</div>
</section>
<!--<section class="footer-section mt-0 pt-0">-->
    
<!--    <div class="mt-2">-->
<!--        <a href="playlist" class="text-white pl-3" style="font-size:24px;">-->
<!--            <i class="fas fa-list text-white"></i>-->
<!--        </a>-->
<!--    </div>-->
<!--</section>-->
@endsection