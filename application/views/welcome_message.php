<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>App Gimnasio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url().'assets/styles/estilos.css'?>">
</head>

<body>
	<div class="o-header">
		<div class="container">
			<div class="o-header__content">
				<div class="o-header__left">
					<img id="Logo" class="a-icon a-logo__icon" src="<?=base_url().'assets/img/logo-supershake-2.png'?>">
				</div>
				<div id="contacts-container" style="display: none">
					<div>
						<div class="burger__wrapper ">
							<input type="checkbox" class="burger__toggle" id="burger-toggle"
								onchange="if (!window.__cfRLUnblockHandlers) return false; activeMenu(event)"
								data-cf-modified-91a1fee4b9117ff5aa7b5f89-="">
							<label for="burger-toggle" class="burger__button">
								<span></span>
							</label>
							<div class="burger__menu">
								<a href="#">Lorem ipsum 1</a>
								<a href="#">Lorem ipsum 2</a>
								<a href="#">Lorem ipsum 3</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-content">
		<div class="o-section-home section-first"
			style="background-image: url(<?=base_url().'assets/img/background.png'?>)">
			<div class="container">
				<h2 class="o-section-home__text-title a-text-title">Consigue tu evaluación corporal</h2>
				<ul class="m-list-reasons homepage-list">
					<li>
						<div>1.</div>Selecciona tu género
					</li>
					<li>
						<div>2.</div>Escoge tus alimentos favoritos
					</li>
					<li>
						<div>3.</div>Categoriza tu estilo de vida
					</li>
					<li>
						<div>4.</div>Entra tus medidas
					</li>
					<li>
						<div>5.</div>Consigue tu plan personalizado
					</li>
				</ul>
				<div class="o-section-home__select-gender m-select-gender">
					<div
						class="m-select-gender__button-gender a-button-gender bodyClass dietAnswer"
						>
						<div class="a-button-gender__background">
							<div class="a-button-gender__circle a-button-gender__circle--1"></div>
							<div class="a-button-gender__circle a-button-gender__circle--2"></div>
						</div>
						<div class="a-button-gender__content" onClick="selectWomen()">
							<div class="a-button-gender__circle a-button-gender__circle--3"></div>
							<img src="<?=base_url().'assets/img/woman.svg'?>" class="a-icon a-button-gender__icon __white" />
							<div class="a-button-gender__text">Mujer</div>
						</div>
					</div>
					<div class="m-select-gender__text">o</div>
					<div
						class="m-select-gender__button-gender a-button-gender--man a-button-gender bodyClass dietAnswer"
						>
						<div class="a-button-gender__background">
							<div class="a-button-gender__circle a-button-gender__circle--1"></div>
							<div class="a-button-gender__circle a-button-gender__circle--2"></div>
						</div>
						<div class="a-button-gender__content" onClick="selectMen()">
							<div class="a-button-gender__circle a-button-gender__circle--3"></div>
							<img src="<?=base_url().'assets/img/man.svg'?>" class="a-icon a-button-gender__icon __white" />
							<div class="a-button-gender__text">Hombre</div>
						</div>
					</div>
				</div>
				<div class="mt-15 mb-4">
					<div class="o-section-quiz__title uppercase">Consigue tus objetivos con nuestra Mejor Guía sobre la Dieta Keto</div>
					<div class="o-section-quiz__items">
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/checklist.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Lista de la Compra Semanal</div>
							<p class="benefits-text">No pierdas tu preciado tiempo planeando los comestibles semanales que vas a necesitar, y consigue una lista de la compra descargable para cocinar todos los platos deliciosos de tu plan personal Keto con ingredientes sencillos que puedes comprar en cualquier tienda local.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/manual.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Guía Detallada de la Dieta</div>
							<p class="benefits-text">Una guía completa con recetas Keto paso a paso específicamente diseñadas por un nutricionista profesional para ayudarte a conseguir tus objetivos a un ritmo saludable. Con esta guía, sabrás exactamente que es aceptado por la dieta Keto tanto cuando te quedas en casa como cuando decides salir a comer fuera.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/drawing.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Diseñada para ti</div>
							<p class="benefits-text">¿Confundido sobre todos los estilos existentes de dietas bajas en CHO? Deja que calculemos nosotros las calorías y CHO adecuados para ti y creemos un plan personalizado basado en tus alimentos favoritos, estilo de vida, edad, medidas y objetivos corporales.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/clock.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Preparación Rápida de Comidas</div>
							<p class="benefits-text">Recetas Keto divertidas y fáciles de seguir con información nutricional clara que hace que cocinar deje de ser una tarea y se convierta en un ansiado momento de paz. No se necesita un equipamiento de cocina especial para convertirse en un chef Keto.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/clasificacion.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Una Suscripción Para Dominarlo</div>
							<p class="benefits-text">Receive fresh recipes each month right to your favorite device while enjoying sustainable weight loss and adjust your plan based on your progress (just reach out to our support). Stay in the know with the last Keto trends with our VIP posting.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/perfil-del-usuario.svg'?>" height="80" class="pb-2" />
							<div class="m-item-quiz__text">Perfil Dietético Gratis e Instantáneo</div>
							<p class="benefits-text">Inmediatamente después de rellenar nuestro test con tu información, verás tu Índice de Masa Corporal personal (IMC) y edad metabólica. Consigue, también, recomendaciones para tu ingesta de agua y calorías diaria. Todo esto gratis.</p>
						</div>
					</div>
				</div>
				<div class="text-center mt-8 mb-8 pr-4 pl-4">
					<div onClick="irSeccionPrincipal()" id="btn-empezar" class="m-block-jumbotron__button a-button--with-gradient a-button--gigant a-button--with-icon a-button cursor-pointer"
						style="visibility: visible;">
						<a class="a-button__link">
							<span class="a-button__text uppercase">Empezar</span>
						</a>
					</div>
				</div>
			</div>
			<div class="o-footer">
				<div class="container">
					<div class="o-footer__content">
						<nav class="o-footer__nav-footer m-nav-footer">
							<div class="o-footer-links-wrap">
								<a href="#" class="m-nav-footer__item">FAQ</a>
							</div>
							<div class="o-footer-links-wrap">
								<a href="#" class="m-nav-footer__item">Condiciones Generales</a>
							</div>
							<div class="o-footer-links-wrap">
								<a href="#" target="_blank" class="m-nav-footer__item">Política de Protección de
									Datos Personales</a>
							</div>
							<div class="o-footer-links-wrap">
								<a href="#" target="_blank" class="m-nav-footer__item">Cookie policy</a>
							</div>
							<div class="o-footer-links-wrap">
								<a href="#" class="m-nav-footer__item">Contactos</a>
								<div>
						</nav>
						<div class="o-footer__logo">
							<img id="Logo" class="a-icon o-footer__icon" src="<?=base_url().'assets/img/logo-supershake-2.png'?>">
						</div>
						<div class="o-footer__copy">
							<div class="m-nav-footer__item">2021 TODOS LOS DERECHOS RESERVADOS</div>
							<div class="m-nav-footer__item">Diseñado por DSM <a href="#" class="m-nav-footer__item" target="_blank"
									rel="noopener">Soluciones Digitales</a></div>
						</div>
					</div>
				</div>
			</div>
			<script src="<?=base_url().'assets/js/app.js'?>"></script>
</body>

</html>
