<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.
    class Calculadora{
        public function soma($a, $b){
            echo $a + $b;
        }
    }

    class usar extends Calculadora{

    }

    $teste = new usar();
    $teste->soma(3,4)

?>