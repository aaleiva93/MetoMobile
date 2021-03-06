<?php
namespace App\Model;

use App\Lib\Response;

class ConductorModel
{
    private $db;
    private $table = 'conductor';
    private $response;
    
    public function __CONSTRUCT($db){
        $this->db = $db;
        $this->response = new Response();
    }
    
    public function listar($l, $p) {
        $data = $this->db->from($this->table)
                         ->limit($l)
                         ->offset($p)
                         ->orderBy('fullname')
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
    
    public function listarTodos() {
        return $this->db->from($this->table)
                         ->orderBy('id DESC')
                         ->fetchAll();
    }
    
    public function obtener($id){
        return $this->db->from($this->table, $id)
                         ->fetch();
    }
    
    public function registrar($data)
    {
        $data['password'] = md5($data['password']);
        
        $this->db->insertInto($this->table, $data)
                 ->execute();
        
        return $this->response->SetResponse(true);
    }
    
    public function actualizar($data, $id)
    {
        if(isset($data['password'])){
            $data['password'] = md5($data['password']);            
        }
        
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