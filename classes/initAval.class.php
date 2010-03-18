<?php
/**
  * classe
  *
  * @package AWUFiv
  * @copyright Copyright (c) SeuNome
  * @license http://www.opensource.org/licenses/gpl-3.0.html GNU Public License 3.0
  * @version 1.0
  * @author Alexandre Santos <alexandre@diariodecodigos.info>
  *
  */
class initAval {
    /**
     * Local do arquivo XMl onde fica configurado as connection String co mo Banco de Dados
     * @var string
     * @access protected
     */
    protected $fileXML = "";
    /**
     * DNS (Data Source Name) para conexão DNS
     * @var string
     * @access protected
     */
    protected $dns = "";
    /**
     * Usuário para conexão com o Banco de Dados
     * @var string
     * @access protected
     */
    protected $userdb = "";
    /**
     * Senha para conexão com o Banco de Dados
     * @var string
     * @access protected
     */
    protected $passwddb = "";

    public function getFileXML() {
        return $this->fileXML;
    }

    public function setFileXML($fileXML) {
        $this->fileXML = $fileXML;
    }

    public function getDns() {
        return $this->dns;
    }

    public function setDns($dns) {
        $this->dns = $dns;
    }

    public function getUserdb() {
        return $this->userdb;
    }

    public function setUserdb($userdb) {
        $this->userdb = $userdb;
    }

    public function getPasswddb() {
        return $this->passwddb;
    }

    public function setPasswddb($passwddb) {
        $this->passwddb = $passwddb;
    }

    /**
     * Verifica em qual DB o aluno se encontra, encotrando-o no novo sistema
     * é retornado um objeto com os dados de conexão voltados ao novo DB.
     * Caso o aluno esteja no antigo sistema retorna um bojeto com os dados
     * do antigo sistema.
     * @access public
     * @return object(avaliacao)
     */
    public function verificaAlunoSistema($nrusa){
       //return
    }
    
}
?>
