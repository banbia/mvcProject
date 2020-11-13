<?php
require_once('_config.php');
require_once('classe/Rooter.php');
require_once('controller/site/accueil.php');
require_once('controller/admin/admin.php');

if(isset($_GET['page'])) {
	$rooter = new Rooter($_GET['page']);
} else {
	$rooter = new Rooter('accueil');
}
$rooter->ChooseController();	