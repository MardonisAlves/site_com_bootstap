

<?php
require_once('class.phpmailer.php');
include("class.smtp.php");

$mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug  = 2;                     
$mail->SMTPAuth   = TRUE;                 
$mail->SMTPSecure = "tls";                 
$mail->Host       = "mx1.hostinger.com.br";    
$mail->Port       = 2525;                 
$mail->Username   = 'contato@donyweb.esy.es';  
$mail->Password   = 'jk8yup02';           
$mail->AltBody    = "<body><h1>PHP MAIL</h1></body>";
$gmail = utf8_decode($_POST['email']);
$mail->SetFrom('contato@donyweb.esy.es','Minha Enquete');
$assunto = utf8_decode($_POST['assunto']);
$mail->Subject    = $assunto;
$message = utf8_decode($_POST['message']);
$mail->MsgHTML("   
<body bgcolor='gray'><h1>PHP MAIL</h1>
 <table border=0>
<tr>
 <td>E-mail</td><td>$gmail</td>
</tr>
<tr>
 <td>Assunto</td><td>$assunto</td>
</tr>
 <tr>
 <td>Menssagem</td><td>$message</td>
 </tr>
 </table>
</body>");
$mail->AddReplyTo($gmail);
$mail->AddAddress('mardonisgp@gmail.com');//destinario
//$mail->AddAttachment("tete.php");      // aqui colocamos (imagens,pdf,zip.)
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: ../contato.html');
  echo "Message sent!";
}

?>

