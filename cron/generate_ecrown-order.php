<?php

    require_once 'functions.php';

    if (!$_SERVER['REQUEST_METHOD'] === 'GET') {
        exit('Invalid Request');
    }else if (!empty($_GET['json'])) {

        //Formata data
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y H:i:s');
        $date_format = slugify($date);

        //Abre conexão            
        $proxy = new SoapClient('https://www.logitechstore.com.br/api/v2_soap/?wsdl'); // TODO : change url
        $sessionId = $proxy->login('usu_consulta', '70PZu*gneTxj70PZu*gneTxj'); // TODO : change login and pwd if necessary
        
        $filter_status = array('status'=>'Finalizado / Enviado');
        $prod_list_order_res = $proxy->salesOrderList($sessionId, $filter_status);

        //Fecha conexão
        $proxy->endSession($sessionId);  

        $prod_list_order_res_json = json_encode($prod_list_order_res);
        $prod_json_order = fopen('json-ecrown/logitech-order-'.$date_format.'.json', 'w');
        fwrite($prod_json_order, $prod_list_order_res_json);
        fclose($prod_json_order);
    }