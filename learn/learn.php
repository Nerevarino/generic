<?php
//Настройки сайта


//Включить зависимости
// class Message
// {
//     protected $template = 
// }

//Стили и скрипты страницы
$style_file = "learn.css";
$script_file = "learn.js";


//Получить входные данные
$input_data = null;
if(isset($_POST['data'])) {
    $input_data = $_POST['data'];
} elseif(isset($_GET['data'])) {
    $input_data = $_GET['data'];
} else{}

//Обработать входные данные и получить выходные
$greeting = "I have received data '{$input_data}'";

//Связать выходные данные со страницей и отправить пользователю
?>

<!DOCTYPE html>
<html >
  <head >
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo "<link rel=\"stylesheet\" href=\"{$style_file}\"/>" ?>
    <title >Обучение</title>
  </head>
  <body >
    <?php echo "<div class=\"comp_message\">{$greeting}</div>"?>
  </body>
  <?php echo "<script> type=\"text/javascript\" src=\"{$script_file}\"</script>" ?>
</html>
