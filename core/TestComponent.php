<?php
require_once("../../core/conf.php");

class TestComponent
{
    protected function loadCode($filename)
    {
        return file_get_contents(COMPONENTS_DIR . self::class . "/" . $filename);
    }
    
    public function __construct(string $data)
    {
        $style = $this->loadCode("comp.css");
        $script = $this->loadCode("comp.js");
        $template = $this->loadCode("comp.html");
        $this->content = str_replace
        (
            '{message}',
            $data,
            $template
        );
    }
    
}
