<!--Aquí estará el Crud de Usuario-->



<div id="page-wrapper">


<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Materiales
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Materiales
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
              <th>Formato</th>
              <th>Serie</th>
              <th>Color</th>
              <th>Precios</th>
              
             
              
              </thead>
              
              <tbody>
                  <?php foreach ($listaMateriales as $value) { ?>
                  <tr>
                      <td><?php echo $value->codigo_material; ?></td>
                      <td><?php echo $value->descripcion; ?></td>
                      <td><?php echo $value->formato; ?></td>
                      <td><?php echo $value->serie; ?></td>
                      <td><?php echo $value->color; ?></td>
                      <td><?php echo $value->patron_precios; ?></td>
                    
                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
          
      </div>

    </div>

          
      </div>
  </div>

</div>