<?php

    require_once 'functions.php';

    if (!$_SERVER['REQUEST_METHOD'] === 'GET') {
        exit('Invalid Request');
    }else if (!empty($_GET['json'])) {
        $category = $_GET['json'];
        $category = filter_var($category, FILTER_VALIDATE_INT);

        if ($category === false) {
            exit('Invalid Integer');
        }else{

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
    
            //Pega os sku
            foreach ($prod_list_res as $key => $value) {
                $prod_filter[$key]['product_id'] = $prod_list_res[$key]['product_id'];
                $prod_filter[$key]['sku'] = $prod_list_res[$key]['sku'];
                $prod_filter[$key]['type'] = $prod_list_res[$key]['type'];

                if ($prod_list_res[$key]['type'] == 'simple') {
                    $prod_sku[] = $prod_list_res[$key]['sku'];
                }
            }

            //Pega estoque dos produtos
            $prod_list_qty = $proxy->catalogInventoryStockItemList($sessionId, $prod_sku);
            $prod_list_qty_res = json_decode(json_encode($prod_list_qty), true);

            //Remove decimals 
            foreach ($prod_list_qty_res as $key => $value) {
                $prod_list_qty_res[$key]['qty'] = clean_num($prod_list_qty_res[$key]['qty']);
            }
            
            //Fecha conexão
            $proxy->endSession($sessionId);  
            
            print_r($prod_list_qty_res);

            $prod_list_qty_json = json_encode($prod_list_qty_res);
            $prod_json_qty = fopen('json-ecrown/logitech-qty-'.$date_format.'.json', 'w');
            fwrite($prod_json_qty, $prod_list_qty_json);
            fclose($prod_json_qty);

        }
    }
    


    