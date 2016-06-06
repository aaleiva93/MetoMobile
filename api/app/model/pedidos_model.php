<?php
namespace App\Model;

use App\Lib\Response;

class PedidosModel
{
    private $db;
    private $table = 'v_pedidos';
    private $response;
    
    public function __CONSTRUCT($db){
        $this->db = $db;
        $this->response = new Response();
    }
    
    public function listar($l, $p) {
        $data = $this->db->from($this->table)
                         ->limit($l)
                         ->offset($p)
                         ->orderBy('id DESC')
                         ->fetchAll();
        
        $total = $this->db->from($this->table)
                          ->select('COUNT(*) Total')
                          ->fetch()
                          ->Total;
        
        return [
            'data'  => $data,
            'total' => $total
        ];
    }
    
     public function listarPorConductor($id_conductor) {
        return $this->db->from($this->table)
                         ->where('id_conductor', $id_conductor)                    
                         ->orderBy('id DESC')
                         ->fetchAll();
        

    }
    
    public function obtener($id){
        return $this->db->from($this->table, $id)
                         ->fetch();
    }
    
    public function registrar($data){
        $this->db->insertInto($this->table, $data)
                 ->execute();
        
        return $this->response->SetResponse(true);
    }
    
    public function actualizar($data, $id){
        $this->db->update($this->table, $data, $id)
                 ->execute();
        
        return $this->response->SetResponse(true);
    }
    
    public function eliminar($id){
        $this->db->deleteFrom($this->table, $id)
                 ->execute();
        
        return $this->response->SetResponse(true);
    }
}