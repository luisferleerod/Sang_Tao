<?php

use PHPUnit\Framework\TestCase;

class InicioSesionTest extends TestCase {
    // Métodos de prueba aquí
    public function testAssertEquals() {
        $mensaje = "Hola Mundo1";
        $this->assertEquals("Hola Mundo", $mensaje);
    }

    public function testAssertTrue() {
        $esVerdadero = false;
        $this->assertTrue($esVerdadero);
    }

    public function testAssertFalse() {
        $esFalso = true;
        $this->assertFalse($esFalso);
    }
}
