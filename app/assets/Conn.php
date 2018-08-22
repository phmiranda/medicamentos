<?php
/**
 * Created by PhpStorm.
 * User: phmiranda
 * Date: 21/08/18
 * Time: 20:46
 */

// comentários.
class Conn {
    // comentários.
    public function connect(){
        $conn = new PDO("","","");
        return $conn;
    }
}