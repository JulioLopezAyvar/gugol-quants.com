<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	session_start();
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

	#if(!isset($_COOKIE['visit']) && $_COOKIE['visit'] != "true") {
		/*
			1 hour		time() + 3600
			12 hours	time() + 43200
			24 hours	time() + 86400
			15 days		time() + 1296000
			30 days		time() + 2592000
		*/
		#setcookie("visit", "true", time() + 2592000, "/", "", 1);
	#}

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

	require $_SERVER['DOCUMENT_ROOT'] . "/assets/script/globals.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header_public; ?>
	</head>

	<body data-rsssl="1" class="home page-template page-template-elementor_header_footer page page-id-1076 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-27624 elementor-page elementor-page-1076">

		<?php
			if(!isset($_COOKIE['visit'])) {
				?>
				<script>
					$(document).ready(function(){
						$("#modal_home").modal('show');
					});
				</script>
				<?php
			}
		?>

		<div id="modal_home" class="modal fade">
			<div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<iframe width="100%" height="400" src="<?php echo $url_video_home; ?>" title="Gugol Quants" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<?php echo $body_public; ?>

		<script data-cfasync="false">var ewww_webp_supported = false;</script>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
			<defs>
				<filter id="wp-duotone-dark-grayscale">
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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
					<fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0" />
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

						<?php echo $section_header; ?>

						<?php echo $section_menu; ?>

					</div>
				</div>
			</div>
		</div>

		<div data-elementor-type="wp-page" data-elementor-id="1076" class="elementor elementor-1076" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-739eacea elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="739eacea" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41fae56a" data-id="41fae56a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-793df530 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="793df530" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														<div class="en">BE AN EXPERT ADVISOR</div>
														<div class="es">S&Eacute; UN ASESOR EXPERTO</div>
													</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-54b0da16 elementor-widget elementor-widget-text-editor" data-id="54b0da16" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p class="en">
															At <?php echo $brand_camelcase; ?> we develop advanced trading systems based on proprietary mathematical modulations that are unique in the market.
															<br>
															Our EA has been structured and developed by professionals in the financial and technological sector, so we are at the global forefront.
															<br>
															Join, invest and grow!
														</p>
														<p class="es">
															En <?php echo $brand_camelcase; ?> desarrollamos sistemas avanzados de trading basados en modulados matem&aacute;ticos propios y  &uacute;nicos en el mercado.
															<br>
															Nuestro EA, ha sido estructurado y elaborado por profesionales en el sector financiero y tecnol&oacute;gico,  por lo que estamos a la vanguardia global.
															<br>
															&Uacute;nete, invierte y crece!
														</p>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-b3e571e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b3e571e" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4007786" data-id="4007786" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-88af069 elementor-align-left elementor-widget elementor-widget-button" data-id="88af069" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="contact" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							<div class="en">CONTACT US</div>
																							<div class="es">CONT&Aacute;CTANOS</div>
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-df926e5" data-id="df926e5" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-19dec933 elementor-align-left elementor-widget elementor-widget-button" data-id="19dec933" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="store" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							<div class="en">store</div>
																							<div class="es">tienda</div>
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

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9317ac4 elementor-hidden-phone" data-id="9317ac4" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-4912792 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4912792" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4d6bf71" data-id="4d6bf71" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b08b696" data-id="b08b696" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7abb530" data-id="7abb530" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-66ee07a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66ee07a6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3177aa1f" data-id="3177aa1f" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-370793b1 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="370793b1" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
												<div class="elementor-widget-container">
													<div class="ekit-wid-con">
														<div class="elementskit-infobox text-center text- icon-top-align elementor-animation-">
															<div class="elementskit-box-header elementor-animation-">
																<div class="elementskit-info-box-icon">
																	<i aria-hidden="true" class="elementkit-infobox-icon icon icon-smart icon-blue"></i>
																</div>
															</div>

															<div class="box-body">
																<h3 class="elementskit-info-box-title">
																	<div class="en">No Emotions</div>
																	<div class="es">Elimina Emociones</div>
																</h3>
																<p class="en">Eliminate emotions from your investments, it is one of the main causes of capital loss</p>
																<p class="es">Elimina las emociones de tus inversiones, es una de las principales causas de perdida de capital</p>
																<div class="box-footer disable_hover_button">
																	<div class="btn-wraper">
																		<a href="store" class="elementskit-btn whitespace--normal elementor-animation-float">
																			<div class="en">store <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
																			<div class="es">tienda <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
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

								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7c148bb0" data-id="7c148bb0" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-20d8dfac ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="20d8dfac" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
												<div class="elementor-widget-container">
													<div class="ekit-wid-con">
														<div class="elementskit-infobox text-center text- icon-top-align elementor-animation-">
															<div class="elementskit-box-header elementor-animation-">
																<div class="elementskit-info-box-icon">
																	<i aria-hidden="true" class="elementkit-infobox-icon far fa-chart-bar"></i>
																</div>
															</div>
															<div class="box-body">
																<h3 class="elementskit-info-box-title">
																	<div class="en">High frequency</div>
																	<div class="es">Alta Frecuencia</div>
																</h3>
																<p class="en">High-speed order execution avoiding human error</p>
																<p class="es">Ejecuci&oacute;n de ordenes de alta velocidad evitando errores humanos</p>
																<div class="box-footer disable_hover_button">
																	<div class="btn-wraper">
																		<a href="store" class="elementskit-btn whitespace--normal elementor-animation-float">
																			<div class="en">store <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
																			<div class="es">tienda <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
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

								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4139976d" data-id="4139976d" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-3bb4a8d7 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="3bb4a8d7" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
												<div class="elementor-widget-container">
													<div class="ekit-wid-con">
														<div class="elementskit-infobox text-center text- icon-top-align elementor-animation-">
															<div class="elementskit-box-header elementor-animation-">
																<div class="elementskit-info-box-icon">
																	<i aria-hidden="true" class="elementkit-infobox-icon icon icon-customer-support-2 icon-blue"></i>
																</div>
															</div>
															<div class="box-body">
																<h3 class="elementskit-info-box-title">
																	<div class="en">Support</div>
																	<div class="es">Soporte</div>
																</h3>
																<p class="en">Our Trading EA have Human Support, you will not feel abandoned anymore</p>
																<p class="es">Nuestros EA de Trading tienen Soporte Humano, no te sentir&aacute;s abandonado</p>
																<div class="box-footer disable_hover_button">
																	<div class="btn-wraper">
																		<a href="store" class="elementskit-btn whitespace--normal elementor-animation-float">
																			<div class="en">store <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
																			<div class="es">tienda <i aria-hidden="true" class="icon icon-right-arrow1"></i></div>
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
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-71fbccf2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="71fbccf2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6732ef20" data-id="6732ef20" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">

											<div class="elementor-element elementor-element-4d914d90 elementor-widget elementor-widget-image" data-id="4d914d90" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<div class="elementor-image">
														<img width="800" height="600" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAJYAQAAAACyDb/dAAAAAnRSTlMAAHaTzTgAAABQSURBVHgB7cEBAQAAAIKg/q92SMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4EDsuAABRJzn3QAAAABJRU5ErkJggg==" class="attachment-full size-full lazyload" alt data-src="/img/trading-evolution.webp" loading="lazy" data-srcset="/img/trading-evolution.webp 800w, /img/trading-evolution.webp 300w, /img/trading-evolution.webp 768w" data-sizes="auto">
														<noscript>
															<img width="800" height="600" src="/img/trading-evolution.webp" class="attachment-full size-full" alt srcset="/img/trading-evolution.webp 800w, /img/trading-evolution.webp 300w, /img/trading-evolution.webp 768w" sizes="(max-width: 800px) 100vw, 800px" data-eio="l">
														</noscript>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-79a7453f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="79a7453f" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5a593cbd" data-id="5a593cbd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-30e27145 elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="30e27145" data-element_type="widget" data-widget_type="icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-icon-box-wrapper">
																				<div class="elementor-icon-box-icon">
																					<span class="elementor-icon elementor-animation-">
																					</span>
																				</div>
																				<div class="elementor-icon-box-content">
																					<h3 class="elementor-icon-box-title">
																					</h3>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3ad018d3" data-id="3ad018d3" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-15ab61cf elementor-position-left elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="15ab61cf" data-element_type="widget" data-widget_type="icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-icon-box-wrapper">
																				<div class="elementor-icon-box-icon">
																					<span class="elementor-icon elementor-animation-">
																					</span>
																				</div>
																				<div class="elementor-icon-box-content">
																					<h3 class="elementor-icon-box-title">
																					</h3>
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
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2534ef4f" data-id="2534ef4f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-69330260 elementor-widget elementor-widget-heading" data-id="69330260" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default"><?php echo $brand_camelcase; ?></h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-60950c5d elementor-widget elementor-widget-heading" data-id="60950c5d" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h3 class="elementor-heading-title elementor-size-default">
														<div class="en">ALGORITHM TRADING</div>
														<div class="es">ALGORITMO DE TRADING</div>
													</h3>
												</div>
											</div>

											<div class="elementor-element elementor-element-7a17c042 elementor-widget elementor-widget-text-editor" data-id="7a17c042" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<div class="en">
															Did you know that more than 80% of the movements in the US stock market and in the foreign exchange market are made by machines, with algorithmic trading?
															<br>
															Fortunately, with significant technological advances, algorithmic trading strategies are no longer only accessible to large institutional clients. That is why VC invites you to be part of the EVOLUTION OF TRADING.
															<br>
															Now you can form and be part of this type of 100% automated strategy, accessing through our trading EA.
															<br>
															Our FINANCIAL ALGORITHM is based on and designed under our own mathematical modeling, which makes it unique in the market.
															<br>
															One of the biggest benefits of algorithmic trading is the fact that it eliminates human error.
															<br>
															Managing emotions like fear or greed is the biggest hurdle for all traders, a problem that algorithmic trading strategies simply don't have.
															<br>
															INVEST AND GROW!.
														</div>
														<div class="es">
															¿Sab&iacute;as que m&aacute;s del 80 % de los movimientos en el mercado de valores de EEUU y en el mercado de divisas se hacen mediante m&aacute;quinas de trading algor&iacute;tmico?
															<br>
															Afortunadamente, con los importantes avances tecnol&oacute;gicos, las estrategias de trading algor&iacute;tmico ya no son solo accesible a los grandes clientes institucionales. Por eso <?php echo $brand_uppercase; ?> te invita a que seas parte de la EVOLUCION DEL TRADING.
															<br>
															Ahora T&uacute; puedes formar y ser parte de este tipo de estrategia 100% automatizada, accediendo mediante nuestros EA de trading.
															<br>
															Nuestro ALGORITMO FINANCIERO est&aacute; basado y dise&ntilde;ado bajo un modulado matem&aacute;tico propio, lo cual lo hace &uacute;nico en el mercado.
															<br>
															Uno de los mayores beneficios del trading algor&iacute;tmico es el hecho de que elimina el error humano.
															<br>
															Manejar emociones como el miedo o la codicia es el mayor obst&aacute;culo para todos los traders, un problema que las estrategias de trading algor&iacute;tmico simplemente no tienen.
															<br>
															INVIERTE Y CRECE!.
														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-7ba37144 elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-button" data-id="7ba37144" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="about-us" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	<div class="en">ABOUT US</div>
																	<div class="es">SOBRE NOSOTROS</div>
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

					<section class="elementor-section elementor-top-section elementor-element elementor-element-1f1e8a46 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f1e8a46" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5fbaec46" data-id="5fbaec46" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-50fa18f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="50fa18f7" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dd05d6a" data-id="dd05d6a" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-28cb2c5e elementor-widget elementor-widget-heading" data-id="28cb2c5e" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2 class="elementor-heading-title elementor-size-default"> <?php echo $brand_uppercase; ?></h2>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-73193a00 elementor-widget elementor-widget-heading" data-id="73193a00" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2 class="elementor-heading-title elementor-size-default">
																				<div class="en">Benefits</div>
																				<div class="es">Beneficios</div>
																			</h2>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-5542f27d elementor-widget elementor-widget-text-editor" data-id="5542f27d" data-element_type="widget" data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-text-editor elementor-clearfix">
																				<p class="en">We list some of the benefits and advantages that you will have with our company</p>
																				<p class="es">Te enumeramos algunos de los beneficios y ventajas que tendr&aacute;s con nuestra empresa</p>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-df926e5" data-id="df926e5" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-19dec933 elementor-align-center elementor-widget elementor-widget-button" data-id="19dec933" data-element_type="widget" data-widget_type="button.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-button-wrapper">
																							<a href="store" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
																								<span class="elementor-button-content-wrapper">
																									<span class="elementor-button-text">
																										<div class="en">store</div>
																										<div class="es">tienda</div>
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
														</div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-47198372" data-id="47198372" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-41f9d84d ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="41f9d84d" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-infobox text-center text- icon-top-align elementor-animation- gradient-active hover_from_bottom">
																					<div class="elementskit-box-header elementor-animation-">
																						<div class="elementskit-info-box-icon">
																							<i aria-hidden="true" class="elementkit-infobox-icon icon icon-save-money icon-light-blue"></i>
																						</div>
																					</div>
																					<div class="box-body">
																						<h3 class="elementskit-info-box-title">
																							<div class="en">Automatic Investment</div>
																							<div class="es">Inversi&oacute;n Autom&aacute;tica</div>
																						</h3>
																						<p class="en">You are not in front of the screen for hours to make manual trading operations</p>
																						<p class="es">No est&eacute;s horas delante de la pantalla para hacer operaciones manueales de trading</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-41a7c2d9" data-id="41a7c2d9" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-66240ce2 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="66240ce2" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-infobox text-center text- icon-top-align elementor-animation- gradient-active hover_from_bottom">
																					<div class="elementskit-box-header elementor-animation-">
																						<div class="elementskit-info-box-icon">
																							<i aria-hidden="true" class="elementkit-infobox-icon icon icon-page_search"></i>
																						</div>
																					</div>
																					<div class="box-body">
																						<h3 class="elementskit-info-box-title">
																							<div class="en">Reports</div>
																							<div class="es">Informes</div>
																						</h3>
																						<p class="en">We demonstrate our profitability with data</p>
																						<p class="es">Demostramos nuestra rentabilidad con datos</p>
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

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-5e02f967 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5e02f967" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7e1df11a" data-id="7e1df11a" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-90e5678 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="90e5678" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-infobox text-center text-center icon-top-align elementor-animation- gradient-active hover_from_bottom">
																					<div class="elementskit-box-header elementor-animation-">
																						<div class="elementskit-info-box-icon">
																							<i aria-hidden="true" class="elementkit-infobox-icon icon icon-coins-1 icon-light-blue"></i>
																						</div>
																					</div>
																					<div class="box-body">
																						<h3 class="elementskit-info-box-title">
																							<div class="en">High speed</div>
																							<div class="es">Alta Velocidad</div>
																						</h3>
																						<p class="en">This makes it possible to reduce the risk of losses implicit in the delay that manual operations can accumulate.</p>
																						<p class="es">Esto permite reducir el riesgo de p&eacute;rdidas impl&iacute;cito en el retraso que una operativa manual puede llegar a acumular</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-432276fc" data-id="432276fc" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-5e8bb2a7 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="5e8bb2a7" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-infobox text-center text-center icon-top-align elementor-animation- gradient-active hover_from_bottom">
																					<div class="elementskit-box-header elementor-animation-">
																						<div class="elementskit-info-box-icon">
																							<i aria-hidden="true" class="elementkit-infobox-icon icon icon-brain icon-light-blue"></i>
																						</div>
																					</div>
																					<div class="box-body">
																						<h3 class="elementskit-info-box-title">
																							<div class="en">No Emotions</div>
																							<div class="es">Elimina Emociones</div>
																						</h3>
																						<p class="en">Executes your orders according to established rules, this automation frees the trader from the psychological burden of managing the trade</p>
																						<p class="es">Ejecuta sus &oacute;rdenes acorde a reglas establecidas, esta automatizaci&oacute;n libera al trader de la carga psicol&oacute;gica de la gesti&oacute;n del trade</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-102d9900" data-id="102d9900" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-54db80e7 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="54db80e7" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-infobox text-center text-center icon-top-align elementor-animation- gradient-active hover_from_bottom">
																					<div class="elementskit-box-header elementor-animation-">
																						<div class="elementskit-info-box-icon">
																							<i aria-hidden="true" class="elementkit-infobox-icon icon icon-chart2 icon-light-blue"></i>
																						</div>
																					</div>
																					<div class="box-body">
																						<h3 class="elementskit-info-box-title">
																							<div class="en">Trading Plan</div>
																							<div class="es">Plan de Trading</div>
																						</h3>
																						<p class="en">You do not buy only a EA, but also a well-studied strategy and professional support for installation and follow-up</p>
																						<p class="es">No adquieres solo un EA, sino tambi&eacute;n una estrategia bien estudiada y soporte profesional para instalaci&oacute;n y seguimiento</p>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-694bfba9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="694bfba9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-557a3727" data-id="557a3727" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-16d30671 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16d30671" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4678363e" data-id="4678363e" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-281b8885 elementor-widget elementor-widget-heading" data-id="281b8885" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h2 class="elementor-heading-title elementor-size-default">
																				<div class="en">Vanguard Technologies</div>
																				<div class="es">Tecnolog&iacute;a de Vanguardia</div>
																			</h2>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-4bb18a94 elementor-widget elementor-widget-text-editor" data-id="4bb18a94" data-element_type="widget" data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-text-editor elementor-clearfix">
																				<p class="en">At <?php echo $brand_camelcase; ?> we use all the experience acquired by our multidisciplinary professional along with revolutionary technology, which has resulted in <?php echo $brand_camelcase; ?>.</p>
																				<p class="es">En <?php echo $brand_camelcase; ?> usamos toda la experiencia adquirida por nuestro profesional multidisciplinar junto con una tecnolog&iacute;a revolucionaria, que ha dado como resultado <?php echo $brand_camelcase; ?>.</p>
																			</div>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-385c2e33 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="385c2e33" data-element_type="widget" data-widget_type="icon-list.default">
																		<div class="elementor-widget-container">
																			<ul class="elementor-icon-list-items">
																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check icon-light-blue"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						<div class="en">Adapted for any user</div>
																						<div class="es">Adaptado para cualquier usuario</div>
																					</span>
																				</li>
																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check icon-light-blue"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						<div class="en">Based on &quot;market memory&quot;</div>
																						<div class="es">Basado en la &quot;memoria del mercado&quot;</div>
																					</span>
																				</li>
																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check icon-light-blue"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						<div class="en">Presenting transparency to our clients</div>
																						<div class="es">Presentando transparencia a nuestros clientes</div>
																					</span>
																				</li>
																				<li class="elementor-icon-list-item">
																					<span class="elementor-icon-list-icon">
																						<i aria-hidden="true" class="fas fa-check icon-light-blue"></i>
																					</span>
																					<span class="elementor-icon-list-text">
																						<div class="en">Using everything learned to obtain great returns</div>
																						<div class="es">Usando todo lo aprendido para obtener grandes rendimientos</div>
																					</span>
																				</li>
																			</ul>
																		</div>
																	</div>

																	<div class="elementor-element elementor-element-1667a741 elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="1667a741" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="store" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							<div class="en">store</div>
																							<div class="es">tienda</div>
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fd84e9 elementor-hidden-phone" data-id="fd84e9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-6dcf2282 elementor-widget elementor-widget-spacer" data-id="6dcf2282" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner"></div>
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

					<section class="elementor-section elementor-top-section elementor-element elementor-element-31513b88 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="31513b88" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1053f7de" data-id="1053f7de" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-d7772b7 elementor-widget elementor-widget-heading" data-id="d7772b7" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h1 class="elementor-heading-title elementor-size-default">
														<div class="en">Get started in 3 easy steps</div>
														<div class="es">Comienza en 3 sencillos pasos</div>
													</h1>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-4b8ab79 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4b8ab79" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8af4569" data-id="8af4569" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-03bfa09 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="03bfa09" data-element_type="widget" data-widget_type="icon-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-box-wrapper">
														<div class="elementor-icon-box-icon">
															<span class="elementor-icon elementor-animation-">
																<i aria-hidden="true" class="icon icon-team"></i>
															</span>
														</div>
														<div class="elementor-icon-box-content">
															<h3 class="elementor-icon-box-title">
																<span>
																	<div class="en">Schedule a meet</div>
																	<div class="es">Solicita un reuni&oacute;n</div>
																</span>
															</h3>
															<p class="elementor-icon-box-description">
																<div class="en">Contact us if you have doubts about the purchase, we will explain all your doubts or questions in a telematic meeting</div>
																<div class="es">Contacta con nosotros si tienes dudas en la compra, te explicaremos en una reuni&oacute;n telem&aacute;tica todas tus dudas o preguntas</div>
															</p>
														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-9116f86 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="9116f86" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="contact" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	<div class="en">contact us</div>
																	<div class="es">cont&aacute;ctanos</div>
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-205f617" data-id="205f617" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-b61fe0b elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="b61fe0b" data-element_type="widget" data-widget_type="icon-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-box-wrapper">
														<div class="elementor-icon-box-icon">
															<span class="elementor-icon elementor-animation-">
																<i aria-hidden="true" class="fas fa-robot"></i>
															</span>
														</div>

														<div class="elementor-icon-box-content">
															<h3 class="elementor-icon-box-title">
																<span>
																	<div class="en">Select EA</div>
																	<div class="es">Selecciona Asesor Experto</div>
																</span>
															</h3>
															<p class="elementor-icon-box-description">
																<div class="en">Select and acquire the version or package that best suits your needs</div>
																<div class="es">Selecciona y adquiere la versi&oacute;n o paquete que m&aacute;s se ajuste a tus necesidades</div>
															</p>
														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-1d1f0c4 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="1d1f0c4" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="store" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" id="store-button" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	<div class="en">store</div>
																	<div class="es">tienda</div>
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fd98814" data-id="fd98814" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-3c91920 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="3c91920" data-element_type="widget" data-widget_type="icon-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-box-wrapper">
														<div class="elementor-icon-box-icon">
															<span class="elementor-icon elementor-animation-">
																<i aria-hidden="true" class="fas fa-toggle-on"></i>
															</span>
														</div>

														<div class="elementor-icon-box-content">
															<h3 class="elementor-icon-box-title">
																<span>
																	<div class="en">Activate the EA</div>
																	<div class="es">Activa el Asesor Experto</div>
																</span>
															</h3>
															<p class="elementor-icon-box-description">
																<div class="en">Once we install the EA, you will only have to keep it active, and let it operate for you</div>
																<div class="es">Una vez te instalemos el Asesor Experto, solo tendr&aacute;s que mantenerlo activo, y dejar que el opere por ti</div>
															</p>
														</div>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-152636e elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="152636e" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="#" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	<div class="en">view reports</div>
																	<div class="es">ver informes</div>
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

					<section class="elementor-section elementor-top-section elementor-element elementor-element-ad81958 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ad81958" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4acf56a2" data-id="4acf56a2" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-2ef2f2fe elementor-widget elementor-widget-heading" data-id="2ef2f2fe" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														<div class="en">Any question?</div>
														<div class="es">¿Tienes dudas?</div>
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-2a2e4adb elementor-widget elementor-widget-text-editor" data-id="2a2e4adb" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p class="en">We will be happy to help you solve all your doubts</p>
														<p class="es">Estaremos encantados de ayudarte a resolver todas tus dudas</p>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2b48323 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2b48323" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f8563d7" data-id="f8563d7" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-b3d2c47 elementor-align-center elementor-widget elementor-widget-button" data-id="b3d2c47" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="faq" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							<div class="en">F.A.Q.</div>
																							<div class="es">preguntas frecuentes</div>
																						</span>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7078734" data-id="7078734" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-92c819f elementor-align-center elementor-widget elementor-widget-button" data-id="92c819f" data-element_type="widget" data-widget_type="button.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-button-wrapper">
																				<a href="contact" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
																					<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">
																							<div class="en">contact us</div>
																							<div class="es">contacta con nosotros</div>
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

					<?php echo $section_risk_statement; ?>

				</div>
			</div>
		</div>

		<?php echo $section_footer; ?>

		<div id="cookies-eu-banner-closed">
			<span>Privacidad</span>
		</div>

		<link rel="stylesheet" id="e-animations-css" href="css/animations.min.css" type="text/css" media="all">

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
		<script type="text/javascript" src="js/frontend.min.js" id="elementor-frontend-js"></script>
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
		<script>
			$(document).ready(function(){
				<?php
					if (!isset($_SESSION["lang"])) {
						echo "
							$('.en').show();
							$('.es').hide();
						";
					}
					else {
						if ($_SESSION["lang"] == "en") {
							echo "
								$('.en').show();
								$('.es').hide();
							";
						}
						else {
							echo "
								$('.es').show();
								$('.en').hide();
							";
						}

					}
				?>

				$(".lang-en").click(function() {
					$('.es').hide();
					$('.en').show();

					$.post(
						"../assets/script/lang.php",
						{"lang": "en"}
					);
				});

				$(".lang-es").click(function() {
					$('.es').show();
					$('.en').hide();

					$.post(
						"../assets/script/lang.php",
						{"lang": "es"}
					);
				});
			});
		</script>
	</body>
</html>
