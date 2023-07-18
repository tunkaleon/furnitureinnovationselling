


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
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
		<a class="navbar-brand" href="{{ url('/') }}">Furniture <span class="well_3 clearfix">INN.SELLING</span></a>
	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
			  <ul class="nav navbar-nav navbar-center">
					<li class="active"><a href="{{ url('/') }}" class="hvr-pulse">HOME</a></li>
					<li><a href="{{ url('about') }}" class="hvr-pulse">ABOUT</a></li>
					<li><a href="{{ url('services') }}" class="hvr-pulse">SERVICES</a></li>
					<li><a href="{{ url('categories') }}" class="hvr-pulse">CATEGORIES</a>
          
          
          </li>
					<li><a href="{{ url('products') }}" class="hvr-pulse">PRODUCT</a></li>
          <li>
            <section id="side_box">
				
              <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="glyphicon glyphicon-list"></i>Text us</a>
              <div id="sidebar-wrapper" class="">
                <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
                <br>   <br>
                <div class="wrap_inner_2 clearfix">
                  <h2>Text Us</h2>
                  <form action="{{ url('comment') }}" method="POST">
                    @csrf
                    <input class="form-control" placeholder="Name" type="text" name="name">
                    <input class="form-control" placeholder="Email" type="email" name="email">
                    <input class="form-control" placeholder="Phone" type="text" name="phone">
                    <textarea class="form-control form_1" placeholder="Type Text Here" name="message"></textarea>
                    <h3 class="text-center"><button type="submit" style="border:none;background:rgb(8, 237, 245); width:150px;height:30px;color:white">Send</button></h3>
                  </form> 
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
          <a href="#" class="hvr-wobble-to-bottom-right" data-toggle="dropdown"><b>Sign Up</i></b></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
               <div class="row">
                  <div class="col-md-12">
                    Create Account
                    <div class="social-buttons">
                      <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                      <a href="#" class="btn btn-tw"><i class="fa fa-envelope"></i> gmail</a>
                    </div>
                                    or
                      <form action="{{ url('register') }}" method="POST">
                          @csrf
                            @if(session('message') !== null)
                              <div class="alert alert-danger">
                                  {{ session('message') }}
                              </div>
                          @endif
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputEmail2">Full name</label>
                           <input type="text" class="form-control" id="exampleInputEmail2" placeholder="full Name" required="" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" required="" name="email"value="{{ old('email') }}">
                       </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Phone number</label>
                          <input type="number" class="form-control" id="exampleInputEmail2" placeholder="Phone number" required="" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Address</label>
                          <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Address" required="" name="address" value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Password</label>
                          <input type="password" class="form-control" id="exampleInputEmail2" placeholder="new password" required="" name="password">
                        </div>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputPassword2">confirm Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="confirm Password" required="" name="password_confirmation">
                                                 {{-- <div class="help-block text-center"><a href="#">Forget the password ?</a></div> --}}
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                     </form>
                  </div>
                  <div class="bottom text-center">
                    have Account ? <a href="{{ url('/') }}"><b>Sign In</b></a>
                  </div>
               </div>
            </li>
          </ul>
        </li>
				   </ul>
                   <ul>
                       <li><div id="custom-search-input">
                        <form action="{{ url('search') }}" method="get">
                            <div class="input-group col-sm-2">
                              
                                <input type="text" class="  search-query form-control" placeholder="Search for data" name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                              </form>
                            </div>
                        </div></li>
                   </ul>
				   
			    </div><!-- /.navbar-collapse -->
     <!-- /.container-fluid -->
	</nav>
</section>

@yield('content');
<section id="footer">
    <div class="container">
     <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <div class="footer_3">
         <h3>FURNITURE INNOVATION SELLING</h3>
         <p>Furniture innovation selling is platform for posting furniture products for selling </p>
         <h4><input type="text" class="form-control" placeholder="Enter your email address"></h4>
         <h5><a href="#">SUBSCRIBE</a></h5>
        </div>
       </div>
        <div class="col-sm-4">
          <div class="footer_4">
          <h3>ADDRESS</h3>
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
             <p> KICUKIRO KK 601</p>
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
             <p>+0250789932372</p>
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
             <p><a href="#">furniture@gmail.com</a></p>
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
       <p class="text-center">© 2023 FirnutureInnovationSelling. All Rights Reserved. Design by<a href="http://www.furnitureinnovationselling.rw"> furniture innovation selling</a> </p>
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
    <script type="text/javascript">
      function reply(caller){

          $('.replaydiv').insertAfter($(caller));
          $('.replaydiv').show();
      }
    </script>

    <script type="text/javascript">
      function reply(caller)
      {

        $('.replydiv').insertAfter($(caller));
        $('.replydiv').show();
      }
    </script>
   
   </body>
   </html>