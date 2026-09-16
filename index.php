<?php

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

$objAluno = new aluno();
$objAluno->notas = array(8, 7, 9);
$objAluno->dataMatricula = "2023-01-15";
$objAluno->serie = "2ª Série";
$objAluno->turmaAtual = "201";
$objAluno->responsavel = "Sr. Carlos da Silva";
$objAluno->matricula = "2023001";
$objAluno->situacao = null;

$objAluno->notaFinal();
$objAluno->atualizarSituacao();


