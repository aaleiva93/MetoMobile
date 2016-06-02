<?php
namespace App\Model;

use App\Lib\Response,
    App\Lib\Auth;

class AuthModel
{
    private $db;
    private $table = 'conductor';
    private $response;
    
    public function __CONSTRUCT($db)
    {
        $this->db = $db;
        $this->response = new Response();
    }
    
    public function autenticar($correo, $password) {
        $conductor = $this->db->from($this->table)
                             ->where('correo', $correo)
                             ->where('password', md5($password))
                             ->fetch();
        
        if(is_object($conductor)){
            $nombre = explode(' ', $conductor->fullname)[0];
            
            $token = Auth::SignIn([
                'id' => $conductor->id,
                'Nombre' => $nombre,
                'NombreCompleto' => $conductor->fullname,
                'Usuario' => $conductor->username,
                //'Imagen' => $conductor->Imagen, Genera un token demasiado grande, lo dejo comentado por si se necesita mas tarde
                'EsAdmin' => (bool)$conductor->EsAdmin
            ]);
            
            $this->response->result = $token;
            
            return $this->response->SetResponse(true);
        }else{
            return $this->response->SetResponse(false, "Credenciales no válidas");
        }
    }
}