<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));

    // Validando os campos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "<script>alert('Por favor, preencha todos os campos!'); window.history.back();</script>";
        exit();
    }

    // Validando o formato do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Por favor, insira um e-mail válido!'); window.history.back();</script>";
        exit();
    }

    // Configurações do email
    $to = "vandersongplay@gmail.com.com";  // Coloque seu e-mail aqui
    $subject = "Mensagem do Formulário de Contato";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";  // O e-mail de quem enviou a mensagem

    // Corpo do e-mail
    $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <h2>Mensagem de Contato</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensagem:</strong></p>
        <p>$mensagem</p>
    </body>
    </html>
    ";

    // Enviando o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem. Tente novamente mais tarde.'); window.history.back();</script>";
    }
}
?>
