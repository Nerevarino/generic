<?php

class Component
{
    const PATTERN  = '/\{([a-zA-Z]+[0-9]*)\}/s';
    protected $template      = '';
    protected $style         = '';
    protected $frontend      = '';
    protected $backend       = array();
    protected $subcomponents = array();

    public function __construct()
    {
        $this->template = file_get_contents("comp.html");
        $this->style = file_get_contents("comp.css");
        $this->frontend = file_get_contents("comp.js");
        $this->backend = file_get_contents("comp.php");

        preg_match_all(Component::PATTERN, $this->template, $this->subcomponents);
        $this->subcomponents = $this->subcomponents[1];
        foreach($this->subcomponents as &$subcomponent) {
            require_once("../{$subcomponent}/comp.php");
        }
    }
}
