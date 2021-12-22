@extends('authh.layout.main')
@section('content')
@section('customcss')
<style>
    body{
background-color:#bd2025;
}
</style>
@endsection
   <div style="height:100%" >
        <h1 class="text-white ml-2" style="font-weight:900;">applaud</h1>
    <div class="d-flex flex-column justify-content-between align-items-center login_wrapper" id="login_wrapper_index">
        <div class="">
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
           <img src="assets/images/11.png" alt="" height="100" width="160" id="img1">
           <a href="{{ url('signin') }}" class="text-white">[Click to Sign in]</a>
        </div>
        <div class="">
        <p class="text-white mt-5">terms | privacy | app | @ 2022 applaud, Inc.</p>
        </div>
    </div>
</div>
   </div>
@endsection