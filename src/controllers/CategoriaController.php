<?php 

namespace MeuProjeto\Controllers;

use MeuProjeto\Models\Categorias;
require_once __DIR__ . '/../helpers.php';
use function MeuProjeto\Helpers\view;

class CategoriaController {
    public function index() {
        $categorias = Categorias::all();
        return view('categorias', compact('categorias'));
    }
}