<?php 

if(isset($_POST['nom'])) 
{if(!empty($_POST['nom'])) {$_POST['nom']= htmlspecialchars($_POST['nom']);}}

if(isset($_POST['e-mail'])) 
{if(!empty($_POST['e-mail'])) {$_POST['e-mail']= htmlspecialchars($_POST['e-mail']);}}

if(isset($_POST['e-mail']))
{if(!empty($_POST['user_message'])) {$_POST['user_message']= htmlspecialchars($_POST['user_message']);}};

$to      = 'acerco@hotmail.fr';
$subject = 'le sujet';
$message = " NOM : ".$_POST['nom']." Correo electronico : ". $_POST['e-mail']." Mensaje : ".$_POST['user_message'];
$headers = 'From: alejandro.gil@labo-ve.fr' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();



$envoi= mail($to, $subject, $message, $headers);

if ($envoi) {?>

<p>Merci pour votre message, je vous répondrai dans le plus bref délais</p>
<a href="index.html">Retour à mon CV</a>


<?php

} else {

    ?>

   <p>Votre message n'a pas été envoyé</p>
   <?php


}



?>
