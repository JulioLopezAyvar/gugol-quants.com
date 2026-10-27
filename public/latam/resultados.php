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

	$array_videos = array(
		array("December - Week 1", "Diciembre - Semana 1", "https://youtube.com/embed/CW5NTI1NcrM"),

		array("November - Week 2", "Noviembre - Semana 2", "https://youtube.com/embed/JqX_xiX6m8E"),
		array("November - Week 1", "Noviembre - Semana 1", "https://youtube.com/embed/OHjTUIrcEU4"),

		array("October - Week 4", "Octubre - Semana 4", "https://youtube.com/embed/SmFi9DV5LK4"),
		array("October - Week 3", "Octubre - Semana 3", "https://youtube.com/embed/bPvRJqSqgEs"),
		array("October - Week 2", "Octubre - Semana 2", "https://youtube.com/embed/FHnQH2DM98Y"),
		array("October - Week 1", "Octubre - Semana 1", "https://youtube.com/embed/UoNmZc-AQSU"),

		array("September - Week 4", "Setiembre - Semana 4", "https://youtube.com/embed/PcGSB-ckRvI"),
		array("September - Week 3", "Setiembre - Semana 3", "https://youtube.com/embed/FNcG3FW8VE0"),
		array("September - Week 2", "Setiembre - Semana 2", "https://youtube.com/embed/sikCULxXzQw"),
		array("September - Week 1", "Setiembre - Semana 1", "https://youtube.com/embed/MJvxmZM73a4"),

		array("August - Week 5", "Agosto - Semana 5", "https://youtube.com/embed/r88zuw36oP0"),
		array("August - Week 4", "Agosto - Semana 4", "https://youtube.com/embed/8rRmE2pwmyk"),
		array("August - Week 3", "Agosto - Semana 3", "https://youtube.com/embed/pcColX80Ku0"),
		array("August - Week 2", "Agosto - Semana 2", "https://youtube.com/embed/ecB_TfHVg08"),
		array("August - Week 1", "Agosto - Semana 1", "https://youtube.com/embed/jOn0NaPVZUE"),

		array("July - Week 4", "Julio - Semana 4", "https://youtube.com/embed/dQjhmltTvhA"),
		array("July - Week 3", "Julio - Semana 3", "https://youtube.com/embed/5izzhKFwH1c"),
		array("July - Week 2", "Julio - Semana 2", "https://youtube.com/embed/UszntHLw8ME"),
		array("July - Week 1", "Julio - Semana 1", "https://youtube.com/embed/uE_7y0tM9pA"),

		array("June - Week 5", "Junio - Semana 5", "https://youtube.com/embed/57oWw77pz4I"),
		array("June - Week 4", "Junio - Semana 4", "https://youtube.com/embed/hNWRCnPvp8A"),
		array("June - Week 3", "Junio - Semana 3", "https://youtube.com/embed/zQQdIAXgNFI"),
		array("June - Week 2", "Junio - Semana 2", "https://youtube.com/embed/AQqGSfYdmO8"),
		array("June - Week 1", "Junio - Semana 1", "https://youtube.com/embed/XFfwvuoAojI"),

		array("May Summary", "Mayo Resumen", "https://youtube.com/embed/XFfwvuoAojI"),
		array("May - Week 5", "Mayo - Semana 5", "https://youtube.com/embed/kMGJfQlJzmk"),
		array("May - Week 4", "Mayo - Semana 4", "https://youtube.com/embed/hJtjt3sLFlU"),
		array("May - Week 3", "Mayo - Semana 3", "https://youtube.com/embed/064JZfRyUiA"),
		array("May - Week 2", "Mayo - Semana 2", "https://youtube.com/embed/6WvbsHxXC_U"),
		array("May - Week 1", "Mayo - Semana 1", "https://youtube.com/embed/IEN1gOREbY0"),

		array("April Summary", "Abril Resumen", "https://youtube.com/embed/JXTuZH0K40o"),
		array("April - Week 4", "Abril - Semana 4", "https://youtube.com/embed/JXr6uFvGsKs"),
		array("April - Week 3", "Abril - Semana 3", "https://youtube.com/embed/hM4FXQZSr4s"),
		array("April - Week 2", "Abril - Semana 2", "https://youtube.com/embed/f68qGt84QEM"),
		array("April - Week 1", "Abril - Semana 1", "https://youtube.com/embed/zXEKwCL1Gic"),

		array("March Summary", "Marzo Resumen", "https://youtube.com/embed/E_fmIZhG2ew"),
		array("March - Week 4", "Marzo - Semana 4", "https://youtube.com/embed/J_zSxLSwopI"),
		array("March - Week 3", "Marzo - Semana 3", "https://youtube.com/embed/lCaESYZzqnQ"),
		array("March - Week 2", "Marzo - Semana 2", "https://youtube.com/embed/lCaESYZzqnQ"),
		array("March - Week 1", "Marzo - Semana 1", "https://youtube.com/embed/hCMJftPz5c4"),

		array("February Summary", "Febrero Resumen", "https://youtube.com/embed/TbxWwhgRFog"),
		array("February - Week 4", "Febrero - Semana 3", "https://youtube.com/embed/2rhexlgROg0"),
		array("February - Week 3", "Febrero - Semana 3", "https://youtube.com/embed/NGb8uZ5kDRg"),
		array("February - Week 2", "Febrero - Semana 2", "https://youtube.com/embed/wNDjVQjvIhQ"),
		array("February - Week 1", "Febrero - Semana 1", "https://youtube.com/embed/tVQyUmYOwN8"),

		array("January - Week 4", "Enero - Semana 4", "https://youtube.com/embed/v6Qk5SLjoE8"),
		array("January - Week 3", "Enero - Semana 3", "https://youtube.com/embed/7PKqnadiiIc"),
		array("January - Week 2", "Enero - Semana 2", "https://youtube.com/embed/TB42yyweMd0"),
		array("January - Week 1", "Enero - Semana 1", "https://youtube.com/embed/-8wyQImaYLA"),
		array("Year To Date 2022", "Year To Day 2022", "https://youtube.com/embed/90lyO_lqDiY"),

		array("December - Week 5", "Diciembre - Semana 5", "https://youtube.com/embed/1cAlvvCLu8k"),
		array("December - Week 4", "Diciembre - Semana 4", "https://youtube.com/embed/JRDkHkm-KJY"),
		array("December - Week 3", "Diciembre - Semana 3", "https://youtube.com/embed/wi4oeTNuT5w"),
		array("December - Week 2", "Diciembre - Semana 2", "https://youtube.com/embed/O2CbN4_tR3A"),
		array("December - Week 1", "Diciembre - Semana 1", "https://youtube.com/embed/inP7LeKo9oQ"),
		array("November - Week 4", "Noviembre - Semana 4", "https://youtube.com/embed/7RIf4l7SJBk"),
		array("November - Week 3", "Noviembre - Semana 3", "https://youtube.com/embed/NlkaPo7KKO8"),
		array("November - Week 2", "Noviembre - Semana 2", "https://youtube.com/embed/z-FI0uXIPEQ"),
		array("November - Week 1", "Noviembre - Semana 1", "https://youtube.com/embed/SCwfMYG2Njk"),
		array("October - Week 4", "Octubre - Semana 4", "https://youtube.com/embed/9hYJu_16eU4"),
		array("October - Week 3", "Octubre - Semana 3", "https://youtube.com/embed/NsJvQ-jiRrw"),
		array("October - Week 2", "Octubre - Semana 2", "https://youtube.com/embed/a0joaub2vZM"),
	);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header_public_latam; ?>
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

						<?php echo $section_header_latam; ?>

						<?php echo $section_menu_latam; ?>

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
														Resultados
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

					<div style="margin-top:5rem;"></div>

					<div class="rvs-container">
						<div class="rvs-item-container">
							<div class="rvs-item-stage">
								<?php
									foreach ($array_videos as $video) {
										?>
										<div class="rvs-item" style="background-image: url(/img/gugol-quants-results.webp)">
											<p class="rvs-item-text">
												<?php echo $video[1]; ?><br><small>by Gugol-Quants</small>
											</p>
											<a href="<?php echo $video[2]; ?>" class="rvs-play-video"></a>
										</div>
										<?php
									}
								?>
							</div>
						</div>

						<div class="rvs-nav-container">
							<a class="rvs-nav-prev"></a>
							<div class="rvs-nav-stage">
								<?php
									foreach ($array_videos as $video) {
										?>
										<a class="rvs-nav-item">
											<span class="rvs-nav-item-thumb" style="background-image: url(/img/logo-icon-v1.jpg)"></span>
											<h4 class="rvs-nav-item-title">
												<?php echo $video[1]; ?>
											</h4>
											<small class="rvs-nav-item-credits">
												by Gugol-Quants
											</small>
										</a>
										<?php
									}
								?>
							</div>
							<a class="rvs-nav-next"></a>
						</div>
					</div>

					<div style="margin-bottom:5rem;"></div>
                </div>
            </div>
        </div>

        <div data-elementor-type="wp-page" data-elementor-id="4125" class="elementor elementor-4125" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">

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
                                                            Puedes ver resultados de semanas anteriores en el siguiente enlace
                                                        </h2>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-4b42cd25 elementor-widget elementor-widget-text-editor" data-id="4b42cd25" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>Si tienes alguna otra consulta, contáctanos a<br><a href="mailto:<?php echo $email_info; ?>"><?php echo $email_info; ?></a></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-421eb339 elementor-align-center elementor-widget elementor-widget-button" data-id="421eb339" data-element_type="widget" data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://www.instagram.com/stories/highlights/17928061079132919/" target="_blank" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-float" role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">
                                                                        Resultados previos <i class="ri-external-link-fill"></i>
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
        <script type="text/javascript">
            jQuery(function($){
                $(".rvs-container").rvslider();
            });
        </script>
	</body>
</html>
