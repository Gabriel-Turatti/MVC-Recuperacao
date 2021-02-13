<?php

require_once("config.php");
require_once(__DIR__ . "/vendor/autoload.php");

use Controller\TarefaController;

$controller = new TarefaController();
$controller->selectOne();