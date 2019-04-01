<?php
session_start();
$lista=$_SESSION['lista'];
$marcas=$_SESSION['marcas'];
$usd=42.2;
?>

<html>
    <head>
        <title>Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/shop_responsive.css">

    </head>
    <body>
        
        <div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="../images/phone.png" alt=""></div>+54 351 770 2256</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="../images/mail.png" alt=""></div><a href="mailto:Escrow@outlook.com">Escrow@outlook.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								
							</div>
							
						</div>
					</div>
				</div>
			</div>		
		</div>
                
                <!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src='https://i.gyazo.com/cbcc1f37cf5d3d17a3622eda26e533db.png'></a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Buscar productos...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">Todas las categorias</span>
                                                                                                
												<ul class="custom_list clc">
                                                                                                    <?php
                                                                                                foreach($marcas as $reg){ 
                                                                                                    ?>
												<li><a class="clc" href="#"><?php echo $reg[1]?></a></li>
												<?php
                                                                                                }
                                                                                                ?>
                                                                                                </ul>
                                                                                                
                                                                                        </div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="../images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="../images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Deseos</a></div>
									<div class="wishlist_count">0</div>
								</div>
							</div>
					
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="../images/cart.png" alt="">
										<div class="cart_count"><span>0</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Carrito</a></div>
										<div class="cart_price">$0</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Categorias</div>
								</div>
                                                                <!-- Recorrer tabla de categorias brands -->
								<ul class="cat_menu">
                                                                    <?php
                                                                                                foreach($marcas as $reg){ 
                                                                                                    ?>
									<li><a href="#"><?php echo $reg[1]?> </a></li>
									<?php
                                                                        }
                                                                        ?>
								</ul>
							</div>

							
							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
                
                

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Smartphones </h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
                                            <div class="filter_price">
                                                <div id="slider-range" class="slider_range ui-slider ui-corner-all ui-slider-horizontal ui-widget u i-widget-content">
                                                    
                                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 27%;">
                                                    </div>
                                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 27%;"></span>
                                            
                                            </div>
                                                <p>Rango: </p>
                                             <p><input type="text" id="amount" class="amount" readonly="" style="border:0; font-weight:bold;"></p>
                                            </div>
					

				</div>

				<div class="col-lg-9">
					
					
                <!-- catalogo -->
        <div class="product_grid">
            <div class="product_grid_border"></div>
            
                <!--
                 if($num==3){
                            echo "<tr>";
                            $num=1 ; 
                        }
                        else {
                            $num++;
                -->
                
                <?php
            $num=0;
            
                    foreach($lista as $reg){
                       
                            ?>
                                    
                <div class="product_item is_new">
		<div class="product_border"></div>
        		<div class="product_image d-flex flex-column align-items-center justify-content-center">
                            <img src="../Images/<?php echo $reg[6]?>" width="105" height="120">
                        </div>
				<div class="product_content">
					<div class="product_price">
                                            $<?php echo $reg[2]*$usd?>
                                            
                                        </div>
                                <div class="product_name">
                                    <div>
                                        <a href="#" tabindex="0">
                                            <?php echo $reg[1] ?> 
                                        </a>
                                    </div>
                                </div>
				</div>
						<div class="product_fav">
                                                    <i class="fas fa-heart"></i>
                                                </div>
                                                    
                                                        <?php 
                                                        if($reg[4]==1){
                                                        ?>
                                                        <ul class="product_marks">
							
                                                         <li class="product_mark product_new">new</li> 
                                                        
                                                        </ul>
                                                        <?php
                                                        }
                                                        ?>
                                                        
                                                        <!--
                                                        <li class="product_mark product_discount">-25%</li>
                                                        -->
                                                        
                                                        
                                                    
            </div>
            
                
                
                
             
                
                
           
            
    
                            <?php
                        
                        
                    }
            ?>
                
                                     </div>
                                </div>
                            </div>
                         </div>
                      </div>
                  
	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
                                                    <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="../images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="../images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="../images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="../images/brands_5.jpg" alt=""></div></div>
							

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src='https://i.gyazo.com/cbcc1f37cf5d3d17a3622eda26e533db.png'></a></div>
						</div>
						<div class="footer_title">Preguntas? Llamenos 24/7</div>
						<div class="footer_phone">+54 351 770 2256</div>
							
						<div class="footer_social">
							<ul>
								<li><a href="https://www.instragram.com/escrowcba"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						
						
						
						
					</div>
				</div>

				

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Servicio al cliente</div>
						<ul class="footer_list">
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Rastrear orden</a></li>
							<li><a href="#">Preguntas frecuentes</a></li>
							<li><a href="#">Garantia</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to  <a href="https://Escrowcba.com" target="_blank">Escrow</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="../images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="../images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="../images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="../images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/shop_custom.js"></script>
</body>

</html>
    
