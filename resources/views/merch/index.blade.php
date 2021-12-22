@extends('authh.layout.mainweb')
@section('customcss')
<style>
   .modal-backdrop{
       background-color:transparent;
   } 
    .modal-header {
       border:none;
    }
    a{
        text-decoration:none;
    }
    a:focus{
        border:none;
    }
    .modal1{
      background-color: #C0C0C0;
    }
</style>
@endsection
 
@section('content') 
<section class="upper-section">
    <nav class="navbar1">
      <h4 class="text-white text-right">
        <b style="position: relative;right: 540px;"> photos </b>
      </h4> 
    </nav>

    @foreach($merch as $key => $a)
        <?php
            $merch=DB::table('upload-merch')->get();
            ++$key
        ?>  
      <div class="main_wrapper">
          <div class="d-flex specs_cntnr">
                <button id='show_btn' type="button" class="btn btn-sm show ml-auto mb-3 mr-5 specsbtn" data-toggle="modal" data-target="#showmodel{{$a->id}}"> 
                      specs
                </button>
          </div>
        
          <div class="d-flex content_div">
              <img src="{{URL::asset('Img/Merch/' .$a->photo_img) }}" class="w-100" alt="" style="height:415px;">
          </div>
      </div>

    <!-- ---------------------------------modal--------------------------------- -->
    <div id="showmodel{{$a->id}}" class="modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
              <div class="modal-header modal1">
                  <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><span class="glyphicon glyphicon-edit text-white"></span>&nbsp;</h4>
              </div>
              <div class="modal-body modal1 text-white">
              <div class="content_inner_div text-center p-3">
               <p class="h5"> {{$a->comments}} <br>  {{$a->price}} <br></p>
               <p class="text-dark bg-light w-50 p-2 offset-3">{{$a->size}} </p>
                   <!-- <div style="background-color: white; color: black;" class="w-50 text-center ml-3"></div> -->
                   <!-- open modal-->
                   <!-- Button trigger modal -->
                  <button type="button" style="background-color: #a41d21; color: white;" class="btn w-50" data-toggle="modal" data-target="#exampleModal">
                    BUY
                  </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="background-color:#c40c00">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                            <img src="assets/images/11.png" height="100" width="160">
                            <div style="margin-top:30px;">
                                <div style="float:left;"><a href="#" class="text-white">PAY NOW</a></div>
                                <div style="float:right;"><a href="#" class="text-white">ADD TO CART</a></div>
                            </div>
                      </div>
                  </div>
                </div>
              </div>
                   <!------------>
                   
                </div>
              </div>
          </div>
      </div>
  </div>
                      
  @endforeach
  </section>

  
  <section class="home1-section">
    <img src="" width="100%">
  </section>
              

@endsection

