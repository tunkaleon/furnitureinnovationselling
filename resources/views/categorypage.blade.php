

@extends('layouts.app')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
    {{ session()->get('message') }}
</div>
@endif
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
       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
               
      </div>
    </div>
   
    <div class="item slides active">
      <div class="slide-3"></div>
      <div class="hero">        
        
      </div>
     </div>
    </div> 
   </div>
  </div>
</section>
<section id="return">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="col-sm-4">
     <div class="return_1">
     <p class="text-center"><a href="#"><i class="fa fa-share"></i></a></p>
     </div>
     <div class="return_2">
     <h3 class="text-center"><a href="#">WOOD INNOVATED DESIGN</a></h3>
     <p class="text-center">this platform is here to Help All those have design in wood to sell or getting fund.</p>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="return_1">
     <p class="text-center"><a href="#"><i class="fa fa-globe"></i></a></p>
     </div>
     <div class="return_2">
     <h3 class="text-center"><a href="#">WOOD FINAL PRODUCT</a></h3>
     <p class="text-center">This platform is here to help wood Innovator to sell their product on world wide in easy way.</p>
     </div>
    </div>
    <div class="col-sm-4">
     <div class="return_1">
     <p class="text-center"><a href="#"><i class="fa fa-shopping-cart"></i></a></p>
     </div>
     <div class="return_2">
     <h3 class="text-center"><a href="#">FURNITURE SELLING PLATFORM</a></h3>
     <p class="text-center">This platform is here help peaple to buy quality furniture product we are here to help you</p>
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
    <h2 class="text-center">{{ $category->name }}</h2>
    <hr>
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
      <div class="col-sm-12">
       <div class="col-sm-9">
         </div>
        </div>
        <div class="mauris_3">
       <div id="products" class="row list-group contain-fluid">
         @forelse ($data as $data1)
           <div class="item  col-xs-4 col-lg-4 h-60">
               <div class="thumbnail" style="height: fit-content; ">
                <div class="card h-45" style="height: fit-content; max-height:100%;" >
                    <img src="/img/{{ $data1->image }}" class="bd-placeholder-img card-img-top" width="100%" height="280"><br>
                   <br><div class="card-body" style="padding-right: 20px; padding-left: 20px">
                      <h5 class="card-title" ><b>{{ $data1->product_name }} 
                        @if($data1->quantity <= 0)
                        <p class="text text-danger " style="display: flex">.......................this product isOut of stock</p><br>
                        
                    @else

                            </b></h5>
                            
                
                            <br>
                        <p class="text text-primary " style="display: flex">product available</p><br>
                    @endif
                       <h4><p class="card-text text-warning" style="font-weight: 400px"><b>{{ $data1->price }} Frw</b></p></h4>
                        <hr>
                        <div class="separator clear-left" style="display: flex; padding-right:20px">
                            <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i>&nbsp; &nbsp;<a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm">Add to cart</a></p> &nbsp; &nbsp; | &nbsp; &nbsp;
                            <p class="btn-details">
                                <i class="fa fa-list"></i>&nbsp; &nbsp;<a href="{{ url('product_detail',$data1->id) }}" class="hidden-sm">More details</a></p>
                        </div>
                        <br>
                    </div>
                  </div>
               </div>
           </div>
           <br><br>
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

   <section id="season">
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="season_1">
        
        <h2 class="text-center">ALL CATEGORY AVAILABLE HERE</h2>
       </div>
        <div class="season_2">
         <div class="col-md-12">
                   <div id="Carousel" class="carousel slide">
                   <ol class="carousel-indicators">
                       <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                       <li data-target="#Carousel" data-slide-to="1"></li>
                       <li data-target="#Carousel" data-slide-to="2" class=""></li>
                   </ol>
                   <!-- Carousel items -->
                   <div class="carousel-inner">
                   <div class="item active">
                       <div class="row">
                         <div class="col-sm-6 space_all">
                          <div class="col-sm-12">
                           <div class="col-sm-6">
                            <div class="season_3">
                              
                              <h3><a href="#">SLEEPING FURNITURES</a></h3>
                              <p>Sleeping furnitures are designed specifically for sleeping or resting purposes. This typically includes beds, mattresses, and related accessories like pillows and blankets.</p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="img/21.jpg" alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                         </div>
                         <div class="col-sm-6">
                         <div class="col-sm-12 space_all">
                           <div class="col-sm-6">
                            <div class="season_3">
                              {{-- <ul> 
                                  <li><i class="fa fa-calendar"></i>March 7, 2017</li>
                                  <li><i class="fa fa-eye"></i>View: 11</li>
                              </ul> --}}
                              <h3><a href="#">LOUNGE FURNITURES</a></h3>
                              <p>W have difference Difference kind of lounge include armchairs, coffee tables and TV stand....... </p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="img/2.jpg" alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                         </div>
                       </div><!--.row-->
                   </div><!--.item-->
                   <div class="item">
                       <div class="row">
                        <div class="col-sm-6 space_all">
                          <div class="col-sm-12">
                           <div class="col-sm-6">
                            <div class="season_3">
                              {{-- <ul> 
                                  <li><i class="fa fa-calendar"></i>March 7, 2017</li>
                                  <li><i class="fa fa-eye"></i>View: 12</li>
                              </ul> --}}
                              <h3><a href="#">DINNING FURNITURES</a></h3>
                              <p>Dinning furniture  includes a dining table and chairs, but can also include additional items such as buffets, sideboards, cabinets, or display shelves. </p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="img/5.jpg" alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                         </div>
                        <div class="col-sm-6">
                         <div class="col-sm-12 space_all">
                           <div class="col-sm-6">
                            <div class="season_3">
                              {{-- <ul> 
                                  <li><i class="fa fa-calendar"></i>March 7, 2017</li>
                                  <li><i class="fa fa-eye"></i>View: 13</li>
                              </ul> --}}
                              <h3><a href="#">OFFICE FURNITURES</a></h3>
                             <p>Ofiice Furniture It includes items such as desks, chairs, filing cabinets, storage units, conference tables, and more....</p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="img/office.jpg" alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                         </div>
                       </div><!--.row-->
                   </div><!--.item-->
                    
                   <div class="item">
                       <div class="row">
                        <div class="col-sm-6 space_all">
                          <div class="col-sm-12">
                           <div class="col-sm-6">
                            <div class="season_3">
                              {{-- <ul> 
                                  <li><i class="fa fa-calendar"></i>March 7, 2017</li>
                                  <li><i class="fa fa-eye"></i>View: 14</li>
                              </ul> --}}
                              <h3><a href="#">STORAGE FURNITURES</a></h3>
                             <p> Office furniture includes Cabinets, Bookcases, Wardrobes, Chests, Shelving Units, Sideboards and Buffets, Storage Ottomans, TV Stands and Media Consoles, Baskets and Bins </p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="/img/Capturest.jpg" alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                         </div>
                        <div class="col-sm-6">
                         <div class="col-sm-12 space_all">
                           <div class="col-sm-6">
                            <div class="season_3">
                              {{-- <ul> 
                                  <li><i class="fa fa-calendar"></i>March 7, 2017</li>
                                  <li><i class="fa fa-eye"></i>View: 15</li>
                              </ul> --}}
                              <h3><a href="#">OUTDOOR FURNITURES</a></h3>
                             <P> Outdoor Furnitures includes Patio Sets, Lounge Chairs, Hammocks, Benches, Outdoor Sofas and Sectionals, Dining Tables, Umbrellas, Outdoor Storage</p>
                              <h5 class="text-right"><a href="#">READ MORE</a></h5>
                            </div>
                           </div>
                           <div class="col-sm-6">
                            <a href="#" class="thumbnail"><img src="img/outdoor.jpg " alt="Image" style="max-width:100%;"></a>
                           </div>
                          </div>
                        </div>
                       </div><!--.row-->
                   </div><!--.item-->
                   </div><!--.carousel-inner-->
                     <a data-slide="prev" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/kE4g#Carousel" class="left carousel-control">‹</a>
                     <a data-slide="next" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/kE4g#Carousel" class="right carousel-control">›</a>
                   </div><!--.Carousel-->
           </div>
        </div>
      </div>
     </div>
    </div>
</section>
@endsection