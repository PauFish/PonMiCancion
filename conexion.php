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

       //ejecuta una isntruccion sql y retorna el ultimo id. Para Insert, Update, Delete
    public function ejecutar($sql){

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
       }
       public function consultar($sql){
        /*ejecutar la intruccion con 'prepare', tomar la intruccion  sql y almacenarla en una
         variable, dicha variable ya tiene la informacion de retorno que seria toda la informacion*/
            $sentencia = $this->conexion->prepare($sql);
            //ejecutar la sentencia ya que tenemos la sentencia sql preparada la metemos y ejecutamos.
            $sentencia->execute();
            //fetchall retorna todos los registos que puedas consulat en sql
            return $sentencia->fetchAll();

        }

}






?>