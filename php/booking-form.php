<?php
  if (isset($POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $mailTo = "radiosoul99@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "A booking inquiry was submited by " .$firstname." ".$lastname.".\n\nThey can be contacted at ".$mailFrom." or at ".$phone.".\n\nEvent details:\nEvent location: ".$location."\nEvent date: ".$date."\nFurther event details: ".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent")
  }
?>
