<?php
$name=strtoupper($_POST['name']);
$surname=strtoupper($_POST['surname']);
$potronymic=strtoupper($_POST['potronymic']);

$date=$_POST['dateOfUsluga'];

require_once('kontrol.html');
?>