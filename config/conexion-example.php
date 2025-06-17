<?php

class Conectar
{

    protected $dbh;

    protected function Conexion()
    {

        try {
            $conectar = $this->dbh = new PDO("mysql:host=localhost; dbname=tu_db_name", "user", "Password");
            echo "¡Conexión exitosa!";
            return $conectar;
        } catch (Exception $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function set_name()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}

?>