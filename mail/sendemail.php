<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['id_rdv'];
  $email = $_POST['email'];
  $files = $_FILES['file'];
            $filetmp = $files['tmp_name'];/*chemin*/
            $filename= $files['name'];/*nom*/
            $fileext=explode('.',$filename);
            $filecheck = strtolower(end($fileext));
            $fileextstored = array('png','jpg','pdf');
            if (in_array($filecheck,$fileextstored)) {
              $distinationfile='resultats/'.$filename;
              move_uploaded_file($filetmp, $distinationfile);}
             $file_to_attach=$distinationfile;

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'omarsen6@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'x.exp(x)+ln(x+2y)'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('omarsen6@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    $mail->AddAttachment( $file_to_attach );
    $mail->isHTML(true);
    $mail->Subject = "Laboratoire d'Analyses Médicales";
    $mail->Body = "Le Résultat du votre RDV ";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>le résultat a été enovoyé.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
