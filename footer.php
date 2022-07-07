
    <section id="contato" class="section__2 contato flex flex--a-center flex--j-center">
    <div class="section__center contato__center">        
        <div class="contato__col">
            <div class="contato__form">
                <div class="form__h2 text-center">
                    <h2>Mantenha contato</h2>
                </div>
                <div class="form__content">
                    <form id="contato__form" method="post">
                        <input type="text" id="form__nome" name="nome" class="form__input" placeholder="Nome" required>
                        <input type="email" id="form__email" name="email" class="form__input" placeholder="E-mail" required>
                        <input type="phone" id="form__telefone" name="telefone" class="form__input" placeholder="Telefone" required>
                        <input type="text" id="form__empresa" name="empresa" class="form__input" placeholder="Empresa">
                        <textarea type="text" id="form__mensagem" name="mensagem" class="form__input" placeholder="Mensagem"></textarea>
                        <p><small>* Seu email não será publicado. Nós prometemos</small></p>
                        <br>
                        <br>
                        <button class="form__button" id="contato__form-submit" type="submit" value="Submit">Enviar</button>
                        <div id="contato__form-load"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contato__col">
            <div class="dados">
                <div class="section__title blog__title">
                    <h2>Dados de contato</h2>
                    <h1>Vamos nos unir para tornar seu produto melhor</h1>
                    <img data-src="./img/line.svg" alt="" class="line lozad">
                </div>
                <div class="dados__endereco">
                    Escritório Administrativo<br>
                    Avenida Presidente Juscelino Kubitschek, 2041 <br>
                    Torre D - 13º Andar<br>
                    Vila Olímpia, São Paulo, 04543-011<br>
                </div>
                <div class="dados__tel">
                    <a href="tel:+551133758998">+55 11 3375.8998</a><br>
                    <a href="tel:+5511995851507">+55 11 99585.1507</a><br>
                    <a href="mailto:eduardo.silva@e-crowngroup.com">eduardo.silva@e-crowngroup.com</a>
                </div>
                <div class="dados__social">
                    <img data-src="./img/logo__facebook.svg" alt="" class="icon__social lozad">
                    <img data-src="./img/logo__instagram.svg" alt="" class="icon__social lozad">
                </div>
                <div style="text-align:center;font-size:.8em;padding-top:25px;">
                    <a href="/etica.php">Política de Integridade e Ética</a>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div id="whatsapp">
        <a class="whatsapp" href="//api.whatsapp.com/send?phone=5511995851507&amp;text=Ol%C3%A1%2C%20venho%20do%20site%20e-crowngroup.com%3B%20"> <svg viewBox="0 0 800 800"><path d="M519 454c4 2 7 10-1 31-6 16-33 29-49 29-96 0-189-113-189-167 0-26 9-39 18-48 8-9 14-10 18-10h12c4 0 9 0 13 10l19 44c5 11-9 25-15 31-3 3-6 7-2 13 25 39 41 51 81 71 6 3 10 1 13-2l19-24c5-6 9-4 13-2zM401 200c-110 0-199 90-199 199 0 68 35 113 35 113l-20 74 76-20s42 32 108 32c110 0 199-89 199-199 0-111-89-199-199-199zm0-40c133 0 239 108 239 239 0 132-108 239-239 239-67 0-114-29-114-29l-127 33 34-124s-32-49-32-119c0-131 108-239 239-239z"></path></svg> <span> WhatsApp</span> </a>
    </div>
</footer>

<style>.grecaptcha-badge { visibility: hidden; }</style>

<!-- Recaptch -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/three.js/88/three.min.js" integrity="sha512-O/Ngu/up/cPGCosSOUihbvvEyO7Ngiyin9GkQ6JIAA4Eb7XxhZDccp4xE6conGtCu45YmjCA0ibRnXmCBHXn2Q==" crossorigin="anonymous"  defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"  defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10.12.6/dist/sweetalert2.all.min.js" defer></script>



<!-- GoAdopt -->
<script src="//tag.goadopt.io/injector.js?website_code=2ff74d53-59e1-4ea1-b3a6-9c5f7aeafbe9" class="adopt-injector" async></script>
<script>window.adoptHideAfterConsent = true;</script>

<script src="<?php echo $url ?>/js/script.min.js?v=2.3" defer></script>
<script src="<?php echo $url ?>/js/wave.js" defer></script>
</html>