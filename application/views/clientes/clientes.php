<!--Aquí estará el Crud de Usuario-->



<div id="page-wrapper">


<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Clientes
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
              
              <th>ID</th>
              <th>Razón Social</th>
              <th>Dirección</th>
              <th>CIF</th>
              <th>Población</th>
              <th>Provincia</th>
              <th>Código Postal</th>
              <th>Acciones</th>
                         
              
              </thead>
              
              <tbody>
                  <?php foreach ($listaClientes as $value) { ?>
                  <tr>
                      <td><?php echo $value->codigo_cliente; ?></td>
                      <td><?php echo $value->razonsocial; ?></td>
                      <td><?php echo $value->direccion; ?></td>
                      <td><?php echo $value->cif; ?></td>
                      <td><?php echo $value->poblacion; ?></td>
                      <td><?php echo $value->provincia; ?></td>
                     <td><?php echo $value->codigopostal; ?></td>


                     <td> 
                            <center>
                                
                                <a href="<?php echo base_url('clientes/tarifas')."/".$value->codigo_cliente; ?>" title="Mostrar Tarifa">ver tarifa<span class="glyphicon glyphicon-euro" aria-hidden="true"></span></a>
                          </center>

                      </td>
                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
          
      </div>

    </div>

          
      </div>
  </div>

</div>