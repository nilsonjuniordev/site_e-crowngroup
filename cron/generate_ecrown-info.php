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
        
        //Lista todos os produtos
        $prod_list = $proxy->catalogProductList($sessionId);    
        $prod_list_res = json_decode(json_encode($prod_list), true);

        //Pega os sku somente dos simples
        foreach ($prod_list_res as $key => $value) {
            if($prod_list_res[$key]['type']){
                $prod_sku[$key]['product_id'] = $prod_list_res[$key]['product_id'];
                $prod_sku[$key]['sku'] = $prod_list_res[$key]['sku'];
            }
        }

        
        //Pega as infos dos produtos simples
        foreach ($prod_sku as $key => $value) {
            $attributes = new stdclass();
            $attributes->attributes = array('name', 'visibility', 'url_path', 'status');
            $prod_list_info[] = $proxy->catalogProductInfo($sessionId, $prod_sku[$key]['product_id'], '1', $attributes); 
        }        
        $prod_list_info_res = json_decode(json_encode($prod_list_info), true);

        //Fecha conexão
        $proxy->endSession($sessionId);  

        $prod_list_info_res_json = json_encode($prod_list_info_res);
        $prod_json_info = fopen('json-ecrown/logitech-info-'.$date_format.'.json', 'w');
        fwrite($prod_json_info, $prod_list_info_res_json);
        fclose($prod_json_info);
    }