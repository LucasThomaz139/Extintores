<?php


class Cadastro {

    private $idusuario;
    private $nome;
    private $telefonetra;
    private $telefonepe;
    private $razaosocial;
    private $cnpjt;
    private $endereco;
    private $email;
    private $senha;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getTelefonetra() {
        return $this->telefonetra;
    }

    function getTelefonepe() {
        return $this->telefonepe;
    }

    function getRazaosocial() {
        return $this->razaosocial;
    }

    function getCnpjt() {
        return $this->cnpjt;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefonetra($telefonetra) {
        $this->telefonetra = $telefonetra;
    }

    function setTelefonepe($telefonepe) {
        $this->telefonepe = $telefonepe;
    }

    function setRazaosocial($razaosocial) {
        $this->razaosocial = $razaosocial;
    }

    function setCnpjt($cnpjt) {
        $this->cnpjt = $cnpjt;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function adicionar($cadastro) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "INSERT INTO cadastro(nome,telefonetra,telefonepe,razaosocial,cnpjt,endereco,email,senha) VALUES(:nome,:telefonetra,:telefonepe,:razaosocial,:cnpjt,:endereco,:email,:senha)";
            //print_r($sql);
            $prepara =$conecta->prepare($sql);
            $prepara->bindValue(":nome",$cadastro->getNome());
            $prepara->bindValue(":telefonetra",$cadastro->getTelefonetra());
            $prepara->bindValue(":telefonepe",$cadastro->getTelefonepe());
            $prepara->bindValue(":razaosocial",$cadastro->getRazaosocial());
            $prepara->bindValue(":cnpjt",$cadastro->getCnpjt());
            $prepara->bindValue(":endereco",$cadastro->getEndereco());
            $prepara->bindValue(":email",$cadastro->getEmail());
            $prepara->bindValue(":senha",$cadastro->getSenha());
            $prepara->execute();
            $conecta->commit();
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
    function veri_adicionar($cadastro){
         $conecta;

        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT nome,telefonetra,razaosocial,cnpjt,email,senha FROM cadastro WHERE nome=:nome or  telefonetra=:telefonetra or razaosocial=:razaosocial or email=:email or senha=:senha";
            $preparedStatment = $conecta->prepare($sql);
            $preparedStatment->bindValue(":nome", $cadastro->getNome());
            $preparedStatment->bindValue(":telefonetra", $cadastro->getTelefontra());
            $preparedStatment->bindValue(":razaosocial", $cadastro->getRazaosocial());
            $preparedStatment->bindValue(":cnpjt", $cadastro->getCnpjt());
            $preparedStatment->bindValue(":email", $cadastro->getEmail());
            $preparedStatment->bindValue(":senha", $cadastro->getSenha());
            $preparedStatment->execute();
            if ($preparedStatment->rowCount() < 0) {
                echo "as informação não pode ser vazias exeto o telefone pessoal e endereço os outro são obrigado digite de novo";
                header("location:../pacientes/adicionar.php");
                throw new InvalidArgumentException(":nome" . ":telefonetra"."razaosocial"."cnpjt"."email"."senha");
            } else {
                echo "sucesso";
            }
            $conecta->commit();
            return SUCESSO;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            return ERRADO;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }

    function lista($cadastro) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM cadastro";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idusuario", $cadastro->getIdusuario());
            $prepara->bindValue(":nome", $cadastro->getNome());
            $prepara->bindValue(":telefonetra", $cadastro->getTelefonetra());
            $prepara->bindValue(":telefonepe", $cadastro->getTelefonepe());
            $prepara->bindValue(":razaosocial", $cadastro->getRazaosocial());
            $prepara->bindValue(":cnpjt", $cadastro->getCnpjt());
            $prepara->bindValue(":endereco", $cadastro->getEndereco());
            $prepara->bindValue(":email", $cadastro->getEmail());
            $prepara->bindValue(":senha", $cadastro->getSenha());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            while($pegando = $prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idusuario=$pegando['idusuario'];
                $listando->nome=$pegando['nome'];
                $listando->telefonetra=$pegando['telefonetra'];
                $listando->telefonepe=$pegando['telefonepe'];
                $listando->razaosocial=$pegando['razaosocial'];
                $listando->cnpjt=$pegando['cnpjt'];
                $listando->endereco=$pegando['endereco'];
                $listando->email=$pegando['email'];
                $listando->senha=$pegando['senha'];
                $lista[] = $listando;
                
            }
            return $lista;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
    function verificador($cadastro){
        
         $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM cadastro WHERE idusuario=:idusuario";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idusuario", $cadastro->getIdusuario());
            $prepara->execute();
            $conecta->commit();
            $lista = null;
            if($pegando=$prepara->fetch(PDO::FETCH_ASSOC)){
                $listando=new Cadastro();
                $listando->idusuario=$pegando['idusuario'];
                $listando->nome=$pegando['nome'];
                $listando->telefonetra=$pegando['telefonetra'];
                $listando->telefonepe=$pegando['telefonepe'];
                $listando->razaosocial=$pegando['razaosocial'];
                $listando->cnpjt=$pegando['cnpjt'];
                $listando->endereco=$pegando['endereco'];
                $listando->email=$pegando['email'];
                $listando->senha=$pegando['senha'];
                $lista=$listando;
            }
            return $lista;
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
        
    }
    function loginadm($log){
        
        //var_dump($log); die;
        $conecta;
         //var_dump("aaaa", $cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql="SELECT*FROM cadastro WHERE email=:email and senha=:senha";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":senha", $log->getSenha());
            $prepara->bindValue(":email", $log->getEmail());
             $prepara->execute();
            $b = $prepara->fetch(PDO::FETCH_ASSOC);
   
            return $b;
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
    
    function login($log){
        $conecta;
         //var_dump("aaaa", $cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql="SELECT*FROM cadastro WHERE email=:email and senha=:senha";
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":email", $log->getEmail());
            $prepara->bindValue(":senha", $log->getSenha());
             $prepara->execute();
            $b = $prepara->fetch(PDO::FETCH_ASSOC);
            
   
            return $b;
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
            function salvar($cadastro){
         $conecta;
         //var_dump("aaaa", $cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE cadastro SET  nome=:nome,telefonetra=:telefonetra,telefonepe=:telefonepe,razaosocial=:razaosocial,cnpjt=:cnpjt,endereco=:endereco,email=:email,senha=:senha WHERE idusuario =:idusuario";
            //print_r($sql);
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idusuario", $cadastro->getIdusuario());
            $prepara->bindValue(":nome", $cadastro->getNome());
            $prepara->bindValue(":telefonetra", $cadastro->getTelefonetra());
            $prepara->bindValue(":telefonepe", $cadastro->getTelefonepe());
            $prepara->bindValue(":razaosocial", $cadastro->getRazaosocial());
            $prepara->bindValue(":cnpjt", $cadastro->getCnpjt());
            $prepara->bindValue(":endereco", $cadastro->getEndereco());
            $prepara->bindValue(":email", $cadastro->getEmail());
            $prepara->bindValue(":senha", $cadastro->getSenha());
            $a  = $prepara->execute();
            //$conecta->commit();
            $conecta->commit();
            
            return $a; 
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
        
    }
    public function excluir($cadastro) {
        $conecta;
        var_dump($cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "DELETE FROM cadastro WHERE idusuario= :idusuario";
            $prepara=$conecta->prepare($sql);
           $prepara->bindValue(":idusuario", $cadastro->getIdusuario());
            $pegando=$prepara->execute();
            $conecta->commit();
            return $pegando;
            
            
        } catch (PDOException $exc) {
            if ((isset($conecta)) && ($conecta->inTransaction())) {
                $conecta->rollBack();
            }
            echo $exc->getMessage();
            
        } finally {
            if (isset($conecta)) {
                unset($conecta);
            }
        }
    }
    

}
