<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * code by rifqie rusyadi
	 * email rifqie.rusyadi@gmail.com
	 */
	public $folder = 'login/';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_m', 'data');
	}
	
	public function index()
	{
		//echo password_hash('admin', PASSWORD_BCRYPT);
		
		$data['title'] 		= 'LOGIN';
		$data['content'] 	= $this->folder.'default';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('default', $data);
	}
	
	public function auth()
	{
		$validation = array(
			array('field'=>'username', 'rules'=>'required'),
			array('field'=>'password','rules'=>'required')
		);
		
		$this->form_validation->set_rules($validation);

		if($this->form_validation->run() == TRUE){
			$user_post = $this->input->post('username');
			$pass_post = md5($this->input->post('password'));
			
		if($this->_user_login($user_post)){

				$id_user = $this->_get_userID($user_post);
				$username = $this->_get_username($user_post);
				$level = $this->_get_level($user_post);
				

				
				$create_session = array(
					'id_user'=> $id_user,
					'username' => $username,
					'signin' => TRUE,
					'level' => $level,
					);
				
				$this->session->set_userdata($create_session);
				//helper_log("login", "Login Pada Sistem");
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('flasherror','Username Tidak Ditemukan.');
				$this->index();
			}
		}else{
			$this->session->set_flashdata('flasherror', validation_errors('<div class="error">', '</div>'));
			$this->index();
		}
	}
	

	private function _user_login($user_post)
	{
		$login = $this->data->get_user($user_post);
		return $login;
	}
	
	private function _get_userID($user_post){
		$user_id = $this->data->get_userID($user_post);
		return $user_id;
	}
	
	private function _get_username($user_post){
		$username = $this->data->get_username($user_post);
		return $username;
	}
	
	private function _get_level($user_post){
		$level = $this->data->get_level($user_post);
		return $level;
	}
	
	
	
	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('sigin');
		$this->session->unset_userdata('level');

		$this->session->sess_destroy();
		//helper_log("logout", "Logout Pada Sistem");
		redirect('login');
	}
}
