<?php

function category_filter($category){
    //$proxy = new SoapClient('https://www.logitechstore.com.br/api/v2_soap/?wsdl'); // TODO : change url
    $proxy = new SoapClient("https://www.logitechstore.com.br/api/v2_soap/?wsdl",
        array(
            "trace" => 1,
            "location" => "https://www.logitechstore.com.br/api/v2_soap/",
            'exceptions' => 1,
            "stream_context" => stream_context_create(
                array(
                    'ssl' => array(
                        'verify_peer'       => false,
                        'verify_peer_name'  => false,
                    )
                )
            )
        ) 
    );



    $sessionId = $proxy->login('usu_consulta', '70PZu*gneTxj70PZu*gneTxj'); // TODO : change login and pwd if necessary
    $prod_list = $proxy->catalogCategoryAssignedProducts($sessionId, $category);
    $prod_list = json_decode(json_encode($prod_list), true);

    if(empty($prod_list)){
        return 'Sem produto ou categoria';
    }else{
        $result = array();
        foreach ($prod_list as $key => $value) {
            $product_id = $value['product_id'];
            $attributes = new stdclass();
            $attributes->attributes = array('name', 'short_description', 'visibility', 'url_path', 'price', 'group_price', 'special_price', 'tier_price', 'group_price', 'minimal_price', 'status');
            $attributes->additional_attributes = array('desconto_avista','color', 'outlet_logitech');

            $product_info_list = $proxy->catalogProductInfo($sessionId, $product_id, '1', $attributes); 
            $product_media_list = $proxy->catalogProductAttributeMediaList($sessionId, $product_id); 

            $product_attribute = $product_info_list->additional_attributes;
            $product_info_array = get_object_vars($product_info_list);

            $product_attribute_arr = array();
            for ($i=0; $i < count($product_attribute); $i++) { 
                $value = json_decode(json_encode($product_attribute[$i]), true);
                $product_attribute_arr['attributes'][$value['key']] = $value['value'];
            }

            if( in_array('119', $product_info_array['categories']) AND $product_info_array['status'] == '1' AND $product_info_array['visibility'] == '4'){
                //Pega todos os valores valores
                $add_product_array = array( 
                    "id" => $product_info_list->product_id,                    
                    "name" => $product_info_list->name,
                    "sku" => $product_info_list->sku,
                    "price" => $product_info_list->price,
                    "special_price" => $product_info_list->special_price,
                    "url_path" => $product_info_list->url_path,
                    "img_url" => $product_media_list[0]->url
                );

                $result_merge = array_merge($add_product_array, $product_attribute_arr);
                array_push($result, $result_merge);
            }
        }
        return $result;
    }
}



function category_block($products){
    //echo '<div class="total">Total de '.count($products).'</div>';

    for ($i=0; $i < count($products); $i++) { 
        $id = $products[$i]['id'];
        $name = $products[$i]['name'];
        $sku = $products[$i]['sku'];
        $price = $products[$i]['price'];
        $special_price = $products[$i]['special_price'];
        $img = $products[$i]['img_url'];
        $url = $products[$i]['url_path'];

        //Desconto a vista
        $desconto_avista = $products[$i]['attributes']['desconto_avista'];
        //Outlet
        $outlet_logitech = $products[$i]['attributes']['outlet_logitech'];


        //Formata o valor aplicando o desconto a vista
        $value_com_desconto = $price * ((100-$desconto_avista) / 100);     
        $value_com_desconto = floor($value_com_desconto * 100) / 100;
        $value_com_desconto = number_format($value_com_desconto, 2, ',','.');
        
        //Valor total formatado
        $value_format = number_format($price, 2, ',','.');

        //Formatar o valor com desconto especial
        $special_price = 'R$'.number_format($special_price, 2, ',','.');
        if($special_price == 'R$0,00'){$special_price = '';}

        //Valor dividido em 10X
        $value_divider = number_format(($price/10), 2, ',','.');

        //URL do valor formatado
        $url_logitech = "https://logitechstore.com.br/";
        
        ?>
         <li class="item">
                <div class="imagem">
                    <img src="<?php echo $img ?>" alt="" width="320" height="320" class="attachment-imagem-produto size-imagem-produto wp-post-image" style="z-index: 105; position: relative; width: 320px; height: 320px;">
                    <div class="imagem-produto-background" style="background-image: url('<?php echo $img ?>')"></div>
                </div>
                <div class="titulo">
                    <a href="<?php echo $url_logitech.$url ?>">
                        <h2><?php echo $name ?></h4>
                    </a>
                    <div class="preco">
						<div class="promocional">
							<span class="de"><?php echo $special_price ?></span>
							<span class="por">R$ <?php echo $value_format ?></span>
						</div>							
						<div class="parcelado">
                            <p><strong>10x</strong> de 
                            <strong>R$ <?php echo $value_divider ?></strong> sem juros</p>
						</div>							
						<div class="a-vista">
							<span>R$ <?php echo $value_com_desconto ?></span>
                            <p><?php echo $desconto_avista ?>% à vista no boleto</p>
                            <p><?php  ?></p>
						</div>
					</div>
                    <div class="botao"><a href="<?php echo $url_logitech.$url ?>" title="COMPRAR">COMPRAR</a></div>
                </div>
            </li>
        <?php
    }

}

if (!empty($_POST['category'])) {

	$category = $_POST['category'];
	$category = filter_var($category, FILTER_VALIDATE_INT);

	if ($category === false) {
		exit('Invalid Integer');
	}else{
        $products = category_filter($category);
        return category_block($products);
    }

}