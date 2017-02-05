$(document).ready(ini);

function ini(){
    $("#btnregistrar").click(enviarDatos);// formulario login validación

        var form = $(".form-login");
        form.bind("submit",function(){
         
        $.ajax({
           type:  form.attr('method'),
           url:  form.attr('action'),
           data:  form.serialize(),

           success: function(data){

               if(data =="true"){
                   document.location.href="admin.php";    
                }else{
                    $("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>" + data);
                }

           },