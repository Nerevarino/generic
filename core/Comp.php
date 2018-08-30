<?php

class Comp
{
    protected $template = '';
    protected $style = '';
    protected $script = '';

    public function __construct()
    {
        $this->template = file_get_contents('comp.html');
        $this->style = file_get_contents('comp.css');
        $this->script = file_get_contents('comp.js');       
    }
}
