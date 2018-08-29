<?php

const PROJECT_NAME = 'generic';
const PROJECT_DIR = '/home/evgeniy/projects/web/' . PROJECT_NAME . '/';
const COMPONENTS_DIR = PROJECT_DIR . 'components/';
const PAGES_DIR = PROJECT_DIR . 'pages/';
const TESTCOMP_DIR = PAGES_DIR . 'testcomp/';



$template = file_get_contents(TESTCOMP_DIR . 'test.html');

$component_name = "Hello_World";
$component_dir = COMPONENTS_DIR . $component_name . "/";

require(COMPONENTS_DIR . $component_name . "/comp.php");
// $component_css = COMPONENTS_DIR . $component_name . "/comp.css";
$component_css = "<link rel=\"stylesheet\" href=\"/components/{$component_name}/comp.css\"/>";
// $component_js = COMPONENTS_DIR . $component_name . "/comp.js";
$component_js = "<script type=\"text/javascript\" src=\"/components/{$component_name}/comp.js\"></script>";



$page = str_replace('{component_css}', $component_css, $template);
$page = str_replace('{component_html}', $component_html, $page);
$page = str_replace('{component_js}', $component_js, $page);


echo $page;

