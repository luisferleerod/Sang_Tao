<?php

use PHPUnit\Framework\TestCase;
include ("../conexion/dbh.inc.php");


class InicioSesionTest extends TestCase {
    private $db;
    $username = 'jjosegomez';
    $password = '12345';

    protected function setUp(): void {
        $this->db = new mysqli("192.168.77.45", "jjosegomez", "luchopelucho", "casti");
        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }
    }

    public function testValidLogin() {
        $esVerdadero;
        
        if(isset($_POST["entrar"])){
            
            $query = mysqli_query($con,"SELECT * FROM usuario WHERE usuario = '$username' AND clave = '$password'");
            $nr = mysqli_num_rows($query);

            if($nr==1){
                $esVerdadero = true;
                $this->assertTrue($esVerdadero);
                
                die();
                
            } else {
                $esVerdadero = false;
                $this->assertTrue($esVerdadero);
            }
        }

    }

}
?>
