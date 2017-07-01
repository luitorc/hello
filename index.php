<?php 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once '../vendor/autoload.php';
require_once 'library/Mobile-Detect-2.8.22/Mobile_Detect.php';
$app = new Silex\Application();
$app['debug'] = true;
$app['detect'] = new Mobile_Detect;
$app['lt'] = require_once('helper/luitor.php');

//
// $raiz_n = count(explode("/",$_SERVER['REQUEST_URI']))-4;
// // echo $raiz_n;
// $raiz= "";
// for($i=0;$i<$raiz_n;$i++){
// 	$raiz.= "../";
// }
//Raiz
$ip = "http://127.0.0.1:1800";
$root = $ip."/practicas/estructura_nodejsphp/";
$app['root'] = $root;

//Active Session
$app->register(new Silex\Provider\SessionServiceProvider());

$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr'
));

//Sessions
$app['session']->set('user', 'luitor');
//set public

// DEFINE PUBLIC
$app->lib = $root.'library';
$app->public = $root.'public';
$app->img = $root.'public/img';
$app->css = $root.'public/css';
$app->js = $root.'public/js';

// Set View
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views'
));

//Routing
$app->get('/', function() use($app) {
    return $app['twig']->render('index.php');
});
// $app->get('/portafolioView', function() use($app) {
//     return $app['twig']->render('portafolioView.php');
// });
// $app->get('/perfil',function() use($app){
//     return $app['twig']->render('perfil.php');
// });
// // $app->mount('/blog', require 'controller/producto.php');
// $app->get('/blog', function() use($app){
// 	return "MSN: ".$app['lt']->controller('usuario')->saludo();
// });

// $app->get('/perfil', function () use ($app) {
//     return $app['twig']->render('perfil.php');
// });
// $app->get('/examplars', function () use ($app) {
//     return $app['twig']->render('examplarsview.php',array(
//             'params'=>$_REQUEST
//         ));
// });

// //POST
// $app->post('/feedback', function (Request $request) use ($app){
//     $message = $request->get('message');
//     $saludo = $app['lt']->controller('usuario')->saludo();

//     return 'Thank you for your feedback! '.$message.$saludo;
// });

$app->run();

 ?>