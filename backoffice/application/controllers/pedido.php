<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {
    private $user;
        
    public function __CONSTRUCT(){
        parent::__construct();
        $this->user = ['user' => RestApi::getUserData()];
        
        if($this->user['user'] === null) redirect('');
        
        $this->load->model('PedidoModel', 'pm');
    }
    
	public function index($p = 0){
	 //header
		$this->load->view('header', $this->user);
        
        //Variables para paginar
        $limite = 10;
        $data = [];
        $total  = 0;
        
        try{
            $result = $this->pm->listar($limite, $p);
            $total  = $result->total;
            $data   = $result->data;
        } catch(Exception $e){
             redirect('');
        }

        $this->pagination->initialize(
            paginacion_config(
                site_url("pedido/index"),
                $total,
                $limite
            )
        );

        $this->load->view('pedido/index', [
            'model' => $data
        ]);
        
        //footer
        $this->load->view('footer');
	}
    
    public function crud($id = 0){
        $data = null;
        
        try{
        if($id > 0) $data = $this->cm->obtener($id);
        } catch(Exception $e){
            redirect('');
        }
		$this->load->view('header', $this->user);
        $this->load->view('pedido/crud', [
            'model' => $data
        ]);
        $this->load->view('footer');
	}
    
     public function guardar(){
        $errors = [];
        $id = $this->input->post('id');
        
        $data = [
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'correo' => $this->input->post('correo'),
            'mobile' => $this->input->post('mobile'),
            'EsAdmin' => $this->input->post('EsAdmin'),
        ];
         
            try{
            if(empty($id)){
                $this->cm->registrar($data);
            } else{
                $this->cm->actualizar($data, $id);
            }            
        }catch(Exception $e){
            if($e->getMessage() === RestApiErrorCode::UNPROCESSABLE_ENTITY){
                $errors = RestApi::getEntityValidationFieldsError();
            }
        }

        if(count($errors) === 0) redirect('pedido');
        else {
            $this->load->view('header', $this->user);
            $this->load->view('pedido/validation', [
                'errors' => $errors
            ]);
            $this->load->view('footer');
        }
       
       
        
    }  
    
}
