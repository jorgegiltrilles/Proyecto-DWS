<!--Aquí estará el Crud de Usuario-->



<div id="page-wrapper">


<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Usuarios
                          
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="escritorio">Escritorio</a>
                            </li>

                            <li class="active">
                                <i class="fa fa-bar fa-user"></i> Usuarios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          
          <table class="table table-hover">
              
              <thead>
              
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Perfil</th>
              <th>Email</th>
              <th>Password</th>
              <th><center>Acciones</center></th>
              
              </thead>
              
              <tbody>
                  <?php foreach ($listaUsuario as $value) { ?>
                  <tr>
                      <td><?php echo $value->usu_id; ?></td>
                      <td><?php echo $value->nombre; ?></td>
                      <td><?php echo $value->apellidos; ?></td>
                      <td><?php echo $value->dni; ?></td>
                      <td><?php echo $value->per_nombre; ?></td>
                      <td><?php echo $value->email; ?></td>
                      <td><?php echo $value->password; ?></td>
                      <td> 
                            <center>
                                <a href="<?php echo base_url('usuarios/delete')."/".$value->usu_id; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                <a href="<?php echo base_url('usuarios/edit')."/".$value->usu_id; ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          </center>

                      </td>
                      
                  </tr>
                   <!--mensaje error -->
    
        
    

                  <?php } ?>
              </tbody>
          </table>
          
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
              <div class="col-md-7 ">
                  <form method="POST" action="<?php echo base_url('usuarios/insert')?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Perfil</label>
              <select name="txtIdper" class="form-control">
                  <?php foreach ($selPerfil as $value) { ?>
                      <option value="<?php echo $value->per_id?>"> <?php echo $value->per_nombre; ?> </option>    
                  <?php } ?>

              </select>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" placeholder="nombre" required>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Apellidos</label>
              <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="apellidos" required>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="txtEmail" class="form-control" id="inputEmail" placeholder="email" required>
            </div>
           
              <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" name="txtPassword" class="form-control" id="inputPassword" placeholder="password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">DNI</label>
              <input type="text" name="txtDNI" class="form-control" id="exampleInputPassword1" placeholder="dni">
            </div>  

            <button type="submit" class="btn btn-default">Registrar Usuario</button>
          </form>
              </div>
              <div class="col-md-5">
                  
              </div>
          </div>
          
          
      </div>
  </div>

</div>