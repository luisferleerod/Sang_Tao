<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testValidLogin()
    {
        // Datos de inicio de sesión válidos
        $username = "jjosegomez";
        $password = "luchopelucho";
        
        // Realizar la solicitud POST al archivo de inicio de sesión
        $postData = [
            'username' => $username,
            'password' => $password,
            'entrar' => true
        ];
        
        $response = $this->postRequest('ruta_al_archivo/inicioSesion.php', $postData);
        
        // Verificar que se redireccionó a la página principal
        $this->assertEquals('Location: ../interfaz/principal.php', $response['headers'][0]);
        
        // Verificar que la sesión se inició correctamente
        $this->assertTrue(session_id() !== '', 'La sesión no se inició correctamente');
        $this->assertEquals($username, $_SESSION['username'], 'El nombre de usuario en la sesión no coincide');
    }
    
    public function testInvalidLogin()
    {
        // Datos de inicio de sesión inválidos
        $username = "usuario_invalido";
        $password = "clave_invalida";
        
        // Realizar la solicitud POST al archivo de inicio de sesión
        $postData = [
            'username' => $username,
            'password' => $password,
            'entrar' => true
        ];
        
        $response = $this->postRequest('ruta_al_archivo/inicioSesion.php', $postData);
        
        // Verificar que se mostró un mensaje de error y se redireccionó al formulario de inicio de sesión
        $this->assertStringContainsString('Usuario o clave incorrectos', $response['content']);
        $this->assertEquals('Location: ../interfaz/index.html', $response['headers'][0]);
        
        // Verificar que la sesión no se inició
        $this->assertTrue(session_id() === '', 'Se inició una sesión en un inicio de sesión inválido');
        $this->assertArrayNotHasKey('username', $_SESSION, 'Se guardó un nombre de usuario en la sesión');
    }
    
    // Función auxiliar para realizar una solicitud POST y obtener la respuesta
    private function postRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $headers = curl_getinfo($ch);
        curl_close($ch);
        
        return [
            'headers' => $headers,
            'content' => $response
        ];
    }
}

