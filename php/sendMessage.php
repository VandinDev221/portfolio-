<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Função para sanitizar a entrada (evitar XSS e injeção de HTML)
    function sanitize_input($data) {
        return htmlspecialchars(trim($data));
    }

    // Sanitizando e validando os campos
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $message = sanitize_input($_POST['message']);

    // Validação do nome
    if (empty($name)) {
        echo "O nome é obrigatório.";
        exit;
    }

    // Validação do e-mail
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um e-mail válido.";
        exit;
    }

    // Validação da mensagem
    if (empty($message)) {
        echo "A mensagem não pode estar em branco.";
        exit;
    }

    // Definindo os parâmetros do e-mail
    $to = "seuemail@dominio.com"; // Substitua pelo seu e-mail
    $subject = "Mensagem de Contato - Portfólio";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Corpo do e-mail
    $body = "<h2>Mensagem de Contato</h2>";
    $body .= "<p><strong>Nome:</strong> " . $name . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $body .= "<p><strong>Mensagem:</strong> " . nl2br($message) . "</p>";

    // Enviando o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
}
?>
