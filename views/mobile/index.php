<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobile</title>

<link rel="stylesheet" href="{{app.lib}}/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
<script src="{{app.js}}/jquery-1.11.3.min.js"></script>
<script src="{{app.lib}}/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- <link rel="stylesheet" href="{{app.lib}}/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/master/jquery.mobile.datepicker.css" />
<script src="{{app.js}}/jquery-1.11.3.min.js"></script>
<script src="https://rawgithub.com/jquery/jquery-ui/1-10-stable/ui/jquery.ui.datepicker.js"></script>
<script src="{{app.lib}}/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/master/jquery.mobile.datepicker.js"></script>
 -->
</head>
<body>
<div data-role="content">
	
	
	<!-- Start of first page -->
<div data-role="page" id="foo">

	<div data-role="header">
		<h1>Parte 1</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">

		<p>I'm first in the source order so I'm shown as the page.</p>
		<form>
	    <div data-role="rangeslider" data-mini="true">
	        <label for="range-2a">Mini rangeslider:</label>
	        <input type="range" name="range-2a" id="range-2a" min="0" max="100" value="40">
	        <label for="range-2b">Mini rangeslider:</label>
	        <input type="range" name="range-2b" id="range-2b" min="0" max="100" value="80">
	    </div>
	</form>
	<label for="slider2">Flip switch:</label>
	<select name="slider2" id="slider2" data-role="slider">
	    <option value="off">Off</option>
	    <option value="on">On</option>
	</select>

		<p>View internal page called <a href="#bar">Ejemplares</a></p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>luitor.com</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- Start of second page -->
<div data-role="page" id="bar">

	<div data-role="header">
		<h1>Ejemplares</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>
		<p>Puede Visualizar los siguientes ejemplares</p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar1'">Ejemplar 1</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar2'">Ejemplar 2</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar3'">Ejemplar 3</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar4'">Ejemplar 4</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar5'">Ejemplar 5</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar6'">Ejemplar 6</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar7'">Ejemplar 7</a></p>
		<p><a href='#' onclick="window.location.href='examplars?bs=ejemplar8'">Ejemplar 8</a></p>
		
		<p><a href="#foo">Back to foo</a></p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>luitor.com </h4>
	</div><!-- /footer -->
</div><!-- /page -->
</div>
</body>
</html>