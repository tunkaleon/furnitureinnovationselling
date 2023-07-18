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
<section id="about">
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="col-sm-8">
        <div class="about_1">
         <h2>ABOUT FURNITURE INNOVATION SITE </h2>
         <p>
            
            The furniture innovstion site is a website that is used to post wood
            furniture, including new wood technology and innovation , and their design,
            as well as to buy these furniture online. On this website, 
            a person you can create an account that will help him/her to post their product they made,
            so that customers can buy it. so welcome on this site we are here to help
         </p>
         <h5><a href="#">VIEW MORE</a></h5>
        </div>
       </div>
       <br><br><br><br>
       <div class="col-sm-4">
        <div class="about_2">
         <p><img src="img/1.jpg" width="130%"></p>
        </div>
       </div>
      </div>
     </div>
    </div>
</section>
   <section id="sale" class="clearfix">
    <div class="col-sm-12 space_all">
     <div class="col-sm-6 space_all">
      <div class=" sale_1">
       <p>About products</p>
       <h2>All products you need</br> from design to final product</h2>
       <h5><a href="#">SHOP NOW</a></h5>
      </div>
     </div>
     <div class="col-sm-6 space_all">
      <div class="sale_2">
       <p><img src="img/4.jpg" width="60%"></p>
      </div>
     </div>
    </div>
   </section>
   <section id="shopping">
    <div class="container">
     <div class="row">
      <div class="col-sm-12 space_all">
       <div class="shopping_1">
        <h2 class="text-center">All products</h2>
        <p class="text-center">all product you need is here</p>
       </div>
       <div class="col-sm-3">
            <div class="shopping_2">
            <p><img src="img/1687716354.jpg" width="100%"></a></p>
            </div>
       </div>
       <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/1.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/5.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/1686801621.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/25.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/WALNUT-LEITH-MODERN-BED-WITH-CHARCOAL-LINEN-BEDDING.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/carpet.jpg" width="100%"></a></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="shopping_2">
        <p><img src="img/25.jpg" width="100%"></a></p>
        </div>
    </div>

       </div>
      </div>
     </div>
    </div>
   </section>
@endsection