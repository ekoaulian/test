<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    if(isset($_POST['email_name'])) {

        include '../config/koneksi.php';

        // menyeleksi data user dengan username dan password yang sesuai
        $verifikasi = mysqli_query($koneksi,"select email from user where email = '".$_POST['email_name']."'");

        // menghitung jumlah data yang ditemuk
        $data = mysqli_fetch_assoc($verifikasi);

        if (!empty($data))
        {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'Mautauaja@gmail.com';                 // SMTP username
            $mail->Password = 'Anjay-_-';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('Mautauaja@gmail.com');
            $mail->addAddress($_POST['email_name']);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            
            $mail->Subject = 'Selamat Anda Berhasil Mendaftar';
            $mail->Body    = 'link blog - http://hasil-ngampus.blogspot.com/';

            $mail->send();
            echo "Berhasil Dikirim";
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
        }
        else 
        {
            echo "data tidak ditemukan";
        }
    } else {
        echo "gagal";

    }
?>