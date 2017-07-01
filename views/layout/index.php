<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="{{app.lib}}/jquery-ui-1.12.0.custom/jquery-ui.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="{{app.js}}/jquery-1.11.3.min.js"></script>
	<script src="{{app.lib}}/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>

	<style>
		body{
			margin:0px;
		}
	</style>
</head>
<body>
		{% include 'template/head.php' %}
	<div class='container'>
		{% block bannerCentral endblock %}
		<div class="w3-panel w3-leftbar w3-light-grey w3-large">
		  <p class="w3-xlarge w3-serif"><i>"TuIloWeb te brinda servicios de desarrollo web con precios super accesibles para tu negocio"</i></p> 
		  <p class="w3-large w3-serif"><i>"Podrán observar tu página web desde cualquier dispositivo (samrphone, Tablet, computadora), de esta manera aparecerás cuando tu cliente te busque, desde Donde te busque !"</i></p>
		</div>
		<div class="w3-panel w3-light-grey w3-border" style='padding: 20px' style='text-align: center;'>
			<table width='100%' style='margin:auto;'>
				<tr>
					<td width="50%">
					<i><b>TuIloWeb</b> tiene convenio con <a href='http://directorioilo.com/views/index.php' target='_blank' style='color:blue;'>WWW.DIRECTORIOILO.COM</a> para que las paginas web que compres esten registrados en el buscador turistico o empresarial de Ilo de directorioilo.com</i>
					</td>
					<td width="50%">
						<img src="{{app.img}}/ejemplar/directorioilo.jpg" width='400' style='box-shadow: 6px 6px 5px #ccc'>
					</td>
				</tr>
			</table>
		
		</div>
		{% block ejemplar endblock %}
		
		{% block cuerpo endblock %}
	</div>
	<script>
		$(window).ready(function(){
			$(".button1").button();
		});
	</script>
</body>
</html>