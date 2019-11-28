<?php

include_once 'PHPMailer/class.SMTP.php';
include_once 'PHPMailer/class.PHPMailer.php';


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
         //var_dump($cadastro);die;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM cadastro WHERE cnpjt=:cnpjt";
            $preparedStatment = $conecta->prepare($sql);
            $preparedStatment->bindValue(":cnpjt", $cadastro->getCnpjt());
           $pega= $preparedStatment->execute();
           //var_dump($pega);die;
            if ($pega) {
                
                echo "ja existe o cnpjt";
                //header("location:../cliente/usuario.php");
                return $pega;
                
                //throw new InvalidArgumentException(":cnpjt");
            } else {
                echo "faça seu cadastro";
                return $pega ;
                //header("location:../cliente/email.php");
            }
            $conecta->commit();
            return ;
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
     function enviar_email($en) {
          $conecta;
        try {
        $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
    
            $conecta->beginTransaction();
            $sql = "SELECT * FROM cadastro WHERE email=:email";
            $preparedStatment = $conecta->prepare($sql);
            $preparedStatment->bindValue(":email", $en->getEmail());         
            $compacto = $preparedStatment->execute();
            $conecta->commit();
            
            if($compacto){
                $pegando = $preparedStatment->fetchAll();
                
                foreach($pegando as $colocando){           
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = "aulaifsul@gmail.com";
                    $mail->Password = "123456aula";
                    $mail->SMTPSecure = "tls";
                    $mail->Port = 587;
                    $mail->From = "aulaifsul@gmail.com";
                    $mail->FromName = "Aula Ifsul";
                    $mail->addAddress($colocando['email']);
                    $mail->isHTML(false);
                    $mail->Subject = "thomaz";
                    $mail->Body = " A sua senha é ". $colocando["senha"].".";
                    $resultadoenvio = $mail->send();
                    
                    return $resultadoenvio;
                }
            } else{
                
            }
            
            
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

    function lista($cadastro, $complemento="") {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM cadastro".$complemento;
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
    function listar($cadastro) {
        $conecta;
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "SELECT*FROM cadastro WHERE idusuario=:idusuario";
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
    function busca($cadastro){
         $conecta;
         //var_dump($cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $busca=$cadastro->getCnpjt();
            $preparedStatment = $conecta->prepare("select * from cadastro where cnpjt like '$busca%'");
            $preparedStatment->execute();
            $pega=$preparedStatment->fetchAll(PDO::FETCH_ASSOC);
            return $pega;
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
     function salva($cadastro){
         $conecta;
         //var_dump("aaaa", $cadastro);
        try {
            $conecta = new PDO('mysql:host=127.0.0.1;dbname=extintores', 'root', '');
            $conecta->beginTransaction();
            $sql = "UPDATE cadastro SET  telefonetra=:telefonetra,telefonepe=:telefonepe,email=:email WHERE idusuario =:idusuario";
            //print_r($sql);
            $prepara = $conecta->prepare($sql);
            $prepara->bindValue(":idusuario", $cadastro->getIdusuario());
            $prepara->bindValue(":telefonetra", $cadastro->getTelefonetra());
            $prepara->bindValue(":telefonepe", $cadastro->getTelefonepe());
            $prepara->bindValue(":email", $cadastro->getEmail());
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
