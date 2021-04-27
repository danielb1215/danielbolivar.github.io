<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] ."'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"], 'Tipo'=>$productByCode[0]["Tipo"], 'uniqueid'=> uniqid()));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<!-- ADD-ONS CSS FILES -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/addons/revolution.addon.liquideffect.css">

	<!-- Store Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors.php?color=222222" type="text/css" /> <!-- Store Theme Color -->
	<link rel="stylesheet" href="demos/store/css/fonts.css" type="text/css" /> <!-- Store Theme Font -->
	<link rel="stylesheet" href="demos/store/store.css" type="text/css" /> <!-- Store Theme Custom CSS -->
	<!-- / -->
	<style>
		.dt-shadow{text-shadow:0px 10px 30px rgba(0,0,0,1)}#rev_slider_131_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_131_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_131_1 .uranus.tparrows:hover:before{opacity:0.75}.slotholder canvas { height: 100% !important; }
	</style>
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Estado Vítreo</title>

</head>

<body class="stretched modal-subscribe-bottom">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Modal 
		<div class="modal animated fadeInUp fast pr-0" id="modal-subscribe" role="dialog" displayed="false" data-backdrop="static">

			<div class="modal-dialog" role="subscribe">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close" style="z-index: 1">
							<span aria-hidden="true">&times;</span>
						</button>

						<div class="form-widget mx-auto" data-loader="button" style="padding: 30px">

							<h2 class="font-weight-bold h1 mb-3" style="letter-spacing: -2px">Get Special Discount!</h2>
							<p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>

							<div class="form-result"></div>

							<form class="mb-0" id="modal-subscribe-form" action="include/form.php" method="post" enctype="multipart/form-data">
								<label for="modal-subscribe-form-email">Email Address <span>*</span></label>
								<input type="email" name="modal-subscribe-form-email" id="modal-subscribe-form-email" class="form-control required rounded-0" placeholder="youremail@address.com">

								<input class="d-none" type="text" id="modal-subscribe-form-botcheck" name="modal-subscribe-form-botcheck" value="" />
								<button name="modal-subscribe-form-submit" class="button btn-block btn-danger m-0 mt-2" type="submit">Subscribe Now</button>

								<input type="hidden" name="prefix" value="modal-subscribe-form-">
							</form>
							<div class="text-center">
								<small class="text-black-50 mt-1"><em>We never send SPAM to your Email</em></small>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
