<?php

    require_once 'functions.php';

    if (!$_SERVER['REQUEST_METHOD'] === 'GET') {
        exit('Invalid Request');
    }else if (!empty($_GET['json'])) {
        //Pega dados de estoque softronic
        $username = "E-CROWN-1";
        $password = "ECR1058";

        $remote_url = 'http://webservices.softronic.com.br:8092/datasnap/rest/tsm/ListaEstoqueF5';
        // Create a stream
        $opts = array(
            'http'=>array(
            'method'=>"GET",
            'header' => "Authorization: Basic " . base64_encode("$username:$password")                 
            )
        );

        //print_r(base64_encode("$username:$password"));
        $context = stream_context_create($opts);
        // Open the file using the HTTP headers set above
        $file = file_get_contents($remote_url, false, $context);

        //Data
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y H:i:s');
        $date_format = slugify($date);

        //Salva  
        $fp = fopen('json-softronic/logitech-'.$date_format.'.json', 'w');
        fwrite($fp, $file);
        fclose($fp);           
    }
