
<?php
    require("class.phpmailer.php");

    $mail = new PHPMailer();
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.e-crowngroup.com"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Autenticação
    $mail->Username = 'log@e-crowngroup.com'; // Usuário do servidor SMTP
    $mail->Password = 'IAS_#2016'; // Senha da caixa postal utilizada


    $mail->From = "noreply@e-crowngroup.com"; 
    $mail->FromName = "E-CROWN Contato Site ";


    $mail->AddAddress('contato@e-crowngroup.com', 'Contato');
    $mail->AddAddress('eduardo.silva@e-crowngroup.com', 'Eduardo Silva');
	$mail->AddAddress('mkt@e-crowngroup.com', 'André Mariano');
    $mail->AddAddress('dev@e-crowngroup.com', 'Desenvolvimento');
	$mail->AddAddress('web@e-crowngroup.com', 'Desenvolvimento');
	
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

    foreach ($_REQUEST as $key => $value)
	{
        $mensagem .= "<p><b>".$key."</b>: ".$value."</p>";
	}

    $mail->Subject  = "E-crown - Formulário Trabalhe conosco"; // Assunto da mensagem
    $mail->Body = $mensagem;

    $enviado = $mail->Send();


    header("Location: index.php");
?>