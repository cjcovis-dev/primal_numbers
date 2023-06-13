<?php

namespace Tests;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Calculate\Primal;
use Illuminate\Http\Response;

class ValidatePrimalNumbersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_validate_primal_numbers()
    {
        //Verificar que carga la vista del formulario
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
        
        $number = 11;

        //Verificar que el número con que probamos es entero
        $this->assertIsInt($number);

        //Verificar si es número primo, resultado bool
        $verify = Primal::isPrimal($number);

        //Comparar resultado esperado, si es primo o no
        $this->assertEquals($verify, true);

        //Verificar errores de validación del Form Request, comprobrar con string o decimal
        //$response = $this->call('POST', '/getData', ['number' =>$number]);
        //$response->assertJsonValidationErrors('number', $responseKey = null);
    }
}
