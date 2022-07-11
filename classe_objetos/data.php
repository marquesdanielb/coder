<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar()
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$dataPadrao = new Data();
echo $dataPadrao->apresentar();

$dataAtual = new Data();
$dataAtual->dia = 11;
$dataAtual->mes = 1;
$dataAtual->ano = 2022;
echo $dataAtual->apresentar();