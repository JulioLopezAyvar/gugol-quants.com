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

	<body data-rsssl="1" class="page-template-default page page-id-27582 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-kit-27624">

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

		<main class="site-main post-27582 page type-page status-publish hentry" role="main">
			<header class="page-header">
				<h1 class="entry-title">Política de Cookies</h1>
			</header>

			<div class="page-content" style="text-align: justify;">
				<p>
					En <?php echo $brand_uppercase; ?> utilizamos cookies con el objetivo de prestar un mejor servicio y proporcionarte una mejor experiencia en tu navegación.
					<br>
					Queremos informarte de manera clara y precisa sobre las cookies que utilizamos, detallando a continuación, qué es una cookie, para qué sirve, qué tipo de cookies utilizamos, cual es su finalidad y cómo puedes configurarlas o deshabilitarlas si así lo deseas.
				</p>

				<h2>¿Qué es una cookie y para qué sirve?</h2>
				<p>
					<ul>
						<li>
							Una "Cookie" es un pequeño archivo que se almacena en el ordenador del usuario, tablet, smartphone o cualquier otro dispositivo con información sobre la navegación.
						</li>
						<li>
							El conjunto de "cookies" de todos nuestros usuarios nos ayuda a mejorar la calidad de nuestro Sitio Web, permitiéndonos controlar qué páginas son útiles, cuáles no y cuáles son susceptibles de mejora. Las cookies son esenciales para el funcionamiento de internet, aportando innumerables ventajas en la prestación de servicios interactivos, facilitándote la navegación y usabilidad de nuestro Sitio Web.
						</li>
						<li>
							En ningún caso las cookies podrían dañar tu equipo. Por contra, el que estén activas nos ayuda a identificar y resolver los errores.
						</li>
					</ul>
				</p>

				<h2>¿Qué tipos de cookies utilizamos?</h2>
				<p>
					<ul>
						<li>
							Según la entidad que la gestiona:
							<ul>
								<li>
									<b>Cookies propias</b>: Son aquellas que se envían a tu equipo desde nuestros propios equipos o dominios y desde el que prestamos el servicio que nos solicitas.
								</li>
								<li>
									<b>Cookies de terceros</b>: Son aquellas que se envían a tu equipo desde un equipo o dominio que no es gestionado por nosotros, sino por otra entidad colaboradora. Como por ejemplo, las usadas por redes sociales, o por contenido externo como Google Maps.
								</li>
							</ul>
						</li>
						<li>
							Según el plazo de tiempo que permanecen activadas:
							<ul>
								<li>
									<b>Cookies de sesión</b>: Son cookies temporales que permanecen en el archivo de cookies de tu navegador hasta que abandonas la página web, por lo que ninguna queda registrada en el disco duro de tu ordenador. La información obtenida por medio de estas cookies, sirven para analizar pautas de tráfico en la web. A la larga, esto nos permite proporcionar una mejor experiencia para mejorar el contenido y facilitar su uso.
								</li>
								<li>
									Cookies persistentes: son almacenadas en el disco duro y nuestra web las lee cada vez que realizas una nueva visita. Una web permanente posee una fecha de expiración determinada. La cookie dejará de funcionar después de esa fecha. Estas cookies las utilizamos, generalmente, para facilitar los servicios de compra y registro.
								</li>
							</ul>
						</li>
						<li>
							Según su finalidad:
							<ul>
								<li>
									<b>Cookies técnicas</b>: Son aquellas necesarias para la navegación y el buen funcionamiento de nuestra página web. Permiten por ejemplo, controlar el tráfico y la comunicación de datos, acceder a partes de acceso restringido, realizar el proceso de compra de un pedido, utilizar elementos de seguridad, almacenar contenidos para poder difundir vídeos o compartir contenidos a través de redes sociales.
								</li>
								<li>
									<b>Cookies de personalización</b>: Son aquéllas que te permiten acceder al servicio con unas características predefinidas en función de una serie de criterios, como por ejemplo el idioma, el tipo de navegador a través del cual se accede al servicio, la configuración regional desde donde se accede al servicio, etc.
								</li>
								<li>
									<b>Cookies de análisis</b>: Son aquéllas que nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios de los servicios prestados. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos y servicios que ofrecemos.
								</li>
								<li>
									<b>Cookies publicitarias</b>: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que se pudieran incluir en nuestra página web.
								</li>
								<li>
									<b>Cookies de publicidad comportamental</b>: Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada. Gracias a ellas, podemos conocer los hábitos de navegación en internet y mostrarte publicidad relacionada con tu perfil de navegación.
								</li>
							</ul>
						</li>
					</ul>
				</p>

				<h2>¿Cómo puedes configurar o deshabilitar tus cookies?</h2>
				<p>
					<ul>
						<li>
							Puedes permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones de tu navegador de Internet. En caso de que no permitas la instalación de cookies en tu navegador es posible que no puedas acceder a algunos de los servicios y que tu experiencia en nuestra web pueda resultar menos satisfactoria.
						</li>
						<li>
							En los siguientes enlaces tienes a tu disposición toda la información para configurar o deshabilitar tus cookies en cada navegador:
							<ul>
								<li>Google Chrome</li>
								<li>Mozilla Firefox</li>
								<li>Internet Explorer</li>
								<li>Internet Edge</li>
								<li>Safari</li>
								<li>Safari para IOS (iPhone y iPad)</li>
								<li>Chrome para Android</li>
							</ul>
						</li>
					</ul>
				</p>

				<h2>Consentimiento</h2>
				<p>
					<ul>
						<li>
							En <?php echo $brand_uppercase; ?> nunca guardamos los datos personales de nuestros usuarios o clientes salvo que quieras registrarte, de forma voluntaria con el fin de realizar compras de los productos y servicios que ponemos a tu disposición o de recibir información sobre promociones y contenidos de tu interés.
						</li>
						<li>
							Al navegar y continuar en nuestra web nos indicas que estás consintiendo el uso de las cookies antes enunciadas, y en las condiciones contenidas en la presente Política de Cookies.
						</li>
					</ul>
				</p>

				<h2>Tratamiento de Datos Personales</h2>
				<p>
					<?php echo $brand_uppercase; ?> es el Responsable del tratamiento de los datos personales del usuario. Puede consultar toda la información relativa al tratamiento de datos personales que recoge <?php echo $brand_uppercase; ?> en la página de la <a href="<?php echo $url_latam; ?>/politica-de-privacidad">Política de Privacidad</a>.
				</p>

				<h2>Contacto</h2>
				<p>
					En caso de que tenga cualquier duda acerca de esta Política de Cookies o quiera realizar cualquier comentario sobre este Sitio Web, puede enviar un mensaje a la dirección de correo electrónico: <a href="mailto:<?php echo $email_info; ?>"><?php echo $email_info; ?></a>
				</p>

				<div class="post-tags"></div>
			</div>
		</main>

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
