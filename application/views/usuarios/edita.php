<div id="page-wrapper">




<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Modificar Usuarios
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>usuarios">Usuarios</a>
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
        <form method="POST" action="<?php echo base_url('usuarios/update')?>">

            <?php foreach ($datosUsuario as $value) { ?>
                
            <input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id; ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Perfil</label>              
              
                  <?php 
                  $lista = array();
                  foreach ($selPerfil as $registro) { 
                      $lista[$registro->per_id] = $registro->per_nombre;
                  } 
                  
                  echo form_dropdown('txtPerid',$lista,$value->per_id, 'class="form-control"');
                  ?>
              
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" value="<?php echo $value->nombre; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Apellidos</label>
              <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" value="<?php echo $value->apellidos;?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="txtEmail" class="form-control" id="exampleInputEmail1" value="<?php echo $value->email;?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="txtPassword" class="form-control" id="exampleInputEmail1" value="<?php echo $value->password;?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">DNI</label>
              <input type="text" name="txtDNI" class="form-control" id="exampleInputEmail1" value="<?php echo $value->dni;?>">
            </div>  

          <div class="form-group">
              <label for="exampleInputEmail1">Perfil</label>              
              
                  <?php 
                  $lista = array();
                  foreach ($selCliente as $registro) { 
                      $lista[$registro->codigo_cliente] = $registro->razonsocial;
                  } 
                  echo form_dropdown('txtCliente',$lista,$value->cod_cliente, 'class="form-control"');
                  ?>
              
            </div>


       <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
          </form>
    </div>
    
    </div>
</div>
        

