<?php
// require_once('../../core/Component.php');
require_once('comp.php');
require_once('../../core/TestPage.php');

$data = "Mozilla Firefox is cool";


//Вывести в центр экрана тестируемый актиный компонент
$mescomp = new Message($data);
$mescomp->test($test_page_template);
