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

	<body data-rsssl="1" class="page-template-default page page-id-27580 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-kit-27624">

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

						<?php echo $section_header; ?>

						<?php echo $section_menu; ?>

					</div>
				</div>
			</div>
		</div>

		<main class="site-main post-27580 page type-page status-publish hentry" role="main">
			<header class="page-header">
				<h1 class="entry-title">Política de Privacidad</h1>
			</header>

			<div class="page-content" style="text-align: justify;">
				<p>
					<?php echo $brand_uppercase; ?> le informa sobre su Política de Privacidad respecto del tratamiento y protección de los datos de carácter personal de los usuarios y clientes que puedan ser recabados durante la navegación, al comprar un producto o al contratar un servicio a través del Sitio Web: <a href="<?php echo $url; ?>"><?php echo $url; ?></a>
				</p>

				<h2>Principios aplicados en el tratamiento de datos</h2>
				<p>
					<ul>
						<li>
							De conformidad con la Ley N. 29733 - Ley de Protecci&oacute;n de Datos Personales y su Reglamento aprobado mediante D.S. 003-2013-JUS y sus normas complementarias, el interesado otorga su consentimiento expreso para que los datos personales que nos proporciona al solicitar un producto y/o servicio, queden incorporados en el Banco de Datos Personales de <?php echo $brand_uppercase; ?> y sean tratados por esta con la finalidad de absolver sus consultas y brindarles información, dándoles usos que incluyen temas referidos al análisis de perfiles, publicidad y otros. El usuario autoriza a que <?php echo $brand_uppercase; ?> mantenga sus datos personales en el banco de datos referido en tanto sean útiles para la finalidad y usos antes mencionados. Usted nos da su consentimiento libre, previo o expreso e informado para que sus Datos Personales sean tratados por <?php echo $brand_uppercase; ?> conforme establecen las normas sobre Protección de Datos Personales. Esta autorización es indefinida. El interesado podrá revocar el consentimiento para tratar sus Datos Personales presentando su solicitud a través de la dirección de correo electrónico <?php echo $email_info; ?>.
						</li>
					</ul>
				</p>

				<h2>Propiedad intelectual e industrial</h2>
				<p>
					<ul>
						<li>
							El Usuario reconoce y acepta que todos los derechos de propiedad industrial e intelectual sobre los contenidos y/o cualesquiera otros elementos insertados en el Sitio Web (incluyendo sin limitación, marcas, logotipos, nombres comerciales, textos, imágenes, gráficos, diseños, sonidos, bases de datos, software, diagramas de flujo, presentación, "look-and-feel", audio y vídeo), pertenecen a <?php echo $brand_uppercase; ?>. En ningún caso el acceso al Sitio Web implica ningún tipo de renuncia, transmisión o cesión total ni parcial de dichos derechos. Las presentes condiciones del Sitio Web no confieren a los usuarios ningún derecho de utilización, alteración, explotación, reproducción, distribución o comunicación pública del Sitio Web y/o de sus contenidos distintos de los aquí expresamente previstos. Cualquier otro uso o explotación de cualesquiera derechos estará sujeto a la previa y expresa autorización específicamente otorgada a tal efecto por <?php echo $brand_uppercase; ?> de los derechos afectados.
						</li>
						<li>
							<?php echo $brand_uppercase; ?> autoriza a los Usuarios a utilizar, visualizar, imprimir, descargar y almacenar los Contenidos y/o los elementos insertados en el Sitio Web exclusivamente para su uso personal, privado y no lucrativo. Queda terminantemente prohibida la utilización de tales elementos, su reproducción, comunicación y/o distribución con fines comerciales o lucrativos, así como su modificación, alteración, o descompilación. Para cualquier otro uso distinto de los expresamente permitidos, será necesario obtener el consentimiento previo por escrito del titular de los derechos de que se trate.
						</li>
					</ul>
				</p>

				<h2>Acciones en caso de incumplimiento</h2>
				<p>
					<ul>
						<li>
							<?php echo $brand_uppercase; ?> se reserva el derecho a ejercer cuantas acciones estén disponibles en derecho para exigir las responsabilidades que se deriven del incumplimiento de cualquiera de las disposiciones de estas condiciones del Sitio Web por parte de un usuario o cliente.
						</li>
					</ul>
				</p>

				<h2>Intercambio o difusión de información</h2>
				<p>
					<ul>
						<li>
							<?php echo $brand_uppercase; ?> declina toda responsabilidad que se derive del intercambio de información entre usuarios a través de sus páginas web. La responsabilidad de las manifestaciones difundidas en sus páginas web corresponde a quienes las realizan.
						</li>
						<li>
							El Sitio Web utiliza los siguientes servicios de análisis de terceros:
							<ul>
								<li>Google Analytics.</li>
							</ul>
						</li>
						<li>
							<?php echo $brand_uppercase; ?> utiliza la información obtenida para obtener datos estadísticos, analizar tendencias, administrar el sitio, estudiar patrones de navegación y para recopilar información demográfica.
						</li>
						<li>
							<?php echo $brand_uppercase; ?> no se hace responsable del tratamiento de los datos personales que realicen las páginas web a las que pueda acceder a través de los distintos enlaces que contiene el Sitio Web.
						</li>
					</ul>
				</p>

				<h2>Información sobre aspectos técnicos</h2>
				<p>
					<ul>
						<li>
							<?php echo $brand_uppercase; ?> no será responsable de posibles daños y perjuicios, incluido el lucro cesante, que se pudieran derivar de interferencias, omisiones, interrupciones, virus informáticos, averías de los sistemas, medios y líneas de comunicación, o desconexiones en el funcionamiento operativo del sistema informático causados por deficiencias técnicas, sobrecargas de líneas, otros medios de interconexión a Internet o de los centros de procesos de datos del proveedor, en el sistema de Internet o en otros sistemas electrónicos, así como de los daños o perjuicios que puedan ser causados por terceras personas mediante intromisiones ilegítimas fuera del control de <?php echo $brand_uppercase; ?>.
						</li>
					</ul>
				</p>

				<h2>Contenido de la web y links</h2>
				<p>
					<ul>
						<li>
							Exclusión de garantías y de responsabilidad por el funcionamiento del Sitio Web. <?php echo $brand_uppercase; ?> no garantiza la disponibilidad y continuidad del funcionamiento del Sitio Web o de aquellos otros sitios web con los que se haya establecido un link.
						</li>
						<li>
							Asimismo, <?php echo $brand_uppercase; ?> no será responsable, por cualesquiera daños y perjuicios que puedan derivarse de:
							<br>
							(I) la falta de disponibilidad o accesibilidad al Sitio Web o a aquellos otros sitios con los que se haya establecido un link;
							<br>
							(II) la interrupción en el funcionamiento del Sitio Web o fallos informáticos, averías telefónicas, desconexiones, retrasos o bloqueos causados por deficiencias o sobrecargas en las líneas telefónicas, en el sistema de Internet o en otros sistemas electrónicos producidos en el curso de su funcionamiento;
							<br>
							(III) la falta de idoneidad del Sitio Web para las necesidades específicas de los Usuarios;
							<br>
							(IV) otros daños que puedan ser causados por terceras personas mediante intromisiones no autorizadas ajenas al control de <?php echo $brand_uppercase; ?>.
						</li>
						<li>
							Con el fin de disminuir el riesgo de introducción de virus en el Sitio Web, <?php echo $brand_uppercase; ?> utiliza programas de detección de virus para controlar todos los contenidos que introduce en el Sitio Web. No obstante, <?php echo $brand_uppercase; ?> no garantiza la ausencia de virus ni de otros elementos en el Sitio Web introducidos por terceros ajenos a <?php echo $brand_uppercase; ?> que puedan producir alteraciones en los sistemas físicos o lógicos de los wsuarios, clientes o en los documentos electrónicos y ficheros almacenados en sus sistemas. En consecuencia, <?php echo $brand_uppercase; ?> no será responsable, de cualesquiera daños y perjuicios de toda naturaleza que pudieran derivarse de la presencia de virus u otros elementos que puedan producir alteraciones en los sistemas físicos o lógicos, documentos electrónicos o ficheros de los usuarios o clientes.
						</li>
						<li>
							<?php echo $brand_uppercase; ?> adopta diversas medidas de protección para proteger el Sitio Web y los contenidos contra ataques informáticos de terceros. No obstante, <?php echo $brand_uppercase; ?> no garantiza que terceros no autorizados no puedan tener acceso al tipo de uso del Sitio Web que hace el usuario, clientes o las condiciones, características y circunstancias en las cuales se realiza dicho uso. En consecuencia, <?php echo $brand_uppercase; ?> no será responsable de los daños y perjuicios que pudieran derivarse de dicho acceso no autorizado.
						</li>
						<li>
							Exclusión de garantías y de responsabilidad por la utilización del Sitio Web. <?php echo $brand_uppercase; ?> no se hará responsable, del uso que los usuarios, clientes y/o terceros pudieran hacer del Sitio Web o los contenidos, ni de los daños y perjuicios que pudieran derivarse del mismo.
						</li>
						<li>
							Exclusión de garantías y de responsabilidad por los contenidos. Con la inclusión en el Sitio Web de contenidos de terceros, <?php echo $brand_uppercase; ?> no se convierte en editor de los mismos; y en consecuencia, no garantiza la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad y actualidad de dichos contenidos. <?php echo $brand_uppercase; ?> no será responsable de cualesquiera daños y perjuicios que pudieran derivarse de:
							<br>
							(I) la falta de licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad, y/o actualidad de los contenidos originados por terceros;
							<br>
							(II) la inadecuación para cualquier propósito y la defraudación de las expectativas generadas por los contenidos;
							<br>
							(III) las decisiones o acciones tomadas o evitadas por parte del usuario o cliente confiando en la información o datos facilitados o proporcionados, incluyendo sin limitación la pérdida de ganancias o de posibilidad de inversión.
						</li>
						<li>
							Exclusión de garantías y de responsabilidad en relación con los links. El Sitio Web pone a disposición de los usuarios o clientes dispositivos técnicos de enlace, directorios y herramientas de búsqueda que permiten a los usuarios o clientes acceder a páginas web pertenecientes a y/o gestionados por terceros. <?php echo $brand_uppercase; ?> comprueba el contenido existente en dichas páginas en el momento en que establece un link a las mismas y lo hace en la creencia de buena fe de que tales contenidos cumplen con la legislación aplicable.
						</li>
						<li>
							No obstante, en ningún caso, <?php echo $brand_uppercase; ?> se hace responsable, aprueba, ni hace propios los productos, servicios, contenidos, información, datos, archivos y cualquier clase de material existente en tales páginas web y no controla ni se hace responsable, aprueba o hace propias las sucesivas modificaciones de dichos materiales. En consecuencia, <?php echo $brand_uppercase; ?> responderá del acceso a otras páginas web o contenidos de terceros a través de las conexiones y links existentes.
						</li>
						<li>
							Existen otras finalidades por las que <?php echo $brand_uppercase; ?> trata datos personales:
							<ul>
								<li>
									Para garantizar el cumplimiento de las condiciones recogidas en la página de Aviso Legal y de la ley aplicable. Esto puede incluir el desarrollo de herramientas y algoritmos que ayuden al Sitio Web a garantizar la confidencialidad de los datos personales que recoge.
								</li>
								<li>
									Para apoyar y mejorar los servicios que ofrece este Sitio Web.
								</li>
								<li>
									Para analizar la navegación de los usuarios. <?php echo $brand_uppercase; ?> recoge otros datos no identificativos que se obtienen mediante el uso de cookies que se descargan en el ordenador del usuario o cliente cuando navega por el Sitio Web cuyas características y finalidad están detalladas en la página de <a href="<?php echo $url; ?>/politica-de-cookies">Política de Cookies</a>.
								</li>
								<li>
									Para gestionar las redes sociales. <?php echo $brand_uppercase; ?> tiene presencia en redes sociales. Si usted se hace seguidor en las redes sociales de <?php echo $brand_uppercase; ?> el tratamiento de los datos personales se regirá por este apartado, así como por aquellas condiciones de uso, políticas de privacidad y normativas de acceso que pertenezcan a la red social que proceda en cada caso y que ha aceptado previamente.
								</li>
								<li>
									Puede consultar las políticas de privacidad de las principales redes sociales en estos enlaces:
									<ul>
										<li><a href="https://www.facebook.com/help/cookies" rel="nofollow" target="_blank">Facebook</a></li>
										<li><a href="https://twitter.com/privacy" rel="nofollow" target="_blank">Twitter</a></li>
										<li><a href="https://www.linkedin.com/legal/cookie-policy" rel="nofollow" target="_blank">Linkedin</a></li>
										<li><a href="https://www.youtube.com/privacy" rel="nofollow" target="_blank">YouTube</a></li>
										<li><a href="https://www.instagram.com/legal/privacy/" rel="nofollow" target="_blank">Instagram</a></li>
									</ul>
								</li>
								<li>
									<?php echo $brand_uppercase; ?> tratará sus datos personales con la finalidad de administrar correctamente su presencia en la red social, informarle de sus actividades, productos o servicios, así como para cualquier otra finalidad que las normativas de las redes sociales permitan.
								</li>
								<li>
									En ningún caso <?php echo $brand_uppercase; ?> utilizará los perfiles de seguidores en redes sociales para enviar publicidad de manera individual.
								</li>
							</ul>
						</li>
					</ul>
				</p>

				<h2>Seguridad de los datos personales</h2>
				<p>
					<ul>
						<li>
							Para proteger sus datos personales, <?php echo $brand_uppercase; ?> toma todas las precauciones razonables y sigue las mejores prácticas de la industria para evitar su pérdida, mal uso, acceso indebido, divulgación, alteración o destrucción de los mismos.
						</li>
						<li>
							<?php echo $brand_uppercase; ?> informa al usuario o cliente de que sus datos personales no serán cedidos a terceras organizaciones, con la salvedad de que dicha cesión de datos esté amparada en una obligación legal o cuando la prestación de un servicio implique la necesidad de una relación contractual con un encargado de tratamiento. En este último caso, solo se llevará a cabo la cesión de datos al tercero cuando <?php echo $brand_uppercase; ?> disponga del consentimiento expreso del usuario o cliente.
						</li>
						<li>
							Sin embargo, en algunos casos se pueden realizar colaboraciones con otros profesionales, en esos casos, se requerirá consentimiento al usuario o cliente informando sobre la identidad del colaborador y la finalidad de la colaboración. Siempre se realizará con los más estrictos estándares de seguridad.
						</li>
					</ul>
				</p>

				<h2>Contenido de otros sitios web</h2>
				<p>
					<ul>
						<li>
							Las páginas de este Sitio Web pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras web se comporta exactamente de la misma manera que si hubiera visitado la otra web.
						</li>
						<li>
							Estos sitios web pueden recopilar datos sobre usted, utilizar cookies, incrustar un código de seguimiento adicional de terceros, y supervisar su interacción usando este código.
						</li>
					</ul>
				</p>

				<h2>Categorías de datos personales</h2>
				<p>
					<ul>
						<li>
							Las categorías de datos personales que trata <?php echo $brand_uppercase; ?> son:
							<ul>
								<li>Datos identificativos.</li>
								<li>No se tratan categorías de datos especialmente protegidos.</li>
							</ul>
						</li>
					</ul>
				</p>

				<h2>Conservación de datos personales</h2>
				<p>
					<ul>
						<li>
							Los datos personales proporcionados a <?php echo $brand_uppercase; ?> se conservarán hasta que solicite su supresión.
						</li>
					</ul>
				</p>

				<h2>Destinatarios de datos personales</h2>
				<p>
					<ul>
						<li>
							<b>Mailchimp</b> The Rocket Science Group LLC d/b/a , con domicilio en EEUU.
							<br>
							Más información en:&nbsp;<a href="https://mailchimp.com/legal/privacy/" rel="nofollow" target="_blank">https://mailchimp.com</a>
							<br>
							The Rocket Science Group LLC d/b/a trata los datos con la finalidad de prestar sus servicios de email marketing a <?php echo $brand_uppercase; ?>.
						</li>
						<li>
							<b>Google Analytics</b> es un servicio de analítica web prestado por Google, Inc., una compañía de Delaware cuya oficina principal está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos (&quot;Google&quot;).
							<br>
							Google Analytics utiliza &quot;cookies&quot;, que son archivos de texto ubicados en tu ordenador, para ayudar a <?php echo $brand_uppercase; ?> a analizar el uso que hacen los usuarios o clientes del Sitio Web. La información que genera la cookie acerca del uso del Sitio Web (incluyendo la dirección IP) será directamente transmitida y archivada por Google en los servidores de Estados Unidos.
							<br>
							Más información en:&nbsp;<a href="https://policies.google.com/privacy?hl=es-ES" rel="nofollow" target="_blank">https://analytics.google.com</a>
							<br>
							Puede consultar como Google gestiona la privacidad en lo que respecta al uso de las cookies y otra información en la página de Política de privacidad de Google:&nbsp;<a target="_blank" href="https://policies.google.com/privacy?hl=es" rel="nofollow">https://policies.google.com/privacy?hl=es</a>
							<br>
							También puede ver una lista de los tipos de cookies que utiliza Google y sus colaboradores y toda la información relativa al uso que hacen de las cookies publicitarias en:
							<ul>
								<li><a target="_blank" href="https://policies.google.com/technologies/types?hl=es" rel="nofollow">Tipos de cookies que utiliza Google</a></li>
								<li><a target="_blank" rel="nofollow" href="https://policies.google.com/technologies/ads?hl=es">Cómo utiliza Google las cookies en publicidad</a>.</li>
							</ul>
						</li>
					</ul>
				</p>

				<h2>Exactitud y veracidad de los datos personales</h2>
				<p>
					<ul>
						<li>
							Usted se compromete a que los datos facilitados a <?php echo $brand_uppercase; ?> sean correctos, completos, exactos y vigentes, así como a mantenerlos debidamente actualizados.
						</li>
						<li>
							Como Usuario del Sitio Web es el único responsable de la veracidad y corrección de los datos remitidos al Sitio Web exonerando a <?php echo $brand_uppercase; ?> de cualquier responsabilidad al respecto.
						</li>
					</ul>
				</p>

				<h2>Aceptación y consentimiento</h2>
				<p>
					<ul>
						<li>
							Como usuario o cliente del Sitio Web declara haber sido informado de las condiciones sobre protección de datos de carácter personal, acepta y consiente el tratamiento de los mismos por parte de <?php echo $brand_uppercase; ?> en la forma y para las finalidades indicadas en esta Política de Privacidad.
						</li>
						<li>
							Para contactar con <?php echo $brand_uppercase; ?>, suscribirse a un boletín o realizar comentarios en este Sitio Web tiene que aceptar la presente Política de Privacidad.
						</li>
					</ul>
				</p>

				<h2>Cambios en la Política de Privacidad</h2>
				<p>
					<ul>
						<li>
							<?php echo $brand_uppercase; ?> se reserva el derecho a modificar la presente Política de Privacidad para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria.
						</li>
						<li>
							Estas políticas estarán vigentes hasta que sean modificadas por otras debidamente publicadas.
						</li>
					</ul>
				</p>

			</div>
		</main>

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
						"/script/lang.php",
						{"lang": "en"}
					);
				});

				$(".lang-es").click(function() {
					$('.es').show();
					$('.en').hide();

					$.post(
						"/script/lang.php",
						{"lang": "es"}
					);
				});
			});
		</script>
	</body>
</html>
