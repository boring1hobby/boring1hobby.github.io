<?php
// Inclua o arquivo PHPMailerAutoload.php do PHPMailer
require 'C:\Users\Íris\Desktop\TESTES HTML CSS\css4\PHPMailer-master\src/PHPMailer.php';
require 'C:\Users\Íris\Desktop\TESTES HTML CSS\css4\PHPMailer-master\src/SMTP.php';
require 'C:\Users\Íris\Desktop\TESTES HTML CSS\css4\PHPMailer-master\src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Crie uma instância do PHPMailer
$mail = new PHPMailer();

// Configuração do servidor SMTP (Exemplo para o Gmail)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Servidor SMTP do Gmail
$mail->SMTPAuth = true;
$mail->Username = 'seu_email@gmail.com'; // Seu e-mail Gmail
$mail->Password = 'sua_senha'; // Sua senha do Gmail
$mail->SMTPSecure = 'ssl'; // Use 'tls' se estiver usando TLS
$mail->Port = 465; // Porta para SSL é 465, para TLS é 587

// Configuração do remetente e destinatário
$mail->setFrom('seu_email@gmail.com', 'Seu Nome'); // Endereço de e-mail do remetente e nome
$mail->addAddress('destinatario@example.com', 'Nome Destinatário'); // Endereço de e-mail do destinatário e nome (opcional)

// Conteúdo do e-mail
$mail->isHTML(false); // Defina como true se o conteúdo for HTML
$mail->Subject = 'Assunto do e-mail';
$mail->Body = 'Corpo do e-mail';

// Enviar o e-mail
if ($mail->send()) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
?>