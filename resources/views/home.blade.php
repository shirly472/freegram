@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://design-style-guide.freecodecamp.org/downloads/fcc_primary_small.jpg
"style="height:80px;"class="rounded-circle">

       </div>
       <div class="col-9 p-5">
          <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            <a href="#">Add New Post</a>

          </div >
          <div class="d-flex">
              <div class="pr-3"><strong>153</strong> Posts</div>
              <div class="pr-3"><strong>23k</strong> Followers</div>
              <div class="pr-3"><strong>253</strong> Following</div>
          </div> 
          <div class="pt-4 font-weight=bold"><strong>{{$user -> profile ->title}}</strong></div>
          <div>{{$user-> profile -> description}}</div>
          <div><a href="#">
{{$user-> profile->url }}</div>
       </div>

       <div class="row pt-5">
           <div class="col-4">
           <img src="/svg/img1.jpeg" class="w-100">
       </div>
    
           <div class="col-4">
           <img src="/svg/img2.jpeg" class="w-100">
       </div>
       
           <div class="col-4">
           <img src="/svg/img3.jpg" class="w-100">
       </div>
   </div> 
</div>
@endsection
