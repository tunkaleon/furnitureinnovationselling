@extends('layouts.app')
@section('content')


<section id="side_box">
				
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="glyphicon glyphicon-list"></i></a>
      <div id="sidebar-wrapper" class="">
        <ul class="sidebar-nav">
          <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
        <div class="wrap_inner clearfix text-center">
        
         <div class="top_right clearfix">
                  <p>
                   <a href="#"><i class="fa fa-pinterest"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>
                   <a href="#"><i class="fa fa-dribbble"></i></a>
                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                  </p>
         </div>
         <div class="grid wrap_inner_1 clearfix">
      
          </div>
         
        </div>
        <div class="wrap_inner_2 clearfix">
          <h2>Contact Us</h2>
          <input class="form-control" placeholder="Name" type="text">
          <input class="form-control" placeholder="Email" type="text">
          <input class="form-control" placeholder="Phone" type="text">
          <textarea class="form-control form_1" placeholder="Type Text Here"></textarea>
          <h3 class="text-center"><a href="#">Subscribe</a></h3>

        </div>
        
      </div>

</section>
@endsection