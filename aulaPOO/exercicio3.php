<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
 class Animal{
    private $nome;
    protected $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

 }


 class Cachorro extends Animal{
    public function getIdade(){
        return $this->idade -4 ;
    }
    public function exibirInfo(){
        echo "Idade: {$this->getIdade()} <br> Nome: {$this->getNome()}";
    }

 }

 $cachorro1 = new Cachorro("Pitu", 7);
$cachorro1->exibirInfo();
?>