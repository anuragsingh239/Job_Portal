<!DOCTYPE html>
<html >
<head>
       <title></title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$to=$_POST['to'];
$from=$_POST['from'];
$body=$_POST['body'];
$id=$_POST['id'];

    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username=$from;
    $mail->Password='anbawsndhqmcjbmo'; //gmail app pass
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom($to);
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject='The Subject';
    $mail->Body=$body;
    $mail->send();
    echo " <script> 
    alert('Sent Successful');
    document.location.href='apply_jobs.php';
    </script>";




?>




<!-- <button class="btn btn-success btn-lg">Back</button> -->
    
</body>
</html>