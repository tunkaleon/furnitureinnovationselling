@extends('layouts.app')
@section('content')

<section id="center_inner">
    <div class="center_inner_1">
      <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
      <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
      <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides">
        <div class="slide-1"></div>
        <div class="hero">
          <hgroup>
              <h6><a href="#">SED NISI</a></h6>
              <p>CONSECTETUR</p>
              <h5><a href="#">READ MORE</a></h5>
          </hgroup>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">        
          <hgroup>
             <h6><a href="#">QUIS NIBH</a></h6>
              <p>ELEMENTUM NEC</p>
              <h5><a href="#">READ MORE</a></h5>
          </hgroup>       
        </div>
      </div>
      <div class="item slides active">
        <div class="slide-3"></div>
        <div class="hero">        
          <hgroup>
              <h6><a href="#">NULLA QUIS</a></h6>
              <p>CONUBIA NOSTRA SED</p>
              <h5><a href="#">READ MORE</a></h5>
          </hgroup>
        </div>
       </div>
      </div> 
     </div>
    </div>
</section>
<section id="services">
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="col-sm-6">
        <div class="services_3">
         <h4>POST YOUR PRODUCTS</h4>
         <p>
            This Platform it will provide services of creating account for Innovators in carpentry to post their products and designs made for advertising and selling.  
        </p>
        </div>
       </div>
       
        <div class="services_3">
         <h4>BUY FURNITURE</h4>
         <p>this platform will provide services for clients to buy wood furnitures, to make orders of finished furnitures or make order of making new furnitures according to your wishes.   </p>
        </div>
        <div class="services_3">
         <h4>MAKE PARTERNERSHIP</h4>
        <p>This platform also will help make partnership with furniture innovators and investors to work together for example investor can have design and ideas but haven't funds,
            investors can make partnership with innovators to make innovated furnitures   </p>
        </div>
       </div>
      </div>
     </div>
    </div>
</section>

@endsection