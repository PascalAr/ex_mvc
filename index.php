<?php 

include 'class/Autoloader.php'; 
Autoloader::register();

include 'config/config.php'; 
$database = new Database();
//$loutre = new UserControler();
//$LEROY = $loutre->list($database);
//var_dump($LEROY);


//  ?method=add&control=UserControler
//<a href="/lab/mvc/index.php/user/add/">Link</a>


?> 

<a href="/lab/mvc/index.php/user/list/database">Link</a>

<?php 

$url = explode('/', $_SERVER['PATH_INFO']); 

/*$ = $url[2];

$ctrol = ucfirst($url[1]).'Controler';

$c = new $ctrol();

$param = '$'.$url[3];

$c->$action($param);*/

var_dump($url[1]);

$controler = ucfirst($url[1]).'Controler';
$method = $url[2]; 
$param = '$'.ucfirst($url[3]);

//Instanciation de la class controler
$instant = new $controler; 

//Appel de la methode de la classe instancier 
$instant->$method((object)$param);

?> 

