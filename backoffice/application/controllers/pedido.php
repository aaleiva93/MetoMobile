<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {
    private $user;
        
    public function __CONSTRUCT(){
        parent::__construct();
        $this->user = ['user' => RestApi::getUserData()];
        
        if($this->user['user'] === null) redirect('');
        
        $this->load->model('PedidoModel', 'pm');
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
    
    public function crud($id = 0, $p = 0){
         //Variables para paginar
        $limite = 10;
        $data = [];
        $total  = 0;
        
        $data = null;
        $data2 = $this->cm->listarTodos();
        
        try{
        if($id > 0) $data = $this->pm->obtener($id);
        } catch(Exception $e){
            redirect('');
        }
		$this->load->view('header', $this->user);
        $this->load->view('pedido/crud', [
            'model' => $data,
            'modelconductor' => $data2
            
        ]);
        $this->load->view('footer');
	}
    
     public function entregados(){
	 //header
		$this->load->view('header', $this->user);
        $data = [];
        
        try{
            $data = $this->pm->listarTodos();
            
        } catch(Exception $e){
             redirect('');
        }


        $this->load->view('pedido/entregados', [
            'model' => $data
        ]);
        
        //footer
        $this->load->view('footer');
	}
    
       public function pendientes(){
	 //header
		$this->load->view('header', $this->user);
        $data = [];
        
        try{
            $data = $this->pm->listarTodos();
            
        } catch(Exception $e){
             redirect('');
        }


        $this->load->view('pedido/pendientes', [
            'model' => $data
        ]);
        
        //footer
        $this->load->view('footer');
	}
    
      public function anulados(){
	 //header
		$this->load->view('header', $this->user);
        $data = [];
        
        try{
            $data = $this->pm->listarTodos();
            
        } catch(Exception $e){
             redirect('');
        }


        $this->load->view('pedido/anulados', [
            'model' => $data
        ]);
        
        //footer
        $this->load->view('footer');
	}
    
     public function guardar(){
        $errors = [];
        $id = $this->input->post('id');
        
        $data = [
            'num_pedido' => $this->input->post('num_pedido'),
            'id_conductor' => $this->input->post('id_conductor'),
            'descripcion' => $this->input->post('descripcion'),
        ];
         
            try{
            if(empty($id)){
                $this->pm->registrar($data);
            } else{
                $this->pm->actualizar($data, $id);
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
    
    public function eliminar($id){
        $this->pm->eliminar($id);
        redirect('pedido');
    }
    
}
