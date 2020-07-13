<?php

  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
  $user_tel = $_POST['tel'];
  $user_message = $_POST['message'];

  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );
  $from = "becas@up2promisedland.com";
  $to = "becas@up2promisedland.com";
  $subject = "Becas: " . $user_name;
  $message = "Los datos de contacto de la persona que ha tratado de contactarte son los siguientes:\n" .
            "Nombre: " . $user_name;
  $headers = "From:" . $from;
  mail($to,$subject,$message, $headers);
?>