<?php

require_once("../../core/conf.php");
require_once(COMPONENTS_DIR . "Message/comp.php");

// file_get_contents("../../core/conf.php");
// file_get_contents(COMPONENTS_DIR . "Messages/comp.php");


class MessageBox
{
    protected $style = '';
    protected $script = '';    
    protected $content = '';

    protected static function getThisFileContent($filename)
    {
        return file_get_contents(COMPONENTS_DIR . self::class . "/" . $filename);
    }
    
    public function __construct(array $data)
    {
        $this->style = self::getThisFileContent("comp.css");
        $this->script = self::getThisFileContent("comp.js");
        $template = self::getThisFileContent("comp.html");
        $html = '';
        foreach($data as $message_text) {
            $html .= (string)new Message($message_text);
        }
        $this->content = str_replace
        (
            '{data}',
            $html,
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
