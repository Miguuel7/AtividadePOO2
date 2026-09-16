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

$objPessoa = new Pessoa();
$objPessoa->nome = "João da Silva";
$objPessoa->idade = 30;
$objPessoa->cpf = "123.456.789-00";
$objPessoa->email = "joao.silva@example.com";
$objPessoa->telefone = "(11) 99999-9999";
$objPessoa->endereco = "Rua Exemplo, 123";
$objPessoa->cidade = "São Paulo";
$objPessoa->estado = "SP";
$objPessoa->dataNascimento = "1993-05-15";
$objPessoa->statusPessoa = "Ativo";
$objPessoa->cadastrar();
$objPessoa->atualizarEmail();
$objPessoa->atualizarTelefone();
$objPessoa->atualizarEndereco();
$objPessoa->atualizarStatus();
$objPessoa->exibirDados();
