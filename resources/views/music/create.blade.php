@extends('authh.layout.mainweb1')
@section('customcss')
<style>
    body{
        background-color:#ac0000;
    }
    .drop-zone {
      width:265px;
      height: 170px;
      padding: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-family: "Quicksand", sans-serif;
      font-weight: 500;
      font-size: 20px;
      cursor: pointer;
      background-color:#d2d0d1
    }
    
    .drop-zone__input {
      display: none;
    }
    
    .drop-zone__thumb {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      background-color: #cccccc;
      background-size: cover;
      position: relative;
    }
    
    .drop-zone__thumb::after {
      content: attr(data-label);
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 5px 0;
      color: #ffffff;
      background: rgba(0, 0, 0, 0.75);
      font-size: 14px;
      text-align: center;
    }
    .drop-zone__prompt{
        color: #A41D21; 
        padding:3% 3%; 
        border:3px solid #A41D21;
        font-weight:900;
        font-size:15px;
    }
    .is-invalid{
        color:white;
    }
    input, select {
    border: 1px solid #CCC;
    width: 150px;
}

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
        width: 20%;
        min-width:150px;
    }
    #main_section{
        height:90vh;
    }
</style>
@endsection

@section('content')

<section id="main_section">
<div class="main_wrapper" id="hey">
    <ul class="nav nav-tabs d-flex flex-wrap" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active h_tab" href="#" role="tab">Music</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" href="{{route('merch.create')}}">Merch</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" href="{{route('video.create')}}">Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab" href="{{route('photo.create')}}">Photo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link h_tab"  href="{{route('audio.create')}}">Audio</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-Music" role="tabpanel">
            <div class="container-fluid">
                <form action="{{route('music.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row input_filds px-5 mb-3">
                        
                        <div class="col-md-4 item">
                            <input type="radio" id="chkNo" name="option" value="free" onclick="ShowHideDiv()"/>
                            <label for="chkNo" class="text-white">Free</label>
                        </div>
                       
                        <div class="col-md-2 px-2">
                            <input type="text" placeholder="Artist" name="artist" class="@error('artist') is-invalid @enderror">
                            @error('artist')
                                <span class=" invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-2 px-2">
                            <input type="text" placeholder="Add Tag" name="tag" class="@error('tag') is-invalid @enderror">
                            @error('tag')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror   
                        </div>
                        
                        <div class="col-md-2 px-2">
                            <input type="text" placeholder="Title" name="title" class="@error('title') is-invalid @enderror">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-2 px-2">
                            <input type="text" placeholder="Publisher" name="publisher" class="@error('publisher') is-invalid @enderror">
                            @error('publisher')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="input_filds row px-5 mb-3">

                        <div class="col-md-4 item">
                            
                           <label for="chkYes" class="text-white">
                        <input type="radio" id="chkYes" name="option" value="paid" onclick="ShowHideDiv()" />
                            Price
                        </label>

                            <div id="dvtext" style="display: none">
        
                            <input style="width:50px;" class="ml-3" type="text" name="price" placeholder="$" id="txtBox">
        
                            </div>
                            <script>
                            function ShowHideDiv() {
                                    var chkYes = document.getElementById("chkYes");
                                    var dvtext = document.getElementById("dvtext");
                                    dvtext.style.display = chkYes.checked ? "block" : "none";
                                }
                            </script>
                        </div>
                        
                        <div class="col-md-2">
                            <input type="text" placeholder="Composer" name="composer" class="@error('composer') is-invalid @enderror">
                            @error('composer')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-2">
                            <input type="text" placeholder="Date" name="date" class="@error('date') is-invalid @enderror">
                            @error('date')
                                <span class=" invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-2">
                        <input type="text" placeholder="Category" name="category" class="@error('category') is-invalid @enderror">
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-white">{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="col-md-2">
                            <input class="@error('license') is-invalid @enderror" type="text" placeholder="License" name="license">
                            @error('license')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="text-white">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        
                        </div>
                    <div class="row mx-2 offset-2">
                        
                        <div class="col-lg-3 col-md-3 col-sm-12 drop-zone" style="margin: 1%;">
                            <span class="drop-zone__prompt">Drag and Drop Album</span>
                            <input type="file" name="cover_img" class="drop-zone__input @error('cover') is-invalid @enderror">
                        </div>
                        @error('cover')
                            <div class="d-block invalid-feedback" role="alert">
                                <strong class="text-white">{{ $message }}</strong>
                            </div>
                        @enderror
                                         
                        <div class="drop-zone col-lg-3 col-md-3 col-sm-12 " style="margin: 1%;">
                            <span class="d-block drop-zone__prompt">Drag and Drop File</span>
                            <input type="file" name="file_img" class="drop-zone__input @error('file') is-invalid @enderror">
                        </div>
                        @error('file')
                            <div class="d-block invalid-feedback" role="alert" style="margin: 1%;">
                                <strong class="text-white">{{ $message }}</strong>
                            </div>
                        @enderror
                        
                        <div class="drop-zone col-lg-3 col-md-3 col-sm-12 " style="margin: 1%;">
                            <span class="drop-zone__prompt">Drag and Drop Logo</span>
                            <input type="file" name="logo_img" class="drop-zone__input @error('logo') is-invalid @enderror">
                        </div
                        @error('logo')
                            <div class="d-block invalid-feedback" role="alert">
                                <strong class="text-white">{{ $message }}</strong>
                            </div>
                        @enderror
                        
                  </div>
            
                    <div class="d-flex justify-content-center mt-3">
                        <button class="submit_buttom mt-2 h5" type="submit">Submit</button>
                    </div>
                </form>
                <div class="row">
                        <div class="col-md-9 offset-2">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block mt-3" style="background-color:white;">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong style="color:#bd2025;">{{ $message }}</strong>
                            </div>
                            @endif
                            @if ($message = Session::get('danger'))
                            <div class="alert alert-danger alert-block mt-3">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong class="text-light">{{ $message }}</strong>
                            </div>
                            @endif
                        </div>
                    </div>
        
        </div>
        <!-- ------------  -->
        
 <!-- -------------  -->
        
        <!-- <div class="tab-pane fade" id="pills-Merch" role="tabpanel">
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
        </div> -->

        <!-- <div class="tab-pane fade" id="pills-Video" role="tabpanel">
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
        </div> -->

        <!-- <div class="tab-pane fade" id="pills-Photo" role="tabpanel">
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
        </div> -->

        <!-- <div class="tab-pane fade" id="pills-Audio" role="tabpanel">
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
        </div> -->
    </div>

</div>
</section>

  <script>
  document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

  </script>
  
  <script>
  document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

  </script>

@endsection