<?php

class Message
{
    protected $template = <<<TEMPLATE
<div class="comp_message">{message}</div>
TEMPLATE;

    protected $data_holder = array('{message}');
    protected $data_name   = array('message');

    protected $component_holder = array();
    protected $component_name = array();
    protected $component_subdata_name = array();    

    protected $components_holder = array();
    protected $components_name = array();
    protected $components_subdata_name = array();    


    public function __construct()
    {

    }
}



var_export(new Message());
