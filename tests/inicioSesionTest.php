<?php

use PHPUnit\Framework\TestCase;

class InicioSesionTest extends TestCase {
    private $db;

    protected function setUp(): void {
        $this->db = new mysqli("192.168.77.45", "jjosegomez", "luchopelucho", "casti");
        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }
    }

    public function testValidLogin() {
        $username = 'jjosegomez';
        $password = '12345';

        $query = "SELECT * FROM usuario WHERE usuario = '$username' AND clave = '$password'";
        $result = $this->db->query($query);
        $nr = $result->num_rows;

        $this->assertEquals(1, $nr);
    }

    public function testInvalidLogin() {
        $username = 'jjosegomez';
        $password = '123456';

        $query = "SELECT * FROM usuario WHERE usuario = '$username' AND clave = '$password'";
        $result = $this->db->query($query);
        $nr = $result->num_rows;

        $this->assertEquals(0, $nr);
    }

    protected function tearDown(): void {
        $this->db->close();
    }
}
?>
