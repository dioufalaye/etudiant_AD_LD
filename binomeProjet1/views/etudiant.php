<?php
require_once('../models/cnx.php');
$req1 = $connect->prepare("SELECT * FROM `user`");
$req1->execute();
				while ($all = $req1->fetch()) {
					$liste[]=$all;
				}

var_dump($liste);

?>