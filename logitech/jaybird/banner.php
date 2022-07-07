<!-- Demo styles -->
<style>
   html,
   body {
      position: relative;
      height: 100%;
   }

   .swiper-container {
      width: 100%;
      height: 100%;
      max-height: 620px;
      height: 620px;
   }

   .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
   }

   .swiper-text{
      display: grid;
      align-items: flex-start;
      align-content: center;
      height: 100%;
      max-width: 1140px;
      text-align: left;
      margin: 0 auto;
      grid-auto-rows: 80px;
   }

   .swiper-slide-01{
      background-image: url('img/banner/slider-jaybird-vista.jpg');
      background-position: center;
      background-size: cover;
      color: white;
   }

   .swiper-slide-02{
      background-image: url('img/banner/slider-jaybird-X4-corrigido.jpg');
      background-position: center;
      background-size: cover;
      color: white;
   }

   .swiper-text img{
      margin-left: 0px;
      max-height: 60px;
   }

   .swiper-text button{
      height: 30px;
      padding: 25px 80px;
      background: #fff;
      color: #222;
      text-align: center;
      border-radius: 100px;
      line-height: 1px;
      transition: all .3s ease-in-out;
   }
</style>

<!-- Swiper -->
<div class="swiper-container">
   <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide-01">
         <div class="swiper-text">
            <img src="img/banner/Vista-Jaybird-branco.png" alt="Jaybird Vista">
            <div class="text">
               <h2>NUNCA FIQUE QUIETO</h2>
               <h3>Liberdade Incomparável</h3>
            </div>
            <a href="https://www.logitechstore.com.br/fone-de-ouvido-bluetooth-jaybird-vista"><button type="button" class="botao">Saiba Mais</button></a>
         </div>
      </div>
      <div class="swiper-slide swiper-slide-02">
         <div class="swiper-text">
            <img src="img/banner/X4-jaybird.png" alt="Jaybird X4">
            <div class="text">
               <h2>INDEPENDENTE DO CLIMA</h2>
               <h3>Versatilidade Robusta</h3>
            </div>
            <a href="https://www.logitechstore.com.br/jaybird-x4-sport-bluetooth-preto"><button type="button" class="botao">Saiba Mais</button></a>
         </div>
      </div>
   </div>
   <!-- Add Pagination -->
   <div class="swiper-pagination"></div>
</div>

   <?php 
        $url_atual = "//$_SERVER[HTTP_HOST]";
        $url_request = "$_SERVER[REQUEST_URI]";
   ?>

  <!-- Swiper JS -->
  <script src="<?php echo $url_atual.$url_request ?>js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>