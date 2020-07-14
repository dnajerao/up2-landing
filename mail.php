<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $user_name = $_POST['name'];  
  $user_email = $_POST['email'];
  $user_tel = $_POST['tel'];
  $user_message = $_POST['comment'];

  //echo $user_name;

  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $from = "becas@up2promisedland.com";
  $to = "becas@up2promisedland.com";
  $subject = "Becas: " . $user_name;
  $message = "Los datos de contacto de la persona que ha tratado de contactarte son los siguientes:\n" .
            "Nombre: " . $user_name . "\n" .
            "Email: " . $user_email . "\n" .
            "Teléfono: " . $user_tel . "\n" .
            "Mensaje: " . $user_message;
  $headers = "From:" . $from;
  mail($to,$subject,$message, $headers);

  header('Location: http://up2promisedland.com/#contact-form');
}

?>