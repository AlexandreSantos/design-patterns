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
class AvaliacaoOld extends Avaliacao {
    protected $NRUSA = "";

    public function getNRUSA() {
        return $this->NRUSA;
    }

    public function setNRUSA($NRUSA) {
        $this->NRUSA = $NRUSA;
    }

    
}
?>
