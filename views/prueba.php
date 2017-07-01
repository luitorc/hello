{% extends "layout/index.php" %}

{% block cuerpo %}
	<h1>Soy el cuerpo123</h1>
	<a href="perfil">Perfil</a>
	{{ app.session.get('user') }}
	{% if 9 > 5 %}
		jaja
	{% endif %}
	{% set n = {'casa':'Grande de Luis'} %}
	{% set arr = [1,2,3,4] %}
	{{arr[2]}}
	{{"Longitud es#{arr|length}"}}
	{% set msn = "casaj#{arr[2]}"%}
	{{msn}}
	{% for value in arr %}
		<li> {{value}} </li>
	{% endfor %}
	{% set a = "ffffffff" %}
	{{ arr[2] < 1 ? 'true':'false' }}
	{{a}}
	<img src="{{ app.img }}/camera.jpg" alt="">
	</script>
{% endblock %}

{% block cabecera %}
	<h3>Desde el comienzo hasta el final</h3>
{% endblock %}