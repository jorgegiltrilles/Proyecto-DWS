<div id="page-wrapper">




<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Listado Tarifas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>clientes">Clientes</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Tarifas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

          <?php foreach ($listaTarifas as $value) { ?>
          <?php } ?>
           <h3> Tarifa <?php echo $value->razonsocial; ?></h3>


  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          
          <table class="table table-hover">
             <thead>
              
              <th>Descripción</th>
              <th>Tarifa</th>
              <th>Descuento</th>
              <th>Precio</th>
              <th>Precio neto</th>
                             
              
              </thead>
              
              <tbody>
                  <!-- /.Detalle de la tarifa -->
                 <?php foreach ($listaTarifas as $value) { ?>

                  <tr>
                    <td><?php echo $value->descripcion; ?></td>
                    <td><?php echo $value->nombre_tarifa; ?></td>
                    <td><?php echo $value->descuento; echo " %"?></td>
                    <td><?php echo $importe = $value->precio; echo " €" ?></td>
                    <td><?php echo $importe = $value->precio - (($value->precio * $value->descuento) / 100);echo " €" ?></td>
                                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
                  
          </div>
    </div>
</div>