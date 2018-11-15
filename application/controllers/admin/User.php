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
            "assets/vendors/datatable/css/bootstrap.datatable.min.css"
        );
        $this->data['js'] = array(
            'assets/vendors/datatable/js/jquery.dataTables.js',
            'assets/vendors/datatable/js/bootstrap.datatable.js',
            'assets/js/admin/user/index.js'
        );
        $this->admin_layout("user/index",$this->data);
    }

    public function form()
    {

    }
}

?>
