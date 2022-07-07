
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
	$mail->AddAddress('mkt@e-crowngroup.com', 'Renato Pessetto');
    
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

    foreach ($_REQUEST as $key => $value)
	{
        $mensagem .= "<p><b>".$key."</b>: ".$value."</p>";
	}

    $mail->Subject  = "E-crown - E-mail Formulário Newsletter"; // Assunto da mensagem
    $mail->Body = $mensagem;

    $enviado = $mail->Send();


    header("Location: trabalhe-obrigado.html");
?>