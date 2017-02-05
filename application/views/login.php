<!DOCTYPE html>
<html lang="es">
<head>
        <title>Gestión Empresarial JGT</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css" />
        <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

    </head>

<body>
       <div class="container">
        <div class="card card-container">
           
            <img id="profile-img" class="profile-img-card" src= "<?php echo base_url()?>assets/img/avatar1.png" />
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
    
    <!--mensaje error -->
    
        <?php
            if(isset($error)){
                echo "<p>".$error."</p>";
        }?>
    

            </form><!-- /form -->

           
        </div><!-- /card-container -->
    </div><!-- /container -->
          <div class="container" id="resultado">
          </div>

        </body>

</html>
