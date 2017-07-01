{% extends "layout/index.php" %}
{% block bannerCentral %}
	<div>
		<img src="{{app.img}}/logo/tuiloweb.png" width='100%' alt="">
	</div>
{% endblock %}
{% block ejemplar %}
<script>
$( function() {
    $( "#tabs" ).tabs();
  } );
</script>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Plan Basico (Estatico)</a></li>
    <li><a href="#tabs-2">Plan Intermedio (Dinamico)</a></li>
    <li><a href="#tabs-3">Plan Avanzado (Personalizado)</a></li>
    <li><a href="#tabs-4">Sistemas Web (Personalizado)</a></li>
  </ul>
  <div id="tabs-1">
      <table border='1' class='table'>
      <tr>
        <th colspan='6' style='text-align:center;'>Planes Basico</th>
      </tr>
  		<tr>
  			<th>Codigo</th>
  			<th>Espacio web</th>
  			<th>Dominio</th>
  			<th>N° de Correo Corporativo</th>
  			<th>Actualización</th>
  			<th>Duración</th>
  		</tr>
  		<tr>
  			<td>PB1</td>
  			<td>100mb</td>
  			<td>.com</td>
  			<td>1 (50mb)</td>
  			<td>No incluye</td>
  			<td>1 año</td>
  		</tr>
  		<tr>
  			<td>PB2</td>
  			<td>200mb</td>
  			<td>.com</td>
  			<td>2 (100mb)</td>
  			<td>1 vez</td>
  			<td>1 año</td>
  		</tr>
  		<tr>
  			<td>PB3</td>
  			<td>300mb</td>
  			<td>.com</td>
  			<td>3 (200mb)</td>
  			<td>2 veces</td>
  			<td>1 año</td>
  		</tr>
  	</table>

<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue" style='box-shadow:3px 3px 3px #ccc;'>
  <p style='text-decoration: underline;font-weight:bold;'>Importante</p>
  <ul>
  	<li>Requerir caracteristicas fuera del plan, incluye costo adicional.</li>
  	<li>Pago hasta en 2 partes (50%).</li>
    <li>Se brindara una cuenta FTP de su pagina web.</li>
  	<li>Se brindara un CD con el proyecto completo al finalizar la pagina web.</li>
    <li>Pago anual de 100 soles para su continuidad (opcional).</li>
  	<li>Hasta 1 mes de plazo para su desarrollo.</li>
  </ul>
</div>
<div class="w3-panel w3-round w3-border">
  <p>A continuación se visualizara una lista de paginas web informativas para su negocio.</p>
