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
	</div>

</body>
</html>