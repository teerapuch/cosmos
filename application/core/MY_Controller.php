<?php
/**
 * @author Teerapuch Kassakul <teerapuch@hotmail.com>
 * @copyright Teerapuch
 *
 */
class MY_Controller extends CI_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        // Set Date Now
        $this->dateTimeNow = date("Y-m-d H:i:s");
        $this->dateNow = date("Y-m-d");
        $this->timeNow = date("H:i:s");
    }

    protected function admin_layout($content = NULL)
    {
        $this->data['content'] = $this->load->view('admin/'.$content, $this->data, TRUE);
        $this->load->view('layout/admin_layout', $this->data);
    }

}

?>
