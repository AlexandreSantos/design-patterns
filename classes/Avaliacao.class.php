<?php
/**
  * Classe abstrata para Avaliacao.
  *
  * @package AWUFiv
  * @copyright Copyright (c) SeuNome
  * @license http://www.opensource.org/licenses/gpl-3.0.html GNU Public License 3.0
  * @version 1.0
  * @author Alexandre Santos <alexandre@diariodecodigos.info>
  *
  */
abstract class Avaliacao {
    protected $curso = "";
    protected $nivel = "";
    protected $area = "";
    protected $faculdade = "";
    protected $caracteristica = "";
    protected $historico = "";

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getFaculdade() {
        return $this->faculdade;
    }

    public function setFaculdade($faculdade) {
        $this->faculdade = $faculdade;
    }

    public function getCaracteristica() {
        return $this->caracteristica;
    }

    public function setCaracteristica($caracteristica) {
        $this->caracteristica = $caracteristica;
    }

    public function getHistorico() {
        return $this->historico;
    }

    public function setHistorico($historico) {
        $this->historico = $historico;
    }
    
}
?>
