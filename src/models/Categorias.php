<?php

namespace MeuProjeto\Models;
class Categorias {

    // This method should return all categories
    public static function all() {

        // Retorne um array de categorias
        return [

            ['id' => 1, 'name' => 'Ferramentas 1'],

            ['id' => 2, 'name' => 'Flores 2'],

            ['id' => 3, 'name' => 'Vasos 3'],

            ['id' => 4, 'name' => 'Hortaliças 4'],

            ['id' => 5, 'name' => 'Legumes 5'],

            ['id' => 6, 'name' => 'Plantas Ornamentais 6'],

            ['id' => 7, 'name' => 'Sementes 7']
        ];

    }
}