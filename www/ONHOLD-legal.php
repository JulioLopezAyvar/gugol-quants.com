<?php
    date_default_timezone_set('America/Lima');
    $time_start = new DateTime();

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Accept, Authorization, Accept-Language, Content-Type, Origin, User-Agent");
    header("Access-Control-Allow-Methods: OPTIONS, POST, PUT");
    header("Access-Control-Max-Age: 1000");
    header("Allow: OPTIONS, POST, PUT");
    header("Cache-Control: no-cache");
    header("Content-Type: application/json; charset=utf-8");
    header("Pragma: no-cache");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Strict-transport-security: max-age=15724800, includeSubdomains");
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-Permitted-Cross-Domain-Policies: none");
    header("X-XSS-Protection: 1; mode=block");

	require "/var/www/resources/php/gugol-quants-io/global_variable.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $header_public; ?>
	</head>

	<body data-rsssl="1" class="page-template-default page page-id-27578 wp-custom-logo theme-hello-elementor woocommerce-no-js elementor-default elementor-kit-27624">
		<?php echo $body_public; ?>

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

		<main class="site-main post-27578 page type-page status-publish hentry" role="main">
			<header class="page-header">
				<h1 class="entry-title">
					<div class="en">Legal Warning</div>
					<div class="es">Aviso Legal</div>
				</h1>
			</header>

			<div class="page-content">
				<h2 class="en">Identification and Ownership</h2>
				<h2 class="es">Identificaci&oacute;n y Titularidad</h2>
				<p class="en">In compliance with article 10 of Law 34/2002, of July 11, on Services of the Information Society and Electronic Commerce, the Holder exposes his identification data:</p>
				<p class="es">En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacute;n y Comercio Electr&oacute;nico, el Titular expone sus datos identificativos:</p>
				<p>
					<ul>
						<li>
							<b class="en">Ownership:</b>
							<b class="es">Titular:</b>
							&nbsp;Gugol Quants
						</li>

						<li>
							<b class="en">NIF:</b>
							<b class="es">NIF:</b>
							&nbsp;XXXXXXX
						</li>

						<li>
							<b class="en">Address:</b>
							<b class="es">Domicilio:</b>
							&nbsp;Lima, Per&uacute;
						</li>

						<li>
							<b class="en">E-mail address:</b>
							<b class="es">Correo electrónico:</b>
							&nbsp;<?php echo $email_info; ?>
						</li>

						<li>
							<b class="en">Web Site:</b>
							<b class="es">Sitio Web:</b>
							&nbsp;<a href="<?php echo $url; ?>">gugol-quants.io</a>
						</li>
					</ul>
				</p>

				<h2 class="en">Purpose</h2>
				<h2 class="es">Finalidad</h2>
				<p class="en">The purpose of the Website is: Marketer of Bots and Training.</p>
				<p class="es">La finalidad del Sitio Web es: Comercializador de Bots y Formaci&oacute;n.</p>

				<h2 class="en">Terms of use</h2>
				<h2 class="es">Condiciones de Uso</h2>
				<p class="en">The use of the Website grants you the condition of User, and implies full acceptance of all the clauses and conditions of use included in the pages:
					<ul>
						<li><a href="legal">Legal warning</a></li>
						<li><a href="privacy-policy">Privacy policy</a></li>
						<li><a href="cookies-policy">Cookies policy</a></li>
					</ul>
				</p>
				<p class="es">La utilizaci&oacute;n del Sitio Web le otorga la condici&oacute;n de Usuario, e implica la aceptaci&oacute;n completa de todas las cl&aacute;usulas y condiciones de uso incluidas en las p&aacute;ginas:
					<ul>
						<li><a href="legal">Aviso Legal</a></li>
						<li><a href="privacy-policy">Pol&iacute;tica de Privacidad</a></li>
						<li><a href="cookies-policy">Pol&iacute;tica de Cookies</a></li>
					</ul>
				</p>

				<p class="en">If you do not agree with each and every one of these clauses and conditions, refrain from using the Website.</p>
				<p class="es">Si no estuviera conforme con todas y cada una de estas cl&aacute;usulas y condiciones abst&eacute;ngase de utilizar el Sitio Web.</p>

				<p class="en">Access to the Website does not imply, in any way, the beginning of a commercial relationship with the Owner.</p>
				<p class="es">El acceso al Sitio Web no supone, en modo alguno, el inicio de una relaci&oacute;n comercial con el Titular.</p>

				<p class="en">Through the Website, the Owner facilitates the access and use of various contents that the Owner and/or its collaborators have published through the Internet.</p>
				<p class="es">A trav&eacute;s del Sitio Web, el Titular le facilita el acceso y la utilizaci&oacute;n de diversos contenidos que el Titular y/o sus colaboradores han publicado por medio de Internet.</p>

				<p class="en">For this purpose, you are obliged and committed NOT to use any of the contents of the Website for illicit purposes or effects, prohibited in this Legal Notice or by current legislation, harmful to the rights and interests of third parties, or that in any way may damage, disable, overload, deteriorate or prevent the normal use of the content, computer equipment or documents, files and all kinds of content stored in any computer equipment owned or contracted by the Owner, other users or any Internet user.</p>
				<p class="es">A tal efecto, est&aacute; obligado y comprometido a NO utilizar cualquiera de los contenidos del Sitio Web con fines o efectos il&iacute;citos, prohibidos en este Aviso Legal o por la legislaci&oacute;n vigente, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilizaci&oacute;n de los contenidos, los equipos inform&aacute;ticos o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo inform&aacute;tico propios o contratados por el Titular, de otros usuarios o de cualquier usuario de Internet.</p>

				<p class="en">The Owner reserves the right to withdraw all comments that violate current legislation, harm the rights or interests of third parties, or that, in his opinion, are not suitable for publication..</p>
				<p class="es">El Titular se reserva el derecho de retirar todos aquellos comentarios que vulneren la legislaci&oacute;n vigente, lesivos de los derechos o intereses de terceros, o que, a su juicio, no resulten adecuados para su publicaci&oacute;n.</p>
				
				<p class="en">The Holder will not be responsible for the opinions expressed by users through the comment system, social networks or other participation tools, in accordance with the provisions of the applicable regulations.</p>
				<p class="es">El Titular no ser&aacute; responsable de las opiniones vertidas por los usuarios a trav&eacute;s del sistema de comentarios, redes sociales u otras herramientas de participaci&oacute;n, conforme a lo previsto en la normativa de aplicaci&oacute;n.</p>

				<h2 class="en">Security measures</h2>
				<h2 class="es">Medidas de seguridad</h2>
				<p class="en">The personal data that you provide to the Owner may be stored in automated databases or not, whose ownership corresponds exclusively to the Owner, who assumes all technical, organizational and security measures that guarantee the confidentiality, integrity and quality of the information. contained in them in accordance with the provisions of current regulations on data protection.</p>
				<p class="es">Los datos personales que facilite al Titular pueden ser almacenados en bases de datos automatizadas o no, cuya titularidad corresponde en exclusiva al Titular, que asume todas las medidas de &iacute;ndole t&eacute;cnica, organizativa y de seguridad que garantizan la confidencialidad, integridad y calidad de la informaci&oacute;n contenida en las mismas de acuerdo con lo establecido en la normativa vigente en protecci&oacute;n de datos.</p>
				
				<p class="en">However, you must be aware that the security measures of computer systems on the Internet are not entirely reliable and that, therefore, the Owner cannot guarantee the absence of viruses or other elements that may cause alterations in computer systems (software and hardware) of the User or in their electronic documents and files contained therein, although the Holder puts all the necessary means and takes the appropriate security measures to avoid the presence of these harmful elements.</p>
				<p class="es">No obstante, debe ser consciente de que las medidas de seguridad de los sistemas inform&aacute;ticos en Internet no son enteramente fiables y que, por tanto el Titular no puede garantizar la inexistencia de virus u otros elementos que puedan producir alteraciones en los sistemas inform&aacute;ticos (software y hardware) del Usuario o en sus documentos electr&oacute;nicos y ficheros contenidos en los mismos aunque el Titular pone todos los medios necesarios y toma las medidas de seguridad oportunas para evitar la presencia de estos elementos da&ntilde;inos.</p>

				<h2 class="en">Processing of Personal Data</h2>
				<h2 class="es">Tratamiento de Datos Personales</h2>
				<p class="en">You can consult all the information related to the processing of personal data collected by the Owner on the <a href="privacy-policy">Privacy Policy</a>.</p>
				<p class="es">Puede consultar toda la informaci&oacute;n relativa al tratamiento de datos personales que recoge el Titular en la p&aacute;gina de <a href="privacy-policy">Pol&iacute;tica de Privacidad</a>.</p>

				<h2 class="en">Contents</h2>
				<h2 class="es">Contenidos</h2>
				<p class="en">The Owner has obtained the information, multimedia content and materials included in the Website from sources that it considers reliable, but, although it has taken all reasonable measures to ensure that the information contained is correct, the Owner does not guarantee that it is exact, complete or updated. The Owner expressly declines any responsibility for errors or omissions in the information contained in the pages of the Website.</p>
				<p class="es">El Titular ha obtenido la informaci&oacute;n, el contenido multimedia y los materiales incluidos en el Sitio Web de fuentes que considera fiables, pero si bien ha tomado todas las medidas razonables para asegurar que la informaci&oacute;n contenida es correcta, el Titular no garantiza que sea exacta, completa o actualizada. El Titular declina expresamente cualquier responsabilidad por error u omisi&oacute;n en la informaci&oacute;n contenida en las p&aacute;ginas del Sitio Web.</p>

				<p class="en">It is forbidden to transmit or send through the Website any illegal or illicit content, computer viruses, or messages that, in general, affect or violate the rights of the Owner or third parties..</p>
				<p class="es">Queda prohibido transmitir o enviar a trav&eacute;s del Sitio Web cualquier contenido ilegal o il&iacute;cito, virus inform&aacute;ticos, o mensajes que, en general, afecten o violen derechos del Titular o de terceros.</p>

				<p class="en">The contents of the Website are for informational purposes only and under no circumstances should they be used or considered as an offer to sell, a request for a purchase offer or a recommendation to carry out any other operation, unless expressly indicated.</p>
				<p class="es">Los contenidos del Sitio Web tienen &uacute;nicamente una finalidad informativa y bajo ninguna circunstancia deben usarse ni considerarse como oferta de venta, solicitud de una oferta de compra ni recomendaci&oacute;n para realizar cualquier otra operaci&oacute;n, salvo que as&iacute; se indique expresamente.</p>

				<p class="en">The Owner reserves the right to modify, suspend, cancel or restrict the content of the Website, the links or the information obtained through the Website, without prior notice..</p>
				<p class="es">El Titular se reserva el derecho a modificar, suspender, cancelar o restringir el contenido del Sitio Web, los v&iacute;nculos o la informaci&oacute;n obtenida a trav&eacute;s del Sitio Web, sin necesidad de previo aviso.</p>

				<p class="en">The Owner is not responsible for any damages that may arise from the use of the information on the Website or that contained in the social networks of the Owner..</p>
				<p class="es">El Titular no es responsable de los da&ntilde;os y perjuicios que pudieran derivarse de la utilizaci&oacute;n de lainformaci&oacute;n del Sitio Web o de la contenida en las redes sociales del Titular.</p>

				<h2 class="en">Cokies Policy</h2>
				<h2 class="es">Política de cookies</h2>
				<p class="en">You can consult all the information related to the cookie collection and treatment policy on the <a href="cookies-policy">Cokies Policy page</a>.</p>
				<p class="es">Puede consultar toda la información relativa a la política de recogida y tratamiento de las cookies en la página de <a href="cookies-policy">Política de Cookies</a>.</p>

				<h2 class="en">Links to other websites</h2>
				<h2 class="es">Enlaces a otros sitios web</h2>
				<p class="en">The Owner may provide you with access to third-party websites through links with the sole purpose of informing about the existence of other sources of information on the Internet in which you can expand the data offered on the Website..</p>
				<p class="es">El Titular puede proporcionarle acceso a sitios Web de terceros mediante enlaces con la finalidad exclusiva de informar sobre la existencia de otras fuentes de informaci&oacute;n en Internet en las que podr&aacute; ampliar los datos ofrecidos en el Sitio Web.</p>

				<p class="en">These links to other websites do not imply in any case a suggestion or recommendation for you to visit the destination web pages, which are beyond the control of the Owner, so the Owner is not responsible for the content of the linked websites or the result you get by following the links. Likewise, the Holder is not responsible for the links located on the linked websites to which it provides access.</p>
				<p class="es">Estos enlaces a otros sitios Web no suponen en ning&uacute;n caso una sugerencia o recomendaci&oacute;n para que usted visite las p&aacute;ginas web de destino, que están fuera del control del Titular, por lo que el Titular no es responsable del contenido de los sitios web vinculados ni del resultado que obtenga al seguir los enlaces. Asimismo, el Titular no responde de los links o enlaces ubicados en los sitios web vinculados a los que le proporciona acceso.</p>

				<p class="en">The establishment of the link does not imply in any case the existence of relations between the Owner and the owner of the site where the link is established, nor the acceptance or approval by the Owner of its contents or services..</p>
				<p class="es">El establecimiento del enlace no implica en ning&uacute;n caso la existencia de relaciones entre el Titular y el propietario del sitio en el que se establezca el enlace, ni la aceptaci&oacute;n o aprobaci&oacute;n por parte del Titular de sus contenidos o servicios.</p>

				<p class="en">If you access an external Website from a link found on the Website, you should read the privacy policy of the other Website, which may be different from that of this Website.</p>
				<p class="es">Si accede a un Sitio Web externo desde un enlace que encuentre en el Sitio Web usted deber&aacute; leer la propia pol&iacute;tica de privacidad del otro Sitio Web que puede ser diferente de la de este Sitio Web.</p>

				<h2 class="en">Intellectual and industrial property</h2>
				<h2 class="es">Propiedad intelectual e industrial</h2>
				<p class="en">All rights reserved.</p>
				<p class="es">Todos los derechos est&aacute;n reservados.</p>

				<p class="en">All access to this Website is subject to the following conditions: the reproduction, permanent storage and dissemination of the contents or any other use that has a public or commercial purpose is expressly prohibited without the prior express written consent of the Owner.</p>
				<p class="es">Todo acceso a este Sitio Web est&aacute; sujeto a las siguientes condiciones: la reproducci&oacute;n, almacenaje permanente y la difusi&oacute;n de los contenidos o cualquier otro uso que tenga finalidad pública o comercial queda expresamente prohibida sin el consentimiento previo expreso y por escrito del Titular.</p>

				<h2 class="en">Limitation of liability</h2>
				<h2 class="es">Limitaci&oacute;n de responsabilidad</h2>
				<p class="en">The Owner declines any responsibility in the event of interruptions or a malfunction of the Services or content offered on the Internet, whatever their cause. Likewise, the Holder is not responsible for network outages, business losses as a result of said falls, temporary suspensions of electrical power or any other type of indirect damage that may be caused by causes beyond the control of the Holder.</p>
				<p class="es">El Titular declina cualquier responsabilidad en caso de que existan interrupciones o un mal funcionamiento de los Servicios o contenidos ofrecidos en Internet, cualquiera que sea su causa. Asimismo, el Titular no se hace responsable por caídas de la red, p&eacute;rdidas de negocio a consecuencia de dichas ca&iacute;das, suspensiones temporales de fluido el&eacute;ctrico o cualquier otro tipo de da&ntilde;o indirecto que te pueda ser causado por causas ajenas a el Titular.</p>
				<p class="en">Before making decisions and/or actions based on the information included on the Website, the Owner recommends that you check and contrast the information received with other sources.</p>
				<p class="es">Antes de tomar decisiones y/o acciones con base a la información incluida en el Sitio Web, el Titular le recomienda comprobar y contrastar la información recibida con otras fuentes.</p>

				<h2 class="en">Jurisdiction</h2>
				<h2 class="es">Jurisdicci&oacute;n</h2>
				<p class="en">This Legal Notice is fully governed by Spanish law.</p>
				<p class="es">Este Aviso Legal se rige íntegramente por la legislaci&oacute;n espa&ntilde;ola.</p>

				<h2 class="en">Contact</h2>
				<h2 class="es">Contacto</h2>
				<p class="en">If you have any questions about this Legal Notice or want to make any comments about the Website, you can send an email to the address: <?php echo $email_info; ?></p>
				<p class="es">En caso de que usted tenga cualquier duda acerca de este Aviso Legal o quiera realizar cualquier comentario sobre el Sitio Web, puede enviar un mensaje de correo electr&oacute;nico a la direcci&oacute;n: <?php echo $email_info; ?></p>
				
				<div class="post-tags"></div>
			</div>
		</main>

		<?php echo $section_footer; ?>

		<div id="cookies-eu-wrapper">
			<div id="cookies-eu-banner" data-wait-remove="250">
				<div class="es">
					<div id="cookies-eu-label">
						Esta web utiliza cookies para mejorar su experiencia de navegaci&oacute;n. Al hacer clic en Aceptar, aceptas el uso de Cookies.
						&nbsp;&nbsp;
						<a id="cookies-eu-more" rel="nofollow" href="privacy-policy">Configurar y m&aacute;s informaci&oacute;n</a>
					</div>

					<div id="cookies-eu-buttons">
						<button id="cookies-eu-reject" class="cookies-eu-reject">Rechazar</button>
						<button id="cookies-eu-accept" class="cookies-eu-accept">Aceptar</button>
					</div>
				</div>
				<div class="en">
					<div id="cookies-eu-label">
						This website uses cookies to improve your browsing experience. By clicking Accept, you agree to the use of Cookies.
						&nbsp;&nbsp;
						<a id="cookies-eu-more" rel="nofollow" href="privacy-policy">Configure and more information</a>
					</div>

					<div id="cookies-eu-buttons">
						<button id="cookies-eu-reject" class="cookies-eu-reject">Deny</button>
						<button id="cookies-eu-accept" class="cookies-eu-accept">Accept</button>
					</div>
				</div>
			</div>
		</div>

		<div id="cookies-eu-banner-closed">
			<span>Privacidad</span>
		</div>

		<link rel="stylesheet" id="e-animations-css" href="css/animations.min.css" type="text/css" media="all">

		<script src="js/lang.js"></script>

		<script type="text/javascript" id="eio-lazy-load-js-before">
			var eio_lazy_vars = { "exactdn_domain": "", "skip_autoscale": 0, "threshold": 0 };
		</script>

		<script type="text/javascript" src="js/lazysizes.min.js" id="eio-lazy-load-js"></script>
		<script type="text/javascript" src="js/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
		<script type="text/javascript" src="js/frontend-script.js" id="elementskit-framework-js-frontend-js"></script>
		<script type="text/javascript" src="js/widget-scripts.js" id="ekit-widget-scripts-js"></script>
		<script type="text/javascript" src="js/ResizeSensor.min.js" id="jet-resize-sensor-js"></script>
		<script type="text/javascript" src="js/sticky-sidebar.min.js" id="jet-sticky-sidebar-js"></script>
		<script type="text/javascript" src="js/jquery.jsticky.js" id="jsticky-js"></script>
		<script type="text/javascript" src="js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
		<script type="text/javascript" src="js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
		<script type="text/javascript" src="js/waypoints.min.js" id="elementor-waypoints-js"></script>
		<script type="text/javascript" src="js/core.min.js" id="jquery-ui-core-js"></script>
		<script type="text/javascript" src="js/swiper.min.js" id="swiper-js"></script>
		<!-- <script type="text/javascript" src="js/share-link.min.js" id="share-link-js"></script> -->
		<script type="text/javascript" src="js/dialog.min.js" id="elementor-dialog-js"></script>
		<script type="text/javascript" id="elementor-frontend-js-before">
			var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Compartir en Facebook", "shareOnTwitter": "Compartir en Twitter", "pinIt": "Pinear", "download": "Descargar", "downloadImage": "Descargar imagen", "fullscreen": "Pantalla completa", "zoom": "Zoom", "share": "Compartir", "playVideo": "Reproducir v\u00eddeo", "previous": "Anterior", "next": "Siguiente", "close": "Cerrar" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "M\u00f3vil", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "M\u00f3vil grande", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tableta", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tableta grande", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Port\u00e1til", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Pantalla grande", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.5.4", "is_static": false, "experimentalFeatures": { "e_import_export": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "https:\/\/robotsdaytrading.com\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 4125, "title": "%C2%BFQUIEN%20SOMOS%3F%20Robots%20Day%20Trading%20S.L.%20%E2%89%AB%20Trading%20Algor%C3%ADtmico", "excerpt": "", "featuredImage": false } };
		</script>
		<script type="text/javascript" src="js/frontend.min.js" id="elementor-frontend-js"></script>
		<script type="text/javascript" id="jet-sticky-frontend-js-extra">
			/* <![CDATA[ */
				var JetStickySettings = { "elements_data": { "sections": [], "columns": [] } };
			/* ]]> */
		</script>
		<script type="text/javascript" src="js/jet-sticky-frontend.js" id="jet-sticky-frontend-js"></script>
		<script type="text/javascript" src="js/animate-circle.js" id="animate-circle-js"></script>
		<script type="text/javascript" src="js/elementor.js" id="elementskit-elementor-js"></script>
		<script type="text/javascript" src="js/preloaded-modules.min.js" id="preloaded-modules-js"></script>
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
