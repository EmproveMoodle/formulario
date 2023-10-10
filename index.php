<?php
//Variable que nos sirve para comprobar los mensajes que nos envíe registro.php
$message = $_REQUEST['message'];
?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APIs Reducate</title>
  <!-- CSS de Bootstrap y SweetAlert -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js "></script>
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css " rel="stylesheet">
</head>

<body class="bg-dark">

  <!-- Comienza el cuerpo del formulario -->
  <section class="vh-100" style="margin: 10px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrar un usuario</p>
                  <!-- Inicia el formulario -->
                  <form class="mx-1 mx-md-4" method="post" action="registro.php">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0" style="margin-right: 5px;">
                        <input type="text" name="txtNombre" class="form-control" />
                        <label class="form-label" for="form3Example1c">Nombre(s)</label>
                      </div>
                      <div class="form-outline flex-fill mb-0" style="margin-left: 5px;">
                        <input type="text" name="txtApellidos" class="form-control" />
                        <label class="form-label" for="form3Example1c">Apellido(s)</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" name="txtUsername" class="form-control" />
                        <label class="form-label" for="form3Example4c">Nombre de usuario</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name="txtCorreo" class="form-control" />
                        <label class="form-label" for="form3Example4cd">Correo electrónico</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="txtPassword" class="form-control" />
                        <label class="form-label" for="form3Example3c">Contraseña</label>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>

                  </form>
                  <!-- Termina el formulario -->
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://cdn.goconqr.com/uploads/media/image/13857283/desktop_aa0ebe72-0b22-40f3-8144-0bc3efcc30fd.png" class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Termina el cuerpo del formulario -->

  <!-- JavaScripts de Bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Validar el mensaje retornado desde registro.php -->
  <?php
  //Si el mensaje es "Ok", mostrar mensaje de éxito.
  if (isset($message) && $message == "Ok") {
    include 'mensajeOk.php';
  }
  //Si el mensaje es "Error", mostrar mensaje de error.
  elseif (isset($message) && $message == "Error") {
    include 'mensajeError.php';
  }
  ?>

</body>

</html>