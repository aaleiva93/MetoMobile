<?php
use App\Lib\Auth,
    App\Lib\Response,
    App\Validation\TestValidation,
    App\Middleware\AuthMiddleware;

$app->group('/incidencia/', function () {
    
    $this->get('listar', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->incidencia->listar()));
    });
    
    $this->get('obtener/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->incidencia->obtener($args['id'])));
    });
    
      $this->get('listarPorPedido/{id_pedido}', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->incidencia->listarPorPedido($args['id_pedido'])));
    });
    
    $this->post('registrar', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->incidencia->registrar($req->getParsedBody())));  
    });
    
    $this->put('actualizar/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->incidencia->actualizar($req->getParsedBody(), $args['id']))); 
    });
    
    $this->delete('eliminar/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->incidencia->eliminar($args['id']))); 
    });
})->add(new AuthMiddleware($app));