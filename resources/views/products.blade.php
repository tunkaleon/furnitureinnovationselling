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
<section id="blog">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="col-sm-3">
      <div class="blog_main clearfix" style="margin-top: 10px;">
        <div class="blog_1">
        <h3>CATEGORY IMAGES</h3>
        </div>
     </div>
    @foreach ( $cat as $cat )
      
      <div class="col-sm-12 space_all">
        <div class="blog_8 clearfix">
          <div class="col-sm-4 space_all">
          <div class="blog_6">
            <p><a href="{{ url('categories',$cat->name) }}"><img src="img/{{ $cat->image }}" width="100%"></a></p>
          </div>
          </div>
          <div class="col-sm-8 space_all">
          <div class="blog_7">
            <h5><a href="{{ url('categories',$cat->name) }}">{{ $cat->name }}</a></h5>
            
          </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <div class="col-sm-9">
      <div class="blog_11">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
  
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item">
            <img src="img/1.jpg" width="60%" alt="...">
          </div>
          <div class="item active">
            <img src="img/2.jpg" width="60%" alt="...">
          </div>
          <div class="item">
            <img src="img/5.jpg" width="60%" alt="...">
          </div>
          
        </div>
  
        <!-- Controls -->
        </div>
       </div>
       <br>
     <div class="blog_10">
      <p>The furniture innovstion site is a website that is used to post wood furniture, including new wood technology and innovation , and their design, as well as to buy these furniture online. On this website, a person you can create an account that will help him/her to post their product they made, so that customers can buy it. so welcome on this site we are here to help.</p>
      
      {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed dignissim lacinia nunc.at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.</p> --}}
      
      <h5><a href="blog details.html">READ MORE</a></h5>
     </div>
    </div>    
    </div>
   </div>
  </div>
 </div>
</section>
<section id="chance">
  <div class="container">
   <div class="row">
    <div class="chance_2">
     <h5 class="text-center">All product category and design available here</h5>
     <h2 class="text-center">AVAILABLE AVAILABLE</h2>
    </div>
     <div class="col-sm-12">
   <div class="chance">
       <div class="tab-content clearfix">
   
     </div>
       </div>
        </div>
       </div>
    </div>
    <section id="mauris">
      <div class="container">
       <div class="row">
        {{-- <div class="col-sm-12">
         <div class="col-sm-9">
           </div>
          </div> --}}
          <div class="mauris_3">
         <div id="products" class="row list-group contain-fluid">
           @forelse ($data as $data1)
             <div class=" col-lg-3 col-sm-3 text-center">
                 <div class="thumbnail" style="height: fit-content; ">
                  <div class="product_card" > 
                      <img src="/img/{{ $data1->image }}" class="bd-placeholder-img card-img-top" width="100%" height="240px">
                      <br>
                    
                   
                     <div class="card-body" >
                        {{-- <h5 class="card-title text-center" > --}}
                          <ul>
                            <li> <b>{{ $data1->product_name }} </b></li></ul>
                          <div class="col-lg-3">
                            <a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm"><i class="fa fa-shopping-cart"></i>+ cart</a>
                            
                          </div>
                          <div class="col-lg-5 text-left">
                          <ul>
                           
                            <li class="text-warning text-center">{{ $data1->price }} FRW</li>   
                            
                            @if($data1->quantity <= 0)
                            {{-- <li> Out of stock</li> --}}
                            @else
                            {{-- <li class="text-center alert-dark" >product available</li> --}}
                            @endif
                          </ul>
                            </div>
                          <div class="col-sm-3">
                            {{-- <p class="btn-details"> --}}
                             <a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm"> <i class="fa fa-list"></i>Details</a>
                            {{-- </p> --}}
                      
                        </div>
                          <div class="separator clear-left content-center text-center" style="display: flex; padding-right:20px">
                              {{-- <p class="btn-add">
                                  <i class="fa fa-shopping-cart"></i>&nbsp; &nbsp;<a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm">Add to cart</a></p> 
                              <p class="btn-details">
                                  <i class="fa fa-list"></i>&nbsp; &nbsp;<a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm">More details</a></p> --}}
                          </div>
                          <br>
                      </div>
                    </div>
                  </div>
             </div>
           
             @empty
             <div>
              <h1>No data found!!!</h1>
             </div>
        
          @endforelse
             {{-- {{$data1->links('welcome')}}    --}}
            
  
          </div>
        
         </div>
        </div>
       </div>
      </div>
     </section>
 

@endsection