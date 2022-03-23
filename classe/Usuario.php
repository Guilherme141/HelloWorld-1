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
          //Método para Listar os Usuario (SELECT)
        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idusuario, nomeusuario, emailusuario, senhausuario FROM tbusuario";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
        
        //Método para Deletar usuarios (DELETE)
        public function deletar(){
            $conexao = Conexao::pegarConexao();
            $id=$_GET['idusuario']; //Recupera o id do usuario cadastrado
            $queryDelete = "DELETE FROM tbUsuario WHERE idusuario='$id'"; //deleta o usuario que conter o id
            $conexao->exec($queryDelete);
            header("Location: ../session/adm-restrita.php");
            
        }

        //Método para Alterar dados(UPDATE)
        public function alterar(){
            $conexao = Conexao::pegarConexao();

            //recuperar valores do form
            $id=$_POST['idusuario'];
            $nome=$_POST['nomeusuario'];
            $email=$_POST['emailusuario'];
            $senha=$_POST['senhausuario'];

            //código update
            $queryUpdate = "update tbusuario set 
            nomeusuario='$nome'
           ,emailusuario='$email'
           ,senhausuario='$senha'
           where idusuario='$id'";
           $conexao->exec($queryUpdate);
           
           header("Location: ../session/adm-restrita.php");
        }
    }
?>
