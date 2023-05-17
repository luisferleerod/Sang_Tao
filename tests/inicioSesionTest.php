<?php

use PHPUnit\Framework\TestCase;

include("../conexion/dbh.inc.php");

class InicioSesionTest extends TestCase {
    private $db;
    private $username;
    private $password;

    protected function setUp(): void {
        $this->db = new mysqli("192.168.77.45", "jjosegomez", "luchopelucho", "casti");
        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }

        $this->username = 'jjosegomez';
        $this->password = '12345';
    }

    public function testValidLogin() {
        $_POST["username"] = $this->username;
        $_POST["password"] = $this->password;

        $query = "SELECT * FROM usuario WHERE usuario = '$this->username' AND clave = '$this->password'";
        $result = $this->db->query($query);
        $nr = $result->num_rows;

        $this->assertEquals(1, $nr, 'Se esperaba un inicio de sesión válido');
    }

    protected function tearDown(): void {
        $this->db->close();
    }
}
?>
