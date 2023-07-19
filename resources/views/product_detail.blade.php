@extends('layouts.app')
@section('content')

<section id="product_details" class="clearfix">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="col-sm-7">
            <div class="product_details_1 clearfix">
                    <div class="carousel slide article-slide" id="article-photo-carousel">
                        <!-- Wrapper for slides -->
                        {{-- <br><br> --}}
                        <div class="carousel-inner cont-slider">
                        <div class="item">
                            <div class="magnify clearfix"><img data-toggle="magnify" src="img/{{ $product->image }}" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
                        </div>
                        <div class="item">
                            <div class="magnify clearfix"><img data-toggle="magnify" src="img/{{ $product->image }}" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
                        </div>
                        <div class="item">
                            <div class="magnify clearfix"><img data-toggle="magnify" src="img/{{ $product->image }}" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
                        </div>
                        <div class="item active">
                            <div class="magnify clearfix"><img data-toggle="magnify" src="img/{{ $product->image }}" width="100%" height="400px" alt=""><div class="magnify-large" style="background: url(&quot;http://i.imgur.com/1fgr2IO.jpg&quot;) no-repeat;"></div></div>
                        </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li class="" data-slide-to="0" data-target="#article-photo-carousel">
                            <img alt="" src="img/{{ $product->image }}" width="100%">
                        </li>
                        <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                            <img alt="" src="img/{{ $product->image }}" width="100%">
                        </li>
                        <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                            <img alt="" src="img/{{ $product->image }}" width="100%">
                        </li>
                        <li class="active" data-slide-to="3" data-target="#article-photo-carousel">
                            <img alt="" src="img/{{ $product->image }}" width="100%">
                        </li>
                        </ol>
                    </div>
            </div>
        </div>
        <br><br>

        <div class="col-sm-5">
         <div class="product_details_2">
          <H4>Product Name: {{ $product->product_name }}</h4>
        <br>
        <hr>
          <p>Description: &nbsp;{{ $product->description }} </p>
          <hr>
         </div>
         <div class="product_details_3">
          <h2 style="color: rgb(255, 72, 0)">{{ $product->price }}Frw</h2><br>
          <form action="{{ url('cart',$product->id) }}" method="POST">
            @csrf
                <ul> 
                   
                    @if($product->quantity >0)
                    <input type="number" class=" bg-secondary border-0 text-center px-3" value="1" name="value" min="1" style="width:50px; height:35px">
                        <button type="submit" name="cart" class="fa fa-shopping-cart mr-1" style="width:150px; height:35px; font-size:15px"><i  > Add to cart</li></button>
                    @else
                    <p style="padding-bottom:0px">
                        <h3 class="text text-danger">This product is out of stock! </h3>
                    </p>
                   
                    <li class="well_19"><a href="{{ url('/') }}"><i class=""></i>Select Other product</a></li>
                    @endif 
                    
                    
                </ul>
                
            </form>
         </div>
         <div class="product_details_5">
          <ul> 
            
              <li class="well_18"><a href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
              <li class="well_19"><a href="#"><i class="fa fa-facebook"></i> Share</a></li>
              <li class="well_20"><a href="#"><i class="fa fa-google-plus"></i> Google+</a></li>
              <li class="well_21"><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
          </ul><br>
          <div class="" style="background-color: white; padding:10px;10px;10px;10px;">
            <h4>if your not login or register? you must Login or register first before continue <br> click for <a href="{{ url('/') }}">login</a> or  <a href="{{ url('/') }}">register </h4></a>
          </div>
         </div>
        </div>
      </div>
     </div>
    </div>
</section>

<section id="explore">
    <div class="container">
     <div class="row">
      <div class="col-sm-12 padding_all">
       <div class="Popular_inner_1 clearfix">
        <div class="Popular_1 clearfix">
        <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu2">MORE DETAILS</a></li>
    </ul>
        <div class="tab-content clearfix">

     <div id="menu1" class="tab-pane fade clearfix">
     </div>
     <div id="menu2" class="">
       <div class="col-sm-12 space_all">
        <div class="explore_6 clearfix">
         <div class="col-sm-6">
         <div class="explore_5">
          <h3><b>MORE DETAILS</h3>
          <ul> 
            
            <li>{{ $product->product_name }} </li><br>
            <li>{{ $product->more_description }}</li>
            
               
          </ul>
         </div>
        </div>  
         <div class="col-sm-6">
         <div class="explore_5">
          <h3>Product Owner INFO </h3>
          <ul> 
             <li> <b> Owner Name:   {{ $product->owner_name }}</li>
              <li>Owner Email:   {{ $product->email }}</li>
              <li>Phone number:  {{ $product->phone }}</li>
              <li>Owner Address:  {{ $product->address }}</li>
          </ul>
         </div>
        </div>
        </div>
        </div>
        </div>
       </div>
       </div> 
      </div>
     </div>
    </div>
   </section>

<section id="related" style="padding-bottom: 10px">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="related_1">
     <h3 class="text-center">More Products</h3>
    </div>
    <div class="related_2">
     <div class="row">
        <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example-generic" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item">
                    <div class="row">
                        @foreach ( $data as $data)
                            
                
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/{{ $data->image }}" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                {{ $data->product_name }}</h5>
                                            <h5 class="price-text-color">
                                                {{ $data->price }}</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="{{ url('product_detail',$data->id) }}" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="{{ url('product_detail',$data->id) }}" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/4.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Gold bed</h5>
                                            <h5 class="price-text-color">
                                               120000 Frw</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/7.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Gold bed</h5>
                                            <h5 class="price-text-color">
                                               120000 Frw</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="img/salon.jpg" class="img-responsive" alt="a">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Gold bed</h5>
                                            <h5 class="price-text-color">
                                               120000 Frw</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com/" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   </div>
  </div>
</div>
</section>

@endsection