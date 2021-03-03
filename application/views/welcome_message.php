<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?=base_url().'assets/styles/estilos.css'?>">
</head>
<body>
<div class="o-header">
		<div class="container">
			<div class="o-header__content">
				<div class="o-header__left">
					<a class="o-header__logo a-logo">
						<svg class="a-icon a-logo__icon">
							<use xlink:href="<?=base_url()?>assets/img/sprite.svg#icon-keto-logo"></use>
						</svg>
					</a>
				</div>
				<div id="contacts-container" style="display: none">
					<div class="js-user-menu">
						<div class="burger__wrapper ">
							<input type="checkbox" class="burger__toggle" id="burger-toggle"
								onchange="if (!window.__cfRLUnblockHandlers) return false; activeMenu(event)"
								data-cf-modified-91a1fee4b9117ff5aa7b5f89-="">
							<label for="burger-toggle" class="burger__button">
								<span></span>
							</label>
							<div class="burger__menu">
								<a href="/faq">FAQ</a>
								<a href="/contacts">Contactos</a>
								<a href="/logins">Iniciar sesión</a>
							</div>
						</div>
						<script type="91a1fee4b9117ff5aa7b5f89-text/javascript">
							function activeMenu(event) {
								document.querySelector('body').classList.toggle('noscroll', event.target.checked);
							}

							function logout() {
								store.remove('answers');
								document.getElementById('logout-form').submit();
							}

						</script>
					</div>
					<div class="o-header__right js-contacts-button">
						<div class="o-header__online-bar m-online-bar">
							<a class="a-online-bar__item" href="/contacts">
								<svg class="a-icon a-logo__icon">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=base_url()?>assets/img/sprite.svg#icon-icon-contacts"></use>
								</svg>
								<div class="m-online-bar__text text-center domain-ssl">
									Contactos
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-content">
		<div class="o-section-home section-first" style="background-image: url(https://storage.appsforfit.com/files/7U3QwfIyOJF7nPIx56cslhd64HSshEFeKoEVY7Wa.jpeg)">
		<div class="container" id="quiz-top">
			<h2 class="o-section-home__text-title a-text-title">CONSIGUE TU DIETA KETO</h2>
			<ul class="m-list-reasons homepage-list">
				<li><div>1.</div>Selecciona tu género</li>
				<li><div>2.</div>Escoge tus alimentos favoritos</li>
				<li><div>3.</div>Categoriza tu estilo de vida</li>
				<li><div>4.</div>Entra tus medidas</li>
				<li><div>5.</div>Consigue tu plan personalizado</li>
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
							<svg class="a-icon a-button-gender__icon">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/keto/sprite.svg#icon-woman"></use>
							</svg>
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
							<svg class="a-icon a-button-gender__icon">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/keto/sprite.svg#icon-man"></use>
							</svg>
							<div class="a-button-gender__text">Hombre</div>
						</div>
					</div>
				</div>
				<div class="mt-8 mb-4">
					<div class="o-section-quiz__title">Consigue tus objetivos con nuestra Mejor Guía sobre la Dieta Keto</div>
					<div class="o-section-quiz__items">
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="37.6591" y1="100" x2="162.3409"
									y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<path style="fill:url(#SVGID_1_);"
									d="M162.3,37.6v147c0,5.1-4.2,9.3-9.3,9.3H47c-5.1,0-9.3-4.2-9.3-9.3v-147c0-5.1,4.2-9.3,9.3-9.3h8.5
                    c1.4,0,2.5,1.1,2.5,2.5c0,1.4-1.1,2.5-2.5,2.5H47c-2.4,0-4.3,1.9-4.3,4.3v147c0,2.4,1.9,4.3,4.3,4.3H153c2.4,0,4.3-1.9,4.3-4.3v-147
                    c0-2.4-1.9-4.3-4.3-4.3h-8.5c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5h8.5C158.2,28.3,162.3,32.5,162.3,37.6z M62.9,56.9
                    c0.1,0,0.6,0,1.1-0.1c1,0,2.1,0,3.1,0.3c0.6,0.1,1.3,0.3,1.9,0.5c5.7,2,9.1,8,8.1,13.9c-0.9,5.2-4.9,9.4-10,10.4
                    c-6.8,1.3-13.2-2.8-14.8-9.5C50.4,65.3,55.4,57.9,62.9,56.9z M57,70.6c1.4,1.4,2.7,2.7,4.1,4.1c0.7,0.7,1.9,0.7,2.7,0l8.3-8.3
                    c0.7-0.7,0.7-1.9,0-2.7L72,63.7c-0.7-0.7-1.9-0.7-2.7,0c-1.9,1.9-3.7,3.7-5.6,5.6c-0.7,0.7-1.9,0.7-2.7,0c-0.5-0.5-0.9-0.9-1.4-1.4
                    c-0.7-0.7-1.9-0.7-2.7,0C56.3,68.7,56.3,69.9,57,70.6z M143.1,60.4H88.4c-2.1,0-3.9,1.7-3.9,3.9c0,2.1,1.7,3.9,3.9,3.9h54.6
                    c2.1,0,3.9-1.7,3.9-3.9C146.9,62.1,145.2,60.4,143.1,60.4z M88.9,78.7h40.6c2.1,0,3.9-1.7,3.9-3.9s-1.7-3.9-3.9-3.9H88.9
                    c-2.1,0-3.9,1.7-3.9,3.9S86.8,78.7,88.9,78.7z M77.1,115.2c-0.9,5.2-4.9,9.4-10,10.4c-6.8,1.3-13.2-2.8-14.8-9.5
                    c-1.8-7.2,3.2-14.5,10.7-15.5c0.1,0,0.6,0,1.1-0.1c1,0,2.1,0,3.1,0.3c0.6,0.1,1.3,0.3,1.9,0.5C74.6,103.3,78.1,109.2,77.1,115.2z
                    M72.1,107.4L72.1,107.4c-0.8-0.8-2-0.8-2.7-0.1c-1.9,1.9-3.7,3.7-5.6,5.6c-0.7,0.7-1.9,0.7-2.7,0c-0.5-0.5-0.9-0.9-1.4-1.4
                    c-0.7-0.7-1.9-0.7-2.7,0c-0.7,0.7-0.7,1.9,0,2.7c1.4,1.4,2.7,2.7,4.1,4.1c0.7,0.7,1.9,0.7,2.7,0l8.3-8.3
                    C72.8,109.3,72.8,108.2,72.1,107.4z M143.1,104H88.4c-2.1,0-3.9,1.7-3.9,3.9c0,2.1,1.7,3.9,3.9,3.9h54.6c2.1,0,3.9-1.7,3.9-3.9
                    C146.9,105.7,145.2,104,143.1,104z M88.9,122.3H115c2.1,0,3.9-1.7,3.9-3.9s-1.7-3.9-3.9-3.9H88.9c-2.1,0-3.9,1.7-3.9,3.9
                    S86.8,122.3,88.9,122.3z M77.1,160.4c-0.9,5.2-4.9,9.4-10,10.4c-6.8,1.3-13.2-2.8-14.8-9.5c-1.8-7.2,3.2-14.5,10.7-15.5
                    c0.1,0,0.6,0,1.1-0.1c1,0,2.1,0,3.1,0.3c0.6,0.1,1.3,0.3,1.9,0.5C74.6,148.6,78.1,154.5,77.1,160.4z M72.1,152.7L72.1,152.7
                    c-0.8-0.8-2-0.8-2.7-0.1c-1.9,1.9-3.7,3.7-5.6,5.6c-0.7,0.7-1.9,0.7-2.7,0c-0.5-0.5-0.9-0.9-1.4-1.4c-0.7-0.7-1.9-0.7-2.7,0
                    c-0.7,0.7-0.7,1.9,0,2.7c1.4,1.4,2.7,2.7,4.1,4.1c0.7,0.7,1.9,0.7,2.7,0l8.3-8.3C72.8,154.6,72.8,153.4,72.1,152.7z M88.4,157h30.8
                    c2.1,0,3.9-1.7,3.9-3.9s-1.7-3.9-3.9-3.9H88.4c-2.1,0-3.9,1.7-3.9,3.9S86.3,157,88.4,157z M88.9,167.5h54.2c2.1,0,3.9-1.7,3.9-3.9
                    c0-2.1-1.7-3.9-3.9-3.9H88.9c-2.1,0-3.9,1.7-3.9,3.9C85.1,165.8,86.8,167.5,88.9,167.5z M63.1,35.6V22c0-2.2,1.8-3.9,3.9-3.9h12.2
                    c0.6-6.7,9.6-12,20.7-12s20.1,5.3,20.7,12h12.2c2.2,0,3.9,1.8,3.9,3.9v13.6c0,2.2-1.8,3.9-3.9,3.9H67.1
                    C64.9,39.5,63.1,37.8,63.1,35.6z M91.3,18.6c0,2.9,3.9,5.2,8.7,5.2s8.7-2.3,8.7-5.2s-3.9-5.2-8.7-5.2S91.3,15.7,91.3,18.6z" />
							</svg>
							<div class="m-item-quiz__text">Lista de la Compra Semanal</div>
							<p class="benefits-text">No pierdas tu preciado tiempo planeando los comestibles semanales que vas a
								necesitar, y consigue una lista de la compra descargable para cocinar todos los platos deliciosos de tu
								plan personal Keto con ingredientes sencillos que puedes comprar en cualquier tienda local.</p>
						</div>
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<linearGradient id="Read_1_" gradientUnits="userSpaceOnUse" x1="1.9204" y1="100" x2="198.0796" y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<linearGradient id="Read_2_" gradientUnits="userSpaceOnUse" x1="1.4204" y1="100" x2="198.5796" y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<path style="fill:url(#Read_1_);stroke:url(#Read_2_);stroke-miterlimit:10;" id="Read" d="M198.1,119.2c0-5-4-9-9-9c-1.8,0-3.5,0.5-4.9,1.5c-0.5-1.2-1.3-2.2-2.3-3.1V29.9
                    c0-1.4-1.1-2.4-2.4-2.4h-10.9V12.6c0-0.7-0.3-1.3-0.8-1.8c-0.5-0.5-1.2-0.7-1.8-0.7c-1.1,0.1-2.3,0.1-3.5,0.2
                    c-18.7,1.2-49.7,3.1-70.5,17.7C71.1,13.4,40.1,11.5,21.4,10.4c-1.2-0.1-2.4-0.1-3.5-0.2c-0.7,0-1.3,0.2-1.8,0.7
                    c-0.5,0.5-0.8,1.1-0.8,1.8v14.8H4.4c-1.4,0-2.4,1.1-2.4,2.4v99.6c0,1.4,1.1,2.4,2.4,2.4h136.4l0,1.4v9.5l-6-3.4c0,0-0.1,0-0.1-0.1
                    c-3.2-1.6-6.4-2.7-11.4-2.7c-0.1,0-0.2,0-0.3,0c-5.1,0.5-13.7,3.3-13.7,10.5v1c0,0.1,0,0.2,0,0.3c0.6,4.2,4.1,7.1,8.7,7.2
                    c0,0,0,0,0.1,0h3.4c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c5.4,0,13.8,8.9,19.7,17.8v9.8c0,3.5,2.9,6.4,6.4,6.4h44
                    c3.5,0,6.4-2.9,6.4-6.4V170H198l0.1-35.7V119.2z M176.9,106.5c-0.3,0-0.6-0.1-1-0.1c-2.1,0-4,0.7-5.6,1.9c-0.5-0.8-1.1-1.5-1.9-2.1
                    V32.3h8.4V106.5z M162.7,15.2c0.3,0,0.6,0,1-0.1v14.7v74.3c-0.3,0-0.6,0-0.9,0c-1.5,0-3,0.4-4.2,1l0-11.5c0-5-4-9-9-9c-5,0-9,4-9,9
                    l0,11.3c-0.1,0-0.2,0-0.3,0c-1.9,0.2-3.7,0.5-5.5,0.7c-2.7,0.4-5.3,0.9-7.7,1.3c-1.8,0.3-3.5,0.7-5.2,1.1c0,0,0,0,0,0
                    c-0.9,0.2-1.7,0.4-2.6,0.6c0,0,0,0,0,0c-2.7,0.7-5.2,1.5-7.7,2.3c0,0,0,0,0,0c-3.5,1.2-6.8,2.5-9.9,4c0,0,0,0,0,0
                    c-1.6,0.8-3.2,1.6-4.7,2.5c0,0,0,0,0,0c-0.9,0.5-1.8,1.1-2.7,1.6V32.4C113.9,18.2,144.4,16.4,162.7,15.2z M20.1,15.2
                    c0.3,0,0.6,0,1,0.1c18.3,1.1,48.7,3,68.4,17.1v86.9c-0.9-0.6-1.8-1.1-2.7-1.6c0,0,0,0,0,0c-1.5-0.9-3.1-1.7-4.7-2.5l0,0l0,0
                    c-3.1-1.5-6.4-2.8-9.9-4c0,0,0,0,0,0c-2.4-0.8-5-1.6-7.7-2.3c0,0,0,0,0,0c-0.9-0.2-1.7-0.4-2.6-0.6c0,0,0,0,0,0
                    c-1.7-0.4-3.4-0.8-5.2-1.1c0,0,0,0,0,0c-1.7-0.3-3.4-0.6-5.2-0.9c0,0,0,0,0,0c-0.9-0.1-1.7-0.3-2.6-0.4c-3.9-0.6-7.9-1.1-12.4-1.5
                    c-4.3-0.4-8.2-0.7-11.2-0.9h0c-1.4-0.1-2.7-0.2-4-0.2h0l-0.4,0c-0.3,0-0.7,0-1-0.1V29.9V15.2z M6.8,127V32.3h8.4v73
                    c0,1.3,1,2.4,2.3,2.4c1,0.1,2.1,0.1,3.3,0.2l0.4,0l0,0c1.3,0.1,2.6,0.2,4,0.2h0c2.9,0.2,6.8,0.5,11,0.9c4.4,0.4,8.3,0.9,12.1,1.5
                    c0.8,0.1,1.7,0.3,2.5,0.4c0,0,0,0,0,0c1.7,0.3,3.4,0.6,5,0.9l0,0c1.7,0.3,3.4,0.7,5,1.1c0,0,0,0,0,0c0.8,0.2,1.7,0.4,2.5,0.6
                    c0,0,0,0,0,0c2.6,0.7,5,1.4,7.3,2.2c0,0,0,0,0,0c3.3,1.1,6.5,2.4,9.3,3.8l0,0c1.5,0.7,3,1.5,4.4,2.3c0,0,0,0,0,0
                    c1.4,0.8,2.8,1.7,4.1,2.6c0,0,0,0,0,0c0.7,0.5,1.3,0.9,2,1.4c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.1,0.1
                    c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0
                    c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0.1,0,0.2,0,0.3,0l0,0h0h0h0h0c0,0,0,0,0,0c0.1,0,0.2,0,0.3,0c0,0,0,0,0.1,0
                    c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2-0.1
                    c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0.6-0.5,1.3-1,2-1.4c0,0,0,0,0,0
                    c1.3-0.9,2.7-1.8,4.1-2.6c0,0,0,0,0,0c1.4-0.8,2.9-1.6,4.4-2.3c0,0,0,0,0,0c2.9-1.4,6-2.6,9.3-3.8c0,0,0,0,0,0
                    c2.3-0.8,4.8-1.5,7.3-2.2c0,0,0,0,0,0c0.8-0.2,1.7-0.4,2.5-0.6c0,0,0,0,0,0c1.6-0.4,3.3-0.8,5-1.1c2.4-0.5,4.9-0.9,7.5-1.3
                    c1.7-0.2,3.4-0.5,5.1-0.7l0,0.5c0,0.2,0,0.5,0,0.7l0.1,16H6.8z M193.2,183.5c0,0.8-0.7,1.5-1.5,1.5h-44c-0.8,0-1.5-0.7-1.5-1.5v-8.7
                    h46.9V183.5z M144.8,170c-4.5-6.6-14.4-19.3-23.4-19H118c-2.2-0.1-3.7-1.1-4-2.9v-0.9c0-4.2,8.2-5.5,9.3-5.7c4,0,6.4,0.8,9.1,2.1
                    l9.6,5.4c0.8,0.4,1.7,0.4,2.4,0c0.7-0.4,1.2-1.2,1.2-2.1v-13.7l-0.2-22.2c0-0.1,0-0.2,0-0.4c0-0.1,0-0.1,0-0.2l-0.1-16.8
                    c0-2.3,1.8-4.1,4.1-4.1s4.1,1.8,4.1,4.1l0.1,17.1c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2l0.1,23.2v0c0,1.3,1.1,2.4,2.4,2.4c0,0,0,0,0,0
                    c1.3,0,2.4-1.1,2.4-2.4l0-21.1c0-2.3,1.8-4.1,4.1-4.1s4.1,1.8,4.1,4.1l0.1,21.1c0,1.3,1.1,2.4,2.4,2.4h0c1.3,0,2.4-1.1,2.4-2.4
                    v-18.8c0-2.3,1.8-4.1,4.1-4.1s4.1,1.8,4.1,4.1v3.8V134v0.3h0c0.1,1.2,1.2,2.2,2.4,2.2s2.3-0.9,2.4-2.2h0V134v-14.8
                    c0-2.3,1.8-4.1,4.1-4.1s4.1,1.8,4.1,4.1v14.1l-0.1,36.7H144.8z" />
							</svg>
							<div class="m-item-quiz__text">Guía Detallada de la Dieta Keto</div>
							<p class="benefits-text">Una guía completa con recetas Keto paso a paso específicamente diseñadas por un
								nutricionista profesional para ayudarte a conseguir tus objetivos a un ritmo saludable. Con esta guía,
								sabrás exactamente que es aceptado por la dieta Keto tanto cuando te quedas en casa como cuando decides
								salir a comer fuera.</p>
						</div>
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<linearGradient id="Settings_-_thinner_1_" gradientUnits="userSpaceOnUse" x1="4.4608" y1="100"
									x2="195.5392" y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<path style="fill:url(#Settings_-_thinner_1_);" id="Settings_-_thinner" d="M60.8,164.8L56.3,152l-0.2-0.6l-0.6-0.2c-2.1-0.7-4.1-1.5-6.1-2.4l-0.6-0.3l-0.5,0.3
                    L36.2,155c-0.5,0.3-1.1,0.4-1.7,0.4c-0.8,0-1.6-0.3-2.2-0.7c-3-2.2-5.2-3.9-7.3-5.9c-2.2-2.1-4.3-4.5-6.3-7.4
                    c-0.8-1.2-0.9-2.6-0.3-3.9l6-11.8l0.3-0.6l-0.3-0.6l-1.5-3l-0.1-0.3c-0.2-0.4-0.3-0.7-0.5-1.1c-0.4-0.9-0.7-1.6-1-2.4
                    c-0.1-0.3-0.2-0.6-0.3-1l-0.2-0.6l-0.6-0.2l-12.5-3.6c-1.4-0.4-2.5-1.7-2.7-3.2c-0.3-2.3-0.4-4.9-0.4-7.7c0-3.5,0.2-6.9,0.6-10
                    c0.2-1.4,1.1-2.6,2.5-3.1l12.8-4.6l0.6-0.2l0.2-0.6c0.7-2.1,1.5-4.1,2.4-6.1l0.3-0.6l-0.3-0.5l-6.1-12.1c-0.6-1.3-0.5-2.8,0.3-3.9
                    c3.7-5.1,8.1-9.6,13-13.4c0.7-0.5,1.5-0.8,2.3-0.8c0.6,0,1.1,0.1,1.6,0.4l12.2,5.8l0.6,0.3l0.5-0.3c1.1-0.6,2-1,3-1.4l0,0
                    c0.9-0.4,1.9-0.8,3.1-1.2l0.6-0.2l0.2-0.6L59,35.5c0.4-1.4,1.6-2.3,3-2.6c3.4-0.5,6.8-0.8,10.2-0.8h0l0,0l0,0c2.8,0,5.6,0.2,8.5,0.5
                    c1.4,0.2,2.6,1.1,3.1,2.5L88.4,48l0.2,0.6l0.6,0.2c2.1,0.7,4.1,1.5,6.1,2.4l0.6,0.3l0.5-0.3l12.1-6.1c0.5-0.3,1.1-0.4,1.7-0.4
                    c0.8,0,1.6,0.3,2.2,0.7c5.1,3.7,9.6,8.1,13.4,13c0.9,1.1,1,2.6,0.4,3.9l-5.8,12.3l-0.3,0.6l0.3,0.5c0.1,0.3,0.3,0.6,0.4,0.8
                    c0.4,0.7,0.7,1.3,1,2c0.4,0.9,0.8,1.9,1.2,3.1l0.2,0.6l0.6,0.2l1.5,0.5l-6,6l-0.3-0.1c-1.2-0.4-2.1-1.3-2.4-2.5
                    c-0.5-1.7-1.1-3.3-1.7-4.8c-0.7-1.5-1.4-3.1-2.3-4.5c-0.6-1.1-0.7-2.4-0.1-3.5l5.5-11.6l0.3-0.7l-0.5-0.6c-2.3-2.6-4.8-5.1-7.5-7.3
                    l-0.6-0.5l-0.7,0.4L97.6,59c-0.5,0.3-1.1,0.4-1.7,0.4c-0.6,0-1.2-0.2-1.8-0.4c-3-1.6-6.1-2.8-9.4-3.7c-1.2-0.3-2.1-1.2-2.5-2.4
                    l-4.3-12.1L77.5,40l-0.8-0.1c-1.7-0.1-3.1-0.2-4.5-0.2c-1.8,0-3.7,0.1-6,0.3l-0.8,0.1L65.2,41l-4,12.2c-0.4,1.2-1.3,2.1-2.5,2.4
                    c-1.8,0.5-3.3,1.1-4.8,1.7c-1.5,0.6-2.9,1.4-4.5,2.3c-0.6,0.3-1.2,0.5-1.9,0.5c-0.6,0-1.1-0.1-1.6-0.4l-11.6-5.5l-0.7-0.3l-0.6,0.5
                    c-2.6,2.3-5.1,4.8-7.3,7.5l-0.5,0.6l0.4,0.7l5.8,11.5c0.6,1.1,0.5,2.4,0,3.5c-1.6,3-2.8,6.1-3.7,9.4c-0.3,1.2-1.2,2.1-2.4,2.6
                    l-12.1,4.3l-0.8,0.3l-0.1,0.8c-0.2,2.1-0.2,4.1-0.2,6c0,1.1,0,2.3,0.1,3.5l0,0.9l0.9,0.2l11.9,3.4c1.3,0.4,2.3,1.5,2.6,2.8
                    c0.3,1.5,0.5,2.2,0.8,2.8c0.2,0.5,0.5,1.2,0.9,2.1l0.3,0.8l0,0l0,0l2.6,5.1c0.5,1.1,0.5,2.4,0,3.4l-5.7,11.3l-0.4,0.7l0.5,0.6
                    c1.2,1.5,2.3,2.7,3.5,3.8c1.1,1,2.4,2.1,4.1,3.4l0.6,0.5l0.7-0.4l11.5-5.9c0.5-0.3,1.1-0.4,1.7-0.4c0.6,0,1.2,0.2,1.8,0.4
                    c3,1.6,6.1,2.8,9.4,3.7c1.2,0.3,2.1,1.2,2.6,2.4l4.3,12.1l0.3,0.8l0.8,0.1c1.7,0.1,3.1,0.2,4.4,0.2l0.1,0c0.3,0,0.7,0,1,0l-0.1,0.3
                    c-0.7,2.4-0.6,4.9,0.1,7.3c-0.4,0-0.7,0-1.1,0c-2.8,0-5.7-0.2-8.5-0.5C62.5,167.1,61.3,166.1,60.8,164.8z M86.1,122.3
                    c-1.4,1.4-2.4,3.1-3.1,5l0,0c0,0,0,0,0,0.1c0,0.1-0.1,0.2-0.1,0.3l-0.1,0.4c-3.4,1.3-6.9,1.9-10.5,1.9c-5.8,0-11.4-1.7-16.3-4.8
                    c-5-3.2-8.9-7.8-11.3-13.3c-1.6-3.8-2.5-7.8-2.5-11.8c0-5.8,1.7-11.4,4.8-16.3c3.2-5,7.8-8.9,13.3-11.2c3.8-1.6,7.8-2.5,11.8-2.5
                    c5.8,0,11.4,1.7,16.3,4.8c5,3.2,8.9,7.8,11.3,13.3c1.6,3.8,2.5,7.8,2.5,11.8c0,2.3-0.3,4.6-0.8,6.9L86.1,122.3z M91.1,112.2
                    c2.4-3.6,3.6-7.9,3.6-12.2c0-3.1-0.6-6-1.8-8.9c-1.8-4.1-4.7-7.5-8.4-10c-3.6-2.4-7.9-3.6-12.2-3.6c-3,0-6,0.6-8.9,1.8
                    c-4.1,1.8-7.5,4.7-9.9,8.4c-2.4,3.6-3.6,7.9-3.6,12.2c0,3,0.6,6,1.8,8.9c1.8,4.1,4.7,7.5,8.4,9.9c3.6,2.4,7.8,3.6,12.2,3.6h0
                    c3,0,6-0.6,8.9-1.8C85.3,118.8,88.7,115.9,91.1,112.2z M84.5,165.7c-0.3,0.1-0.7,0.1-1,0.1c-1,0-2-0.4-2.7-1.1c-1-1-1.3-2.4-1-3.7
                    l9.5-32.9c0.2-0.6,0.5-1.2,1-1.6l63.3-63.3L165.8,51c0.7-0.7,1.7-1.1,2.7-1.1c1,0,2,0.4,2.7,1.1l23.3,23.3c0.7,0.7,1.1,1.7,1.1,2.7
                    c0,1-0.4,2-1.1,2.7l-12.2,12.2L119,155.2c-0.5,0.5-1,0.8-1.6,1L84.5,165.7z M161.6,65.9l0.9,0.9l8.1,8.1l8.1,8.1l0.9,0.9l0.9-0.9
                    l5.1-5.1l0.9-0.9l-0.9-0.9L169.3,60l-0.9-0.9l-0.9,0.9l-5.1,5.1L161.6,65.9z M94.1,139l0.5,0.5l11.2,11.2l0,0l0.2,0.2l0.5,0.5
                    l0.7-0.2l6.8-2l0.3-0.1l0.2-0.2l58.8-58.8l0.9-0.9l-0.9-0.9l-16.2-16.2l-0.9-0.9l-0.9,0.9l-58.8,58.8l-0.2,0.2l-0.1,0.3l-2,6.8
                    L94.1,139z M89,156.5l2.2-0.6l7.7-2.2l2-0.6l-1.5-1.5L94,146l-1.5-1.5l-0.6,2l-2.2,7.7L89,156.5z" />
							</svg>
							<div class="m-item-quiz__text">Diseñada para ti</div>
							<p class="benefits-text">¿Confundido sobre todos los estilos existentes de dietas bajas en CHO? Deja que
								calculemos nosotros las calorías y CHO adecuados para ti y creemos un plan personalizado basado en tus
								alimentos favoritos, estilo de vida, edad, medidas y objetivos corporales.</p>
						</div>
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="3.0642" y1="100" x2="196.9358"
									y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<path style="fill:url(#SVGID_2_);" d="M41.6,90.4c0-2.3,1.9-4.2,4.2-4.2h33.6c2.3,0,4.2,1.9,4.2,4.2s-1.9,4.2-4.2,4.2H45.9
                    C43.5,94.6,41.6,92.8,41.6,90.4z M84.8,111.6c0-2.3-1.9-4.2-4.2-4.2H7.3c-2.3,0-4.2,1.9-4.2,4.2c0,2.3,1.9,4.2,4.2,4.2h73.2
                    C82.9,115.9,84.8,114,84.8,111.6z M132.3,42.4v-14h7.3c2.3,0,4.2-1.9,4.2-4.2c0-2.3-1.9-4.2-4.2-4.2h-23c-2.3,0-4.2,1.9-4.2,4.2
                    c0,2.3,1.9,4.2,4.2,4.2h7.3v14c-20.2,1.2-38.6,11.1-50.9,27.5c-1.4,1.9-1,4.5,0.9,5.9c1.9,1.4,4.5,1,5.9-0.9
                    c11.5-15.4,29.2-24.2,48.4-24.2c33.3,0,60.4,27.1,60.4,60.4c0,33.3-27.1,60.4-60.4,60.4c-19.2,0-36.8-8.8-48.3-24.2
                    c-1.4-1.9-4.1-2.3-5.9-0.8c-1.9,1.4-2.3,4.1-0.8,5.9C86.1,170,106.2,180,128.1,180c38,0,68.9-30.9,68.9-68.9
                    C196.9,74.6,168.3,44.6,132.3,42.4z M125.3,122.7c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0.1,0.3,0.2,0.4,0.2
                    c0.1,0.1,0.3,0.1,0.4,0.1c0.1,0,0.3,0.1,0.4,0.1c0.3,0.1,0.6,0.1,0.9,0.1c0.2,0,0.5,0,0.7-0.1c0.1,0,0.2-0.1,0.4-0.1
                    c0.1,0,0.2-0.1,0.4-0.1c0.2-0.1,0.3-0.1,0.4-0.2c0.1,0,0.2-0.1,0.2-0.1c0.2-0.1,0.3-0.2,0.5-0.3c0.1,0,0.1-0.1,0.2-0.1l0,0
                    c0,0,0,0,0,0c0,0,0,0,0,0L161,97c1.8-1.5,2-4.2,0.5-6c-1.5-1.8-4.2-2-6-0.5l-27,23.1l-12.3-14c-1.6-1.8-4.2-1.9-6-0.4
                    c-1.8,1.5-1.9,4.2-0.4,6l15.1,17.1C125,122.5,125.2,122.6,125.3,122.7z M83.7,132.3c0-2.3-1.9-4.2-4.2-4.2H30.2
                    c-2.3,0-4.2,1.9-4.2,4.2c0,2.3,1.9,4.2,4.2,4.2h49.3C81.8,136.6,83.7,134.7,83.7,132.3z" />
							</svg>
							<div class="m-item-quiz__text">Preparación Rápida de Comidas</div>
							<p class="benefits-text">Recetas Keto divertidas y fáciles de seguir con información nutricional clara que
								hace que cocinar deje de ser una tarea y se convierta en un ansiado momento de paz. No se necesita un
								equipamiento de cocina especial para convertirse en un chef Keto.</p>
						</div>
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="4.0844" y1="100" x2="195.9156"
									y2="100">
									<stop offset="0" style="stop-color:#F53373" />
									<stop offset="1" style="stop-color:#BF51E8" />
								</linearGradient>
								<path style="fill:url(#SVGID_3_);" d="M163.1,18.3c-2.1-2.1-5.6-2.1-7.7,0L92.8,80.9c0,0,0,0,0,0c-0.2,0.2-0.3,0.4-0.5,0.6c0,0,0,0,0,0
                    c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.2-0.2,0.3-0.2,0.5c0,0,0,0.1,0,0.1l-10,30.8c-0.4,1.3-0.1,2.6,0.9,3.6c0.7,0.7,1.6,1,2.5,1
                    c0.4,0,0.7-0.1,1.1-0.2l30.8-10c0,0,0,0,0.1,0c0.2-0.1,0.5-0.2,0.7-0.3c0,0,0,0,0,0c0,0,0,0,0.1,0c0.2-0.1,0.4-0.3,0.6-0.5
                    c0,0,0,0,0,0l62.6-62.6c2.1-2.1,2.1-5.6,0-7.7L163.1,18.3z M97.2,88.8l8.2,5.3l5.2,8.2l-19.9,6.5L97.2,88.8z M116.6,98.6l-5.8-9
                    c-0.3-0.4-0.6-0.8-1.1-1.1l-9-5.8l58.4-58.4L175,40.2L116.6,98.6z M193.1,18.2L181.2,6.4c0,0,0,0,0,0c-3.8-3.8-10.1-3.8-13.9,0
                    l-4.3,4.3c-1.4,1.4-1.4,3.6,0,5l20.8,20.8c0.7,0.7,1.6,1,2.5,1c0.9,0,1.8-0.3,2.5-1l4.3-4.3C196.9,28.3,196.9,22.1,193.1,18.2z
                    M188.1,27.1l-1.8,1.8l-15.8-15.8l1.8-1.8c1.1-1.1,2.8-1.1,3.9,0l11.9,11.9C189.2,24.3,189.2,26.1,188.1,27.1z M161.3,93.8v74.1
                    c0,15.8-12.8,28.6-28.6,28.6h-100c-15.8,0-28.6-12.8-28.6-28.6v-100c0-15.8,12.8-28.6,28.6-28.6H102c1.9,0,3.5,1.6,3.5,3.5
                    c0,1.9-1.6,3.5-3.5,3.5H32.7c-11.9,0-21.5,9.7-21.5,21.5v100c0,11.9,9.7,21.5,21.5,21.5h100c11.9,0,21.5-9.7,21.5-21.5V93.8
                    c0-1.9,1.6-3.5,3.5-3.5C159.7,90.3,161.3,91.9,161.3,93.8z" />
							</svg>
							<div class="m-item-quiz__text">Una Suscripción Para Dominarlo</div>
							<p class="benefits-text">Receive fresh recipes each month right to your favorite device while enjoying
								sustainable weight loss and adjust your plan based on your progress (just reach out to our support).
								Stay in the know with the last Keto trends with our VIP posting.</p>
						</div>
						<div class="m-item-quiz">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
								<g id="Profile_-_thinner">
									<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="3.7562" y1="100" x2="196.2439"
										y2="100">
										<stop offset="0" style="stop-color:#F53373" />
										<stop offset="1" style="stop-color:#BF51E8" />
									</linearGradient>
									<circle style="fill:none;stroke:url(#SVGID_4_);stroke-width:6;stroke-miterlimit:10;" cx="100" cy="100"
										r="93.2" />
									<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="41.6209" y1="100" x2="158.3791"
										y2="100">
										<stop offset="0" style="stop-color:#F53373" />
										<stop offset="1" style="stop-color:#BF51E8" />
									</linearGradient>
									<path style="fill:none;stroke:url(#SVGID_5_);stroke-width:7;stroke-miterlimit:10;" d="M100,45.5c0,0-20.7-1.3-22.8,19.3v12.3c0,0-2.3,1.6-2.3,3.5c0,1.9,2.1,8.8,3.5,10.4c1.4,1.6,5.2,10.4,9.1,14.6
                        v5.1c0,0-12.3,10.7-20.4,14.6c-8.1,3.9-19,8.6-19.5,11.1l-2.1,18.1h108.9l-2.1-18.1c-0.5-2.5-11.3-7.2-19.5-11.1
                        c-8.1-3.9-20.4-14.6-20.4-14.6v-5.1c3.9-4.2,7.7-13,9.1-14.6c1.4-1.6,3.5-8.6,3.5-10.4c0-1.9-2.3-3.5-2.3-3.5V64.8
                        C120.7,44.2,100,45.5,100,45.5z" />
								</g>
							</svg>
							<div class="m-item-quiz__text">Perfil Dietético Gratis e Instantáneo</div>
							<p class="benefits-text">Inmediatamente después de rellenar nuestro test con tu información, verás tu
								Índice de Masa Corporal personal (IMC) y edad metabólica. Consigue, también, recomendaciones para tu
								ingesta de agua y calorías diaria. Todo esto gratis.</p>
						</div>
					</div>
				</div>
				<div class="text-center mt-8 mb-8 pr-4 pl-4">
					<div class="m-block-jumbotron__button a-button--with-gradient a-button--gigant a-button--with-icon a-button">
						<a href="#quiz-top" class="a-button__link">
							<span class="a-button__text">Empezar</span>
						</a>
					</div>
				</div>
				<div class="o-footer">
		<div class="container">
			<div class="o-footer__content">
				<nav class="o-footer__nav-footer m-nav-footer">
					<div class="o-footer-links-wrap">
						<a href="/faq" class="m-nav-footer__item">FAQ</a>
					</div>
					<div class="o-footer-links-wrap">
						<a href="/terms" class="m-nav-footer__item">Condiciones Generales</a>
					</div>
					<div class="o-footer-links-wrap">
						<a href="/data-protection-policy" target="_blank" class="m-nav-footer__item">Política de Protección de Datos
							Personales</a>
					</div>
					<div class="o-footer-links-wrap">
						<a href="/cookie-policy" target="_blank" class="m-nav-footer__item">Cookie policy</a>
					</div>
					<div class="o-footer-links-wrap">
						<a href="/contacts" class="m-nav-footer__item">
							Contactos
						</a>
						<div>
				</nav>
				<div class="o-footer__logo">
					<svg class="a-icon o-footer__icon">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/keto/sprite.svg#icon-keto-logo"></use>
					</svg>
				</div>
				<div class="o-footer__copy">
					<div>2021 TODOS LOS DERECHOS RESERVADOS</div>
					<div>Diseñado por <a href="//appsforfit.com" class="m-nav-footer__item" target="_blank" rel="noopener">AppsForFit</a></div>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>
</html>