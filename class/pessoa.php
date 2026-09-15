<?php 

class Pessoa {
    public $nome;
    public $idade;
    public $cpf;
    public $email;
    public $telefone;
    public $endereco;
    public $cidade;
    public $estado;
    public $dataNascimento;
    public $statusPessoa;
    
    public function cadastrar() {
        $nome = $this->nome;
        $idade = $this->idade;
        $cpf = $this->cpf;
}

    public function atualizarEmail() {
        $email = $this->email;
    }

    public function atualizarTelefone() {
        $telefone = $this->telefone;
    }

    public function atualizarEndereco() {
        $endereco = $this->endereco;
        $cidade = $this->cidade;
        $estado = $this->estado;
    }

    public function atualizarStatus() {
        $statusPessoa = $this->statusPessoa;
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "CPF: " . $this->cpf . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Telefone: " . $this->telefone . "\n";
        echo "Endereço: " . $this->endereco . "\n";
        echo "Cidade: " . $this->cidade . "\n";
        echo "Estado: " . $this->estado . "\n";
        echo "Data de Nascimento: " . $this->dataNascimento . "\n";
        echo "Status da Pessoa: " . $this->statusPessoa. "\n";
    }
}

$class = new Pessoa();
$class->cadastrar();
$class->atualizarEmail();
$class->atualizarTelefone();
$class->atualizarEndereco();
$class->atualizarStatus();
$class->exibirDados();
