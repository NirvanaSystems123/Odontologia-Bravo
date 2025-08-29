<?php 
include "header.php";
include "navbar.php";
?>

<div class="container custom-container">
  <div class="row">
    <div class="col-sm-4 text-center">
      <h2>Reserva tu cita</h2>
      <h5>Odontología Bravo</h5>
      <img src="../imagenes/logo.jpg" class="rounded mx-auto d-block border" width="80%" alt="">
      <p><kbd>Reserva con un solo clic</kbd></p>
      <hr class="d-sm-none">
    </div>

    
    <div class="col-sm-8">
      <div class="text-justify">
          <p class="alert alert-info">Has clic en el siguiente botón para iniciar tu reserva en la clínica. 
            <br><b>Una forma mas fácil de reservar con un solo clic"</b>.
          </p>
      </div>
      <?php 
        include "modal_reserva.php";
        #include "metodos/form_insert.php";
      ?>

      <hr>
      <div class="text-justify">
          <p class="alert alert-warning">Quieres consultar el estatus de tu reserva?, No dudes en ponerte en contacto con nosotros si tuvieras algun tipo de incomveniente.
          </p>
      </div>


    </div>
  </div>
</div>
<?php include "footer.php";?>