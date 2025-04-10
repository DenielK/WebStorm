<?php
$kasutaja="denielkruusman";
$parool="12345";
$andmebaas="denielkruusman";
$srverinimi="localhost";

$yhendus=new mysqli($srverinimi,$kasutaja,$parool,$andmebaas);
$yhendus->set_charset("utf8");
?>