<?php

function __autoload($classname) {
    if (strpos($classname, 'Collection') > 0) {
        require_once(dirname(__FILE__).'/../common/models/collections/'.strtolower(str_replace('Collection', '', $classname)).'.php');
    } elseif (strpos($classname, 'Entity') > 0) {
        require_once(dirname(__FILE__).'/../common/models/entities/'.strtolower(str_replace('Entity', '', $classname)).'.php');
    } elseif (strpos($classname, 'Controller') > 0) {
        require_once(dirname(__FILE__).'/../common/controllers/website/'.strtolower(str_replace('Controller', '', $classname)).'.php');
    } else {
        require_once(dirname(__FILE__).'/../common/system/'.strtolower($classname).'.php');
    }
}

$controller = 'index';
$action = 'index';

if (isset($_GET['c'])) {
    $controller = $_GET['c'];
}

if (isset($_GET['a'])) {
    $action = $_GET['a'];
}

$controller .= 'Controller';

$obj = new $controller();
$obj->$action();