<?php

$comp_text = "Привет, мир!";   //динамическое содержимое компонента

#------------------------все что ниже по умолчанию не трогать----------------------
$comp_template = file_get_contents($component_dir . 'comp.html');
$component_html = str_replace('{text}', $comp_text, $comp_template);

