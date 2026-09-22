<?php

class Professor extends Pessoa {
    public $registroProfessor;
    public $disciplina;
    public $cargaHoraria;
    public $salario;
    public $formacao;
    public $especialidade;
    public $turmasAtendidas;
    public $horarioAtendimento;
    public $horarioAula;
    public $anoContratacao;
    public $statusProfessor;
    public $novoHorario;

    public function removerTurma($idTurma) {
        $chave = array_search($idTurma, $this->turmasAtendidas);
        if ($chave !== false) {
            unset($this->turmasAtendidas[$chave]);
            $this->turmasAtendidas = array_values($this->turmasAtendidas);
            return true; 
        }

        return false;
    }


}

$objetoProfessor = new Professor();
$objetoProfessor->disciplina = "Técnico";
$objetoProfessor->horarioAtendimento = '7:40 AM'  . " - " . '12:30PM'  ;
$objetoProfessor->$novoHorario('12:30PM' . ' - ' . '5:30PM');
$objetoProfessor->turmasAtendidas = array(201, 202, 301, 302);
$objetoProfessor->removerTurma(301);

echo "Horario de Atendimento: " . $objetoProfessor->horarioAtendimento . "\n";
echo "Novo Horário: " . $objetoProfessor->novoHorario . "\n";