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

	<body data-rsssl="1" class="page-template page-template-elementor_header_footer page page-id-4175 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-27624 elementor-page elementor-page-4175">

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

		<div data-elementor-type="wp-page" data-elementor-id="4175" class="elementor elementor-4175" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-2f6cbdd4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f6cbdd4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4fc4d4cc" data-id="4fc4d4cc" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-732e6042 elementor-widget elementor-widget-heading" data-id="732e6042" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														F.A.Q.
													</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6420f1a4" data-id="6420f1a4" data-element_type="column">
									<div class="elementor-column-wrap">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-784660de elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="784660de" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f8aeda4" data-id="1f8aeda4" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-b44a722 elementor-widget elementor-widget-heading" data-id="b44a722" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">FAQ</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-2a25a3ad elementor-widget elementor-widget-heading" data-id="2a25a3ad" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														General Issues
													</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-6b65a0a6 elementor-widget elementor-widget-text-editor" data-id="6b65a0a6" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														<p>Some basic questions we are often asked</p>
													</div>
												</div>
											</div>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-133f0cbd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="133f0cbd" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5682969f" data-id="5682969f" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-7450f0c elementor-widget elementor-widget-elementskit-accordion" data-id="7450f0c" data-element_type="widget" data-widget_type="elementskit-accordion.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-accordion accoedion-primary" id="accordion-62efbbfd2b5d3">

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-0-7450f0c">
																							<a href="#collapse-6c3aab062efbbfd2b5d3" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-6c3aab062efbbfd2b5d3" aria-expanded="true" aria-controls="Collapse-6c3aab062efbbfd2b5d3">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									Why trade?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-6c3aab062efbbfd2b5d3" class="show collapse" aria-labelledby="primaryHeading-0-7450f0c" data-parent="#accordion-62efbbfd2b5d3">
																							<div class="elementskit-card-body ekit-accordion--content">
																								We like to rephrase the question to all our clients: What do you want to trade for? Most want to trade to gain financial freedom, to earn extra at the end of the month, to gain free time and leave the 8-hour workday.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-1-7450f0c">
																							<a href="#collapse-320303562efbbfd2b5d3" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-320303562efbbfd2b5d3" aria-expanded="false" aria-controls="Collapse-320303562efbbfd2b5d3">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									What does a trading EA do?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-320303562efbbfd2b5d3" class="collapse" aria-labelledby="primaryHeading-1-7450f0c" data-parent="#accordion-62efbbfd2b5d3">
																							<div class="elementskit-card-body ekit-accordion--content">
																								Operate in the financial markets to obtain profitability. You can operate in different markets, first the market in which you want to operate is analyzed and when the previously established parameters are met, it goes into action. Once the EA enters the market, it does everything necessary, managing the position 100% automatically.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-2-7450f0c">
																							<a href="#collapse-eb6229662efbbfd2b5d3" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-eb6229662efbbfd2b5d3" aria-expanded="false" aria-controls="Collapse-eb6229662efbbfd2b5d3">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									Can you live from trading?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-eb6229662efbbfd2b5d3" class="collapse" aria-labelledby="primaryHeading-2-7450f0c" data-parent="#accordion-62efbbfd2b5d3">
																							<div class="elementskit-card-body ekit-accordion--content">
																								If possible. Now, it is not an easy path and in three months you will not leave your job. It requires effort, perseverance and consistency.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-3-7450f0c">
																							<a href="#collapse-cf6deeb62efbbfd2b5d3" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-cf6deeb62efbbfd2b5d3" aria-expanded="false" aria-controls="Collapse-cf6deeb62efbbfd2b5d3">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									How much money can you earn from trading?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-cf6deeb62efbbfd2b5d3" class="collapse" aria-labelledby="primaryHeading-3-7450f0c" data-parent="#accordion-62efbbfd2b5d3">
																							<div class="elementskit-card-body ekit-accordion--content">
																								The million dollar question, which depends on several factors; The first and most important will be the size of your account, the higher the capital, the more money you can earn. The second important factor will be the risk aversion of each one and the management of the stress and uncertainty of the result.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-4-7450f0c">
																							<a href="#collapse-cf6deeb62efbbfd2b5d4" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-cf6deeb62efbbfd2b5d4" aria-expanded="true" aria-controls="Collapse-cf6deeb62efbbfd2b5d4">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									What platforms do your trading EA work on?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-cf6deeb62efbbfd2b5d4" class="show collapse" aria-labelledby="primaryHeading-3-7450f0c" data-parent="#accordion-62efbbfd2b5d4">
																							<div class="elementskit-card-body ekit-accordion--content">
																								Our EA was programmed in MQL5, therefore they work on any Meta Trader 5 platform.
																								<br>
																								Likewise, we suggest operating with brokers that have ASIC, FCA, DFSA and BaFin regulation, as well as those that have a guarantee fund for the client.
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

														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e51b4c0" data-id="5e51b4c0" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-7aefe03b elementor-widget elementor-widget-elementskit-accordion" data-id="7aefe03b" data-element_type="widget" data-widget_type="elementskit-accordion.default">
																		<div class="elementor-widget-container">
																			<div class="ekit-wid-con">
																				<div class="elementskit-accordion accoedion-primary" id="accordion-62efbbfd2c97c">

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-0-7aefe03b">
																							<a href="#collapse-320303562efbbfd2c97c" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-320303562efbbfd2c97c" aria-expanded="true" aria-controls="Collapse-320303562efbbfd2c97c">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									In which markets do our strategies work?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-320303562efbbfd2c97c" class="show collapse" aria-labelledby="primaryHeading-0-7aefe03b" data-parent="#accordion-62efbbfd2c97c">
																							<div class="elementskit-card-body ekit-accordion--content">
																								Currently our strategies work in the CFD's market and more specifically in the American indices: NASDAQ 100 (NAS100), S&amp;P 500 (US500) and Dow Jones (US30).
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-1-7aefe03b">
																							<a href="#collapse-1ecaf0762efbbfd2c97c" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-1ecaf0762efbbfd2c97c" aria-expanded="false" aria-controls="Collapse-1ecaf0762efbbfd2c97c">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									Do you provide support and installation help?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-1ecaf0762efbbfd2c97c" class="collapse" aria-labelledby="primaryHeading-1-7aefe03b" data-parent="#accordion-62efbbfd2c97c">
																							<div class="elementskit-card-body ekit-accordion--content">
																								Yes, we provide the client with the necessary help to complete the installation and leave the strategies working.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-2-7aefe03b">
																							<a href="#collapse-eb6229662efbbfd2c97c" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-eb6229662efbbfd2c97c" aria-expanded="false" aria-controls="Collapse-eb6229662efbbfd2c97c">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									Do you provide strategy setups?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-eb6229662efbbfd2c97c" class="collapse" aria-labelledby="primaryHeading-2-7aefe03b" data-parent="#accordion-62efbbfd2c97c">
																							<div class="elementskit-card-body ekit-accordion--content">
																								Yes, we provide the client with the recommended settings for each strategy and asset. However, the client is free to try their own and investigate other markets, although we do not recommend it.
																							</div>
																						</div>
																					</div>

																					<div class="elementskit-card">
																						<div class="elementskit-card-header" id="primaryHeading-3-7aefe03b">
																							<a href="#collapse-a54302e62efbbfd2c97c" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-a54302e62efbbfd2c97c" aria-expanded="true" aria-controls="Collapse-a54302e62efbbfd2c97c">
																								<div class="ekit_accordion_icon_left_group">
																									<div class="ekit_accordion_normal_icon">
																										<i aria-hidden="true" class="icon-open icon-left fas fa-angle-right"></i>
																									</div>

																									<div class="ekit_accordion_active_icon">
																										<i aria-hidden="true" class="icon-closed icon-left fas fa-angle-up"></i>
																									</div>
																								</div>

																								<span class="ekit-accordion-title">
																									Is there a free trial period?
																								</span>
																							</a>
																						</div>

																						<div id="Collapse-a54302e62efbbfd2c97c" class="show collapse" aria-labelledby="primaryHeading-3-7aefe03b" data-parent="#accordion-62efbbfd2c97c">
																							<div class="elementskit-card-body ekit-accordion--content">
																								No. We think that a small test period is not enough to allow the statistics to be expressed correctly.
																								<br>
																								However, we have a free indicator in which you can track our strategy, which can be found at the <a href="https://www.mql5.com/es/market/product/85155?source=External%3Ahttps%3A%2F%2Ft.co%2F" target="_blank">following link</a>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<section class="elementor-section elementor-top-section elementor-element elementor-element-7ad839a9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7ad839a9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7f82e26e" data-id="7f82e26e" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-7c610c34 elementor-widget elementor-widget-heading" data-id="7c610c34" data-element_type="widget" data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Any Question?
													</h2>
												</div>
											</div>

											<div class="elementor-element elementor-element-543e45b4 elementor-widget elementor-widget-text-editor" data-id="543e45b4" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<div class="elementor-text-editor elementor-clearfix">
														If you have not been able to solve your doubt, please contact us.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2399aae" data-id="2399aae" data-element_type="column">
									<div class="elementor-column-wrap elementor-element-populated">
										<div class="elementor-widget-wrap">
											<div class="elementor-element elementor-element-48f3c363 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="48f3c363" data-element_type="widget" data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="contact" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
															<span class="elementor-button-content-wrapper">
																<span class="elementor-button-text">
																	CONTACT US
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
