<?php
class PedidoModel extends CI_Model{
    public function listar($l = 10, $p = 0){
        return RestApi::call(
            RestApiMethod::GET,
            "pedidos/listar/$l/$p"
        );
    }
    
    public function obtener($id){
        return RestApi::call(
            RestApiMethod::GET,
            "pedidos/obtener/$id"
        );
    }
    
    public function registrar($data){
        return RestApi::call(
            RestApiMethod::POST,
            "pedidos/registrar",
            $data
        );
    }
    
    public function actualizar($data, $id){
        return RestApi::call(
            RestApiMethod::PUT,
            "pedidos/actualizar/$id",
            $data
        );
    }
    
    public function eliminar($id){
        return RestApi::call(
            RestApiMethod::DELETE,
            "pedidos/eliminar/$id"
        );
    }
}