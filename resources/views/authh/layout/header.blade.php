<div class="sidebar">
    <div class="logo-details">     
    <div class="logo_name"><b>applaud</b></div>
      <img src="https://nexsco.com/assets/images/dots.png" alt="" height="30" width="50" id="btn">
    </div>
    <ul class="nav-list">
      <li><a href="{{url('search')}}" data-toggle="tooltip" data-placement="top" title="search">
          <i class="fas fa-search"></i> 
          <span class="links_name">search</span>
          </a>
          <span class="tooltip">search</span>
      </li>
      <li><a href="{{url('home')}}" data-toggle="tooltip" data-placement="bottom" title="home">
          <i class="fas fa-home"></i>
          <span class="links_name">home</span>
          </a>
          <span class="tooltip">home</span>
      </li>
      <li><a href="{{url('profile')}}" data-toggle="tooltip" data-placement="left" title="profile">
          <i class="fas fa-user"></i>
          <span class="links_name">profile</span> 
          </a>
          <span class="tooltip">profile</span>
      </li>
      <li><a href="{{route('music.create')}}" data-toggle="tooltip" data-placement="right" title="upload">
          <i class="fas fa-cloud-upload-alt"></i>
          <span class="links_name">upload</span>
          </a>
          <span class="tooltip">upload</span>
      </li>
      <li><a href="{{url('chat')}}" data-toggle="tooltip" data-placement="top" title="chat">
          <i class="fas fa-comments"></i>
          <span class="links_name">chat</span> 
          </a>
          <span class="tooltip">chat</span>
      </li>
      <li><a href="{{route('audio.index')}}" data-toggle="tooltip" data-placement="top" title="circuitboard">
          <i class="fas fa-microchip"></i>
          <span class="links_name">circuit board</span>
          </a>
          <span class="tooltip">circuit board</span>
      </li>
      <li><a href="{{route('market.index')}}" data-toggle="tooltip" data-placement="top" title="marketplace">
          <i class="fa fa-tags"></i>
          <span class="links_name">marketplace</span>
          </a>
          <span class="tooltip">marketplace</span>
      </li>
      <li><a href="{{route('merch.index')}}" data-toggle="tooltip" data-placement="top" title="merchandise">
          <i class="fas fa-tshirt"></i>
          <span class="links_name">merch</span> 
          </a>
          <span class="tooltip">merch</span>
      </li>
      <li><a href="{{url('subscribe')}}" data-toggle="tooltip" data-placement="top" title="subscribe">
          <i class="fas fa-bell"></i>
          <span class="links_name">subscribe</span>
          </a>
          <span class="tooltip">subscribe</span>
      </li>
      <li><a href="{{url('livestreams')}}" data-toggle="tooltip" data-placement="top" title="live streams">
          <i class="fas fa-sign-language"></i>
          <span class="links_name">live streams</span>
          </a>
          <span class="tooltip">live streams</span>
      </li>
      <li><a href="{{url('setting')}}" data-toggle="tooltip" data-placement="top" title="settings">
          <i class="fas fa-cogs"></i>
          <span class="links_name">settings</span>
          </a>
          <span class="tooltip">settings</span>
      </li>
    </ul>
  </div>
<section class="nav-section" style="height:65px">
    <nav class="navbar">
         
        <h4 class="text-white pl-0">
            <img src="https://nexsco.com/assets/images/31.png" alt="" class="img-fluid" style="border-radius:50%; height:35px; width:35px;">
            <span class="pl-2">
                {{Auth::user()->name}}
            </span>
        </h4>
       <div class="ml-auto mr-3" id="searchbtnb">
            <div class="search-box">
                <button class="btn-search"><i class="fas fa-search"></i></button>
                <input type="text" class="input-search" placeholder="Type to Search...">
            </div>
       </div>
      <h4 class="text-white text-right"><b> applaud </b></h4> 
   </nav>
</section>
  