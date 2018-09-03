<?php

class Page
{
    protected $template = '';
    protected $style_file = '';
    protected $script_file = '';
    protected $input_data = '';
    protected $output_data = null;

    public final function __construct()
    {
        if (isset($_POST['data'])) {
            $this->input_data = json_decode($_POST['data']);
            static::processInputData();
            echo json_encode($this->output_data);
        } else {
            static::prepare();
            echo $this;
        }
    }

    protected function processInputData()
    {
        
    }

    protected function prepare()
    {

    }

    public function __toString()
    {
        
    }
}
