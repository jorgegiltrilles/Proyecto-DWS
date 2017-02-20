<div id="page-wrapper">
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Insertar Clientes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
     <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
              <div class="col-md-7 ">
                  <form method="POST" action="<?php echo base_url('clientes/insert')?>">

           
              <div class="form-group">
              <label for="exampleInputEmail1">Razon Social</label>
              <input type="text" name="txtRazonSocial" class="form-control" id="exampleInputEmail1" placeholder="razon social" required>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Dirección</label>
              <input type="text" name="txtDireccion" class="form-control" id="exampleInputEmail1" placeholder="direccion" required>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">CIF</label>
              <input type="text" name="txtCif" class="form-control" id="inputEmail" placeholder="cif" required>
            </div>
           
              <div class="form-group">
              <label for="exampleInputEmail1">Población</label>
              <input type="text" name="txtPoblacion" class="form-control" id="inputPassword" placeholder="poblacion" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Provincia</label>
              <input type="text" name="txtProvincia" class="form-control" id="exampleInputPassword1" placeholder="provincia">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">Código Postal</label>
              <input type="text" name="txtCodigoPostal" class="form-control" id="exampleInputPassword1" placeholder="codigo postal">
            </div>  
           <div class="form-group">
              <label for="exampleInputPassword1">Tarifa</label>
              <input type="text" name="txtTarifa" class="form-control" id="exampleInputPassword1" placeholder="tarifa">
            </div> 
           

            <button type="submit" class="btn btn-default">Registrar Cliente</button>
          </form>
       </div>
       </div>
   </div>
</div>
