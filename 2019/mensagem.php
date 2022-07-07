<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E-crownGroup">
    <meta name="keywords" content="e-crown, ecommerce, ux, wacom">
    <title>E-crowngroup</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/fale.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://imgur.com/37fIOte.png" />

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Global site tag (gtag.js) - Google Ads: 807781316 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-807781316"></script>

</head>
<script>
    $(document).on('click', '.browse', function() {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
    $(function() {
        menu = $('nav ul');
        $('#openup').on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function() {
            var w = $(this).width();
            if (w > 480 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
        $('nav li').on('click', function(e) {
            var w = $(window).width();
            if (w < 480) {
                menu.slideToggle();
            }
        });
        $('.open-menu').height($(window).height());
    });
</script>

<body>

    <nav class='cf'>
        <a href='#' id='openup'><img src="https://imgur.com/9SxaF6T.png" alt="logo e-crown - fullcommerce" width="150px" class="img img-responsive" style="margin-left: 10px;">
    </nav>

    <div class="container background2">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xs-5">
                <div class="logo">
                    <a href="www.e-crowngroup.com.br"><img src="https://imgur.com/9SxaF6T.png" alt="logo e-crown - fullcommerce" class="img img-responsive pull-right"></a>
                </div>
            </div>
            <div class="col-md-9 col-lg-7 col-xs-7">
                <div class="menu2">
                    <ul>
                        <li>
                            <a href="empresa">Full Commerce</a>
                        </li>
                        <li>
                            <a href="ux">UX</a>
                        </li>
                        <li>
                            <a href="presença">Presença Digital</a>
                        </li>
                        <li>
                            <a href="marketplace">MarketPlaces</a>
                        </li>
                        <li>
                            <a href="cases">Cases</a>
                        </li>
                        <li>
                            <a href="fale">Contato</a>
                        </li>
                        <li>
                            <a href="#"><img alt="logo eua - fullcommerce" src="https://imgur.com/TLLbf61.png" width="25px"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-0 col-lg-2 col-xs-0"></div>
        </div>
    </div>

    <div class="container-fluid background3">
        <div class="row">
            <div class="col-lg-12 banner1 margin-top">
                <?php

                error_reporting(E_ALL ^ E_DEPRECATED);
                require("class.phpmailer.php");

                $email;
                $captcha;
                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                }
                if (isset($_POST['g-recaptcha-response'])) {
                    $captcha = $_POST['g-recaptcha-response'];
                }
                if (!$captcha) {
                    echo '<div class="slogan  slideInUp animated"><h3>Mensagem não enviada, check o captcha no formulário!</h3></div>';
                    exit;
                }

                $secretKey = "6LcLy6kZAAAAAFhgP-rOuIaGYZSdp5yB26KxhlWJ";
                $ip = $_SERVER['REMOTE_ADDR'];

                // post request to server
                $url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                $response = file_get_contents($url);
                $responseKeys = json_decode($response, true);

                if ($responseKeys["success"]) {
                    $mail = new PHPMailer();
                    $mail->IsSMTP(); // Define que a mensagem será SMTP
                    $mail->Host = "smtp.e-crowngroup.com"; // Endereço do servidor SMTP
                    $mail->SMTPAuth = true; // Autenticação
                    $mail->Username = 'log@e-crowngroup.com'; // Usuário do servidor SMTP
                    $mail->Password = 'IAS_#2016'; // Senha da caixa postal utilizada


                    $mail->From = "noreply@e-crowngroup.com";
                    $mail->FromName = "E-CrownGroup - contato site";


                    $mail->AddAddress('contato@e-crowngroup.com', 'Contato');
                    $mail->AddAddress('eduardo.silva@e-crowngroup.com', 'Eduardo Silva');
                    $mail->AddAddress('mkt@e-crowngroup.com', 'André Mariano');
                    $mail->AddAddress('dev@e-crowngroup.com', 'Desenvolvimento');
                    $mail->AddAddress('web@e-crowngroup.com', 'Lucas Forteza');

                    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
                    $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

                    $mensagem = "";
                    foreach ($_REQUEST as $key => $value) {
                        $mensagem .= "<p><b>" . $key . "</b>: " . $value . "</p>";
                    }

                    $mail->Subject  = "E-CrownGroup - contato site"; // Assunto da mensagem
                    $mail->Body = $mensagem;
                    $enviado = $mail->Send();

                    echo '<div class="slogan  slideInUp animated"><h3>Mensagem enviada com sucesso, entraremos em contato e breve!</h3></div>';
                } else {
                    echo '<div class="slogan  slideInUp animated"><h3>Mensagem não enviada, tente novamente!</h3></div>';
                }

                ?>
            </div>
        </div>
    </div>


    <div class="container-fluid background13">
        <div class="container background14">
            <div class="col-lg-2 col-md-2 col-xs-12">
                <div class="text7">
                    <p>Navegação</p>
                    <ul class="list-group">
                        <li><a href="index">Home<br></a></li>
                        <li><a href="ux">UX (User Experience) </a></li>
                        <li><a href="cases">Cases<br></a></li>
                        <li><a href="presença">Presença Digital<br></a></li>
                        <li><a href="marketplace">Market Place</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-12">
                <div class="text7">
                    <p>Empresa</p>
                    <ul class="list-group">
                        <li><a href="empresa">Nossa Empresa<br></a></li>
                        <li><a href="trabalhe">Trabalhe Conosco<br></a></li>
                        <li><a href="fale">Contato<br></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-12">
                <div class="text7">
                    <h4>Atendimento</h4>
                    <h1>
                        +55 11 3375.8998<br>
                        +55 11 99585.1507<br>
                        eduardo.silva@e-crowngroup.com
                    </h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="img2">
                    <a href="https://pt-br.facebook.com/ecrowngroup/"><img src="https://imgur.com/TKxQEJs.png" alt="facebook - fullcommerce" class="img-responsive pull-right hvr-grow-shadow" width="250px"></a>
                </div>
                <div class="img3">
                    <img src="https://imgur.com/MXb7SRC.jpg" width="70px" alt="logo abcomm - fullcommerce" class="img-responsive  hvr-grow-shadow">
                </div>
                <div class="img4">
                    <img src="https://seeklogo.com/images/F/Fundacao_Abrinq-logo-EBFBD3FD0A-seeklogo.com.png" alt="logo abrinq - fullcommerce" width="110px" class="img-responsive  hvr-grow-shadow">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid background18">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-8">
                    <div class="text8">
                        <h1>Copyright © 2020 | E-Crown Group</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-3 col-xs-0">
                </div>
                <div class="col-lg-2 col-md-3 col-xs-4">
                    <div class="text8">
                        <h1>United States</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
</body>
</html>