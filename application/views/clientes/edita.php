<div id="page-wrapper">




<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Modificar Clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>clientes">Clientes</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Modificar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <form method="POST" action="<?php echo base_url('clientes/update')?>">

            <?php foreach ($datosCliente as $value) { ?>
                
            <input type="hidden" name="txtIdCliente" value="<?php echo $value->codigo_cliente; ?>">
            
              
          <div class="form-group">
              <label for="exampleInputEmail1">Razon Social</label>

              <input type="text" name="txtRazonSocial" class="form-control" id="exampleInputEmail1" value="<?php echo $value->razonsocial; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Dirección</label>
              <input type="text" name="txtDireccion" class="form-control" id="exampleInputEmail1" value="<?php echo $value->direccion; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">CIF</label>
              <input type="text" name="txtCif" class="form-control" id="inputEmail" value="<?php echo $value->cif; ?>">
            </div>
           
              <div class="form-group">
              <label for="exampleInputEmail1">Población</label>
              <input type="text" name="txtPoblacion" class="form-control" id="inputPassword" value="<?php echo $value->poblacion; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Provincia</label>
              <input type="text" name="txtProvincia" class="form-control" id="exampleInputPassword1" value="<?php echo $value->provincia; ?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">Código Postal</label>
              <input type="text" name="txtCodigoPostal" class="form-control" id="exampleInputPassword1" value="<?php echo $value->codigopostal; ?>">
            </div>  
           <div class="form-group">
              <label for="exampleInputPassword1">Tarifa</label>
              <input type="text" name="txtTarifa" class="form-control" id="exampleInputPassword1" value="<?php echo $value->patron; ?>">
            </div> 

       <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
          </form>
    </div>
    
    </div>
</div>
        