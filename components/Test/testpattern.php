<?php

function not_null($var)
{
    return !is_null($var);
}


$name_pattern = "(?:[a-zA-Z]+[0-9]*)";
$data_pattern = "({$name_pattern})";
$component_pattern = "({$name_pattern}\({$name_pattern}\))";
$components_pattern = "({$component_pattern}\.\.\.)";
// $pattern = "/\{{$data_pattern}|{$component_pattern}|{$components_pattern}\}/s";

// $pattern = "/(\{[a-zA-Z]+[0-9]*\})|" .
//            "(\{[a-zA-Z]+[0-9]*\([a-zA-Z]+[0-9]*\)\})|" .
//            "(\{[a-zA-Z]+[0-9]*\([a-zA-Z]+[0-9]*\)\.\.\.\})/s";


$name_mask = "(?:\w+\d*)";

$data_name = "(?<data_name>$name_mask)";
$data_holder = "(?<data_holder>\{$data_name\})";

$subdata_name = "(?<subdata_name>$name_mask)";

$component_name = "(?<component_name>$name_mask)";
$component_holder = "(?<component_holder>$component_name\($subdata_name\))";


$components_name = "(?<components_name>$name_mask\($name_mask\)\.\.\.)";
$components_holder = "(?<components_holder>\{$components_name\})";

$pattern = "/$data_holder|$component_holder|$components_holder/s";

preg_match_all($pattern, file_get_contents("comp.html"), $matches, PREG_UNMATCHED_AS_NULL);

var_dump($matches);
// $placeholders['data'] = array_filter($matches[1], 'not_null');
// $placeholders['component'] = array_filter($matches[2], 'not_null');
// $placeholders['components'] = array_filter($matches[1], 'not_null');
// var_dump($placeholders);
