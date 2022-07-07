<?php

require 'header.php';
require '../produtos.php';
require '../navbar.php';
require 'banner.php';
require 'content.php';

echo '<section id="produtos" style="padding-top:100px"><ul id="produtos-list"><div id="produtos-mensagem"></div>';    
for ($i=0; $i < 20; $i++) { 
    require '../product-loading.php';
}
echo '</ul></section>';

require 'video.php';
require '../footer.php';
?>