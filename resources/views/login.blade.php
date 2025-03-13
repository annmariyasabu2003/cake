<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
       <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="{{asset( 'css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/linearicons/style.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/stroke-icon/style.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/nice-select/css/nice-select.css')}}" rel="stylesheet">
        
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    </head>
    <body>
         
        <!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						</div>
					<div class="float-right">
						<ul class="h_social list_style">
							</ul>
						<ul class="h_search list_style">
</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">
						<img src="img/logo.png" alt="">
						<img src="img/logo-2.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="dropdown submenu active">
								<li><a href="/">Home</a></li>
									
								</li>
								
								
								
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.php">About Us</a></li>
										
										
									</ul>
								</li>
								
								{{-- <li><a href="">Contact Us</a></li> --}}
								<li><a href="login">Login</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
       
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Login</h3>
        			<ul>
        				<li><a href="index">Home</a></li>
        				<li><a href="checkout.php">Login</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                
                <div class="row">
                	<div class="col-lg-7">
               	    	
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2>Login</h2>
                			</div>
							<div class="payment_list">
								
								<form class="billing_form row" action="/log" method="post" id="contactForm" novalidate="novalidate">
									@csrf
                                    <div class="form-group col-md-12">
										<label for="company">Username *</label>
										<input type="text" class="form-control"  name="email" placeholder="User Name">
									</div>
									<div class="form-group col-md-12">
										<label for="password">Password *</label>
										<input type="password" class="form-control" id="company" name="password" placeholder="Company Name">
									</div>
                                    
                                    <div class="form-group col-md-12">
                                    <p>Don't have an account? <a href="register">Sign Up</a></p>
                            </div>
                            
							<div class="d-flex align-items-center">
                            <input type="submit" value="Login" class="btn pest_btn">
                        </div>
								</form>
                              
                        
								
							</div>
						</div>
                	</div>
                </div>
            </div>
        </section>
        <!--================End Billing Details Area =================-->   
        
        
        
        
        
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="{{asset( 'js/jquery-3.2.1.min.js')}}"></script>
       
		 <script src="{{asset( 'js/popper.min.js')}}"></script>
		 <script src="{{asset( 'js/bootstrap.min.js')}}"></script>
		 <!-- Rev slider js -->
		 <script src="{{asset( 'vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		 <script src="{{asset( 'vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
		 <!-- Extra plugin js -->
		 <script src="{{asset( 'vendors/owl-carousel/owl.carousel.min.js')}}"></script>
		 <script src="{{asset( 'vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
		 <script src="{{asset( 'vendors/datetime-picker/js/moment.min.js')}}"></script>
		 <script src="{{asset( 'vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
		 <script src="{{asset( 'vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
		 <script src="{{asset( 'vendors/jquery-ui/jquery-ui.min.js')}}"></script>
		 <script src="{{asset( 'vendors/lightbox/simpleLightbox.min.js')}}"></script>
		 
		 <script src="{{asset( 'js/theme.js')}}"></script>
        
        
        <script src="js/theme.js"></script>
    </body>

</html>