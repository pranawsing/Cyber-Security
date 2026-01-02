<?php
$to = "pranawkumar67@gmail.com";
$subject = "Email Spoofing Test";
$txt = "This is Email Spoofing";
$headers = "From: pranawsinghyui@gmail.com";
mail ($to, $subject, $txt, $headers);
?>