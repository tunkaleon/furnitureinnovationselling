


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furniture</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/element.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <style>
      .image-resize{
         height: 300px;
}
     </style>
</head>

<body>
  <section id="header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
         <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index.html">Furniture <span class="well_3 clearfix">CONSECTETUR</span></a>
     </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
           <ul class="nav navbar-nav navbar-center">
             <li class="active"><a href="{{ url('/') }}" class="hvr-pulse">HOME</a></li>
             <li><a href="about.html" class="hvr-pulse">ABOUT</a></li>
             <li><a href="services.html" class="hvr-pulse">SERVICES</a></li>
             <li><a href="blog.html" class="hvr-pulse">CATEGORIES</a></li>
             <li><a href="product.html" class="hvr-pulse">PRODUCT</a></li>
             <li>
               <section id="side_box">
           
                 <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="glyphicon glyphicon-list"></i>contact</a>
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
             </li>
             <ul class="nav navbar-nav">
                   </ul>
               <li class="dropdown">
             <a href="#" class="hvr-wobble-to-bottom-right" data-toggle="dropdown"><b>Sign in</i></b></a>
         <ul id="login-dp" class="dropdown-menu">
           <li>
              <div class="row">
                 <div class="col-md-12">
                   Login via
                   <div class="social-buttons">
                     <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                     <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                   </div>
                                   or
                     <form action="{{ url('login') }}" method="POST">
                         @csrf
                           @if(session('message') !== null)
                             <div class="alert alert-danger">
                                 {{ session('message') }}
                             </div>
                         @endif
                       <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="" name="email">
                       </div>
                       <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required="" name="password">
                                                <div class="help-block text-center"><a href="#">Forget the password ?</a></div>
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                       </div>
                       <div class="checkbox">
                          <label>
                          <input type="checkbox"> keep me logged-in
                          </label>
                       </div>
                    </form>
                 </div>
                 <div class="bottom text-center">
                   New here ? <a href="{{ url('register') }}"><b>Join Us</b></a>
                 </div>
              </div>
           </li>
         </ul>
           </li>	
           <li class="dropdown">
             <a href="{{ url('logout') }}" class="hvr-wobble-to-bottom-right" ><b>Logout</i></b></a>
           </li>
              </ul>
                      <ul>
                          <li><div id="custom-search-input">
                               <div class="input-group col-sm-2">
                                   <input type="text" class="  search-query form-control" placeholder="Search">
                                   <span class="input-group-btn">
                                       <button class="btn btn-danger" type="button">
                                           <span class=" glyphicon glyphicon-search"></span>
                                       </button>
                                   </span>
                               </div>
                           </div></li>
                      </ul>
              
             </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
     </nav>
   </section>

