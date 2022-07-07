<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require("class.phpmailer.php");

$email;
$captcha;

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}else{
    echo 'Mensagem não enviada, formulário sem email';
    exit;
}

if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}else{
    echo 'Mensagem não enviada, formulário sem recaptch';
    exit;
}

if (!$captcha) {
    echo 'Mensagem não enviada, check o captcha no formulário!';
    exit;
}

$secretKey = "6LcLy6kZAAAAAFhgP-rOuIaGYZSdp5yB26KxhlWJ";
$ip = $_SERVER['REMOTE_ADDR'];

// post request to server
$url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response, true);

if ($responseKeys["success"]) {
    date_default_timezone_set('America/Sao_Paulo'); // Acerta o horário caso seu servidor caso esteja com horário diferente do seu fuso horário. Útil para seus e-mails serem enviados com as informações de datas e o horários correto

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Autenticação
    $mail->Username = 'suporte@e-crowngroup.com'; // Usuário do servidor SMTP
    $mail->Password = 'Digital#123'; // Senha da caixa postal utilizada
    $mail->From = "suporte@e-crowngroup.com";
    $mail->FromName = "E-CrownGroup - denuncie";
    $mail->SMTPSecure = 'tls'; //secure transfer enabled
    $mail->SMTPDebug = 1;
    $mail->Port = 587;
    

    $mail->AddAddress('contato@e-crowngroup.com', 'Contato');
    $mail->AddAddress('eduardo.silva@e-crowngroup.com', 'Eduardo Silva');
    $mail->AddAddress('dev@e-crowngroup.com', 'Desenvolvimento');
    $mail->AddAddress('web@e-crowngroup.com', 'Lucas Forteza');

    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

    $fields = array("nome", "email", "telefone", "empresa", "mensagem");
    foreach ($fields as $field) {
        if(strlen(trim($_POST[$field])) <= 0) {
            echo 'Nenhum dado captado!';
            exit;
        }
        $dados[$field] = strip_tags($_POST[$field]);         
    }

    $mensagem = "
        <strong>Nome:</strong> $dados[nome]<br>
        <strong>Email:</strong> $dados[email]<br>
        <strong>Telefone:</strong> $dados[telefone]<br>
        <strong>Empresa:</strong> $dados[empresa]<br>
        <strong>Mensagem:</strong> $dados[mensagem]<br>
        <br><br>
    ";

    $mail->Subject  = "E-CrownGroup - contato site"; // Assunto da mensagem
    $mail->Body = $mensagem;
    $enviado = $mail->Send();

    echo 'Mensagem enviada com sucesso, entraremos em contato e breve!';
} else {
    echo 'Mensagem não enviada, tente novamente!';
}

?>