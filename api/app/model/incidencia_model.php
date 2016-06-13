<?php
namespace App\Model;

use App\Lib\Response;

class IncidenciaModel
{
    private $db;
    private $table = 'incidencia';
    private $response;
    
    public function __CONSTRUCT($db){
        $this->db = $db;
        $this->response = new Response();
    }
    
    public function listar() {
       return $this->db->from($this->table)
                         ->orderBy('id DESC')
                         ->fetchAll();
    }
    
    public function listarPorPedido($id_pedido) {
        // Cabecera de la incidencia
        $row = $this->db->from('pedidos')
                        ->where('pedidos.id', $id_pedido)
                        ->innerJoin("conductor on conductor.id=pedidos.id_conductor")
                        ->innerJoin("incidencia on incidencia.id_pedido=pedidos.id")
                        ->innerJoin("tabla_de_tablas on tabla_de_tablas.id=pedidos.estado_id ")
                        ->select('pedidos.num_pedido, conductor.fullname, tabla_de_tablas.Valor estado')
                        ->fetch();
        
        $row->{'Detalle'} = $this->db->from($this->table)
                         ->where('id_pedido', $id_pedido)                    
                         ->orderBy('fecha')
                         ->fetchAll();
        
        return $row;
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

