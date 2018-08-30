<?php

require_once("comp.php");

$text = array
(
    'Kvastra Kastra Nistra Gastra',
    'Hello',
    'Hi there!'
);

$message_box = new MessageBox($text);
$message_box->test($test_page_template);
