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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php include("../DAO/metodosDAO.php"); ?>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post" >
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
                                    <button type="submit" class="btn btn-primary btn-lg" name="agregar" data-toggle="modal" data-target="#miModal">Agregar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
                                </div>
                                <div class="modal-body">
                                    Texto del modal
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['agregar'])) {               # si se aprieta el boton agregar
                        $modelo = $_POST['modelo'];                 #variables que se guardan del form
                        $valor = $_POST['valor'];
                        $img = $_POST['img'];
                        $marca = $_POST['marca'];

                        $metodosDAO = new metodosDAO();
                        $metodosDAO->agregarProductos($modelo, $valor, $img, $marca);   #ejecucion del call 
//                        echo $modelo;
//                        echo $valor;
//                        echo $img;
//                        echo $marca;
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