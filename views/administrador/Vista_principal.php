<?php
  @session_start();
  if(!isset($_SESSION["idusuario"])){
  }
?>


    <link rel="stylesheet" href="./css/main.css">
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-center"> TOTAL DE REGISTROS <small></small></h1>
            </div>
        </div>
        <div class="full-box text-center" style="padding: 30px 10px;">
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    BAUTISMOS
                </div>
                <div class="full-box tile-icon text-center blue">
                <a href="?c=Bautismo&a=Consultar"><img src="./assets/img/bautizo.jpeg" alt="" style="height: 120px; margin-top: 5px;"></a>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">7</p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    CONFIRMACIÓN
                </div>
                <div class="full-box tile-icon text-center">
            <img src="./assets/img/confirmacion.jpg" alt="" style="height: 130px;">
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">10</p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    PRIMERA COMUNIÓN
                </div>
                <div class="full-box tile-icon text-center">
<img src="  ./assets/img/comunion.jpeg" alt="" style="height: 130px; margin-top: 5px;">
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">70</p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    MATRIMONIOS
                </div>
                <div class="full-box tile-icon text-center">
                    <img src="./assets/img/matrimonio.jpeg" alt="" style="height: 140px;">
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">70</p>
                    <small>Registrados</small>
                </div>
            </article>
        </div>


    <!-- Notifications area -->
    <section class="full-box Notifications-area">
        <div class="full-box Notifications-bg btn-Notifications-area"></div>
        <div class="full-box Notifications-body">
            <div class="Notifications-body-title text-titles text-center">
                Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-alert-triangle"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">17m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-alert-octagon"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">15m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-help"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">10m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-info"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">8m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </section>
    <!-- Dialog help -->
    <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Help</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!--====== Scripts -->
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        $.material.init();
    </script>
       <script defer src="./fonts/js/brands.js"></script>
  <script defer src="./fonts/js/solid.js"></script>
  <script defer src="./fonts/js/fontawesome.js"></script>
   
</body>
</html>