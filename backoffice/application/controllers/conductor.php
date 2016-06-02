<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {
    private $user;
        
    public function __CONSTRUCT(){
        parent::__construct();
        $this->user = ['user' => RestApi::getUserData()];
        
        if($this->user['user'] === null) redirect('');
        
        $this->load->model('ConductorModel', 'cm');
    }
     
    public function index($p = 0){
        //header
		$this->load->view('header', $this->user);
        
        //Variables para paginar
        $limite = 10;
        $data = [];
        $total  = 0;
        
        try{
            $result = $this->cm->listar($limite, $p);
            $total  = $result->total;
            $data   = $result->data;
        } catch(Exception $e){
            var_dump($e);
        }

        $this->pagination->initialize(
            paginacion_config(
                site_url("conductor/index"),
                $total,
                $limite
            )
        );

        $this->load->view('conductor/index', [
            'model' => $data
        ]);
        
        //footer
        $this->load->view('footer');
	}
    
	public function crud($id = 0){
        $data = null;
        
        if($id > 0) $data = $this->cm->obtener($id);
        
		$this->load->view('header', $this->user);
        $this->load->view('conductor/crud', [
            'model' => $data
        ]);
        $this->load->view('footer');
	}
    
    public function guardar(){
        $id = $this->input->post('id');
        
        $data = [
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'correo' => $this->input->post('correo'),
            'mobile' => $this->input->post('mobile'),
            'EsAdmin' => $this->input->post('EsAdmin'),
        ];
        
         /*$data = [
            'fullname' => 'Aalejandro Leiva Alarcón',
            'password' => '123456',
            'correo' => 'aaleiva93@gmail.com',
        ];*/
        
         if(empty($id)){
                $this->cm->registrar($data);
                var_dump($data);
            } else{
                if(empty($data['password'])) unset($data['password']);
                $this->cm->actualizar($data, $id);
            }           
        
                redirect('conductor');
        
    }    
    
    public function eliminar($id){
        $this->cm->eliminar($id);
        redirect('conductor');
    }
}
