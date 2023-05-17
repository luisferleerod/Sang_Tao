<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testValidLogin()
    {
        // Datos de inicio de sesión válidos
        $username = "jjosegomez";
        $password = "luchopelucho";
        
        // Crear una instancia de la clase PDO para la conexión a la base de datos
        $dbhost = "192.168.77.45";
        $dbuser = "jjosegomez";
        $dbpass = "luchopelucho";
        $dbname = "casti";
        
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        
        // Preparar la consulta SQL para buscar el usuario
        $stmt = $dbh->prepare("SELECT * FROM usuario WHERE usuario = :username AND clave = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Verificar que se encontró un usuario válido
        $this->assertEquals(1, $stmt->rowCount(), 'No se encontró un usuario válido');
        
        // Verificar que se redireccionó a la página principal
        $this->assertStringContainsString('Location: ../interfaz/principal.php', implode(' ', $stmt->errorInfo()));
        
        // Verificar que la sesión se inició correctamente
        $this->assertNotEmpty(session_id(), 'La sesión no se inició correctamente');
        $this->assertEquals($username, $_SESSION['username'], 'El nombre de usuario en la sesión no coincide');
    }
    
    public function testInvalidLogin()
    {
        // Datos de inicio de sesión inválidos
        $username = "usuario_invalido";
        $password = "clave_invalida";
        
        // Crear una instancia de la clase PDO para la conexión a la base de datos
        $dbhost = "192.168.77.45";
        $dbuser = "jjosegomez";
        $dbpass = "luchopelucho";
        $dbname = "casti";
        
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        
        // Preparar la consulta SQL para buscar el usuario
        $stmt = $dbh->prepare("SELECT * FROM usuario WHERE usuario = :username AND clave = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        // Ejecutar la consulta
        $stmt->execute();
        
        // Verificar que no se encontró un usuario válido
        $this->assertEquals(0, $stmt->rowCount(), 'Se encontró un usuario válido en un inicio de sesión inválido');
        
        // Verificar que se mostró un mensaje de error y se redireccionó al formulario de inicio de sesión
        $this->assertStringContainsString('Usuario o clave incorrectos', implode(' ', $stmt->errorInfo()));
        $this->assertStringContainsString('Location: ../interfaz/index.html', implode(' ', $stmt->errorInfo()));
        
        // Verificar que la sesión no se inició
        $this->assertEmpty(session_id(), 'Se inició una sesión en un inicio de sesión inválido');
        $this


