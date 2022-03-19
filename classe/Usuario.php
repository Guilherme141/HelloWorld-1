<?php
    require_once("Conexao.php");

     class Usuario{
        //Atributos 
        private $idUsuario;       
        private $nomeUsuario; 
        private $emailUsuario;
        private $senhaUsuario; 

        //Métodos 

        // Getters
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;  
        }

        public function getEmailUsuario(){
            return $this->emailUsuario;
        }

        public function getSenhaUsuario(){
            return $this->senhaUsuario; 
        }

        // Setters
        public function setIdUsuario($idUsuario){
             $this->idUsuario=$idUsuario;
        }

        public function setNomeUsuario($nomeUsuario){
             $this->nomeUsuario=$nomeUsuario;  
        }

        public function setEmailUsuario($emailUsuario){
             $this->emailUsuario=$emailUsuario;
        }

        public function setSenhaUsuario($senhaUsuario){
             $this->senhaUsuario=$senhaUsuario; 
        }



        // Está inserindo as informações no banco (INSERT)
        public function cadastrar($usuario){
                $conexao=Conexao::pegarConexao();
                

                $queryInsert = "INSERT INTO tbusuario(nomeUsuario, emailUsuario,senhaUsuario)
                                VALUES ('".$usuario->getNomeUsuario()."'
                                ,'".$usuario->getEmailUsuario()."'
                                ,'".$usuario->getSenhaUsuario()."')";
                $conexao->exec($queryInsert);
                return 'Cadastro realizado com sucesso';
        }
    }
?>