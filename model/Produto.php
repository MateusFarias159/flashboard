<?php

require_once "Conexao.php";

class Produto{

    private $id;
    private $nome;
    private $tipo;
    private $preco; //valor unitário;

    public function getId(){
        return $this->id;
    }
     
    public function setId($id){
        $this->id = $id;
        return $this;
    }
 
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
        return $this;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
        return $this;
    }



    public function salvar(){
        $tabela = "produtos";
        $colunas = "nome, tipo, preco";
        $valores = $this->getValores();
        Conexao::insert($tabela, $colunas, $valores);
    }

    public static function listarTodos(){
        $tabela = "produtos";
        $colunas = "id, nome, tipo, preco";
        $dados = Conexao::select($tabela, $colunas);
        $livros = [];
        foreach($dados as $d){
            $b = new Produto();
            $b->id = $d["id"];
            $b->nome = $d["nome"];
            $b->tipo = $d["tipo"];
            $b->preco = $d["preco"];
            $livros[] = $b;
        }
        return $livros;
    }

    public static function getPorId($id){
        $tabela = "produtos";
        $colunas = "id, nome, tipo, preco";
        $dados = Conexao::selectById(
            $tabela, 
            $colunas, 
            $id
        );
        foreach($dados as $d){
            $b = new Produto();
            $b->id = $d["id"];
            $b->nome = $d["nome"];
            $b->tipo = $d["tipo"];
            $b->preco = $d["preco"];
            return $b;
        }
        return null;
    }

    public function editar(){
        $tabela = "produtos";
        $parametros = "nome='". $this->nome ."',
         tipo='". $this->tipo ."',
         preco=". $this->preco;

        Conexao::update($tabela, $parametros,
        $this->id);
    }

    public static function deletar($id){
        Conexao::delete("produtos", $id);
    }

    private function getValores(){
        $nome = $this->nome;
        $tipo = $this->tipo;
        $preco = $this->preco;

        // $valores = "'". $titulo ."', '". $autor ."', '". $genero ."', ". $edicao .", ". $paginas;
        $valores = "'". $nome ."', '". $tipo . "', " . $preco;
        return $valores;
    }




    
}