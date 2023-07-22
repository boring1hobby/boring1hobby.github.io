<?php
// Mostra os errors no ecra em vez do terminal
ini_set('display_errors', 1);

// Reporta os errors todos
error_reporting(E_ALL);

// Configuração do SMTP para enviar emails
ini_set("IMAP", "	
imap.gmail.com");
ini_set("imap_port", "993");
ini_set("auth_username", "irisopi223@gmail.com");
ini_set("auth_password", "pd223caldas");
ini_set("error_logfile", "error.log");
ini_set("debug_logfile", "debug.log");
ini_set("force_sender", "XXXXXXXXX@gmail.com");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["opiniao"])) {
        echo "opiniao sem nada";
    } else {
        // variáveis
        $FROMEMAIL = '"NOME" <XXXXXXXXXXXX@gmail.com>';
        $TOEMAIL = "XXXXXXXXXXXXXX@gmail.com";
        $SUBJECT = "Nova opinião";
        $PLAINTEXT = "Uma nova opinião foi recebida:\n\n" . $_POST["opiniao"];
        $RANDOMHASH = "anyrandomhash";
        $FICTIONALSERVER = "@email.example.com";
        $ORGANIZATION = "example.com";

        $headers = "From: " . $FROMEMAIL . "\n";
        $headers .= "Reply-To: " . $FROMEMAIL . "\n";
        $headers .= "Return-path: " . $FROMEMAIL . "\n";
        $headers .= "Message-ID: <" . $RANDOMHASH . $FICTIONALSERVER . ">\n";
        $headers .= "X-Mailer: Your Website\n";
        $headers .= "Organization: $ORGANIZATION\n";
        $headers .= "MIME-Version: 1.0\n";

        // Add content type (plain text encoded in quoted printable, in this example)
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

        // Convert plain text body to quoted printable
        $message = quoted_printable_encode($PLAINTEXT);

        // Create a BASE64 encoded subject
        $subject = "=?UTF-8?B?" . base64_encode($SUBJECT) . "?=";

        echo $TOEMAIL . " . " . $subject . " . " . $message;
    }
}
?>