@extends('authh.layout.mainweb')
@section('customcss')
<style>
.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background: none; 
    transition: width .6s ease;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row" style="height:100px; background-color:pink;">
        <div class="col-lg-12 col-md-12 col-sm-12">
            
        </div>
    </div>
</div>

<div class="accordion" id="accordionExample">
    <div class="card" style="background-color:#ac0000">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-list text-white"></i>
                </button>
                <div class="float-right">
                    <span class="pr-2"><strong class="text-white">John car Blackish</strong></span>
                    <span><img src="assets/images/playlisticon.png" height="35" width="30"></span>
                </div>
            </h5>
        </div>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!-- -------  -->
        <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 p-0 m-0">
            
            <div class="progress" style="background-color:#414041; height:32px;">
                <div class="progress-bar text-white" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="background-color:#414041;">
                   <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">Title </div>
                        <div class=" flex-fill bd-highlight mx-5">Artist </div>
                        <div class="flex-fill bd-highlight mx-5">Content</div>
                        <div class="flex-fill bd-highlight mx-5">Year</div>
                        <div class="flex-fill bd-highlight mx-5">Duration </div>
                        <div class="flex-fill bd-highlight mx-5">Testing</div>
                    </div>
                </div>
            </div>
            
            <div class="progress" style="background-color:#818182; height:35px;">
                <div class="progress-bar" role="progressbar" style="" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">Blackish </div>
                        <div class=" flex-fill bd-highlight mx-5">John Cat </div>
                        <div class="flex-fill bd-highlight mx-5">Photo</div>
                        <div class="flex-fill bd-highlight mx-5">2020</div>
                        <div class="flex-fill bd-highlight mx-5">13:07 </div>
                        <div class="flex-fill bd-highlight mx-5">51%</div>
                    </div>
                </div>
            </div>
            
            <div class="progress" style="background-color:#414041; height:35px;">
              <div class="progress-bar" role="progressbar" style="width:75%; background-color:#924d4c" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">The Low </div>
                        <div class=" flex-fill bd-highlight mx-5">Q-tip </div>
                        <div class="flex-fill bd-highlight mx-5">Video</div>
                        <div class="flex-fill bd-highlight mx-5">1997</div>
                        <div class="flex-fill bd-highlight mx-5">--:--</div>
                        <div class="flex-fill bd-highlight mx-5">97%</div>
                    </div>
                 </div>
            </div>
            <div class="progress" style="background-color:#818182; height:35px;">
              <div class="progress-bar" role="progressbar" style="" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">Blackish </div>
                        <div class=" flex-fill bd-highlight mx-5">John Cat </div>
                        <div class="flex-fill bd-highlight mx-5">Photo</div>
                        <div class="flex-fill bd-highlight mx-5">2020</div>
                        <div class="flex-fill bd-highlight mx-5">13:07 </div>
                        <div class="flex-fill bd-highlight mx-5">51%</div>
                    </div>
              </div>
            </div>
            <div class="progress" style="background-color:#414041; height:35px;">
              <div class="progress-bar" role="progressbar" style="" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                   <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">The Low </div>
                        <div class=" flex-fill bd-highlight mx-5">Q-tip </div>
                        <div class="flex-fill bd-highlight mx-5">Video</div>
                        <div class="flex-fill bd-highlight mx-5">1997</div>
                        <div class="flex-fill bd-highlight mx-5">--:--</div>
                        <div class="flex-fill bd-highlight mx-5">97%</div>
                    </div>
              </div>
            </div>
             <div class="progress" style="background-color:#818182; height:35px;">
              <div class="progress-bar" role="progressbar" style="" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">Blackish </div>
                        <div class=" flex-fill bd-highlight mx-5">John Cat </div>
                        <div class="flex-fill bd-highlight mx-5">Photo</div>
                        <div class="flex-fill bd-highlight mx-5">2020</div>
                        <div class="flex-fill bd-highlight mx-5">13:07 </div>
                        <div class="flex-fill bd-highlight mx-5">51%</div>
                    </div>
              </div>
            </div>
            <div class="progress" style="background-color:#414041; height:35px;">
              <div class="progress-bar" role="progressbar" style="" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                   <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">The Low </div>
                        <div class=" flex-fill bd-highlight mx-5">Q-tip </div>
                        <div class="flex-fill bd-highlight mx-5">Video</div>
                        <div class="flex-fill bd-highlight mx-5">1997</div>
                        <div class="flex-fill bd-highlight mx-5">--:--</div>
                        <div class="flex-fill bd-highlight mx-5">97%</div>
                    </div>
              </div>
            </div>
             <div class="progress" style="background-color:#818182; height:35px;">
              <div class="progress-bar" role="progressbar" style="" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="d-flex bd-highlight offset-1">
                        <div class="flex-fill bd-highlight mx-5">Blackish </div>
                        <div class=" flex-fill bd-highlight mx-5">John Cat </div>
                        <div class="flex-fill bd-highlight mx-5">Photo</div>
                        <div class="flex-fill bd-highlight mx-5">2020</div>
                        <div class="flex-fill bd-highlight mx-5">13:07 </div>
                        <div class="flex-fill bd-highlight mx-5">51%</div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>  
    
</div>

        <!-- -------- -->
      </div>
    </div>
  </div>


  
  
@endsection