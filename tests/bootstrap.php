<?php

/* base path */
$root = dirname(__FILE__);
$applicationPath = $root.'/..';

/* dependency */
require $applicationPath.'/vendor/autoload.php';
require $applicationPath.'/vendor/yiisoft/yii2/Yii.php';

$consoleConfig = require $applicationPath.'/config/console.php';

$mainConfig = require $applicationPath.'/config/web.php';
$mainConfig['params']['basePath'] = $applicationPath;
$mainConfig['params']['dataPath'] = $applicationPath.'/'.$consoleConfig['controllerMap']['fixture']['fixtureDataPath'];

(new yii\web\Application($mainConfig));
