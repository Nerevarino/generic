<?php
require_once("../../core/conf.php");

class TestComponent
{
    protected $html;
    protected $css;
    protected $js;
    
    public function __construct()
    {
        $html = file_get_contents("comp.html");
        $css = file_get_contents("comp.css");
        $js = file_get_contents("comp.js");

        
    }
}
