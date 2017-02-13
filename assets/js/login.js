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

$(document).ready(function() {
  $('.ficha').on('click',
      function(e) {
      	alert('Aqui');
        $('#ajaxModal').remove();
        e.preventDefault();
        var $this = $(this),
          $remote = $this.attr('href'),
          $modal = $('<div class="modal" id="ajaxModal"><div class="modal-body"></div></div>');
        $('body').append($modal);
        $modal.modal({
          backdrop: 'static',
          keyboard: false
        });
        $modal.load($remote);
      }
    );
});