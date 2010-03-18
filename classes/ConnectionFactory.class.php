<?php
/**
  * Fabrica conexões e retorna um objeto PDO já conectado
  * Implementa o padrão Singleton, obtenha a instância da classe
  * pelo método "getInstance"
  *
  * @package AWUFiv
  * @copyright Copyright (c) Alexandre Santos
  * @license http://www.opensource.org/licenses/gpl-3.0.html GNU Public License 3.0
  * @version 1.0
  * @author Alexandre Santos <alexandre@diariodecodigos.info>
  *
  */
class ConnectionFactory {
        /**
         * Armazena o objeto da própria classe ConnectionFactory
         * @var object
         */
        private static $instance;

        /**
         * Modifica o acesso ao construtor para private
         */
        private function __construct()
        {
            echo "Previne a criação da instância modificando a visibilidade para private.";
        }

        /**
         * Retorna um objeto da classe ConnectionFactory
         * @return ConnectionFactory object
         */
        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                $c = __CLASS__;
                self::$instance = new $c;
            }

            return self::$instance;
        }

        /**
         * Evita a clonagem do objeto
         */
        public function __clone(){
            throw new Exception("É proibido clonar esse objeto, obtenha um novo pelo método getInstance()");
        }

        /**
         * Retorna um objeto PDO com a conexão ativa ao antigo schema
         * @return PDO object
         */
        public function getConnectionOld()
        {

        }

        /**
         * Retorna um objeto PDO com conexão ativa ao novo schema
         * @return PDO object
         */
        public function getConnectionNew(){

        }
    }
?>
