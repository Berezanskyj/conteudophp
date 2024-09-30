<?php

class Aluno {
    private $nome;
    private $idade;
    private $pnota;
    private $snota;
    private $tnota;
    private $qnota;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }


    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }


    public function setPnota($pnota) {
        $this->pnota = $pnota;
    }

    public function getPnota() {
        return $this->pnota;
    }


    public function setSnota($snota) {
        $this->snota = $snota;
    }

    public function getSnota() {
        return $this->snota;
    }


    public function setTnota($tnota) {
        $this->tnota = $tnota;
    }

    public function getTnota() {
        return $this->tnota;
    }


    public function setQnota($qnota) {
        $this->qnota = $qnota;
    }

    public function getQnota() {
        return $this->qnota;
    }
}

    $aluno = new Aluno();

    function calcularMedia($aluno) {

        $media = ($aluno->getPnota() + $aluno->getSnota() + $aluno->getTnota() + $aluno->getQnota()) / 4;
    
        echo "Média: $media<br>";
    
        if ($media >= 7) {
            echo "Resultado: Aprovado<br>";
        } else if ($media >= 5) {
            echo "Resultado: Recuperação<br>";
        } else {
            echo "Resultado: Reprovado<br>";
        }
    }


?>