<?php
/**
 *
 */
class User extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['user'] = $this->user_model->findAll();
        $this->data['css'] = array(
            "vendors/datatable/css/bootstrap.datatable.min.css"
        );
        $this->data['js'] = array(
            'vendors/datatable/bootstrap.datatable.js',
            'vendors/datatable/jquery.dataTables.js',
            'js/admin/user/index.js'
        );
        $this->admin_layout("user/index",$this->data);
    }
}

?>
