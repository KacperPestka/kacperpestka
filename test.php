<?php
require_once('vendor/autoload.php');

$loader = new Twig\Loader\FileSystemLoader('templates');
$twig = new Twig\Environment($loader);

$db = new mysqli('localhost', 'root', '', 'loginform');

?>