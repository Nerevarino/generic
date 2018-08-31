<?php

class Server
{
    protected $input_data = null;
    protected $output_data = null;

    public function __construct()
    {        
        if(isset($_POST['data'])) {
            $this->input_data = $_POST['data'];
        } elseif(isset($_GET['data'])) {
            $this->input_data = $_GET['data'];
        } else{}
    }

    public function serve()
    {
        if($this->input_data != null) {
           
        }
        return $this->output->data
    }
}
