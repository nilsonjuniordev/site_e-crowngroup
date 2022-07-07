<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require("class.phpmailer.php");


$secretKey = "6LcLy6kZAAAAAFhgP-rOuIaGYZSdp5yB26KxhlWJ";
$ip = $_SERVER['REMOTE_ADDR'];


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

$mail->AddAddress('eduardo.silva@e-crowngroup.com', 'Eduardo Silva');
$mail->AddAddress('andreia.silva@e-crowngroup.com', 'Andreia Silva');

$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

$fields = array("date", "message");
foreach ($fields as $field) {
    if(strlen(trim($_POST[$field])) <= 0) {
        echo 'Nenhum dado captado!';
        exit;
    }
    $dados[$field] = strip_tags($_POST[$field]);         
}

$mensagem = "
    <strong>Mensagem:</strong> $dados[message]<br>
    <br><br>
";

$mail->Subject  = "E-CrownGroup - Formulário Denuncie"; // Assunto da mensagem
$mail->Body = $mensagem;
$enviado = $mail->Send();

echo 'Mensagem enviada com sucesso, entraremos em contato e breve!';


?>