-->
		<!-- Header
		============================================= -->
		<header id="header" class="dark transparent-header floating-header header-size-custom" data-sticky-shrink="false" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container-fluid">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="mr-lg-0">
							<a href="index.php" class="standard-logo" data-dark-logo="images/3.png"><img src="images/1.png" alt="Canvas Logo"></a>
							<a href="index.php" class="retina-logo" data-dark-logo="images/logo3.png"><img src="images/logo1.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">
						<?php
						if(isset($_SESSION["cart_item"])){
							$total_quantity = 0;
							$total_price = 0;
							//Shipping cart 
						?>
							<!-- Top Cart
							============================================= -->
							<div id="top-cart">
								<a href="#" id="top-cart-trigger" class="position-relative"><i class="icon-line-bag"></i><span class="top-cart-number">!</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
									<?php		
									foreach ($_SESSION["cart_item"] as $item){
										$item_price = $item["quantity"]*$item["price"];
										?>

										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="product-images<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#" class="font-weight-normal"><?php echo $item["name"]; ?></a>
													<span class="top-cart-item-price d-block"><?php echo $item["price"]; ?></span>
												</div>
												<div class="top-cart-item-quantity font-weight-semibold"><?php echo $item["quantity"]; ?></div>
											</div>
										</div>
									<?php
										$total_quantity += $item["quantity"];
										$total_price += ($item["price"]*$item["quantity"]);
									}
									?>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price font-weight-semibold text-dark"><?php echo "$ ".number_format($total_price, 3); ?></span>
										<a class="button button-dark button-small m-0" href="checkout.php" >View Cart</a>
									</div>
								</div>
							</div><!-- #top-cart end -->
							<?php							
									} else {
									?>
									<div id="top-cart">
										<a href="#" id="top-cart-trigger" class="position-relative"><i class="icon-line-bag"></i><span class="top-cart-number">0</span></a>
										<div class="top-cart-content">
											<div class="top-cart-title">
											<h4>Your Cart is Empty</h4>										
											</div>
										</div>
									</div>
									<?php 
									}
									
									// End of the shipping cart
									?>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<!-- Menu Left -->
							<ul class="not-dark menu-container">
								<li class="menu-item current"><a class="menu-link" href="index.php"><div>Inicio</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#lamparas"><div>Lamparas</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#vasos"><div>Vasos</div></a></li>
								<li class="menu-item"><a class="menu-link" href="products.php"><div>Productos</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#contactanos"><div>Contactanos</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>

				</div>

			</div>
			<div class="header-wrap-clone"></div>

		</header><!-- #header end -->
			<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap full-screen clearfix">

			<div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery" style="background-color:transparent;padding:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
				<div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
					<ul>	<!-- SLIDE  -->
						<li class="dark" data-index="rs-2800" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="include/rs-plugin/demos/assets/images/Dancing-Bulbs-100x50.webp"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="include/rs-plugin/demos/assets/images/9.webp"  alt=""  data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- BACKGROUND VIDEO LAYER -->
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper "
								 id="slide-2800-layer-7"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
											data-width="full"
								data-height="full"
								data-whitespace="nowrap"

								data-type="shape"
								data-basealign="slide"
								data-responsive_offset="off"
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"speed":5000,"to":"opacity:0;","ease":"Power4.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption   tp-resizeme"
								 id="slide-2800-layer-1"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-130','-157']"
											data-fontsize="['130','130','100','80']"
								data-lineheight="['130','130','100','80']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 6; white-space: nowrap; font-size: 130px; line-height: 130px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;border-width:0px;letter-spacing:-7px;">Estado Vítreo </div>

							
							<!-- LAYER NR. 4 -->
							<div class="tp-caption   tp-resizeme"
								 id="slide-2800-layer-2"
								 data-x="['center','center','center','center']" data-hoffset="['-10','-10','-10','-10']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['65','65','-8','-32']"
											data-fontsize="['40','40','30','30']"
								data-width="['640','640','480','360']"
								data-height="none"
								data-whitespace="['nowrap','nowrap','normal','normal']"

								data-type="text"
								data-typewriter='{"lines":"","enabled":"on","speed":"60","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1500","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
								data-responsive_offset="on"

								data-frames='[{"from":"y:50px;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 8; min-width: 640px; max-width: 640px; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Georgia, serif;font-style:italic;border-width:0px;">Estado finito, Vítreo infinito. </div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption rev-btn  tp-resizeme"
								 id="slide-2800-layer-4"
								 data-x="['right','right','center','center']" data-hoffset="['660','550','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['240','240','100','83']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="button"
								data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"from":"x:-50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 0);bw:2px 2px 2px 2px;"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[50,50,50,50]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[50,50,50,50]"

								style="z-index: 9; white-space: nowrap; font-size: 15px; line-height: 46px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;background-color:rgba(0, 0, 0, 0);border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:2px;border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;cursor:pointer;">Lamparas</div>

							<!-- LAYER NR. 6 -->
							<div class="tp-caption   tp-resizeme"
								 id="slide-2800-layer-6"
								 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['237','237','158','141']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="text"
								data-responsive_offset="on"

								data-frames='[{"from":"y:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"

								style="z-index: 10; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Georgia, serif;font-style:italic;border-width:0px;">O</div>

							<!-- LAYER NR. 7 -->
							<a href="#vasos"><div class="tp-caption rev-btn  tp-resizeme"								 
								 id="slide-2800-layer-5"
								 data-x="['left','left','center','center']" data-hoffset="['660','550','0','0']"
								 data-y="['middle','middle','middle','middle']" data-voffset="['240','240','224','207']"
											data-width="none"
								data-height="none"
								data-whitespace="nowrap"

								data-type="button"
								data-actions='[{"event":"click","action":"","offset":"px","delay":""}]'
								data-responsive_offset="on"

								data-frames='[{"from":"x:50px;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"150","ease":"Power2.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 0);bw:2px 2px 2px 2px;"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[50,50,50,50]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[50,50,50,50]"

								style="z-index: 11; white-space: nowrap; font-size: 15px; line-height: 46px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Arial, Helvetica, sans-serif;background-color:rgba(0, 0, 0, 0);border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:2px;border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:5px;cursor:pointer;">Vasos</div></a>
						</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content" style="overflow: inherit; padding-right:1%; padding-left:1%;">
		<!-- Seccion #1
		============================================= -->
				<div class="sections recipe-itmes p-0" style="overflow: visible; background-color: #f9f9f9" id="lamparas">
					<div class="row align-items-stretch align-content-stretch no-gutters" style="padding: 100px 0">
							<div class="heading-block center col-md-12 ">
									<h2 class="mb-3">Lamparas</h2>
							</div>

						<div class="col-lg-12">
							<div class="row no-gutters">
								<?php
								$product_array = $db_handle->runQuery("SELECT * FROM lamparas ORDER BY id ASC LIMIT 6");
								if (!empty($product_array)) { 
									foreach($product_array as $key=>$value){
								?>
									<!-- Item  -->
								<div class="col-sm-4 col-6">
								<div class="cards">
									<div class="card-body"data-toggle="modal" data-target="#modal<?php echo $product_array[$key]["id"]; ?>"  >
										<img src="product-images<?php echo $product_array[$key]["image"]; ?>" alt="image">
										<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
											<p class="card-author">By <a href="#"><?php echo $product_array[$key]["from"]; ?></a></p>
											<span class="badge badge-primary bgcolor"><i class="icon-star3"></i> 5.0</span>
										</div>
										<h3 class="card-title"><a class="stretched-link"> <?php echo $product_array[$key]["name"]; ?></a></h3>
										<h5 class="card-date"><i class="icon-dollar"></i><?php echo $product_array[$key]["price"]; ?></h5>
									</div>
								</div>
								<form id="form" method="post" action="checkout.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">	
								<div class="modal fade" id="modal<?php echo $product_array[$key]["id"]; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">						
											<div class="modal-header">
												<h4 class="modal-title" id="staticBackdropLabel"><?php echo $product_array[$key]["name"]; ?></h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<!-- Content ============================================= -->
												<section id="content">																					
												<div class="container clearfix">
													<!-- Portfolio Single Image
													============================================= -->
													<div class="col_two_third portfolio-single-image nobottommargin">
														<img src="product-images<?php echo $product_array[$key]["image"]; ?>" alt="">
													</div><!-- .portfolio-single-image end -->

													<!-- Portfolio Single Content
													============================================= -->
													<div class="col_one_third portfolio-single-content col_last nobottommargin">
														<!-- Portfolio Single - Description
														============================================= -->
														<div class="fancy-title title-bottom-border">
															<h2><?php echo $product_array[$key]["name"]; ?></h2>
														</div>
														<p><?php echo $product_array[$key]["info"]; ?></p>
														
														
														<!-- Portfolio Single - Description End -->
														
														<div class="line"></div>
														

														<!-- Portfolio Single - Meta
														============================================= -->
														<ul class="portfolio-meta bottommargin">
															<li><span><i class="icon-drink"></i>Botella de:</span><?php echo $product_array[$key]["from"]; ?></li>
															<li><span><i class="icon-dollar"></i>Precio:</span>$<?php echo $product_array[$key]["price"]; ?></li>
														</ul>
														<!-- Portfolio Single - Meta End -->

														<!-- Portfolio Single - Share
														============================================= -->
														
														<!-- Portfolio Single - Share End -->

													</div><!-- .portfolio-single-content end -->

													<div class="clear" style="padding-top:5%"></div>

												</div>
												<input type="text" class="product-quantity" name="quantity" value="1" size="2" style="display:none"/>
												<div class="center">
													<input type="submit" class="col-md-5 center button button-rounded button-reveal button-small button-border tright button-green" value="Añadir al carrito"/>
												</div>	
												
											</section><!-- #content end -->
											</div>
											
											</div>																				
									</div>
								</div>
								</form>	
								</div>
								
								<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
				
		<!-- Seccion #2
		============================================= -->
	
				<div class="section recipe-itmes p-0" style="overflow: visible; background-color: #f9f9f9" id="vasos">
					<div class="row align-items-stretch align-content-stretch no-gutters">
						
						<div class="col-lg-12" >
							<div class="row no-gutters"  style="padding: 100px 0">
									<div class="heading-block center col-md-12 ">
										<h2 class="mb-3">Colecciones de vasos</h2>
									</div>
									<?php
								$product_array = $db_handle->runQuery("SELECT * FROM vasos ORDER BY id ASC LIMIT 6");
								if (!empty($product_array)) { 
									foreach($product_array as $key=>$value){
								?>
								<!-- Item  -->
								<div class="col-sm-4 col-6"  >
									<div class="cards">
										<div class="card-body" data-toggle="modal" data-target=".bs-example-modal-lgv<?php echo $product_array[$key]["id"]; ?>">
											<img src="product-images<?php echo $product_array[$key]["image"]; ?>" alt="image">
											<div class="d-flex justify-content-between align-items-center mt-4 mb-2">
												<p class="card-author">By <a href="#"><?php echo $product_array[$key]["from"]; ?></a></p>
												<span class="badge badge-primary bgcolor"><i class="icon-star3"></i> 5.0</span>
											</div>
											<h3 class="card-title"><a class="stretched-link"><?php echo $product_array[$key]["name"]; ?></a></h3>
											<h5 class="card-date"><i class="icon-dollar"></i><?php echo $product_array[$key]["price"]; ?></h5>											
										</div>
									</div>
								<form id="form" method="post" action="checkout.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">	
								<div class="modal fade bs-example-modal-lgv<?php echo $product_array[$key]["id"]; ?>"data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-body">				
											<div class="modal-content">						
											<!-- Content ============================================= -->
											<section id="content">	
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel"><?php echo $product_array[$key]["name"]; ?></h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">																				
												<div class="container clearfix">
													<!-- Portfolio Single Image
													============================================= -->
													<div class="col_two_third portfolio-single-image nobottommargin">
														<img src="product-images<?php echo $product_array[$key]["image"]; ?>" alt="">
													</div><!-- .portfolio-single-image end -->

													<!-- Portfolio Single Content
													============================================= -->
													<div class="col_one_third portfolio-single-content col_last nobottommargin">
														<!-- Portfolio Single - Description
														============================================= -->
														<div class="fancy-title title-bottom-border">
															<h2><?php echo $product_array[$key]["name"]; ?></h2>
														</div>
														<p><?php echo $product_array[$key]["info"]; ?></p>
														
														
														<!-- Portfolio Single - Description End -->
														
														<div class="line"></div>
														

														<!-- Portfolio Single - Meta
														============================================= -->
														<ul class="portfolio-meta bottommargin">
															<li><span><i class="icon-drink"></i>Botella de:</span><?php echo $product_array[$key]["from"]; ?></li>
															<li><span><i class="icon-dollar"></i>Precio:</span>$<?php echo $product_array[$key]["price"]; ?></li>
														</ul>
														<!-- Portfolio Single - Meta End -->

														<!-- Portfolio Single - Share
														============================================= -->
														
														<!-- Portfolio Single - Share End -->

													</div><!-- .portfolio-single-content end -->													

												</div>
												<input type="text" class="product-quantity" name="quantity" value="1" size="2" style="display:none"/>
												<div class="center">
													<input type="submit" class="col-md-5 center button button-rounded button-reveal button-small button-border tright button-green" value="Añadir al carrito"/>
												</div>	
											
											</div>
											</section><!-- #content end -->
											</div>	
										</div>											
									</div>
								</div>
								</form>	
								</div>
								<?php
									}
								}
								?>		
								</div>
							</div>
						</div>						
					</div>
				</div>
				

				

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-white noborder">
			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-light">

				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-sm-4 d-flex justify-content-sm-start mb-3 mb-sm-0 text-black-50">
							Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
						</div>
						<div class="col-sm-4 d-flex justify-content-sm-center mb-3 mb-sm-0">
							<a href="https://www.instagram.com/estadovitreo" target="_blank" class="social-icon si-small si-colored si-instagram" title="instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
							<a href="https://wa.me/573058153225" target="_blank" class="social-icon si-small si-colored si-phone" title="whatsapp">
								<i class="icon-phone"></i>
								<i class="icon-phone"></i>
							</a>
						</div> 
						<div class="col-sm-4 d-flex justify-content-sm-end">
							<div class="copyright-links"><a href="https://wa.me/573058153225">https://wa.me/573058153225</a></div>
						</div>
					</div>
				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- ADD-ONS JS FILES -->
	<script src="include/rs-plugin/js/addons/revolution.addon.liquideffect.min.js"></script>

	<!-- SLIDER REVOLUTION EXTENSIONS  -->
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>


	<!-- TYPEWRITER ADDON -->
	<script src="include/rs-plugin/demos/typewriter/js/revolution.addon.typewriter.min.js"></script>
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/demos/typewriter/css/typewriter.css">

	<script>
	if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
		$(document).ready(changeHeaderColor);
		$(window).on('resize',changeHeaderColor);

		function changeHeaderColor(){
			if (jQuery(window).width() > 991.98) {
				jQuery( "#header" ).hover(
					function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).addClass( "hover-light" ).removeClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).addClass( "header-overlay" );
					}, function() {
						if (!$(this).hasClass("sticky-header")) {
							$( this ).removeClass( "hover-light" ).addClass( "dark" );
							SEMICOLON.header.logo();
						}
						$( "#wrapper" ).removeClass( "header-overlay" );
					}
				);
			}
		};

		$(window).scroll(function() {
			if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
				$('#modal-subscribe').modal('show');
				$("#modal-subscribe").attr("displayed", "true");
			}
		});

		jQuery('#modal-subscribe-form').on( 'formSubmitSuccess', function(){
			$("#modal-subscribe").addClass("fadeOutDown");
			setTimeout(function() { $('#modal-subscribe').modal('hide'); }, 400);
			$("#modal-subscribe").attr("displayed", "false");
		});

		var tpj=jQuery;

		var revapi1014;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_1014_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_1014_1");
			}else{
				revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
					sliderType:"standard",
					jsFileLocation: "include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,600],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

			RsTypewriterAddOn(tpj, revapi1014);
		});	/*ready*/

				var revapi2,
		tpj;
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

			function onLoad() {
				if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
					if(tpj("#rev_slider_2_1").revolution == undefined){
						revslider_showDoubleJqueryError("#rev_slider_2_1");
					}else{
						revapi2 = tpj("#rev_slider_2_1").show().revolution({
							sliderType:"standard",
							jsFileLocation:"include/rs-plugin/js/",
							sliderLayout:"fullscreen",
							dottedOverlay:"none",
							delay:9000,
							parallax: {
								type:"scroll",
								origo:"slidercenter",
								speed:400,
							  speedbg:0,
							  speedls:0,
								levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
							},
							navigation: {
								keyboardNavigation:"off",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								 mouseScrollReverse:"default",
								onHoverStop:"off",
								arrows: {
									style:"uranus",
									enable:true,
									hide_onmobile:false,
									hide_onleave:false,
									tmp:'',
									left: {
										h_align:"right",
										v_align:"bottom",
										h_offset:80,
										v_offset:30
									},
									right: {
										h_align:"right",
										v_align:"bottom",
										h_offset:20,
										v_offset:30
									}
								}
							},
							responsiveLevels:[1240,1024,778,480],
							visibilityLevels:[1240,1024,778,480],
							gridwidth:[1240,1024,778,480],
							gridheight:[868,768,960,720],
							lazyType:"all",
							shadow:0,
							spinner:"off",
							stopLoop:"off",
							stopAfterLoops:-1,
							stopAtSlide:-1,
							shuffle:"off",
							autoHeight:"off",
							fullScreenAutoWidth:"off",
							fullScreenAlignForce:"off",
							fullScreenOffsetContainer: "70",
							fullScreenOffset: "",
							disableProgressBar:"off",
							hideThumbsOnMobile:"off",
							hideSliderAtLimit:0,
							hideCaptionAtLimit:0,
							hideAllCaptionAtLilmit:0,
							debugMode:false,
							fallbacks: {
								simplifyAll:"off",
								nextSlideOnWindowFocus:"off",
								disableFocusListener:false,
							}
						});
					}; /* END OF revapi call */

					RsLiquideffectAddOn(tpj, revapi2);

					if(typeof ExplodingLayersAddOn !== "undefined") ExplodingLayersAddOn(tpj, revapi2);
				}; /* END OF ON LOAD FUNCTION */
			}()); /* END OF WRAPPING FUNCTION */
	</script>

</body>
</html>