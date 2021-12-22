@extends('authh.layout.mainweb')
@section('customcss')
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script>
    window.auth = {!! auth()->user() !!}
</script>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<style>
 .home-section{
    background-image: url('assets/images/bg1.png'); 
    background-repeat:no-repeat;
    width:100%;
    height:100%;
}
round {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

round:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  color: white;
}

.next {
  color: white;
}
.container, .wrapper {
    position: relative;
    /*top:25%;*/
    left: 45%;
    height:100vh;
}
</style>
@endsection

@section('content')
<section class="home-section">
  <div class="wrapper" id="app">
      <private-chat-component></private-chat-component>
  </div>
</section>


@endsection