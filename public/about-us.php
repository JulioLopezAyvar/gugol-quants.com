<?php
	session_start();
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file("/var/www/resources/env-gq.sh", true);
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
		<?php echo $header_public; ?>
	</head>

	<body data-rsssl="1" class="page-template page-template-elementor_header_footer page page-id-4125 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-27624 elementor-page elementor-page-4125">

		<?php ($MASTER_ENVIRONMENT == "prod" ? $body_public : null); ?>

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

		<div data-elementor-type="wp-page" data-elementor-id="4125" class="elementor elementor-4125" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">

					<section class="elementor-section elementor-top-section elementor-element elementor-element-4769b738 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4769b738" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-12dc53b1" data-id="12dc53b1" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-1d5cba97 elementor-widget elementor-widget-heading" data-id="1d5cba97" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														About Us
													</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-25bdb8cd" data-id="25bdb8cd" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-6e4d2ff1 elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e4d2ff1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-71379e15" data-id="71379e15" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-440b2d9 elementor-widget elementor-widget-heading" data-id="440b2d9" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Company
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-5a4bc669 elementor-widget elementor-widget-text-editor" data-id="5a4bc669" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>
															<?php echo $brand_camelcase; ?>, is made up of a multidisciplinary team with years of experience in different financial markets. We have Trading Systems Analysts, Computer Engineers, Data Scientists and Process Management Experts. After thousands of accumulated hours analyzing the financial markets, we have developed multiple algorithmic trading systems to achieve consistent results in the products we offer. The results of our automated systems are public and available to any user. This decision stems from the dark image and lack of transparency shown by most trading academies and system vendors. We cannot guarantee future profits, we only rely on the &quot;memory&quot; of the market and the recurring repetition of the behavior of different financial instruments, taking advantage of it to obtain great returns with the use of algorithmic trading.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1182bbb2" data-id="1182bbb2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<iframe width="100%" height="400" src="<?php echo $url_video_about_us; ?>" title="Gugol Quants" frameborder="0" allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-3ed41c70 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3ed41c70" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1520d87" data-id="1520d87" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-41b95cf9 elementor-widget elementor-widget-heading" data-id="41b95cf9" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Automate your investment
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-4b42cd25 elementor-widget elementor-widget-text-editor" data-id="4b42cd25" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>Without programming, with assistance, with follow-up. It's time to automate your trading operations</p>
													</div>
												</div>
											</div>

											<div class="elementor-element elementor-element-421eb339 elementor-align-center elementor-widget elementor-widget-button" data-id="421eb339" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="contact" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	contact us
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

					<section class="elementor-section elementor-top-section elementor-element elementor-element-69a80ab8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69a80ab8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7bd1184" data-id="7bd1184" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-1285e709 elementor-widget elementor-widget-elementskit-client-logo" data-id="1285e709" data-element_type="widget" data-widget_type="elementskit-client-logo.default">
												<div class="elementor-widget-container">
													<div class="ekit-wid-con">
														<div class="elementskit-clients-slider slick-slider  simple_logo_image" data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;1500&quot;,&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1,&quot;slidesPerColumn&quot;:1,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1}}}" data-direction>
															<div class="swiper-container">
																<div class="slick-list swiper-wrapper">
																	<div class="elementskit-client-slider-item swiper-slide ">
																		<div class="slick-slide">
																			<div class="single-client image-switcher" title="Meta Trader">
																				<div class="content-image">
																					<img width="480" height="355" src="/img/provider-metatrader.webp" alt data-src="/img/provider-metatrader.webp" loading="lazy" data-srcset="/img/provider-metatrader.webp 480w, /img/provider-metatrader.webp 300w" data-sizes="auto" class="lazyload">
																					<noscript>
																						<img width="480" height="355" src="/img/provider-metatrader,webp" class alt srcset="/img/provider-metatrader.webp 480w, /img/provider-metatrader.webp 300w" sizes="(max-width: 480px) 100vw, 480px" data-eio="l">
																					</noscript>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="elementskit-client-slider-item swiper-slide ">
																		<div class="slick-slide">
																			<div class="single-client image-switcher" title="MQL5">
																				<div class="content-image">
																					<img width="600" height="257" src="/img/provider-mql5.webp" alt data-src="/img/provider-mql5.webp" loading="lazy" data-srcset="/img/provider-mql5.webp 600w, /img/provider-mql5.webp 300w" data-sizes="auto" class="lazyload">
																					<noscript>
																						<img width="600" height="257" src="/img/provider-mql5.webp" class alt srcset="/img/provider-mql5.webp 600w, /img/provider-mql5.webp 300w" sizes="(max-width: 600px) 100vw, 600px" data-eio="l">
																					</noscript>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="elementskit-client-slider-item swiper-slide ">
																		<div class="slick-slide">
																			<div class="single-client image-switcher" title="Trading View">
																				<div class="content-image">
																					<img width="500" height="500" src="/img/provider-tradingview.webp" alt data-src="/img/provider-tradingview.webp" loading="lazy" data-srcset="/img/provider-tradingview.webp 500w, /img/provider-tradingview.webp 300w, /img/provider-tradingview.webp 150w" data-sizes="auto" class="lazyload">
																					<noscript>
																						<img width="500" height="500" src="/img/provider-tradingview.webp" class alt srcset="/img/provider-tradingview.webp 500w, /img/provider-tradingview.webp 300w, /img/provider-tradingview.webp 150w" sizes="(max-width: 500px) 100vw, 500px" data-eio="l">
																					</noscript>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<ul class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></ul>
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

					<?php echo $section_risk_statement; ?>

				</div>
			</div>
		</div>

		<?php echo $section_footer; ?>

		<div id="cookies-eu-banner-closed">
			<span>Privacy</span>
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
