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

	require $_SERVER['DOCUMENT_ROOT'] . "/assets/script/globals.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header_public_latam; ?>
	</head>

	<body data-rsssl="1" class="home page-template page-template-elementor_header_footer page page-id-1076 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-27624 elementor-page elementor-page-1076">

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

						<?php echo $section_header_latam; ?>

						<?php echo $section_menu_latam; ?>

					</div>
				</div>
			</div>
		</div>

		<div data-elementor-type="wp-page" data-elementor-id="4620" class="elementor elementor-4620" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-305c048b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="305c048b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5fb77a40" data-id="5fb77a40" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-77068d0b elementor-widget elementor-widget-heading" data-id="77068d0b" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Cont&aacute;ctanos
													</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f1cc928" data-id="5f1cc928" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-7346c5a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7346c5a5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d1f7812" data-id="1d1f7812" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-1ac7dcdd elementor-widget elementor-widget-heading" data-id="1ac7dcdd" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default"><?php echo $brand_camelcase; ?></h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-73d15bf1 elementor-widget elementor-widget-heading" data-id="73d15bf1" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Cont&aacute;ctanos
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-16cc81f6 elementor-widget elementor-widget-text-editor" data-id="16cc81f6" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>Si necesitas m&aacute;s informaci&oacute;n, soporte o cualquier otra cuesti&oacute;n, no dudes en ponerte en contacto con nosotros</p>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-57d25031 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57d25031" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-7645871e ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="7645871e" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="mailto:<?php echo $email_info; ?>" target="_self" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon icon icon-envelope2 icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">
																								Email Informaci&oacute;n
																							</h3>
																							<p><?php echo $email_info; ?></p>
																						</div>
																					</div>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-5d8a6d0 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="5d8a6d0" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="mailto:<?php echo $email_info; ?>" target="_self" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon icon icon-envelope2 icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">
																								Soporte
																							</h3>
																							<p><?php echo $email_info; ?></p>
																						</div>
																					</div>
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

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-d29b003 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d29b003" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-5233a1e1 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="5233a1e1" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="<?php echo $url_whatsapp; ?>" target="_blank" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon ri-whatsapp-line icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">WhatsApp</h3>
																							<p><?php echo $phone_number; ?></p>
																						</div>
																					</div>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-040e8a0 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="040e8a0" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="tel:<?php echo $phone_number; ?>" target="_self" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon ri-phone-line icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">
																								Tel&eacute;fono
																							</h3>
																							<p><?php echo $phone_number; ?></p>
																						</div>
																					</div>
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

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-47bff4f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="47bff4f" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-95433c2 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1bb292d" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="<?php echo $url_discord; ?>" target="_blank" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon ri-discord-line icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">Discord</h3>
																							<p><?php echo $url_discord; ?></p>
																						</div>
																					</div>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1d51e7dd" data-id="1d51e7dd" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-95433c2 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="95433c2" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<a href="<?php echo $url_telegram; ?>" target="_blank" rel class="ekit_global_links">
																					<div class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
																						<div class="elementskit-box-header elementor-animation-">
																							<div class="elementskit-info-box-icon  text-center">
																								<i aria-hidden="true" class="elementkit-infobox-icon ri-telegram-line icon-light-blue"></i>
																							</div>
																						</div>
																						<div class="box-body">
																							<h3 class="elementskit-info-box-title">Telegram</h3>
																							<p><?php echo $url_telegram; ?></p>
																						</div>
																					</div>
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

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-7a418ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a418ed" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">

														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8c11100" data-id="8c11100" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-8b9f778 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8b9f778" data-element_type="widget" data-widget_type="icon-list.default">
																		<div class="elementor-widget-container">
																			<ul class="elementor-icon-list-items elementor-inline-items">
																				<li class="elementor-icon-list-item elementor-inline-item">
																					<span class="elementor-icon-list-text">
																						S&iacute;guenos:
																					</span>
																				</li>
																				<li class="elementor-icon-list-item elementor-inline-item">
																					<a href="<?php echo $url_instagram; ?>" target="_blank">
																						<span class="elementor-icon-list-icon">
																							<i class="ri-instagram-line icon-blue"></i>
																						</span>
																						<span class="elementor-icon-list-text"></span>
																					</a>
																				</li>
																				<li class="elementor-icon-list-item elementor-inline-item">
																				<a href="<?php echo $url_twitter; ?>" target="_blank">
																						<span class="elementor-icon-list-icon">
																							<i class="ri-twitter-line icon-blue"></i>
																						</span>
																						<span class="elementor-icon-list-text"></span>
																					</a>
																				</li>
																			</ul>
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

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4abe9f17" data-id="4abe9f17" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-b378820 elementor-widget elementor-widget-heading" data-id="b378820" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Formulario
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-5fd2801 elementor-widget elementor-widget-html" data-id="5fd2801" data-element_type="widget" data-widget_type="html.default">
												<div class="elementor-widget-container">
													<div role="form" class="wpcf7" id="wpcf7-f27550-p4620-o1" lang="es-ES" dir="ltr">
														<div class="screen-reader-response">
															<p role="status" aria-live="polite" aria-atomic="true"></p>
															<ul></ul>
														</div>
														<form action="/contacto/#wpcf7-f27550-p4620-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
															<div style="display: none;">
																<input type="hidden" name="_wpcf7" value="27550">
																<input type="hidden" name="_wpcf7_version" value="5.5.4">
																<input type="hidden" name="_wpcf7_locale" value="es_ES">
																<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f27550-p4620-o1">
																<input type="hidden" name="_wpcf7_container_post" value="4620">
																<input type="hidden" name="_wpcf7_posted_data_hash" value>
															</div>
															<p>
																<label>
																	Tu nombre
																	<br>
																	<span class="wpcf7-form-control-wrap your-name">
																		<input type="text" name="your-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
																	</span>
																</label>
															</p>
															<p>
																<label>
																	Tu correo electr&oacute;nico
																	<br>
																	<span class="wpcf7-form-control-wrap your-email">
																		<input type="email" name="your-email" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
																	</span>
																</label>
															</p>
															<p>
																<label>
																	Asunto
																	<br>
																	<span class="wpcf7-form-control-wrap your-subject">
																		<input type="text" name="your-subject" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
																	</span>
																</label>
															</p>
															<p>
																<label>
																	Tu mensaje (opcional)
																	<br>
																	<span class="wpcf7-form-control-wrap your-message">
																		<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
																	</span>
																</label>
															</p>
															<p>
																<span class="wpcf7-form-control-wrap checkbox-409">
																	<span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
																		<span class="wpcf7-list-item first last">
																			<label>
                                                                                <input type="checkbox" name="checkbox-409[]" value="He le&iacute;do y comprendo las Pol&iacute;ticas de Privacidad.">
                                                                                <span class="wpcf7-list-item-label">
                                                                                    He le&iacute;do y comprendo las <a href="privacy_policy" target="_blank">Pol&iacute;ticas de Privacidad</a>
                                                                                </span>
																			</label>
																		</span>
																	</span>
																</span>
															</p>
															<p>
																<input type="submit" value="Enviar" class="wpcf7-form-control has-spinner wpcf7-submit">
															</p>
															<div class="wpcf7-response-output" aria-hidden="true"></div>
														</form>
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
