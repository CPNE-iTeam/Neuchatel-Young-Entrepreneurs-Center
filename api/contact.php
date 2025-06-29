<?php

$subject = "Contact NYEC";
$message = "E-Mail : " . $_POST["mail"] . "----------" . $_POST["message"];
$to = "julien@rmbi.ch";

mail($to, $subject, $message);

header("location: ../");