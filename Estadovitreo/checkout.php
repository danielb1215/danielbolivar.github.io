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
								<li class="menu-item"><a class="menu-link" href="products.php"><div>Productos</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#contactanos"><div>Contactanos</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>

				</div>

			</div>
			<div class="header-wrap-clone"></div>

		</header><!-- #header end -->
        
		<!-- Content
        ============================================= -->
        <section id="page-title">

        <div class="container clearfix">
            <h1>Pasarela de pago</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="products.php">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pasarela de pago</li>
            </ol>
        </div>

        </section><!-- #page-title end -->
        <section id="content" style="overflow: inherit; padding-right:1%; padding-left:1%;">
        <div class="content-wrap">
				<div class="container clearfix">
					<div class="row col-mb-50 gutter-50">
						<div class="col-lg-6">
							<h3>Datos de envio</h3>

							

								<div class="col-md-12 form-group">
									<h4 for="shipping-form-name">Al iniciar la transacción se preguntará por información del comprador y al finalizar la misma se preguntará la dirección y ciudad para enviar el artículo.</h4>
								</div>


							<?php
						if(isset($_SESSION["cart_item"])){
							//Shipping cart 
						?>
							
							
							<h4>Total del carrito</h4>

							<div class="table-responsive">
								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="border-top-0 cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="border-top-0 cart-product-name">
												<span class="amount"><?php echo "$ ".number_format($total_price, 3); ?></span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Envio</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Envio gratis</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong><?php echo "$ ".number_format($total_price, 3); ?></strong></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="accordion clearfix">
								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
									<?php
										$cents = (int)(number_format($total_price, 4) * 100000);
										$uniqueid = $item["uniqueid"];
										?>
										<form>
										<script
											src="https://checkout.wompi.co/widget.js"
											data-render="button"
											data-public-key="pub_prod_rFZBG8On6ULAm6vHJpr3RnB9d7n5yUhI"
											data-currency="COP"
											data-amount-in-cents="<?php echo $cents ?>"
											data-reference="<?php echo $uniqueid ?>"
											data-redirect-url="http://localhost/copia/final.php"
											>
										</script>
										</form>
									</div>
								</div>							
							</div>
				
							
						
                        </div>
                        <div class="col-lg-6">
							<h4>Your Orders</h4>

							<div class="table-responsive">
								<table class="table cart">
									<thead>
										<tr>
											<th class="cart-product-thumbnail">&nbsp;</th>
											<th class="cart-product-name">Product</th>
											<th class="cart-product-quantity">Quantity</th>
											<th class="cart-product-subtotal">Total</th>
										</tr>
									</thead>
									<tbody>
										<?php
											//Shipping cart 
											foreach ($_SESSION["cart_item"] as $item){
												$item_price = $item["quantity"]*$item["price"];
												
										?>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<?php 
												if($item["Tipo"] == "Vaso"){
												?>		
												<a href="#"><img class="vasos" src="product-images<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>"></a>
												<?php	
												}else{
												?>
												<a href="#"><img src="product-images<?php echo $item["image"]; ?>" alt="<?php echo $item["name"]; ?>"></a>
												<?php
												}
												?>
												
											</td>

											<td class="cart-product-name">
												<a href="#"><?php echo $item["name"]; ?></a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
												<?php echo $item["quantity"]; ?>
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount"><?php echo $item["price"]; ?></span>
											</td>
										</tr>	
										<?php															
									} 
								
							}
								else {
									?> 
									<h2>No hay articulos en el carrito.</h2>
									<?php
									}								
									?>									
									</tbody>

								</table>
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