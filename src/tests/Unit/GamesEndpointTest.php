<?php

namespace Tests\Unit;

use App\Http\Controllers\GamesController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class GamesEndpointTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;
    
    /**
     * Test for create endpoint for casinos.
     *
     * @return void
     */
    public function testCreateCasino()
    {
        $controller = new GamesController();
        $response = $controller->getAll();
        $this->assertEquals(201, $response->getStatusCode());
    }
}
