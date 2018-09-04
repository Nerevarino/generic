<?php
require_once("../../core/conf.php");
// class MakeComponent
// {
    
// }


function make($component)
{
    $html = loadCode("comp.html");
    $style = loadCode("comp.css");
    $script = loadCode("comp.js");

    $subcomponents = array();
    $data = array();

    $name_pattern = "(?:[a-zA-Z]+[0-9]*)";
    $data_pattern = "({$name_pattern})";
    $component_pattern = "({$name_pattern}\({$name_pattern}\))";
    $components_pattern = "({$component_pattern}\.\.\.)";
    $pattern = "/\{{$data_pattern}|{$component_pattern}|{$components_pattern}\}/s";
    
    preg_match_all($pattern, $subject, $matches, PREG_UNMATCHED_AS_NULL)
}
