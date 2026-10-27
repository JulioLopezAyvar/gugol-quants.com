<?php
	session_start();
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Accept, Authorization, Accept-Language, Content-Type, Origin, User-Agent");
    header("Access-Control-Allow-Methods: OPTIONS, GET");
    header("Access-Control-Max-Age: 1000");
    header("Allow: OPTIONS, GET");
    header("Cache-Control: no-cache");
    header("Content-Type: application/json; charset=utf-8");
    header("Pragma: no-cache");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Strict-transport-security: max-age=15724800, includeSubdomains");
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-Permitted-Cross-Domain-Policies: none");
    header("X-XSS-Protection: 1; mode=block");

	require_once $_SERVER['DOCUMENT_ROOT'] . "/assets/script/globals.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header_public_latam; ?>
	</head>

	<body data-rsssl="1" class="page-template page-template-elementor_header_footer page page-id-4181 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-27624 elementor-page elementor-page-4181">

		<?php ($MASTER_ENVIRONMENT == "prod" ? $body_public : null); ?>

		<script data-cfasync="false">var ewww_webp_supported = false;</script>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-dark-grayscale">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0 0.49803921568627" />
						<fefuncg type="table" tableValues="0 0.49803921568627" />
						<fefuncb type="table" tableValues="0 0.49803921568627" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-grayscale">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0 1" />
						<fefuncg type="table" tableValues="0 1" />
						<fefuncb type="table" tableValues="0 1" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-purple-yellow">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0.54901960784314 0.98823529411765" />
						<fefuncg type="table" tableValues="0 1" />
						<fefuncb type="table" tableValues="0.71764705882353 0.25490196078431" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-blue-red">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0 1" />
						<fefuncg type="table" tableValues="0 0.27843137254902" />
						<fefuncb type="table" tableValues="0.5921568627451 0.27843137254902" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-midnight">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0 0" />
						<fefuncg type="table" tableValues="0 0.64705882352941" />
						<fefuncb type="table" tableValues="0 1" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-magenta-yellow">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0.78039215686275 1" />
						<fefuncg type="table" tableValues="0 0.94901960784314" />
						<fefuncb type="table" tableValues="0.35294117647059 0.47058823529412" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-purple-green">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0.65098039215686 0.40392156862745" />
						<fefuncg type="table" tableValues="0 1" />
						<fefuncb type="table" tableValues="0.44705882352941 0.4" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-blue-orange">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
					<fecomponenttransfer color-interpolation-filters="sRGB">
						<fefuncr type="table" tableValues="0.098039215686275 1" />
						<fefuncg type="table" tableValues="0 0.66274509803922" />
						<fefuncb type="table" tableValues="0.84705882352941 0.41960784313725" />
						<fefunca type="table" tableValues="1 1" />
					</fecomponenttransfer>
					<fecomposite in2="SourceGraphic" operator="in" />
				</filter>
			</defs>
		</svg>

		<div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
			<div data-elementor-type="wp-post" data-elementor-id="27693" class="elementor elementor-27693" data-elementor-settings="[]">
				<div class="elementor-inner">
					<div class="elementor-section-wrap">

						<?php echo $section_header_latam; ?>

						<?php echo $section_menu_latam; ?>

					</div>
				</div>
			</div>
		</div>

		<div data-elementor-type="wp-page" data-elementor-id="4181" class="elementor elementor-4181" data-elementor-settings="[]" >
			<div class="elementor-inner">
				<div class="elementor-section-wrap">

					<section class="elementor-section elementor-top-section elementor-element elementor-element-219fd4ba elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="219fd4ba" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d8edb77" data-id="3d8edb77" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-db21e89 elementor-widget elementor-widget-heading" data-id="db21e89" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Precio &amp; Caracter&iacute;sticas
													</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-c1bd7b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c1bd7b8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5b7d459" data-id="5b7d459" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-c065379 elementor-widget elementor-widget-spacer" data-id="c065379" data-element_type="widget" data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-9d275e1 elementor-widget elementor-widget-heading" data-id="9d275e1" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														EA Dow Jones US30
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-0dd4688 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0dd4688" data-element_type="widget" data-widget_type="icon-list.default">
												<div class="elementor-widget-container">
													<ul class="elementor-icon-list-items">
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Estrategia 100% automatizada para MT5
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Diseñado para operaciones intraday y swing trading
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Estrategia basada en matrices y variedades matemáticas interpoladas en distintas gradientes de tiempo
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Activos financieros(CFD's) - Índices Americanos: US30
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Temporalidad: 1 hora
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Todas las operaciones tienen Stop Loss y Take Profit
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Todas las operaciones se pueden parametrizar en horarios de negociación acorde al activo negociado
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Gestión de Riesgo incorporado
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Asesoría y Help desk 24x7
															</span>
														</li>
														<li class="elementor-icon-list-item">
															<span class="elementor-icon-list-icon">
																<i aria-hidden="true" class="far fa-check-square"></i>
															</span>
															<span class="elementor-icon-list-text">
																Sugerimos usar a <b>Pepperstone</b> como bróker ya que en un análisis comparativo con otros brokers, ha sido con el que mejores resultados ha obtenido nuestro Asesor Experto
															</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-15e7c51" data-id="15e7c51" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-2fd4ab7 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel" data-id="2fd4ab7" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
												<div class="elementor-widget-container">
													<div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
														<div class="elementor-image-carousel swiper-wrapper">
															<div class="swiper-slide">
																<figure class="swiper-slide-inner">
																	<img class="swiper-slide-image lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwAAAAJmAQAAAADDINrQAAAAAnRSTlMAAHaTzTgAAABQSURBVHja7cEBDQAAAMKg909tDwcUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvBropgAB1XuoyQAAAABJRU5ErkJggg==" alt="Gugol-Quants" data-src="../img/gugol-quants-robot.webp" loading="lazy">
																	<noscript><img class="swiper-slide-image" src="/img/gugol-quants-robot.webp" alt="Gugol-Quants" data-eio="l"></noscript>
																</figure>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-5a048518 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5a048518" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2463a9f6" data-id="2463a9f6" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-cb136f6 elementor-widget elementor-widget-heading" data-id="cb136f6" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default"><?php echo $brand_camelcase; ?></h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-7c3e1a5e elementor-widget elementor-widget-heading" data-id="7c3e1a5e" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Planes de Precios
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-50fa603a elementor-widget elementor-widget-text-editor" data-id="50fa603a" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>Elige el plan que m&aacute;s se ajuste a tus necesidades</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-0673c35 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0673c35" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10a92b8" data-id="10a92b8" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-46962242 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="46962242" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-104b7544" data-id="104b7544" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"></div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c04368e" data-id="3c04368e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-6844647e elementor-widget elementor-widget-heading" data-id="6844647e" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h1 class="elementor-heading-title elementor-size-default">
																				Plan Mensual
																			</h1>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-86a9dde elementor-widget elementor-widget-image" data-id="86a9dde" data-element_type="widget" data-widget_type="image.default">
																		<div class="elementor-widget-container">
																			<div style="background-color:#000000; font-size:3.9rem; color:#FFFFFF; padding: 2rem 0 2rem 0; font-weight: 400;">
																				USD 49.90
																			</div>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-7c6554be elementor-widget elementor-widget-text-editor" data-id="7c6554be" data-element_type="widget" data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-text-editor elementor-clearfix"></div>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-11566ac elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="11566ac" data-element_type="widget" data-widget_type="icon-list.default">
																		<div class="elementor-widget-container">
																			<ul class="elementor-icon-list-items">
																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Gesti&oacute;n de Riesgo Incorporada. Todas las operaciones cuentan con TP y SL
																					</span>
																				</li>

																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Soporte e Instalaci&oacute;n
																					</span>
																				</li>

																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Acceso a grupo privado de Telegram
																					</span>
																				</li>

																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Hasta 5 activaciones
																					</span>
																				</li>

																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Garant&iacute;a de MQL como intermediario
																					</span>
																				</li>

																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						Disponible su uso para MT5.<br>Para mejores resultados, sugerimos usarlo con Pepperstone
																					</span>
																				</li>
																			</ul>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-64e7354a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="64e7354a" data-element_type="widget" data-widget_type="divider.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-divider">
																				<span class="elementor-divider-separator"></span>
																			</div>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-7146a03 elementor-align-center elementor-widget elementor-widget-button" data-id="7146a03" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="https://www.mql5.com/es/market/product/99047?source=Site+Market+MT5+Search+Rating006%3agugol_quants%2cgugol+quants" target="_blank" id="buy-button" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							Comprar <i class="ri-external-link-fill"></i>
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bd7be83" data-id="bd7be83" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"></div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-69a80ab8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69a80ab8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bd1184" data-id="7bd1184" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-1285e709 elementor-widget elementor-widget-elementskit-client-logo" data-id="1285e709" data-element_type="widget" data-widget_type="elementskit-client-logo.default">
												<div class="elementor-widget-container">
													<div class="ekit-wid-con">
														<div class="elementskit-clients-slider slick-slider  simple_logo_image" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;1500&quot;,&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;slidesPerColumn&quot;:1,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1}}}" data-direction>
															<div class="swiper-container">
																<div class="elementskit-client-slider-item swiper-slide ">
																	<div class="slick-slide">
																		<div class="single-client image-switcher" title="Pepperstone">
																			<div class="content-image">
																				<a href="https://trk.pepperstonepartners.com/aff_c?offer_id=367&aff_id=30311" target="_blank">
																					<img width="480" height="355" src="/img/provider-pepperstone.webp" alt data-src="/img/provider-pepperstone.webp" loading="lazy" data-srcset="/img/provider-pepperstone.webp 480w, /img/provider-pepperstone.webp 300w" data-sizes="auto" class="lazyload">
																					<noscript>
																						<img width="480" height="355" src="/img/provider-pepperstone,webp" class alt srcset="/img/provider-pepperstone.webp 480w, /img/provider-pepperstone.webp 300w" sizes="(max-width: 480px) 100vw, 480px" data-eio="l">
																					</noscript>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-6d7e7b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6d7e7b7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c2b6d7" data-id="2c2b6d7" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-560e782 elementor-widget elementor-widget-heading" data-id="560e782" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														¿Tienes dudas?
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-0dc6d2e elementor-widget elementor-widget-text-editor" data-id="0dc6d2e" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>Estaremos encantados de ayudarte a resolver todas tus dudas</p>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-338620d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="338620d" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62bd30b" data-id="62bd30b" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-88439fb elementor-align-center elementor-widget elementor-widget-button" data-id="88439fb" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="/latam/preguntas-y-respuestas" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							preguntas frecuentes
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8e4406c" data-id="8e4406c" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-dcb4f7b elementor-align-center elementor-widget elementor-widget-button" data-id="dcb4f7b" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="/latam/contacto" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							contacta con nosotros
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<?php echo $section_risk_statement_latam; ?>

				</div>
			</div>
		</div>

		<?php echo $section_footer_latam; ?>


		<div id="cookies-eu-banner-closed">
			<span>Privacidad</span>
		</div>

		<link rel="stylesheet" id="e-animations-css" href="/css/animations.min.css" type="text/css" media="all">

		<script type="text/javascript" id="eio-lazy-load-js-before">
			var eio_lazy_vars = { "exactdn_domain": "", "skip_autoscale": 0, "threshold": 0 };
		</script>

		<script type="text/javascript" src="/js/lazysizes.min.js" id="eio-lazy-load-js"></script>
		<script type="text/javascript" src="/js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
		<script type="text/javascript" src="/js/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
		<script type="text/javascript" src="/js/frontend-script.js" id="elementskit-framework-js-frontend-js"></script>
		<script type="text/javascript" src="/js/widget-scripts.js" id="ekit-widget-scripts-js"></script>
		<script type="text/javascript" src="/js/ResizeSensor.min.js" id="jet-resize-sensor-js"></script>
		<script type="text/javascript" src="/js/sticky-sidebar.min.js" id="jet-sticky-sidebar-js"></script>
		<script type="text/javascript" src="/js/jquery.jsticky.js" id="jsticky-js"></script>
		<script type="text/javascript" src="/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
		<script type="text/javascript" src="/js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
		<script type="text/javascript" src="/js/waypoints.min.js" id="elementor-waypoints-js"></script>
		<script type="text/javascript" src="/js/core.min.js" id="jquery-ui-core-js"></script>
		<script type="text/javascript" src="/js/swiper.min.js" id="swiper-js"></script>
		<script type="text/javascript" src="/js/dialog.min.js" id="elementor-dialog-js"></script>
		<script type="text/javascript" id="elementor-frontend-js-before">
			var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Compartir en Facebook", "shareOnTwitter": "Compartir en Twitter", "pinIt": "Pinear", "download": "Descargar", "downloadImage": "Descargar imagen", "fullscreen": "Pantalla completa", "zoom": "Zoom", "share": "Compartir", "playVideo": "Reproducir v\u00eddeo", "previous": "Anterior", "next": "Siguiente", "close": "Cerrar" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "M\u00f3vil", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "M\u00f3vil grande", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tableta", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tableta grande", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Port\u00e1til", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Pantalla grande", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.5.4", "is_static": false, "experimentalFeatures": { "e_import_export": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "https:\/\/robotsdaytrading.com\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 4125, "title": "%C2%BFQUIEN%20SOMOS%3F%20Robots%20Day%20Trading%20S.L.%20%E2%89%AB%20Trading%20Algor%C3%ADtmico", "excerpt": "", "featuredImage": false } };
		</script>
		<script type="text/javascript" src="/js/frontend.min.js" id="elementor-frontend-js"></script>
		<script type="text/javascript" id="jet-sticky-frontend-js-extra">
			/* <![CDATA[ */
				var JetStickySettings = { "elements_data": { "sections": [], "columns": [] } };
			/* ]]> */
		</script>
		<script type="text/javascript" src="/js/jet-sticky-frontend.js" id="jet-sticky-frontend-js"></script>
		<script type="text/javascript" src="/js/animate-circle.js" id="animate-circle-js"></script>
		<script type="text/javascript" src="/js/elementor.js" id="elementskit-elementor-js"></script>
		<script type="text/javascript" src="/js/preloaded-modules.min.js" id="preloaded-modules-js"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				'use strict';

				window.Adapta_RGPD = window.Adapta_RGPD || {};

				Adapta_RGPD.getCookie = function (name) {
					var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
					return v ? v[2] : null;
				}

				Adapta_RGPD.setCookie = function (name, value) {
					var date = new Date();
					date.setTime(date.getTime() + this.cookieTimeout);
					document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
				};

				// Eliminar una cookie.
				Adapta_RGPD.deleteCookie = function (name) {
					var hostname = document.location.hostname.replace(/^www\./, ''), commonSuffix = '; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=/';
					document.cookie = name + '=; domain=.' + hostname + commonSuffix;
					document.cookie = name + '=' + commonSuffix;
				};

				Adapta_RGPD.onlyUnique = function (value, index, self) {
					return self.indexOf(value) === index;
				};

				Adapta_RGPD.removeItemOnce = function (arr, value) {
					var index = arr.indexOf(value);
					if (index > -1) {
						arr.splice(index, 1);
					}
					return arr;
				};

				// load events
				Adapta_RGPD.cargarEventos = function () {
					$("[id^='custom-cookies-accept']").click(function () {
						var consents = new Array();
						var value = Adapta_RGPD.getCookie('hasConsents');
						if (null != value && value.length) {
							consents = value.split("+")
						}

						var consent = this.dataset.consent;
						consents.push(consent)

						var unique = consents.filter(Adapta_RGPD.onlyUnique);
						Adapta_RGPD.setCookie('hasConsents', unique.join('+'));
						Adapta_RGPD.setCookie('hasConsent', true);
					});

					$("[id^='custom-cookies-reject']").click(function () {
						const trackingCookiesNames = ['__utma', '__utmb', '__utmc', '__utmt', '__utmv', '__utmz', '_ga', '_gat', '_gid', '_fbp'];
						var consent = this.dataset.consent; // Ej. ANLTCS

						var value = Adapta_RGPD.getCookie('hasConsents');
						if (null == value) {
							return
						}

						var consents = value.split("+")
						consents = Adapta_RGPD.removeItemOnce(consents, consent)
						Adapta_RGPD.setCookie('hasConsents', consents.join('+'));
						if ('ANLTCS' == consent) {
							trackingCookiesNames.map(Adapta_RGPD.deleteCookie);
						}
					});

					// Evento clic en bot&oacute;n Rechazar todo.
					$("#cookies-eu-banner-closed, .cookies-eu-banner-closed").click(function () {
						var date = new Date();
						date.setTime(date.getTime() + 33696000000);
						document.cookie = 'hasConsent' + '=' + 'configure' + ';expires=' + date.toUTCString() + ';path=/';
						window.location.reload();
					});
				}

				// init
				Adapta_RGPD.init = function () {
					jQuery(document).ready(function ($) {
						var bots = /bot|crawler|spider|crawling/i;
						var isBot = bots.test(navigator.userAgent);
						if (isBot) {
							return;
						}

						new CookiesEuBanner(function () {
							var ajaxurl = 'https://robotsdaytrading.com/wp-admin/admin-ajax.php';
							var data = {
								action: 'accept_cookie_consent',
								security: '715c2cb3e3'
							};
							$.post(ajaxurl, data, function (response) {
								if (undefined !== response.success && false === response.success) {
									return;
								}
								var scripts = response.split(",");
								scripts.forEach(function (src) {
									var script = document.createElement('script');
									script.setAttribute("src", src);
									document.getElementsByTagName("head")[0].appendChild(script);
								});
							});
						}, true);

						Adapta_RGPD.cargarEventos();
					});
				}

				Adapta_RGPD.init();
			});
		</script>
	</body>
</html>
