<?php

class Page
{

    protected $template = <<<TEMPLATE
<!DOCTYPE html>
<html >
  <head >
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {styles}
    <title >Тестовая страница</title>
  </head>
  <body >
    <div >Это тестовая страница</div>
    <div >{greetings}</div>
  </body>
  {scripts}
</html>
TEMPLATE;
    protected $input_data;
    protected $output_data;
    
    public function __construct()
    {
        if(isset($_POST['data'])) {
            $this->input_data = json_decode($_POST['data']);
        } elseif(isset($_GET['data'])){
            $this->input_data = json_decode($_GET['data']);
        } else { $this->input_data = null; }

        if($this->input_data != null) {
            echo $this;
        } else {
            echo $this;
        }
    }

    protected function get()
    {
        $this->prepare();
        echo $this;
    }

    protected function read()
    {
        
    }

    protected function write()
    {
        
    }

    protected function prepare()
    {
        $greetings = "Привет от PHP!";
    }
    
    public function __toString()
    {
        
        $places = array
        (
            '{styles}', '{greetings}', '{scripts}'   
        );
        $substitutes = array
        (
            '<link rel="stylesheet" href="page.html"/>',
            $greetings,
            '<script type="text/javascript" src="page.js"></script>'
        );
        return str_replace($places, $substitutes, $this->template);
    }
}

$page = new Page();
