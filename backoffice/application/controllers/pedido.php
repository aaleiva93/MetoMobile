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
            var_dump($e);
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
    
}
