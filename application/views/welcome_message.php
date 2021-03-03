<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>App Gimnasio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?=base_url().'assets/styles/estilos.css'?>">
</head>

<body>
	<div class="o-header">
		<div class="container">
			<div class="o-header__content">
				<div class="o-header__left">
					<a class="o-header__logo a-logo">
						<img id="Logo" class="a-icon a-logo__icon __white" src="<?=base_url().'assets/img/logo.svg'?>">
					</a>
				</div>
				<div id="contacts-container">
					<div class="js-user-menu">
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
			style="background-image: url(<?=base_url().'assets/img/background.jpeg'?>)">
			<div class="container" id="quiz-top">
				<h2 class="o-section-home__text-title a-text-title">CONSIGUE TU DIETA</h2>
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
				<div class="o-section-home__select-gender m-select-gender js-select-gender">
					<div data-href="/2"
						class="m-select-gender__button-gender js-select-gender-button  a-button-gender js-button-gender bodyClass dietAnswer"
						data-key="1166" data-value="214" data-body-class-value="woman-theme" data-pixel-event="User Profile"
						data-pixel-key="female" data-pixel-value="1">
						<div class="a-button-gender__background">
							<div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
							<div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
						</div>
						<div class="a-button-gender__content">
							<div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
							<img src="<?=base_url().'assets/img/woman.svg'?>" class="a-icon a-button-gender__icon __white" />
							<div class="a-button-gender__text">Mujer</div>
						</div>
					</div>
					<div class="m-select-gender__text">o</div>
					<div data-href="/2"
						class="m-select-gender__button-gender js-select-gender-button a-button-gender--man a-button-gender js-button-gender bodyClass dietAnswer"
						data-key="1166" data-value="213" data-body-class-value="men-theme" data-pixel-event="User Profile"
						data-pixel-key="male" data-pixel-value="1">
						<div class="a-button-gender__background">
							<div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
							<div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
						</div>
						<div class="a-button-gender__content">
							<div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
							<img src="<?=base_url().'assets/img/men.svg'?>" class="a-icon a-button-gender__icon __white" />
							<div class="a-button-gender__text">Hombre</div>
						</div>
					</div>
				</div>
				<div class="mt-8 mb-4">
					<div class="o-section-quiz__title">Consigue tus objetivos con nuestra Mejor Guía sobre la Dieta</div>
					<div class="o-section-quiz__items">
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoUno.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Lista de la Compra Semanal</div>
							<p class="benefits-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam reprehenderit
								vero, vel nostrum ipsa enim praesentium animi ea! Tenetur eius labore dolore blanditiis optio omnis
								cupiditate ab inventore, quod debitis.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoDos.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Guía Detallada de la Dieta</div>
							<p class="benefits-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, dolore! Eveniet,
								laborum animi quam consequatur molestias alias id repellendus aliquam, doloremque libero eius, omnis
								iste quaerat et. Accusamus, laudantium provident?</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoTres.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Diseñada para ti</div>
							<p class="benefits-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod nesciunt deleniti
								laboriosam incidunt dignissimos quidem unde itaque dolores, veniam qui, placeat blanditiis asperiores
								pariatur, quia accusantium fuga laudantium facere alias.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoCuatro.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Preparación Rápida de Comidas</div>
							<p class="benefits-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis inventore esse
								provident distinctio. Voluptate nesciunt assumenda laboriosam harum cumque debitis laborum reiciendis
								eligendi dignissimos sunt. Laborum animi adipisci minus unde?</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoCinco.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Una Suscripción Para Dominarlo</div>
							<p class="benefits-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa quasi ab
								recusandae eveniet excepturi voluptatem debitis tempora veritatis quas ducimus! Possimus illum minima
								voluptate, numquam perferendis harum sapiente fuga ab.</p>
						</div>
						<div class="m-item-quiz">
							<img src="<?=base_url().'assets/img/iconoSeis.svg'?>" height="60" class="pb-2" />
							<div class="m-item-quiz__text">Perfil Dietético Gratis e Instantáneo</div>
							<p class="benefits-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi et illum
								voluptatibus totam quisquam culpa sapiente. Aliquid quis non, esse molestiae distinctio, repellat
								laudantium ullam quo exercitationem temporibus sit iste?</p>
						</div>
					</div>
				</div>
				<div class="text-center mt-8 mb-8 pr-4 pl-4">
					<div id="btn-empezar" class="m-block-jumbotron__button a-button--with-gradient a-button--gigant a-button--with-icon a-button cursor-pointer"
						style="visibility: visible;">
						<a class="a-button__link">
							<span class="a-button__text">Empezar</span>
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
							<img id="Logo" class="a-icon o-footer__icon" src="<?=base_url().'assets/img/logo.svg'?>">
						</div>
						<div class="o-footer__copy">
							<div>2021 TODOS LOS DERECHOS RESERVADOS</div>
							<div>Diseñado por <a href="//appsforfit.com" class="m-nav-footer__item" target="_blank"
									rel="noopener">AppsForFit</a></div>
						</div>
					</div>
				</div>
			</div>
			<script src="<?=base_url().'assets/js/app.js'?>"></script>
</body>

</html>
