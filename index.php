<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-type: text/html; charset=UTF-8");
define('YII_DEBUG', true);

$yii = dirname(__FILE__) . '/yii/yii.php';
$config = dirname(__FILE__) . '/app/config/main.php';
require_once($yii);
Yii::createWebApplication($config)->run();