<?php
use App\Lib\Auth,
    App\Lib\Response,
    App\Validation\ConductorValidation,
    App\Middleware\AuthMiddleware;

$app->group('/conductor/', function () {
    
    $this->get('listar/{l}/{p}', function ($req, $res, $args) {
        return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->conductor->listar($args['l'], $args['p'])));
    });
    
    $this->get('obtener/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                   ->write(json_encode($this->model->conductor->obtener($args['id'])));
    });
    
    $this->post('registrar', function ($req, $res, $args) {
        $r = ConductorValidation::validate($req->getParsedBody());
        
        if(!$r->response){
            return $res->withHeader('Content-type', 'application/json')
                       ->withStatus(422)
                       ->write(json_encode($r->errors));
        }
        
        return $res->withHeader('Content-type', 'application/json')
                   ->write(
                     json_encode($this->model->conductor->registrar($req->getParsedBody()))
                   ); 
    });
    
    $this->put('actualizar/{id}', function ($req, $res, $args) {
        $r = ConductorValidation::validate($req->getParsedBody(), true);
        
        if(!$r->response){
            return $res->withHeader('Content-type', 'application/json')
                       ->withStatus(422)
                       ->write(json_encode($r->errors));            
        }
        
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->conductor->actualizar($req->getParsedBody(), $args['id']))); 
    });
    
    $this->delete('eliminar/{id}', function ($req, $res, $args) {
       return $res->withHeader('Content-type', 'application/json')
                  ->write(json_encode($this->model->conductor->eliminar($args['id']))); 
    });
})->add(new AuthMiddleware($app));