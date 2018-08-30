<?php
require_once("../../core/Component.php");


class Message extends Component
{

    public function __construct(string $message)
    {
        $this->style = file_get_contents('comp.css');
        $this->script = file_get_contents('comp.js');        
        $this->content = str_replace('{message}', $message, file_get_contents('comp.html'));
    }

    // public function __toString()
    // {
    //     return $this->content;
    // }

    // public function test($test_page_template)
    // {
    //     $html = '';
    //     $substitutes = array
    //                  (
    //                      $this->style,
    //                      (string)$this,
    //                      $this->script
    //                  );
    //     $html = str_replace
    //           (
    //               array('{css}','{html}', '{js}'),
    //               $substitutes,
    //               $test_page_template
    //           );
    //     echo $html;                
    // }        
}
