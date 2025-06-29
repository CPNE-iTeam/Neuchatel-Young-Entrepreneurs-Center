<?php

$subject = "Contact NYEC : " . $_POST["subject"];
$message = $_POST["message"];
$to = "julien@rmbi.ch";

mail($to, $subject, $message);

header("location: ../");