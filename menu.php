<?php

include 'header.php';

?>

    <title>RestaurantFenix</title>
    
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-dark conav">
          <a class="navbar-brand "  href="#">RESTAURANTFENIX</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link colorletra" href="index.html">INICIO </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link colorletra" href="#">NOSOTROS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link colorletra" href="menu.html">NUESTRO MENU</a>
              </li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item active">
                <a href="carrito.html" class="nav-link colorletra" >CARRITO(0)</a>
                </li>
            </ul>
          </div>
        </nav>
              <div class="jumbotron text-center contenido1">
                    <h1>POPULAR</h1>
                    <h4>Lo mas vendido!!!</h4> 
                  </div>
              <!--contenido-->
              <div class="container separador">

                    <div class="row">
                
                      <div class="col-lg-3 separador">
                        
                        <h1 class="my-4">NUESTROS MENUS</h1>
                        <div class="list-group ">
                          <a href="#" class="list-group-item ">PIZZA</a>
                          <a href="#" class="list-group-item">HAMBURGUESA</a>
                          <a href="#" class="list-group-item">BANDEJAS</a>
                        </div>
                
                      </div>

                      
                      <!-- /.col-lg-3 -->
                      <!--
                      <div class="col-lg-9">
                        
                        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                         -->

                         <!--CAJA GENERAL-->
                         <div class="col-lg-9">
                             
                        <div class="row separador">
                
                          <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                              <a href="#"><img class="card-img-top tamañopanel" src="assets/img/piz1.jpg" alt=""></a>
                              <div class="card-body">
                                <h4 class="card-title">
                                  <a href="#">PIZZA GRANDE</a>
                                </h4>
                                <h5>$40.000</h5>
                                <p class="card-text">Deliciosa Pizza de salame tamaño grande familiar</p>
                              </div>
                              <div class="card-footer">
                                <input type="submit" class="btn btn-success" value="Comprar" >
                              </div>
                            </div>
                          </div>
                
                          <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top tamañopanel" src="assets/img/piz2.jpg" alt=""></a>
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      <a href="#">PIZZA MEDIANA</a>
                                    </h4>
                                    <h5>$30.000</h5>
                                    <p class="card-text">Deliciosa Pizza de salame tamaño mediana amigos</p>
                                  </div>
                                  <div class="card-footer">
                                    <input type="submit" class="btn btn-success" value="Comprar" >
                                  </div>
                                </div>
                              </div>
                
                              <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                      <a href="#"><img class="card-img-top tamañopanel" src="assets/img/piz3.jpg" alt=""></a>
                                      <div class="card-body">
                                        <h4 class="card-title">
                                          <a href="#">PIZZA ESTANDAR</a>
                                        </h4>
                                        <h5>$20.000</h5>
                                        <p class="card-text">Deliciosa Pizza de salame tamaño estandar parejas</p>
                                      </div>
                                      <div class="card-footer">
                                        <input type="submit" class="btn btn-success" value="Comprar" >
                                      </div>
                                    </div>
                                  </div>
                
                                  <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card h-100">
                                          <a href="#"><img class="card-img-top tamañopanel" src="assets/img/piz4.jpg" alt=""></a>
                                          <div class="card-body">
                                            <h4 class="card-title">
                                              <a href="#">PIZZA PERSONAL</a>
                                            </h4>
                                            <h5>$10.000</h5>
                                            <p class="card-text">Deliciosa Pizza de salame tamaño mediana personal</p>
                                          </div>
                                          <div class="card-footer">
                                            <input type="submit" class="btn btn-success" value="Comprar" >
                                          </div>
                                        </div>
                                      </div>
                

                        </div>
                        <!-- /.row -->
                
                      </div>
                      <!-- /.col-lg-9 -->
                
                    </div>
                    <!-- /.row -->
                
                  </div>
                  <!-- /.container -->


                  




              <footer class="page-footer font-small fo">
              
                      <!-- Copyright -->
                      <div class="footer-copyright text-center">© 2019 Copyright: RestaurantFenix
                      </div>
                      <!-- Copyright -->
                    
                    </footer>
    </body>
</html>
              