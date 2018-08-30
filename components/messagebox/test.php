<?php

require_once('comp.php');
require_once('../../core/TestPage.php');

$data = array
      (
          "Mozilla Firefox is cool",
          "Internet Explorer is bad",
          "I don't use Safary!"
      );


//Вывести в центр экрана тестируемый актиный компонент
$mesbox = new MessageBox($data);
$mesbox->test($test_page_template);
