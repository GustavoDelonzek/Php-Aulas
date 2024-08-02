<?php
     class Livro{
        private $titulo;
        private $autor;
        
        public function __construct($titulo, $autor){
            $this->titulo = $titulo;
            $this->autor = $autor;   
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        

        public function getAutor(){
            return $this->autor;
        }
        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function exibirInfo(){
            echo "Livro: {$this->titulo} <br> Autor: {$this->autor}";
        }
       


    }

    
    $livro1 = new Livro("harry potter", "Alguem");

    $livro1->exibirInfo();
    echo "<br>";
    $livro1->setTitulo("O pão");
    $livro1->setAutor("Bisnaguinha");

    $livro1->exibirInfo()
?>