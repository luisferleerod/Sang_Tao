<?php

use PHPUnit\Framework\TestCase;

class InicioSesionTest extends TestCase {
    // Métodos de prueba aquí
    public function testAssertEquals() {
        $mensaje = "Hola Mundo";
        $this->assertEquals("Hola Mundo", $mensaje);
    }

    public function testAssertTrue() {
        $esVerdadero = true;
        $this->assertTrue($esVerdadero);
    }

    public function testAssertFalse() {
        $esFalso = false;
        $this->assertFalse($esFalso);
    }
}
