<?php

class Usuario{

    private $id;
    private $usuario;
    private $senha;




    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }


    
    public static function getPorId($id){
        $tabela = "usuarios";
        $colunas = "id, usuario, senha";
        $dados = Conexao::selectById(
            $tabela, 
            $colunas, 
            $id
        );
        foreach($dados as $d){
            $b = new Usuario();
            $b->id = $d["id"];
            $b->usuario = $d["usuario"];
            $b->senha = $d["senha"];
            return $b;
        }
        return null;
    }

    private function getValores(){
        $usuario = $this->usuario;
        $senha = $this->senha;

        // $valores = "'". $titulo ."', '". $autor ."', '". $genero ."', ". $edicao .", ". $paginas;
        $valores = "'". $usuario . "', " . $senha;
        return $valores;
    }

    public function salvar(){
        $tabela = "produtos";
        $colunas = "usuario, senha";
        $valores = $this->getValores();
        Conexao::insert($tabela, $colunas, $valores);
    }

}