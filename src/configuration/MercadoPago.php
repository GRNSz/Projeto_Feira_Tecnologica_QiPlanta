<?php

namespace MeuProjeto\configuration;
require __DIR__ . '/vendor/autoload.php';


class MercadoPago {
    public function __construct() {
        MercadoPago\SDK::setAccessToken('TEST-2947339509677471-112018-f5b392bbfb8dafb5d160fa6577380fae-2108002326');
    }
}