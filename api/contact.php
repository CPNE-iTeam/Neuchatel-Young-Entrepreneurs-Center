<?php

$subject = "Contact NYEC";
$message = "E-Mail : " . $_POST["mail"] . "\n----------\n\n\n\n" . $_POST["message"];
$to = "julien@rmbi.ch";

mail($to, $subject, $message);

header("location: ../");