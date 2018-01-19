<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function register()
    {
        $this->load->view('register');
    }
    // Create user from view register
    public function create()
    {
        $this->form_validation->set_rules(
            'email','Email','required|valid_email'
        );
        $this->form_validation->set_rules(
            'password','Password','required|min_length[6]'
        );
        $this->form_validation->set_rules(
            'repeat','Repeat Password','required|min_length[6]|matches[password]'
        );
        if($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $options = ['cost' => 12];
            $crypt = $this->security->xss_clean(
                $this->input->post('password')
            );
            $password = password_hash($crypt, PASSWORD_BCRYPT, $options);
            $data = array(
                'email' => $this->security->xss_clean(
                    $this->input->post('email')
                ),
                'password' => $password,
                'updatedate' => $this->dateTimeNow,
                'createdate' => $this->dateTimeNow
            );
            $save = $this->user_model->save($data);
            redirect('welcome');
        }
    }
}
