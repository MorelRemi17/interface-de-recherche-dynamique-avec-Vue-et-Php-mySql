<?php 

require_once(dirname(__DIR__) . '/models/Wines.php');

$nodel = new Wines();

$sql = $nodel ->list('');

echo json_encode($sql->fetchAll());

?>