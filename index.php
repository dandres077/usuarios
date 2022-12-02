<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Gestión de Usuarios | Uniminuto</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" crossorigin="anonymous"></head>

<body>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Gestión de Usuarios | Uniminuto</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->     
      
      <!-- Content Section --> 
      <!-- crud jquery-->
      <div class="da">
        <div class="row">
          <div class="col-md-12">
            <div class="pull-right">
              <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Crear</button>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div id="records_content"></div>
          </div>
        </div>
      </div>
      <!-- /Content Section --> 

      <!-- Bootstrap Modals --> 
      <!-- Modal - Crear -->
      <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
        
            <div class="modal-header">
              <h5 class="modal-title">Registro de datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input  type="text" id="nombres" class="form-control" value="" required/>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" class="form-control" value="" required/>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" value="" required/>
              </div>
              <div class="form-group">
                <label for="salario">Salario</label>
                <input type="number" id="salario" class="form-control" value="" required/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" onclick="addRecord()">Crear</button>
            </div>
          </div>
        </div>
      </div>
      <!-- // Modal --> 

      <!-- Modal - Actualización -->
      <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">Actualización de datos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>     
            
            <div class="modal-body">
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" id="update_nombres" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="update_apellidos" placeholder="Apellidos" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="apellidos">Email</label>
                <input type="email" id="update_email" placeholder="Email" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="salario">Salario</label>
                <input type="number" id="update_salario" placeholder="Salario" class="form-control" required/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Actualizar</button>
              <input type="hidden" id="hidden_user_id">
            </div>
          </div>
        </div>
      </div>
      <!-- // Modal --> 

      <!-- Jquery JS file --> 
      <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
      <!-- Bootstrap JS file --> 
      <!-- Custom JS file --> 
      <script type="text/javascript" src="js/script.js"></script> 
      <!-- Fin crud jquery-->

      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

  <label><strong>Total</strong><label>
  <div>
    <input id="total" type="text" placeholder="0.00"/>
  </div> 
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> </div>
</footer>

<script src="dist/js/bootstrap.min.js"></script> 
<script>
  $(document).ready(function() 
  { 
    $(document).on('click keyup','.checkboxes',function() {
      calcular();
    });
  });
</script>


</body>
</html>