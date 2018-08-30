<?php
require_once("../../core/Component.php");
require_once("../message/comp.php");

class MessageBox extends Component
{

    public function __construct(array $data)
    {        
        parent::__construct();
        foreach($data as &$message_text) {
            $message_text = (string)new Message($message_text);
            echo $message_text . "\n";
        }
        $html = '';
        foreach($data as $message_html) {
            $html .= $message_html;
        }
        $this->content = str_replace('{messages}', $html, file_get_contents('comp.html'));
    }        
}
