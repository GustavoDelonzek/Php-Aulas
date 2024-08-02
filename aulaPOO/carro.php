<?php
    class Carro{
        public $marca;
        public $modelo;

        public function __construct($marca, $modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;

        }

        public function exibirInfo(){
            echo "Carro: {$this->marca} {$this->modelo}";
        }


    }

    $carro1 = new Carro("Toyota", "Corolla");
    $carro1->exibirInfo();

    ?>