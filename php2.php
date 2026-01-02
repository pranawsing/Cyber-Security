<?php
$to = "";
$subject = "Email Spoofing Test";
$txt = "This is Email Spoofing";
$headers = "From: ";
mail ($to, $subject, $txt, $headers);

?>
