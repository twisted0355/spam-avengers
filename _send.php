<?php
if (isset($_POST["send"])) {
// Sanitization
  $namesani = filter_var(substr($_POST["name"], 0,50), FILTER_SANITIZE_STRING);
  $nameempt = empty($namesani);

  $surnamesani = filter_var(substr($_POST["surname"], 0,50), FILTER_SANITIZE_STRING);
  $surnameempt = empty($surnamesani);

  $phonesani = filter_var(substr($_POST["phone"], 0,11), FILTER_SANITIZE_STRING);
  $phoneempty = empty($phonesani);

  $emailsani = filter_var(substr($_POST["email"], 0,50), FILTER_SANITIZE_EMAIL);
  $emailempt = empty($emailsani);
  $emailvali = filter_var($emailsani, FILTER_VALIDATE_EMAIL);

  $msgsani = filter_var(substr($_POST['message'], 0,500), FILTER_SANITIZE_STRING);
  $msgempt = empty($msgsani);

// Validation
  if ($nameempt == false) {
    if ($surnameempt == false) {
      if ($phoneempty == false){
        if ($emailempt == false && $emailvali == true) {
          if ($msgempt == false) {
// Exécution
          if(!isset($to)){
            $to = "";}
            $subject = 'Message from ' . $emailvali;
            $headers = 'Mime-Version: 1.0'."\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
            $headers .= "\r\n";
            $message = 'De: ' . $namesani . "<br />";
            $message .= 'Email: ' . $emailvali . "<br />";
            $message .= "Message:<br />" . $msgsani . "<br />";
            $send = mail($to, $subject, $message, $headers);

            // Validation message send
            $mailSend = "<script>alert(\"Message send !\");</script>" ;
          }
        }
      }
    }
    //Error message surname
    else{
      $errorsurname = "<p style=\"background-color:rgba(207, 0, 15, 1);\">Invalide name</p>";
    }
  }
  //Error message name
  else{
    $errorname = "<p style=\"background-color:rgba(207, 0, 15, 1);\">invalide surname</p>";
  }
}
?>