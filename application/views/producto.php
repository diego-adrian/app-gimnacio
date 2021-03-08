<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Producto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url().'assets/styles/estilos.css'?>">
</head>

<body style="background-image: none;" class="pb pb--big" data-page="step-2">
	<div class="o-header">
		<div class="container">
			<div class="o-header__content align-center justify-center">
				<img id="Logo" class="a-icon a-logo__icon" src="<?=base_url().'assets/img/logo-supershake-2.png'?>">
			</div>

			<div class="img--title">
				
				<div class="o-section-head__block-title m-block-title">
					<div class="m-block-title__icon-title a-icon-title js-icon-title">
						<div class="a-icon-title__circles">
							<div class="a-icon-title__circle a-icon-title__circle--front a-icon-title__circle-carne"></div>
							<div class="mini-circle-uno-carne"></div>
							<div class="mini-circle-dos-carne"></div>
						</div>
						<div class="a-icon-title__content">
							<img class="a-icon a-icon-title__icon" src="<?=base_url().'assets/img/dairy-products.svg'?>"/>
						</div>
					</div>
				</div>
				<div class="m-block-title__text uppercase mt-15">Verduras</div>

			</div>
		</div>
	</div>
	
	<div class="main-content">
		<div class="o-section-head">
			<div style="background-image: url(<?=base_url().'assets/img/running-bg.png'?>)" class="o-section-head__image"></div>
		</div>

		<div class="o-section-step">
			<div class="o-section-parallax js-section-parallax">
				<div class="mini-circle-carne-izquierda"></div>
				<img width="350" height="250" src="<?=base_url().'assets/img/cheese.png'?>"
					class="o-section-parallax__item o-section-parallax__item--image-2 js-parallax-style-1 img--producto-1">
				<img width="350" height="250" src="<?=base_url().'assets/img/eggs.png'?>"
					class="o-section-parallax__item o-section-parallax__item--image-1 js-parallax-style-2 img--producto-2">
					<div class="mini-circle-producto-derecha"></div>
					<div class="mini-circle-producto-derecha-abajo"></div>
			</div>
			<div class="container container-mobile">
				<div class="o-section-step__form section-carne">
		
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/eggs.svg'?>">
						<div class="m-block-title__text">Huevos</div>
					</div>
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/walnut.svg'?>">
						<div class="m-block-title__text">Nueces</div>
					</div>
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/cheese.svg'?>">
						<div class="m-block-title__text">Queso</div>
					</div>

				</div>
				<div class="o-section-step__form section-carne pt-20 pt-small">
					
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/fried-tofu-curd-balls.svg'?>">
						<div class="m-block-title__text">Requeson</div>
					</div>
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/spread.svg'?>">
						<div class="m-block-title__text">Mantequilla</div>
					</div>
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/coco.svg'?>">
						<div class="m-block-title__text">Coco</div>
					</div>

				</div>
				<div class="o-section-step__form section-carne pt-20 pt-small">
					
					<div class="o-section-carne">
						<img id="Logo" class="a-icon a-logo__icon a-logo__icon-carne" src="<?=base_url().'assets/img/tofu.svg'?>">
						<div class="m-block-title__text">Tofu</div>
					</div>

				</div>
			</div>
			<div class="o-section-step__progress-bar">
				<div data-step="2" class="m-progress-bar js-progress-bar
        ">
					<div
						class="hide-progress-bar m-progress-bar__percentage">
						<div class="m-progress-bar__percent m-progress-bar__percent-carne"><span class="js-progress-percent font-size-18">50</span><span>%</span></div>
						<div class="m-progress-bar__percent-text"></div>
					</div>
					<div class="m-progress-bar__content m-progress-bar__content-carne">
						<div class="m-progress-bar__button a-button--with-icon a-button--icon-first a-button--bordered a-button bg-transparent">
							<a href="/" class="a-button__link pl-4">
								<img class="a-icon a-button__icon __white" height="20" width="20" src="<?=base_url().'assets/img/back.svg'?>"/>
								<div class="a-button__text pl-2">Volver</div>
							</a>
						</div>
						<div class="m-progress-bar__indicator">
							<div class="m-progress-bar__indicator-inner">
								<div class="m-progress-bar__line">
									<div class="m-progress-bar__line-inner js-progress-line"></div>
								</div>
								<div class="m-progress-bar__dots js-progress-dots cursor-pointer">
									<div class="m-progress-bar__dot m-progress-bar__dot--previous m-progress-bar__dot--active" style="white-space: nowrap;">
										<span>Género</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>actividad física</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>Carne</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>verduras</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>productos</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>cada día</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>malos hábitos</span>
									</div>
									<div class="m-progress-bar__dot"
										style="white-space: nowrap;">
										<span>Medidas</span>
									</div>
								</div>
							</div>
						</div>
						<div class="m-progress-bar__button a-button--with-icon a-button--bordered a-button bg-transparent" data-modal-trigger="1">
							<a href="#" class="a-button__link pr-4">
								<div class="a-button__text pr-2">Ayuda</div>
								<img class="a-icon a-button__icon __white" height="20" width="20" src="<?=base_url().'assets/img/help.svg'?>"/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- MASCARA SVG -->
	<svg visibility="inherit" class="mask" height="0" width="100%">
		<defs>
			<clipPath id="svgPath">
				<path d="M1,0v215.8c0,0,177.8,121.3,576.2,129.1c398.4,7.8,768.6-169.6,1118.1-145.2s380.3,145.4,850.6,145.3V0H1z"
					id="path-1"></path>
			</clipPath>
		</defs>
	</svg>
	
	<svg visibility="inherit" class="mask" height="0" width="100%">
		<defs>
			<clipPath id="svgPathMobile">
				<path
					d="M1,140.210938 C87.3398438,196.308594 203.36159,186.937145 316.909461,134.355438 C354.078821,117.143064 388.761324,103.80857 421.425775,94.6731585 C421.111328,37.453125 421,0 421,0 L1,0 C1,0 0.607755223,86.3177211 1,140.210938 Z"
					id="path-1"></path>
			</clipPath>
		</defs>
	</svg>


</body>

</html>
