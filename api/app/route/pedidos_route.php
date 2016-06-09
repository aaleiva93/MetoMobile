<?php
use App\Lib\Auth,
    App\Lib\Response,
    App\Validation\TestValidation,
    App\Middleware\AuthMiddleware;

$app->group('/pedidos/', function () {
    
    $this->get('listar/{l}/{p}', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->pedidos->listar($args['l'], $args['p'])));
    });
    
    $this->get('listarPorConductor/{id_conductor}', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->pedidos->listarPorConductor($args['id_conductor'])));
    });
    
     $this->get('listarTodos', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->pedidos->listarTodos()));
    });
    
    $this->get('obtener/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->pedidos->obtener($args['id'])));
    });
    
    $this->post('registrar', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->pedidos->registrar($req->getParsedBody())));  
    });
    
    $this->put('actualizar/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->pedidos->actualizar($req->getParsedBody(), $args['id']))); 
    });
    
    $this->delete('eliminar/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->pedidos->eliminar($args['id']))); 
    });
})->add(new AuthMiddleware($app));