<?php
class ConductorModel extends CI_Model{
    public function listar($l = 10, $p = 0){
        return RestApi::call(
            RestApiMethod::GET,
            "conductor/listar/$l/$p"
        );
    }
    
    public function obtener($id){
        return RestApi::call(
            RestApiMethod::GET,
            "conductor/obtener/$id"
        );
    }
    
    public function registrar($data){
        return RestApi::call(
            RestApiMethod::POST,
            "conductor/registrar",
            $data
        );
    }
    
    public function actualizar($data, $id){
        return RestApi::call(
            RestApiMethod::PUT,
            "conductor/actualizar/$id",
            $data
        );
    }
    
    public function eliminar($id){
        return RestApi::call(
            RestApiMethod::DELETE,
            "conductor/eliminar/$id"
        );
    }
}