<?php
// Variables de configuración
$wsToken ="COLOCA AQUÍ TU TOKEN GENERADO POR MOODLE";
$urlMoodle="COLOCA AQUÍ LA URL DE TU MOODLE, EJEMPLO: https://pruebamoodle.emprove.com.mx";

// Valores que recibimos desde el formulario
$nombre = $_POST['txtNombre'];
$apellidos = $_POST['txtApellidos'];
$username =strtolower($_POST['txtUsername']);
$email = $_POST['txtCorreo'];
$pwd = $_POST['txtPassword'];

// Se construye el URL, se crea el cURL
$url = $urlMoodle."/webservice/rest/server.php?wstoken=".$wsToken."&wsfunction=core_user_create_users&moodlewsrestformat=json&users[0][username]=".$username."&users[0][firstname]=".$nombre."&users[0][lastname]=".$apellidos."&users[0][email]=".$email."&users[0][password]=".$pwd;
// Codificamos el URL para que los espacios sean detectados por la URL
$encodedUrl = str_replace(' ', '%20', $url);

// Abrimos una petición CURL
$peticion = curl_init();
// Le enviamos la URL a la petición CURL, así mismo configuramos algunos parametros
curl_setopt($peticion, CURLOPT_URL, $encodedUrl);
curl_setopt($peticion, CURLOPT_RETURNTRANSFER, true);
curl_setopt($peticion, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($peticion, CURLOPT_FAILONERROR, true);

// Ejecutamos la petición y lo guardamos en una variable.
$result = curl_exec($peticion);

// Decodificamos el JSON de la respuesta para poder validarla.
$resultJson = json_decode($result, true);

print_r($resultJson);

// Validamos el resultado de la petición
//Si la respuesta incluye username y id, es exitoso
if(isset($resultJson[0]['username']) && isset($resultJson[0]['id'])){
    $message = "Ok";
    echo $message;
}
//Si la respuesta es diferente, entonces hubo un error y no se realizó el registro
else{
    $message = "Error";
    echo $message;
}

// Cerramos la petición
curl_close($peticion);

// Regresamos al formulario
header("Location: index.php?message=".$message);