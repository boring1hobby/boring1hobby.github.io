<?php
// Conectar ao banco de dados (substitua as informações do banco de dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Inserir os dados na base de dados
$sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";

    // Redirecionar com base no idioma atual
    if ($_SERVER['REQUEST_URI'] === '/index-en.html') {
        echo "<script>redirectToLanguagePage('en');</script>";
    } elseif ($_SERVER['REQUEST_URI'] === '/index-pt.html') {
        echo "<script>redirectToLanguagePage('pt');</script>";
    }

    exit; // Certifique-se de sair após o redirecionamento
} else {
    echo "Erro ao enviar a mensagem: " . $conn->error;
}