</div>
     <table class="table">
   	<tr>
   		<th>Nro</th>
   		<th>Preview</th>
   		<th>Menu</th>
   		<th>Incluye</th>
   		<th>Precio</th>
   	</tr>
   	<tr>
   		<td>1)</td>
   		<td>
	   		<img src="{{app.img}}/ejemplar/PB-ejemplar1.jpg" width="200">
			<a href="examplars?bs=bootstrap/ejemplar2" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
   		<td>hasta 3 opciones</td>
   		<td>PB1</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 180</td>
   	</tr>
   	<tr>
   		<td>2)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PB-ejemplar2.jpg" width="200">
			<a href="examplars?bs=bootstrap/ejemplar4" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
		<td>hasta 4 opciones</td>
   		<td>PB3</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 250</td>
   	</tr>
   	<tr>
   		<td>3)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PB-ejemplar3.jpg" width="200">
			<a href="examplars?bs=bootstrap/ejemplar6" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
   		<td>hasta 3 opciones</td>
   		<td>PB2</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 200</td>
   	</tr>
    <tr>
      <td>4)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PB-ejemplar4.jpg" width="200">
      <a href="examplars?bs=bootstrap/ejemplar8" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 5 opciones</td>
      <td>PB3</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 349</td>
    </tr>
    <tr>
      <td>5)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PB-ejemplar5.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_examples_album.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 2 opciones</td>
      <td>PB2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 200</td>
    </tr>
   	<tr>
   		<td>6)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PB-ejemplar6.jpg" width="200">
			<a href="http://www.w3schools.com/w3css/tryw3css_examples_album_text.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
   		<td>hasta 3 opciones</td>
   		<td>PB3</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 250</td>
   	</tr>
	</table>
  </div>
  <div id="tabs-2">
      <table border='1' class='table'>
      <tr>
        <th colspan='6' style='text-align:center;'>Planes Intermedio</th>
      </tr>
  		<tr>
  			<th>Codigo</th>
  			<th>Espacio web</th>
  			<th>Dominio</th>
  			<th>N° de Correo Corporativo</th>
  			<th>Actualización</th>
  			<th>Duración</th>
  		</tr>
  		<tr>
  			<td>PI1</td>
  			<td>400mb</td>
  			<td>.com</td>
  			<td>3 (200mb)</td>
  			<td>3 veces</td>
  			<td>1 año</td>
  		</tr>
  		<tr>
  			<td>PI2</td>
  			<td>500mb</td>
  			<td>.com</td>
  			<td>4 (300mb)</td>
  			<td>3 veces</td>
  			<td>1 año</td>
  		</tr>
  		<tr>
  			<td>PI3</td>
  			<td>800mb</td>
  			<td>.com</td>
  			<td>6 (500mb)</td>
  			<td>3 veces</td>
  			<td>1 año</td>
  		</tr>
  	</table>
<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue" style='box-shadow:3px 3px 3px #ccc;'>
  <p style='text-decoration: underline;font-weight:bold;'>Importante</p>
  <ul>
    <li>Requerir caracteristicas fuera del plan, incluye costo adicional.</li>
    <li>Pago hasta en 3 partes, primera parte 50% de adelanto.</li>
    <li>Se brindara una cuenta FTP de su pagina web.</li>
    <li>Se brindara un CD con el proyecto completo al finalizar la pagina web.</li>
    <li>Pago anual de 150 soles para su continuidad (opcional).</li>
    <li>Hasta 2 meses de plazo para su desarrollo.</li>
  </ul>
</div>
<div class="w3-panel w3-round w3-border">
  <p>A continuación se visualizara una lista de paginas web dinamicas para su negocio.</p>
