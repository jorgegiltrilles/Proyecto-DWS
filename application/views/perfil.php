<div id="page-wrapper">




<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perfil
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?=base_url()?>escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar fa-user"></i> Perfil
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


<div class="row">
    <div class="col-md-7 col-md-offset-2">
       
             <fieldset disabled>
              <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" id="txtNombre" class="form-control"  value="<?php echo  $nombre?>">
               </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Apellidos</label>
              <input type="text" id="txtApellidos" class="form-control"  value="<?php echo $apellidos?>">
            </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="txtEmail" class="form-control"  value="<?php echo $email?>">
            </div>

             
             <?php foreach ($selPerfilHeader as $value) { ?>
            <div class="form-group">
              <label for="exampleInputPassword1">Perfil</label>
              <input type="text" name="txtDNI" class="form-control" id="disabledTextInput"  value ="<?php echo $value->per_nombre; ?>">
            </div>  

           <?php } ?>

                       
              <div class="form-group">
              <label for="exampleInputEmail1">Felta Alta</label>
              <input type="date" name="txtFecha" class="form-control"  value="<?php echo $fecha_alta?>">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">DNI</label>
              <input type="text" name="txtDNI" class="form-control" id="disabledTextInput"  value="<?php echo $dni?>">
            </div>  


    
         
     </div>
  </div>
</div>
        
