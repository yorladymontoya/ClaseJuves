<?php
    class BaseDatos
{
    //atributos
    public $usuarioBD="root";
    public $passwordBD="";

    //constructor
    public function __construct()
    {
        
    }

    //metodos
    public function conectarBD()
    {
    /*
        if($conexionBD)
        {
            echo("exito");
        }else{
            echo("error");
        }
    */
        try {
            $datosBD="mysql:host=localhost;dbname=bd_tiendajueves";
            $conexionBD= new PDO($datosBD, $this -> usuarioBD, $this -> passwordBD);
           
            return($conexionBD);

        } catch (PDOException $error) {
            echo($error -> getMessage());
        }

    }
        public function agregarDatos($consultarSQL)
        {
            //Estableccer una conexion
            $conexionBD= $this->conectarBD();

            //Preparar la consulta
            $insertarDatos=$conexionBD->prepare($consultarSQL);

            //Ejecutar la consulta
            $insertarDatos->execute();
            $resultado= $insertarDatos->execute();

            //Verifico el resultado
            if($resultado){
                echo('Usuario agregado');
            }else{
                echo('Error');
            }


        }


}


?>