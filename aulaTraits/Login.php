<?php

    class Aluno{
        private $nome;
        private $matricula;
        private $curso;


        public function __construct($nome, $matricula, $curso){
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->curso = $curso;
        }   
        

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }   

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }   

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }   

    }


    class CadastroAlunos{
        private $arrayAlunos = array();

        public function cadastrar($aluno){
            array_push($this->arrayAlunos, $aluno);
        }

        public function listar(){
            foreach($this->arrayAlunos as $aluno){
                echo "{$aluno}<br>";
            }
        }
    }

    $aluno1 = new Aluno("Gustavo", 2022, "Eng. Soft");
    $aluno2 = new Aluno("Eduardo", 2001, "Eng. Soft");
    $aluno3 = new Aluno("Caio", 2062, "Eng. Soft");
    $aluno4 = new Aluno("giovani", 1290, "Eng. Soft");

    $sistema = new CadastroAlunos();
    $sistema->cadastrar($aluno1);

    $sistema->listar();

?>