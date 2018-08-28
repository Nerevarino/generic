<?php

$template = file_get_contents("test.html");

$component_name = "Hello_World";

$component_html = require("../../components/{$component_name}/comp.php");
$component_css = "<link rel=\"stylesheet\" href=\"../../components/{$component_name}/comp.css\"/>";
$component_js = "<script type=\"text/javascript\" src=\"../../components/{$component_name}/comp.js\"></script>";



$page = str_replace('{component_css}', $component_css, $template);
$page = str_replace('{component}', $component_html, $page);
$page = str_replace('{component_js}', $component_js, $page);


echo $page;

