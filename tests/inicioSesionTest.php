<?php

use PHPUnit\Framework\TestCase;

include("../conexion/dbh.inc.php");

class InicioSesionTest extends TestCase {
    private $db;
    private $username;
    private $password;

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
