<?php

$page_name = 'main';  //меняем, в зависимости от того, какую страницу тестируем

#-------------------все что ниже по умолчанию не трогать---------------------


require("../{$page_name}/page.php");
echo $page_html; //определен в файле из предыдущей строчки
