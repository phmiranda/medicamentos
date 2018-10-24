<?php
/**
 * Created by PhpStorm.
 * User: phmiranda
 * Date: 21/08/18
 * Time: 20:46
 */

// comentários.
class Conexao {
    // comentários.
    public function connectar(){
        $conn = new PDO("localhost","root","");
        return $conn;
    }

    // comentários.
    public function desconectar($conn){
        if ($conn == null){
            $conn = "desconectado";
        }
    }
}