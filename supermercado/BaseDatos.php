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
          
            $resultado= $insertarDatos->execute();

            //Verifico el resultado
            if($resultado){
                echo('Usuario agregado');
            }else{
                echo('Error');
            }
        }

        public function consultarDatos($consultarSQL)
        {
            //Estableccer una conexion
            $conexionBD= $this->conectarBD();

             //Preparar la consulta
             $consultarDatos=$conexionBD->prepare($consultarSQL);

            //Establecer el metodo de consulta
            $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

            //Ejecutar la operacion en la BD
            $consultarDatos->execute();
            return($consultarDatos->fetchAll());

        }
        public function eliminarDatos($consultarSQL)
        {
            //Estableccer una conexion
            $conexionBD= $this->conectarBD();

            //Preparar la consulta
            $eliminarDatos=$conexionBD->prepare($consultarSQL);

            //Ejecutar la consulta
            $resultado=$eliminarDatos->execute();

            //verificar el resultado

        if ($resultado){
            echo("usuario eliminado");
        }
        else{
            echo("error");
        }  

        }
        public function editarDatos($consultarSQL){
             //Estableccer una conexion
             $conexionBD= $this->conectarBD();

             //Preparar la consulta
             $editarDatos=$conexionBD->prepare($consultarSQL);
 
             //Ejecutar la consulta
             $resultado=$editarDatos->execute();
 
             //verificar el resultado
 
         if ($resultado){
             echo("usuario editado");
         }
         else{
             echo("error al editar usuario");
         }  
 




        }

}


?>