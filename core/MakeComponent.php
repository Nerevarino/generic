<?php
require_once("../../core/conf.php");
class MakeComponent
{
    
}

function not_null($var)
{
    return !is_null($var);
}


function make($component)
{
    $html = loadCode("comp.html");
    $style = loadCode("comp.css");
    $script = loadCode("comp.js");

    $name_mask = "(?:\w+\d*)";

    $data_name = "(?<data_name>$name_mask)";
    $data_holder = "(?<data_holder>\{$data_name\})";


    $component_name = "(?<component_name>$name_mask)";
    $component_subdata_name = "(?<component_subdata_name>$name_mask)";
    $component_holder = "(?<component_holder>\{$component_name\($component_subdata_name\)\})";


    $components_name = "(?<components_name>$name_mask)";
    $components_subdata_name = "(?<components_subdata_name>$name_mask)";
    $components_holder = "(?<components_holder>\{$components_name\($components_subdata_name\)\.\.\.\})";


    $pattern = "/$data_holder|$component_holder|$components_holder/s";

    preg_match_all($pattern, file_get_contents("comp.html"), $matches, PREG_UNMATCHED_AS_NULL);
      $data_holder = array_filter($matches['data_holder'], "not_null");
      $data_name = array_filter($matches['data_name'], "not_null");

      $component_name = array_filter($matches['component_name'], "not_null");
      $component_subdata_name = array_filter($matches['component_subdata_name'], "not_null");
      $component_holder = array_filter($matches['component_holder'], "not_null");

      $components_name = array_filter($matches['components_name'], "not_null");
      $components_subdata_name = array_filter($matches['components_subdata_name'], "not_null");
      $components_holder = array_filter($matches['components_holder'], "not_null");

      

}
