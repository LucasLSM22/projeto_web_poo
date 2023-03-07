<?php
    //importacao
    require_once("pessoa.class.php");
    //nome da classe
    class Execucao {
        //objeto pessoa com visibilidade privada
        private $pessoa;

        public function __construct (){
            //objeto chamado pessoa que recebe a classe pessoa
            $pessoa = new Pessoa();
            //passar um valor para o metodo setnome 
            $pessoa -> setNome("<b>Nome: </b>".$_POST['nome'] . "<br><br>");
            //imprimir o valor do metodo getnome
            echo $pessoa->getNome();
            //passar um valor para o metodo setendereco
            $pessoa -> setEndereco("<b>Endereço: </b>". $_POST['endereco']. "<br><br>");
            //imprimir o valor do metodo getendereco
            echo $pessoa->getEndereco();
            //passar um valor para o metodo setbairro
            $pessoa -> setBairro("<b>Bairro: </b>".$_POST['bairro']. "<br><br>");
            //imprimir o valor do metodo getbairro
            echo $pessoa->getBairro();
            //passar um valor para o metodo setcep
            $pessoa -> setCep("<b>CEP: </b>".$_POST['cep']. "<br><br>");
            //imprimir o valor do metodo getcep
            echo $pessoa->getCep();
            //passar um valor para o metodo setcidade
            $pessoa -> setCidade("<b>Cidade: </b>".$_POST['cidade']. "<br><br>");
            //imprimir o valor do metodo getcidade
            echo $pessoa->getCidade();
            //passar um valor para o metodo setestado
            $pessoa -> setEstado("<b>Estado: </b>".$_POST['estado']. "<br><br>");
            //imprimir o valor do metodo getestado
            echo $pessoa->getEstado();

        }
        //Instancia
    }new Execucao()
?>