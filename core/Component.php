<?php

require_once("conf.php");

class Component
{    
    protected $content = '';
    protected $style = '';
    protected $script = '';

    public function __construct()
    {
        $this->style = file_get_contents('comp.css');
        $this->script = file_get_contents('comp.js');        
    }

    public function __toString()
    {
        return $this->content;
    }

    public function test($test_page_template)
    {
        $html = '';
        $substitutes = array
                     (
                         $this->style,
                         (string)$this,
                         $this->script
                     );
        $html = str_replace
              (
                  array('{css}','{html}', '{js}'),
                  $substitutes,
                  $test_page_template
              );
        echo $html;                
    }
}
