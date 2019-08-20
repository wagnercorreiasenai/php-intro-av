<?php

namespace Modelo\Usuario;

class Usuario {
   
    private $usuario;
    
    public function __construct(string $nomeUsu) {
        $this->usuario = $nomeUsu;
    }
    
    public function __destruct() {
        $this->usuario = null;
    }

    public function getTime(): int {
        $timeStamp = time();
        return $timeStamp;
    }
    
    public function getUsuario(): string {
        return $this->usuario;
    }
    
    public static function getData(): string {
        $dataAtual = date('Y-m-d H:i:s');
        return $dataAtual;
    }
}
