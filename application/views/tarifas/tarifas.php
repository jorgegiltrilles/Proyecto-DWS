<!--Aquí estará el Crud de Tarifas-->



<div id="page-wrapper">


<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tarifas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Tarifas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

  <!-- Nav tabs -->
  
   
  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          
          <table class="table table-hover">
              
              <thead>
              
              <th>Código</th>
              <th>Descripción</th>
              <th>Descuento</th>
              
              
             
              
              </thead>
              
              <tbody>
                  <?php foreach ($listaTarifas as $value) { ?>
                  <tr>
                      <td><?php echo $value->codigo_tarifa; ?></td>
                      <td><?php echo $value->nombre_tarifa; ?></td>
                      <td><?php echo $value->descuento; echo " %" ?></td>
                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
          
      </div>

    </div>

          
      </div>
  </div>

</div>