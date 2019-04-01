<head>
        <title>ABMC</title>
      
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
<?php include("../DAO/metodosDAO.php"); ?>
    </head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Agregar Stock</legend>
                        <div class="form-group" style="text-align: center">
                            <div class="col-md-8">
                                <input id="fname" name="modelo" type="text" placeholder="Modelo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center">
                            <div class="col-md-8">
                                <input id="lname" name="valor" type="number" placeholder="$" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center">
                            <div class="col-md-8">
                                <input id="lname" name="img" type="text" placeholder="IMG" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="text-align: center">
                            <div class="col-md-8">
                                <input id="lname" name="marca" type="text" placeholder="Marca" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" name="agregar">Agregar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <?php
                    if(isset($_POST['agregar'])){
                        $modelo= $_POST['modelo'];
                        $valor=$_POST['valor'];
                        $img=$_POST['img'];
                        $marca=$_POST['marca'];
                        
                        $metodosDAO = new metodosDAO();
                        $metodosDAO ->agregarProductos($modelo, $valor, $img, $marca);
                        echo $modelo;
                        echo $valor;
                        echo $img;
                        echo $marca;
                    }
                ?>
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