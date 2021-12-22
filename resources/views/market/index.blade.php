@extends('authh.layout.mainweb')
 @section('customcss')
 <style>
    .modal-backdrop{
       background-color:transparent;
   } 
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
        @foreach($photo as $key => $p)
            <?php
                $photo=DB::table('upload-photo')->get();
                    ++$key
            ?>  
        <div class="col-md-3">
              <img id='show_btn' src="{{URL::asset('Img/Photo/' . $p->photo_img) }}" style= "width: 100%;height: 535px;" data-toggle="modal" data-target="#showmodel{{$p->id}}">          
                                
   <!-- ---------------------------------modal--------------------------------- -->
   <div id="showmodel{{$p->id}}" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><span class="glyphicon glyphicon-edit"></span>&nbsp;</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                        <thead>
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
                                            <td>{{$p->creator}}</td>
                                            <td>{{$p->title}}</td>
                                            <td>{{$p->date}}</td>
                                            <td>03:33</td>
                                            <td>{{$p->price}}</td>
                                        </tr>
                                       
                                        <tr style="background-color:#a41d21;color: white;">
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
                                </div>
                            </div>
                        </div>
            </div>
            @endforeach
          
        
      </div>
    </div>
  </section>

                        


  @endsection

  
