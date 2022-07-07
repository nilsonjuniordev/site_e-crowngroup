<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaybird - Fone de Ouvido Esportivo Bluetooth - Os fones de ouvido Bluetooth com qualidade de som premium da Jaybird, são o acessório perfeito para atletas, corredores e fãs de fitness. Descubra o porquê.</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="https://jaybirdstore.com.br/wp-content/uploads/2019/04/favicon.png" sizes="32x32" />
    <link rel="icon" href="https://jaybirdstore.com.br/wp-content/uploads/2019/04/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://jaybirdstore.com.br/wp-content/uploads/2019/04/favicon.png" />
    <meta name="msapplication-TileImage" content="https://jaybirdstore.com.br/wp-content/uploads/2019/04/favicon.png" />
    
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "../produtos.php",
                method: "POST",
                data: { category : 119 },
                dataType: "html",
                beforeSend: function(){
                    $('#produtos-mensagem').append('<h3 style="text-align: center;">Carregando produtos...</h3>');
                },
                success: function(msg) {
                    console.log(msg);
                    $('#produtos-list').html(msg);
                },
                error: function(msg){
                    console.log(msg);
                    $('#produtos-list').html(msg);
                }
            });   
        });
    </script>

    <?php 
        $url_atual = "//$_SERVER[HTTP_HOST]";
        $url_request = "$_SERVER[REQUEST_URI]";
    ?>
    <link rel="stylesheet" href="<?php echo $url_atual.$url_request ?>css/style_logitech.css">
    <link rel="stylesheet" href="<?php echo $url_atual.$url_request ?>css/styles.min.css">
    <link rel="stylesheet" href="<?php echo $url_atual.$url_request ?>css/swiper.min.css">
</head>
<body>