<?php
require_once("../../core/conf.php");


class Message
{
    protected $style = '';
    protected $script = '';    
    protected $content = '';

    protected static function loadCode($filename)
    {
        return file_get_contents(COMPONENTS_DIR . self::class . "/" . $filename);
    }
    
    public function __construct(string $data)
    {
        $this->style = self::loadCode("comp.css");
        $this->script = self::loadCode("comp.js");
        $template = self::loadCode("comp.html");
        $this->content = str_replace
        (
            '{message}',
            $data,
            $template
        );
    }

    public function __toString()
    {
        return $this->content;
    }

    public function test($test_page_template)
    {
        echo str_replace
        (
            array('{css}','{html}','{js}'),
            array($this->style, $this->content, $this->script),
            $test_page_template
        );
    }    
}
