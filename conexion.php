<?php

class conexion {

    private $servidor="localhost";
    private $usuario="root";
    private $password="";
    private $conexion;

    public function __construct(){
        //PDO nos permite conectarnos a una base de datos
        try {
            $this->conexion=new PDO(
            "mysql:host=$this->servidor;dbname=ponmicancion",
            $this->usuario,$this->password);
            //activamos modo error y las exepciones
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
            catch(PDOException $e){
                return "Fallo de conexión".$e;
        }
    }    

       //ejecuta una isntruccion sql y retorna el ultimo id insertado
    public function ejecutar($sql){

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
       }

}






?>