<?php

 include_once 'pessoa.php';

class Aluno extends Pessoa {
    public $matricula;
    public $serie;
    public $turmaAtual;
    public $notas;
    public $mediaFinal;
    public $situacao;
    public $responsavel;
    public $dataMatricula;
    public $atualizarSituacao;

    public function matricular() {
        $matricula = new aluno();
    }

    public function notas() {
        $notas = $this->notas;
    }

    public function notaFinal() {
        if (count($this->notas) > 0) {
            $this->mediaFinal = array_sum($this->notas) / count($this->notas);
        } else {
            $this->mediaFinal = 0;
        }
    }

    public function atualizarSituacao() {
        if 
            ($this->mediaFinal>= 7) {
                $this->situacao = "Aprovado";
            } else {
                $this->situacao = "Reprovado";
            }
    }
    
    public function mudarTurma() {
        
    }
    
    }

$objAluno = new aluno();
$objAluno->notas = array(8, 7, 9);
$objAluno->dataMatricula = "2023-01-15";
$objAluno->serie = "null";
$objAluno->turmaAtual = "201";
$objAluno->responsavel = "Sr. Carlos da Silva";
$objAluno->matricula = "2023001";
$objAluno->situacao = null;

$objAluno->notaFinal();
$objAluno->atualizarSituacao();

echo "Matrícula: " . $objAluno->matricula . "\n";
echo "Data de Matrícula: " . $objAluno->dataMatricula . "\n";
echo "Série: " . $objAluno->serie . "\n";
echo "Turma Atual: " . $objAluno->turmaAtual . "\n";
echo "Notas: " .  " $objAluno->mediaFinal" . "\n";
echo "Situação: " . "$objAluno->situacao" . "\n";