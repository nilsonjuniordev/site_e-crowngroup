<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<meta https-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="E-crownGroup">
	<meta name="keywords" content="e-crown, ecommerce, ux, wacom">
	<title>E-crowngroup</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="css/fale.css" rel="stylesheet">
	<link href="css/hover.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="https://imgur.com/37fIOte.png" />

	<!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- Global site tag (gtag.js) - Google Ads: 807781316 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-807781316"></script>
	
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-807781316');
	</script>
	
	<!-- Event snippet for Acesso página de contato - E-Crown conversion page -->
	<script>
		gtag('event', 'conversion', {
			'send_to': 'AW-807781316/DSjdCM7e4cwBEMSHl4ED'
		});
	</script>

</head>
<script>
	$(document).on('click', '.browse', function() {
		var file = $(this).parent().parent().parent().find('.file');
		file.trigger('click');
	});
	$(document).on('change', '.file', function() {
		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});
	$(function() {
		menu = $('nav ul');
		$('#openup').on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
		$(window).resize(function() {
			var w = $(this).width();
			if (w > 480 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
		$('nav li').on('click', function(e) {
			var w = $(window).width();
			if (w < 480) {
				menu.slideToggle();
			}
		});
		$('.open-menu').height($(window).height());
	});
</script>

<style>
	.button{
		padding: 10px 60px;
		background-color: #00bcdf;
		font-weight: 400;
		font-size: 16px;
		border-radius: 100px;
		margin-top: 20px;
		color: black;
		margin-bottom: 20px;
	}
</style>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNFT7QV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<nav class='cf'>
		<ul class='cf'>
			<li>
				<a href="empresa">Nossa empresa</a>
			</li>
			<li>
				<a href="trabalhe">Trabalhe Conosco</a>
			</li>
			<li>
				<a href="fale">Contato</a>
			</li>
			<li>
				<a href="index">Home</a>
			</li>
			<li>
				<a href="ux">UX</a>
			</li>
			<li>
				<a href="presença">Presença Digital</a>
			</li>
			<li>
				<a href="marketplace">MarketPlaces</a>
			</li>
			<li>
				<a href="cases">Cases</a>
			</li>
			<li>
				<a href="#">United States</a>
			</li>
		</ul>
		<a href='#' id='openup'><img src="https://imgur.com/9SxaF6T.png" alt="logo e-crown - fullcommerce" width="150px" class="img img-responsive" style="margin-left: 10px;">
	</nav>
	<div class="container background2">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-xs-5">
				<div class="logo">
					<a href="www.e-crowngroup.com.br"><img src="https://imgur.com/9SxaF6T.png" alt="logo e-crown - fullcommerce" class="img img-responsive pull-right"></a>
				</div>
			</div>
			<div class="col-md-9 col-lg-7 col-xs-7">
				<div class="menu2">
					<ul>
						<li>
							<a href="empresa">Full Commerce</a>
						</li>
						<li>
							<a href="ux">UX</a>
						</li>
						<li>
							<a href="presença">Presença Digital</a>
						</li>
						<li>
							<a href="marketplace">MarketPlaces</a>
						</li>
						<li>
							<a href="cases">Cases</a>
						</li>
						<li>
							<a href="fale">Contato</a>
						</li>
						<li>
							<a href="#"><img alt="logo eua - fullcommerce" src="https://imgur.com/TLLbf61.png" width="25px"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-0 col-lg-2 col-xs-0"></div>
		</div>
	</div>
	<div class="container-fluid background3">
		<div class="row">
			<div class="col-lg-12 banner1 margin-top">
				<div class="text1">
					<h1><span style="color:#fff;">Entre em </span><span style="color:#1cbbdd;"> Contato</span></h1>
				</div>
				<div class="slogan  slideInUp animated">
					<h3>Nós sabemos como fazer</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container background8">
		<div class="text6">
			<h1>Nos mande<br><span style="color:#a6aab2;">uma mensagem</span></h1>
		</div>
	</div>
	<div class="container background9">
		<div class="row background10">
			<form method="post" action="mensagem" id="formContact">
				<div class="col-lg-1 col-md-1 col-xs-0"></div>
				<div class="col-lg-5 col-md-5 col-xs-12">
					<div class="form-group">
						<label for="text"><span style="font-size: 15px; color:#a6aab2;">Nome</span><br></label>
						<input type="text" class="form-control" name="Nome" id="Nome" required="required"/>
					</div>
					<div class="form-group texto">
						<label for="empresa"><span style="font-size: 15px; color:#a6aab2;">Nome da empresa</span><br></label>
						<input type="text" class="form-control" id="Empresa" name="Empresa" />
					</div>
					<div class="form-group">
						<label for="empresa"><span style="font-size: 15px; color:#a6aab2;">Digite aqui sua mensagem</span><br></label>
						<input type="text" class="form-control" id="mensage" name="mensage" required="required"/>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-xs-12">
					<div class="form-group">
						<label for="tel"><span style="font-size: 15px; color:#a6aab2;">Telefone</span><br></label>
						<input type="tel" class="form-control" id="Telefone" name="Telefone" required="required"/>
					</div>
					<div class="form-group">
						<label for="email"><span style="font-size: 15px; color:#a6aab2;">E-mail</span><br></label>
						<input type="email" class="form-control" id="Email" name="Email" required="required"/>
					</div>
					<div class="form-group">
						<input class="button"  type="submit" value="Enviar">
						<div class="g-recaptcha" data-sitekey="6LcLy6kZAAAAAPqcN3V3e-8fXR2i_PoU7xP_HlY1" ></div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-0"></div>
			</form>
		</div>
	</div>
	<div class="container background20">
		<div class="row background21">
			<div class="text12">
				<div class="col-lg-1 col-md-1 col-xs-0"></div>
				<div class="col-lg-5 col-md-5 col-xs-0">
					<p><strong>Matriz</strong><br>R. Gomes de Carvalho, 1356 - 3º Andar<br>Vila Olímpia, São Paulo - SP </p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d768.677726119771!2d-46.6322921685056!3d-23.587540066490593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a86586f005ad3ac!2sE-Crown+Group!5e0!3m2!1spt-BR!2sbr!4v1501772049117" width="100%" height="300" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen></iframe><br><br>
					<h4 style="text-align: left;">
						<img alt="" src="https://i.imgur.com/OWwcSW4.png">
						<a href="tel:+551133758998" style="color: white; text-decoration: none;">11 3375.8998 / </a>
						<a href="tel:+5511995851507" style="color: white; text-decoration: none;">11 99585.1507</a>
						<br>
						<img alt="" src="https://i.imgur.com/Hf9UOlN.png">
						<a href="mailto:eduardo.silva@e-crowngroup.com" style="text-decoration: none; color: white;">
							eduardo.silva@e-crowngroup.com
						</a>
					</h4>
				</div>
				<div class="col-lg-5 col-md-5 col-xs-0">
					<p><strong>Filial</strong><br>Avenida cem, s/n tims<br> Serra - ES</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3744.316593343355!2d-40.303729584562475!3d-20.204161052111758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb818ac57f5942b%3A0xccbfa4235dcd21ce!2sAv.+Cem+-+TIMS%2C+Serra+-+ES!5e0!3m2!1spt-BR!2sbr!4v1503426488485" width="100%" height="300" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen></iframe>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-0"></div>
			</div>
		</div>
	</div>
	<div class="container-fluid background13">
		<div class="container background14">
			<div class="col-lg-2 col-md-2 col-xs-12">
				<div class="text7">
					<p>Navegação</p>
					<ul class="list-group">
						<li><a href="index">Home<br></a></li>
						<li><a href="ux">UX (User Experience) </a></li>
						<li><a href="cases">Cases<br></a></li>
						<li><a href="presença">Presença Digital<br></a></li>
						<li><a href="marketplace">Market Place</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-12">
				<div class="text7">
					<p>Empresa</p>
					<ul class="list-group">
						<li><a href="empresa">Nossa Empresa<br></a></li>
						<li><a href="trabalhe">Trabalhe Conosco<br></a></li>
						<li><a href="fale">Contato<br></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-12">
				<div class="text7">
					<h4>Atendimento</h4>
					<h1>
						+55 11 3375.8998<br>
						+55 11 99585.1507<br>
						eduardo.silva@e-crowngroup.com
					</h1>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="img2">
					<a href="https://pt-br.facebook.com/ecrowngroup/"><img src="https://imgur.com/TKxQEJs.png" alt="facebook - fullcommerce" class="img-responsive pull-right hvr-grow-shadow" width="250px"></a>
				</div>
				<div class="img3">
					<img src="https://imgur.com/MXb7SRC.jpg" width="70px" alt="logo abcomm - fullcommerce" class="img-responsive  hvr-grow-shadow">
				</div>
				<div class="img4">
					<img src="https://seeklogo.com/images/F/Fundacao_Abrinq-logo-EBFBD3FD0A-seeklogo.com.png" alt="logo abrinq - fullcommerce" width="110px" class="img-responsive  hvr-grow-shadow">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid background16"></div>
	<div class="container-fluid background17"></div>
	<div class="container-fluid background18">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-xs-8">
					<div class="text8">
						<h1>Copyright © 2020 | E-Crown Group</h1>
					</div>
				</div>
				<div class="col-lg-7 col-md-3 col-xs-0">
				</div>
				<div class="col-lg-2 col-md-3 col-xs-4">
					<div class="text8">
						<h1>United States</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
</body>

</html>