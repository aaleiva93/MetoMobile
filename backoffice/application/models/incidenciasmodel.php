<?php
class IncidenciasModel extends CI_Model{
    public function listar(){
        return RestApi::call(
            RestApiMethod::GET,
            "incidencia/listar"
        );
    }
    
    public function obtener($id){
        return RestApi::call(
            RestApiMethod::GET,
            "incidencia/obtener/$id"
        );
    }
    
     public function listarPorPedido($id){
        return RestApi::call(
            RestApiMethod::GET,
            "incidencia/listarPorPedido/$id"
        );
    }
    
    public function registrar($data){
        return RestApi::call(
            RestApiMethod::POST,
            "incidencia/registrar",
            $data
        );
    }
    
    public function actualizar($data, $id){
        return RestApi::call(
            RestApiMethod::PUT,
            "incidencia/actualizar/$id",
            $data
        );
    }
    
    public function eliminar($id){
        return RestApi::call(
            RestApiMethod::DELETE,
            "incidencia/eliminar/$id"
        );
    }
}