</div>
     <table class="table">
   	<tr>
   		<th>Nro</th>
   		<th>Preview</th>
   		<th>Menu</th>
   		<th>Incluye</th>
   		<th>Precio</th>
   	</tr>
   	<tr>
   		<td>1)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PI-ejemplar1.jpg" width="200">
			<a href="examplars?bs=bootstrap/ejemplar1" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
		<td>hasta 5 opciones</td>
   		<td>PI3</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 549</td>
      
    </tr>
    <tr>
      <td>2)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar2.jpg" width="200">
      <a href="examplars?bs=w3schools/ejemplar1" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 5 opciones</td>
      <td>PI3</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 549</td>
   	</tr>
   	<tr>
   		<td>3)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PI-ejemplar3.jpg" width="200">
			<a href="http://www.w3schools.com/w3css/tryw3css_templates_band.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 500</td>
   	</tr>
    <tr>
      <td>4)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar4.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_design.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI1</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 350</td>
    </tr>
    <tr>
      <td>5)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar5.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_blog.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 5 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 450</td>
    </tr>
    <tr>
      <td>6)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar6.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_photo.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 400</td>
    </tr>
    <tr>
      <td>5)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar7.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_start_page.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI1</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 350</td>
    </tr>
    <tr>
      <td>7)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar8.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_parallax.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 450</td>
    </tr>
    <tr>
      <td>8)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar9.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_marketing.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 450</td>
    </tr>
    <tr>
      <td>9)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar10.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_website.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 5 opciones</td>
      <td>PI3</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 549</td>
    </tr>
    <tr>
      <td>0)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar11.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_fifty.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI1</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 350</td>
    </tr>
    <tr>
      <td>10)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar12.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_travel.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 400</td>
    </tr>
    <tr>
      <td>11)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar13.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_examples_blog.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 450</td>
    </tr>
    <tr>
      <td>12)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PI-ejemplar14.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_examples_magazine.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
      <td>hasta 4 opciones</td>
      <td>PI1</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 350</td>
    </tr>
   	<tr>
   		<td>13)</td>
   		<td>
   			<img src="{{app.img}}/ejemplar/PI-ejemplar15.jpg" width="200">
			<a href="http://www.w3schools.com/w3css/tryw3css_examples_sauvignon_blanc.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
   		</td>
      <td>hasta 4 opciones</td>
   		<td>PI3</td>
   		<td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 500</td>
   	</tr>
	</table>
  </div>
  <div id="tabs-3">
      <table border='1' class='table'>
      <tr>
        <th colspan='6' style='text-align:center;'>Planes Avanzado</th>
      </tr>
      <tr>
        <th>Codigo</th>
        <th>Espacio web</th>
        <th>Dominio</th>
        <th>N° de Correo Corporativo</th>
        <th>Actualización</th>
        <th>Duración</th>
      </tr>
      <tr>
        <td>PA1</td>
        <td>800mb</td>
        <td>.com</td>
        <td>4 (300mb)</td>
        <td>3 veces</td>
        <td>1 año</td>
      </tr>
      <tr>
        <td>PA2</td>
        <td>1GB</td>
        <td>.com</td>
        <td>5 (500mb)</td>
        <td>4 veces</td>
        <td>1 año</td>
      </tr>
      <tr>
        <td>PA3</td>
        <td>1.5GB</td>
        <td>.com</td>
        <td>6 (1GB)</td>
        <td>5 veces</td>
        <td>1 año</td>
      </tr>
    </table>
<div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue" style='box-shadow:3px 3px 3px #ccc;'>
  <p style='text-decoration: underline;font-weight:bold;'>Importante</p>
  <ul>
    <li>Requerir caracteristicas fuera del plan, incluye costo adicional.</li>
    <li>Pago hasta en 4 partes, primera parte (40%) para su ejecución.</li>
    <li>Se brindara una cuenta FTP de su pagina web.</li>
    <li>Se brindara un CD con el proyecto completo al finalizar la pagina web.</li>
    <li>Pago anual de 150 soles para su continuidad (opcional).</li>
    <li>Hasta 3 mes de plazo para su desarrollo.</li>
    <li>Manual de Usuario.</li>
  </ul>
</div>
<div class="w3-panel w3-round w3-border">
  <p>A continuación se visualizara una lista de paginas web especializadas para su negocio.</p>
</div>
     <table class="table">
    <tr>
      <th>Nro</th>
      <th>Preview</th>
      <th>Menu</th>
      <th>Incluye</th>
      <th>Precio</th>
    </tr>
    <tr>
      <td>1)</td>
      <td>
        <img src="{{app.img}}/ejemplar/PA-ejemplar1.jpg" width="200">
      <a href="http://www.w3schools.com/w3css/tryw3css_templates_portfolio.htm" target='_blank' style='color:blue;'>Ver Ejemplar</a>
      </td>
    <td>hasta 8 opciones</td>
      <td>PB2</td>
      <td style='font-weight:bold;font-size:18px;color:#545454;'>S/ 650</td>
    </tr>
  </table>
  </div>
  <div id="tabs-4">
  	<h2>"Muy Pronto!"</h2>
  </div>

</div>

<!-- <button id="toggle">Toggle icons</button> -->
{% endblock %}
{% block cuerpo %}
<div align='left'>
  <br>
	<i>Representante: Luis Torres Carpio</i>
</div>
{% endblock %}