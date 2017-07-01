<?php 
class luitor{
	function controller($name){
		return require('controller/'.$name.'.php');
	}
}
return new luitor();
 ?>