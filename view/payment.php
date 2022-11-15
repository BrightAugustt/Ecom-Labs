<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include ("../controllers/product_controller.php");
session_start();
$cid = $_SESSION['customer_id'];
$count=count_cart_ctr($cid);
$total=total_cart_price_ctr($cid);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ALOC| Paymennt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/shop.css" type="text/css" media="screen" property="" />
	<link href="../css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" type="text/css" href="../css/checkout.css">
	<link href="../css/stylei.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
	<!-- banner -->
<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="welome_page.php"><span>YESIDO</span> <i></i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
						<li><a href="Welcome_page.php">Home</a></li>
							<li><a href="404.php">About</a></li>
							<li><a href="404.php">Services</a></li>
							<li><a href="404.php">Short Codes</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="../actions/Logout.php">Log Out/In</a></li>

						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							
							<button  style="width: 120px; padding-right: 100px;" class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"><?php echo $count[0]["SUM(qty)"];?></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
                     <form action="search_results.php" method="GET">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="shop_main.php">Shop</a><i>|</i></li>
					<li>Payment</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Pay<span>ment</span></h3>
				<!--/tabs-->
				<div class="responsive_tabs">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Cash on delivery (COD)</li>
							<li>Paystack Payment</li>
							
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">
								<div class="pay_info">
									<div class="vertical_post check_box_agile">
										<h5>COD</h5>
										<div class="checkbox">
											<div class="check_box_one cashon_delivery">
												<label class="anim">
																<input type="checkbox" class="checkbox">
																 <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span> 
															</label>
											</div>

										</div>
									</div>
								</div>

							</div>
                           
							

							<div class="tab4">
								<div class="pay_info">
									<div class="col-md-6 tab-grid">
										<img class="pp-img" src="../Background.png" alt="Image Alternative text" title="Image Title">
										<p>Important: You will be redirected to Paystack's website to securely complete your payment.</p><a class="btn btn-primary">Checkout via Paypal</a>
									</div>
									<div class="col-md-6">
										<form class="cc-form">
											<div class="clearfix">
												<div class="form-group form-group-cc-number">
													<label>Email</label>
													<input class="form-control" id="email" placeholder="example@gmail.com" type="text"><span class="cc-card-icon" value="<?php //echo $total[""]?>" ></span>
												</div>
												<div class="form-group form-group-cc-cvc">
													<label>Total Amount</label>
													<input readonly class="form-control" value="<?php echo $total["SUM(cart.qty*products.product_price)"]?>" id="amount5" type="number">
												</div>
											</div>
											
											
											<button type="submit" class="btn btn-primary submit" onclick="payWithPaystack()" >Proceed Payment</button>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--//tabs-->
			</div>

		</div>
		<!-- //payment -->
        <script type="text/javascript">
	


        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);
        function payWithPaystack() {
        event.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_057c9db199308fc4166825e8b57cc8510a316319', // Replace with your public key
            email: document.getElementById("email").value,
            amount: document.getElementById("amount5").value * 100,
            ref: ''+Math.floor((Math.random() * 1000000000) + 1),
            currency:'GHS',

            // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
            alert('Window closed.');
            },
            callback: function(response){
            
            let message = 'Payment complete! Reference: '+ response.ref
            
            console.log(response.status);
            
                email = document.getElementById("email").value;
                amount5 = document.getElementById("amount5").value;
                console.log(email);
                console.log(amount5);

            dataString = 'email='+ email +'&amount5='+amount5;
        if (response.status=='success') {
            $.ajax({
                type:"POST",
                url:"../actions/payment_proc.php",
                data: dataString,
                cache:false,
                success:function(result){
                alert(result);
                window.location="payment_done.php";
                }


            });
            }
		
        }






        });

        handler.openIframe();
        }


        </script>

                <div class="clearfix"></div>
            </div>




	
	
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="welcome_page.php"><span>AL</span>OC </a></h2>
				<p>PROVIDING YOU WITH THE BEST ART WORKS AVALIABLE</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
						<li><a href="Welcome_page.php">Home</a></li>
							<li><a href="404.php">About</a></li>
							<li><a href="404.php">Services</a></li>
							<li><a href="404.php">Short Codes</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+233 552 782 355</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> ALOC@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>1 University Ave, Berekuso

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 Downy Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
   <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="../js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="../js/search.js"></script>
	<!--//search-bar-->
	<!-- easy-responsive-tabs -->
	<script src="../js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>

	<!-- credit-card -->
	<script type="text/javascript" src="../js/creditly.js"></script>
	<link rel="stylesheet" href="../css/creditly.css" type="text/css" media="all" />

	<script type="text/javascript">
		$(function () {
			var creditly = Creditly.initialize(
				'.creditly-wrapper .expiration-month-and-year',
				'.creditly-wrapper .credit-card-number',
				'.creditly-wrapper .security-code',
				'.creditly-wrapper .card-type');

			$(".creditly-card-form .submit").click(function (e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
					// Your validated credit card output
					console.log(output);
				}
			});
		});
	</script>
	<!-- //credit-card -->


	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>

</html>