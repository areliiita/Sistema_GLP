<?php
  @session_start();
  if(!isset($_SESSION["idusuario"])){
  }
?>

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
               <?php $total = 0; ?>
                <?php foreach($this->model->listarbautismo() as $r): ?>
                    <?php $total++; ?>
                    <?php endforeach; ?>
                <div class="full-box tile-number text-titles">
                    <p class="full-box"><?php echo $total ?></p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    CONFIRMACIÓN
                </div>
                <div class="full-box tile-icon text-center">
            <a href="?c=Confirmacion&a=Consultar"><img src="./assets/img/confirmacion.jpg" alt="" style="height: 130px;"></a>
                </div>
                <?php $totalconfirmacion = 0; ?>
                <?php foreach($this->model1->listarconfirmacion() as $r): ?>
                    <?php $totalconfirmacion++; ?>
                    <?php endforeach; ?>
                <div class="full-box tile-number text-titles">
                    <p class="full-box"><?php echo $totalconfirmacion ?></p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    PRIMERA COMUNIÓN
                </div>
                <div class="full-box tile-icon text-center">
           <a href="?c=Comunion&a=Consultar"><img src="  ./assets/img/comunion.jpeg" alt="" style="height: 130px; margin-top: 5px;"></a>
                </div>
                <?php $totalcomunion = 0; ?>
                <?php foreach($this->model2->listarcomunion() as $r): ?>
                    <?php $totalcomunion++; ?>
                    <?php endforeach; ?>
                <div class="full-box tile-number text-titles">
                    <p class="full-box"><?php echo $totalcomunion ?></p>
                    <small>Registrados</small>
                </div>
            </article>
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    MATRIMONIOS
                </div>
                <div class="full-box tile-icon text-center">
                   <a href="?c=Matrimonio&a=Consultar"> <img src="./assets/img/matrimonio.jpeg" alt="" style="height: 140px;"> </a>
                </div>
                <?php $totalmatrimonio = 0; ?>
                <?php foreach($this->model3->listarmatrimonio() as $r): ?>
                    <?php $totalmatrimonio++; ?>
                    <?php endforeach; ?>
                <div class="full-box tile-number text-titles">
                    <p class="full-box"><?php echo $totalmatrimonio ?></p>
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
    </div>
    <br><br><br><br><br><br><br><br> <br>   <br>    <br> <br>
