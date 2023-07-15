<?php
if ($_SERVER["C:\\Users\\Íris\\Desktop\\TESTES HTML CSS\\css4\\enviar_opiniao.php"] == "POST") {
    $opiniao = $_POST["opiniao"];
    $para = "pciris22@outlook.com";
    $assunto = "Nova opinião";
    $mensagem = "Uma nova opinião foi recebida:\n\n" . $opiniao;
    $headers = "From: seuemail@example.com" . "\r\n" .
        "Reply-To: seuemail@example.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $mensagem, $headers)) {
        echo "Opinião enviada com sucesso! Agradecemos sua contribuição.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar a opinião. Por favor, tente novamente mais tarde.";
    }
}
?>