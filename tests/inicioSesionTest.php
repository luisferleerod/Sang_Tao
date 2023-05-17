use PHPUnit\Framework\TestCase;

class InicioSesionTest extends TestCase
{
    public function testInicioSesionExitoso()
    {
        // Simula los datos de inicio de sesión correctos
        $_POST["username"] = "jjosegomez";
        $_POST["password"] = "12345";

        // Incluye el archivo de inicio de sesión para acceder a las variables y funciones
        include("inicioSesion.php");

        // Comprueba si se redirecciona correctamente después del inicio de sesión exitoso
        $this->assertEquals("../interfaz/principal.php", $this->getActualOutput());

        // Comprueba si se estableció la variable de sesión correctamente
        $this->assertEquals("usuario_valido", $_SESSION['username']);
    }

    public function testInicioSesionFallido()
    {
        // Simula los datos de inicio de sesión incorrectos
        $_POST["username"] = "jjosegomez1";
        $_POST["password"] = "123456";

        // Incluye el archivo de inicio de sesión para acceder a las variables y funciones
        include("inicioSesion.php");

        // Comprueba si se muestra el mensaje de error
        $this->expectOutputString('<script language="javascript">alert("Usuario o clave incorrectos");window.location.href="../interfaz/index.html"</script>');
        $this->assertEquals(0, mysqli_num_rows($query));
    }
}
