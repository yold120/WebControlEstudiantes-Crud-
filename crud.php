<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>

	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/diseño.css">
  <link rel="stylesheet" type="text/js" href="js/slides.js">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<!-- barra de navegacion-->
	<!-- Navigation -->
    <!-- Navigation -->
    <div class="intro-header2">
      <br>
      <br>

    <nav class="navbar fixed-top" role="navigation">

        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><i class="fas fa-home"></i>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="http://virtual-dawn.com/index_english.html" target="_blank">Yoldany Contreras</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>

                        <a href="#home">Home</a>

                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                   <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>






    <!-- Header -->
      <div class="row">
          <div class="col-lg-12">
            <div class="container">
              <div class="row">

                <div class="col-sm-12">
                  <div class="card text-left">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <span class="btncrud btn-primary" data-toggle="modal" data-target="#insertarModal">
                            <i class="fas fa-plus-circle"></i> Nuevo registro
                          </span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">

                          <div id="tablaDatos"></div>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <?php require_once "modalInsert.php" ?>
            <?php require_once "modalUpdate.php" ?>

            <script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
            <script src="librerias/bootstrap4/popper.min.js"></script>
            <script src="librerias/bootstrap4/bootstrap.min.js"></script>
            <script src="librerias/sweetalert.min.js"></script>
            <script src="js/crud.js"></script>


            <script type="text/javascript">
              mostrar();
            </script>
    </div>








              </div>



        </div>
    </div>
    <!-- /.intro-header -->

 <!-- Page Content -->

</div>




















</body>
</html>
