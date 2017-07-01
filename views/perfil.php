<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
<script src='{{app.js}}/jquery-1.11.3.min.js'></script>
</head>
<body>
	<h1>El perfil</h1>
	{{app.js}}
	<button onclick='enviar();'>Post</button>
	<script>
		$(window).ready(function(){
			// alert("jaja");
		});
		function enviar(){
			$.post("feedback",{
				message: 'Hola luis'
			},function( obj ){
				alert(obj);
			});
		}
	</script>
</body>
</html>