<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Incidencias extends CI_Controller {
    private $user;
        
    public function __CONSTRUCT(){
        parent::__construct();
        $this->user = ['user' => RestApi::getUserData()];
        
        if($this->user['user'] === null) redirect('');
        
        $this->load->model('IncidenciasModel', 'im');
    }
    
     public function ver($id){
        $data = $this->im->listarPorPedido($id);
        
		$this->load->view('header', $this->user);
        $this->load->view('incidencias/ver', [
            'model' => $data
        ]);
        $this->load->view('footer');
	}
    
    
    public function eliminar($id){
        $this->cm->eliminar($id);
        redirect('conductor');
    }
}