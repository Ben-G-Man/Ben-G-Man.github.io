<?php
  if (isset($POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "radiosoul99@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a query from " .$firstname." ".$lastname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent")
  }
?>
