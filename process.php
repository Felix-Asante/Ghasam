<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info.president@ghasamaroc.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "Web Contact", $message . ' - ', "From:" . $email);
    
    header('Location: https://felix-asante.github.io/Ghasam/index.html#contact-form');
  }