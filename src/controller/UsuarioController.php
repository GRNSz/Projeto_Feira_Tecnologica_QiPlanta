<?php

namespace App\Controller;


class UsuarioController
{
    private $usuarioService;

    public function __construct()
    {
        $this->usuarioService = new UsuarioService();
    }

    public function index()
    {
        $usuarios = $this->usuarioService->getAllUsuarios();
        // Render view with $usuarios
    }

    public function show($id)
    {
        $usuario = $this->usuarioService->getUsuarioById($id);
        // Render view with $usuario
    }

    public function create($data)
    {
        $this->usuarioService->createUsuario($data);
        // Redirect or render success message
    }

    public function update($id, $data)
    {
        $this->usuarioService->updateUsuario($id, $data);
        // Redirect or render success message
    }

    public function delete($id)
    {
        $this->usuarioService->deleteUsuario($id);
        // Redirect or render success message
    }
}
?>