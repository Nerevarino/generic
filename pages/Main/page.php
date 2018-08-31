<?php
require_once("../../core/conf.php");
require_once(COMPONENTS_DIR . "MessageBox/comp.php");

class MainPage
{
    protected $template = '';
    protected $style = '';
    protected $script = '';
    protected $content = '';

    protected static function getThisFileContent($filename)
    {
        return file_get_contents(PAGES_DIR . self::class . "/" . $filename);
    }
    
    public function __construct($data)
    {
        $this->template = self::getThisFileContent("page.html");
        $this->style = self::getThisFileContent("page.css");
        $this->script = self::getThisFileContent("page.js");

        $substitutes = array();
        foreach($data as $message_pack) {
            $substitutes[] = (string)new MessageBox($message_pack);
        }
        // $places = array
                
    }
    
}
