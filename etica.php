<?php 
    require_once 'header.php';
    require_once 'navbar.php';
?>




<section id="gestao" class="section section__3 gestao flex flex--a-center flex--j-center text-center" style="padding-top:130px">
    <div class="section__center">
        <div class="section__title servicos__title text-center">
            <h1 style="margin-bottom:50px">Política de Integridade e Ética</h1>
            <embed src="Guia_etico-ecrown.pdf" type="application/pdf" width="100%" height="600px" />
        </div>
    </div>
</section>
<section id="contato" class="section__2 contato flex flex--a-center flex--j-center" style="background:#12243d">
<div class="section__center contato__center">    
<div class="contato__form" style="min-width:300px">
<div class="form__h2 text-center">
                    <h1>Denuncie</h1>
                </div>
        <div class="form__content">
            <form id="formEtica" method="post">
                <textarea type="text" id="form__mensagem" name="message" class="form__input" placeholder="Mensagem"></textarea>
                <br>
                <button class="form__button" id="btnEticaForm" type="button" onclick="sendEtica()" value="Submit">Enviar</button>
                <div id="contato__form-load"></div>
            </form>
        </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php' ?>