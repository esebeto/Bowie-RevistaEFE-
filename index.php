<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>EFE!</title>

		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-light.css">
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="images/efe.ico"/>
		<!--JS-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/jquery.countdown-es.js"></script>
		<script>
		$(function () {
			$('#defaultCountdown').countdown({until: new Date(2016, 1-1, 11,11)}); 
		});
		</script>
	</head>

	<body>
		<!-- MODAL CARTA-->
		<div class="overlay-container">
			<div class="window-container zoomin">
				<section>
					<div class="aviso-priv">
						<h1>HOLA A TODOS: </h1>
						<span class="close">CERRAR</span>
						<p>
							Como saben, desde el inicio del año estuvimos contando los días muy emocionados para que hoy te diéramos la sorpresa junto con todo lo que nuestros colaboradores y coordinadores editoriales preparamos para ustedes. Sin embargo, nos sentimos con un hueco en el pecho: David Bowie ha muerto.
						</p>
						<p>La música está de luto ante el gran ídolo que siempre fue El Duque. Amar a la música es sinónimo de amar a Bowie, y no necesariamente tendrías que ser el fan más fiel. Sólo demos un recorrido por nuestros timelines en Facebook y Twitter: gente posteando ‘Heroes’, 'Let’s dance’, ‘Ziggy Stardust’, 'Ashes to Ashes’, ‘Drive-in Saturday’, ‘Changes’, ‘Space Oddity’, ‘China Girl’, ‘Life on Mars?’, ‘Rebel Rebel’ y un largo etcétera, únicamente da paso a pensar que Bowie no es un artista para una etapa, ni que tampoco será pasajero o fácil de olvidar. Más bien, es alguien que se queda ahí, siempre.</p>
						<p>
							No importa que tan grande o pequeño sea el espacio que le diste en vida, si de verdad te dio ese dolor sincero por esta noticia tanto como a nosotros, sólo te podemos dar un abrazo en estos momentos para que pensemos y gocemos en la gran herencia que nos dejó.
						</p>
							Disculpa si nos esperaste tanto, pero de verdad, hoy dejamos el día a quien se lo merece más. Mañana te daremos noticias.
						<p>
							Gracias, David. 
							Nos vemos pronto cuando seamos polvo estelar como tú.

						</p>
					</div>
				</section>
			</div>
		</div>

	 	<!-- BACKGROUND VIDEO -->
	    <video id="video" loop autoplay preload poster="images/bowie.jpg">
	        <source src="videos/bowie.webm" type="video/mp4" />
	        <source src="videos/bowie.webm" type="video/webm" />
	    </video>
		<!--DARK OVERLAY-->
		<div class="overlay"></div>
		<!--WRAP-->
		<div id="wrap">
			<!--CONTAINER-->
			<div class="container">
				<a href="#" class="button" data-type="zoomin" ><img src="images/logo.png" class="image-align" />	</a>
			</div>
		</div>
		<!--/WRAP-->
	</body>

	<script>
				$(document).ready(function() {
					$('.button').click(function() {
						type = $(this).attr('data-type');
						$('.overlay-container').fadeIn(function() {
						window.setTimeout(function(){
							$('.window-container.'+type).addClass('window-container-visible2');
						}, 100);
						});
					});
					$('.close').click(function() {
						$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible2');
					});
				});
		</script>
</html>