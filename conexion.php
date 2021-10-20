<?php
    class Conexion extends PDO{
        private $tipo = 'mysql';
        private $host = 'localhost';
        private $nombredb = 'tenis';
        private $usuario = 'root';
        private $contra = '';
        
        public function __construct(){
            try {
                parent::__construct("{$this->tipo}:dbname={$this->nombredb};host={$this->host};charset=utf8",$this->usuario,$this->contra);
            } catch (PDOException $e) {
                echo 'Existe un error: '.$e->getMessage();
            }
        }
    }
 ?>