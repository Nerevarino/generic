<?php

require_once("comp.php");

$text = 'Kvastra Kastra Nistra Gastra';

$message = new Message($text);
$message->test($test_page_template);
