<?php

    include_once('../config/config.php');
    include('../config/database.php');
    
    class paciente{

        public $conexion;

        function __construct()
        {
            $db = new Database();
            $this->conexion = $db->connectToDatabase();
        }

        function save($params){
            $nombres = $params['nombres'];
            $edad = $params['edad'];
            $correo = $params['correo'];
            $celular = $params['celular'];
            $ciudad = $params['ciudad'];
            $discapacidad = $params['discapacidad'];

            $insert = "INSERT INTO interesados VALUES (NULL, '$nombres', $edad, '$correo', $celular, '$ciudad', '$discapacidad')";
            return mysqli_query($this->conexion, $insert);
        }


        function getALL(){
            $sql="SELECT * FROM interesados";
            return mysqli_query($this->conexion, $sql);
        }

        function getOne($id)
        {
            $sql = "SELECT * FROM interesados WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }

        function update($params){
            $nombres = $params['nombres'];
            $edad = $params['edad'];
            $correo = $params['correo'];
            $celular = $params['celular'];
            $ciudad = $params['ciudad'];
            $discapacidad = $params['discapacidad'];
            $id = $params['id'];

            $update = " UPDATE interesados SET nombres='$nombres', edad='$edad', correo='$correo', celular= $celular, ciudad='$ciudad', discapacidad='$discapacidad' WHERE id='$id' ";
            return mysqli_query($this->conexion, $update);
        }

        function delete($id){
            $delete=" DELETE FROM interesados WHERE id= $id";
            return mysqli_query($this->conexion, $delete);
        }

    }

?>