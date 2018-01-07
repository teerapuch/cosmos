<?php
/**
 *
 */
class Dashboard extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$this->admin_css();
        //$this->admin_js();
        $this->admin_layout("dashboard/index");
    }
}

?>
