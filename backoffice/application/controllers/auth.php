<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __CONSTRUCT(){
        parent::__construct();
        
        $this->load->model('authmodel', 'am');
    }
	public function index(){
		$this->load->view('header');
        $this->load->view('auth/index.php');
        $this->load->view('footer');
	}
    
     public function autenticar(){
        $error = '';
        
        $r = $this->am->autenticar(
            $this->input->post('correo'),
            $this->input->post('password')
        );
        
        if($r->response){
            // Seteamos el token
            RestApi::setToken($r->result);
            
            // User
            $user = RestApi::getUserData();
            
            if($user->EsAdmin == 1) {
                redirect('conductor');
            } else {
                RestApi::destroyToken();
                $error = 'Usted no tiene privilegios de administrador';
            }
        } else {
            $error = $r->message;
        }
        
        $this->load->view('header');
        $this->load->view('auth/index.php', [
            'error' => $error
        ]);
        $this->load->view('footer');
    }
    
    public function logout(){
        RestApi::destroyToken();
        redirect('');
    }
}
