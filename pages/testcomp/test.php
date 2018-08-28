<?php

$template = file_get_contents("test.html");

$component_name = "Hello_World";

require "../components/{$component_name}/comp.php";
$component_html = file_get_contents("../components/{$component_name}/comp.html");
$component_css = file_get_contents("../components/{$component_name}/comp.css");
$component_js = file_get_contents("../components/{$component_name}/comp.js");



$page = str_replace('{component}', $component_html, $template);

echo $page;

// <div >Hello, world!</div>
