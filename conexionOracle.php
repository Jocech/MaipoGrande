<?php 
    class Conexion{
        private $db = 'oci:dbname=XE';
        private $user = 'maipo';
        private $pass = 'maipo';

        public function Conectar(){
            try {
                $base = new PDO($this->db, $this->user, $this->pass);
                $base->exec("SET CARACTER SET utf8");

                if($base){
                    echo "Conexión Exitosa PHP y Oracle";
                    return $base;
                }
            } catch (Exception $e) {
                echo "Error de conexión: ".$e->getMessage() ; 
            }
        }
    }

?>