<section id="product_details" class="clearfix">
    <div class="container-fluid" style="margin: 30px 40px 24px 60px">
     <div class="row">
      <div class="col-sm-12">
        <br><br><br><br> <br><br><br><br>
       <div class="col-sm-8 " >
     <!-- Wrapper for slides -->
     
     <div class="carousel-inner cont-slider">
      <table class="table table-hover" style="background-color: white">
        <thead style="background-color: rgb(60, 60, 63); color:white; height:50px; font-size:20px">
          <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>SubTotal </th>
            <th>Remove</th>
          </tr>
        </thead>

        <?php
        $total;
        $totalamount=0; ?>
        @foreach ($cart as $cart1)
        <tr style="font-size: 20px; text-align:center" >
          <td><img src="/img/{{ $cart1->image }}" alt="" width="70px" height="50px"></td>
          <td>{{ $cart1->product_name }}</td>
          <td>{{ $cart1->quantity }}</td>
          <td>{{ $cart1->price }} Frw</td>
          <td>{{$total= $cart1->price * $cart1->quantity}} Frw</td>
          <td class="align-middle"><button style="background-color: rgb(192, 42, 42); border:none;color:white"><a onclick ="return confirm('are you sure you want to delete?')" href="{{ url('remove_cart', $cart1->id) }}"><i class="fa fa-times "></i></a></button></td>
        </tr>
        <?php $totalamount = $totalamount + ($cart1->price * $cart1->quantity); ?>
        @endforeach
        <tr style="font-size: 20px; text-align:center; background-color:rgb(205, 212, 214);color:rgb(243, 33, 18);font-weight:bold">
          <td colspan="3">Toatal Amount</td>
          <td colspan="3">  <?php echo $totalamount ?> Frw </td>
        </tr>

      </table>
      @if (session()->has('message'))
      <div class="alert alert-success" style="font-size: 20px">
          <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
          {{ session()->get('message') }}
      </div>
    @endif
     </div>
     <!-- Indicators -->
     
       </div>
        <div class="col-sm-4">
         <div class="product_details_2">
           
          <h3> <b>CART SUMMARY</b>&nbsp;&nbsp;</h3>.................................................................
          <hr >
          {{-- <p><a href="#"><i class="fa fa-bookmark-o"></i>{{ $product->owner_name }}</a></p> --}}
          {{-- <h4 class="text text-success">Descrption</h4> --}}
         </div>
         <div class="product_details_3" style="background-color: white; padding:20px 0px 20px 10px">
          {{-- <p >{{ $product->description }}.</p> --}}
          <table border="0" width="400px" style="font-size:20px;">
            <tr height="40px">
              <td> <b>SubTotal</td>
              <td><b><?php echo $totalamount ?> Frw</td>
            </tr>
            <tr  height="40px">
              <td><b>Delivery fee</td>
              <td><b>0 fee</td>
            </tr>
            <tr  height="40px">
              <td><b>Total</td>
              <td><b><?php echo $totalamount ?>Frw</td>
            </tr>
          </table>
         </div>
         <div class="product_details_5">
          <ul> 
             
              <li class="well_19"><a href="{{ url('checkout') }}"><i class=""></i>Click to Checkout </a></li>
              <li class="well_19"><a href="{{ url('/') }}"><i class=""></i>Continue Shoping</a></li>
        
          </ul>
         </div>
        </div>
      </div>
     </div>
    </div>
   </section>


   <section id="footer">
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
       <div class="footer_2 clearfix">
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">VESTIBULUM</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Elementum</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Imperdiet</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Sagittis</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Odionec</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Inceptos</a></li>
       </ul>
      </div>
       </div>
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">ELEMENTUM</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Sagittis</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lacinia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Dapibus</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Inceptos</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Odionec</a></li>
       </ul>
      </div>
       </div>
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">LINKS</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lacinia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Integer</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Conubia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Dapibus</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Nostra</a></li>
       </ul>
      </div>
       </div>
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">EXTRAS</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Sagittis</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lacinia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Dapibus</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Inceptos</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Odionec</a></li>
       </ul>
      </div>
       </div>
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">OUR SUPPORT</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Lacinia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Integer</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Conubia</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Dapibus</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Nostra</a></li>
       </ul>
      </div>
       </div>
        <div class="col-sm-2">
        <div class="footer_1">
       <h2><a href="#">DESIGNERS</a></h2>
       <ul>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Elementum</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Imperdiet</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Sagittis</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Odionec</a></li>
           <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Inceptos</a></li>
       </ul>
      </div>
       </div>
       </div>
      </div>
      <div class="col-sm-12">
        <div class="col-sm-4">
          <div class="footer_3">
         <h3>SED DIGNISSIM LACINIA</h3>
         <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum !</p>
         <h4><input type="text" class="form-control" placeholder="Enter your email address"></h4>
         <h5><a href="#">SUBSCRIBE</a></h5>
        </div>
       </div>
        <div class="col-sm-4">
          <div class="footer_4">
          <h3>INTEGER NEC</h3>
          <div class="footer_main_2 clearfix">
           <div class="col-sm-12 space_all">
           <div class="col-sm-2 space_all">
            <div class="footer_5">
             <i class="fa fa-map-marker"></i>
            </div>
           </div>
           <div class="col-sm-10 space_all">
            <div class="footer_6">
             <h5><a href="#">Address</a></h5>
             <p>123 Vestibulum lacinia arcu eget nulla</p>
            </div>
           </div>
          </div>
           <div class="col-sm-12 space_all">
           <div class="col-sm-2 space_all">
            <div class="footer_5">
             <i class="fa fa-phone"></i>
            </div>
           </div>
           <div class="col-sm-10 space_all">
            <div class="footer_6">
             <h5><a href="#">Phone</a></h5>
             <p>+1 123 456 7890</p>
            </div>
           </div>
          </div>
           <div class="col-sm-12 space_all">
           <div class="col-sm-2 space_all">
            <div class="footer_5">
             <i class="fa fa-envelope"></i>
            </div>
           </div>
           <div class="col-sm-10 space_all">
            <div class="footer_6">
             <h5><a href="#">Sale email account:</a></h5>
             <p><a href="#">info@gmail.com</a></p>
            </div>
           </div>
          </div>
          </div>
        </div>
       </div>
        <div class="col-sm-4">
          <div class="footer_4">
          <h3>FOLLOW UP</h3>
          <ul>
              <li class="well_4"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="well_5"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="well_6"><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="well_7"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li class="well_8"><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="well_9"><a href="#"><i class="fa fa-skype"></i></a></li>
          </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <section id="footer_inner">
    <div class="container">
     <div class="row">
      <div class="footer_inner_1">
       <p class="text-center">© 2013 Your Website Name. All Rights Reserved. Design by<a href="http://www.TemplateOnWeb"> Template On Web</a> </p>
      </div>
     </div>
    </div>
   </section>
   <script src="js/classie.js"></script> 
   <script src="js/cbpAnimatedHeader.js"></script>
   <script type="text/javascript">
         $("#menu-close").click(function(e) {
       e.preventDefault();
       $("#sidebar-wrapper").toggleClass("active");
     });
     $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#sidebar-wrapper").toggleClass("active");
     });
       </script>
   
   </body>
   </html>