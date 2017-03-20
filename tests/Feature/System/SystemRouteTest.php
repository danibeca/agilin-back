<?php


namespace Tests\Feature\Systems;


use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Tests\APITest;
use Tests\Helper\MockGuard;

class SystemRouteTest extends APITest {

    /** @test */
    public function it_call_systems_routes_without_token()
    {
        $data = $this->requestJson('GET', 'api/systems');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    /*public function it_call_systems_routes()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard(MockUser::getWithAccount(2)));
        $data = $this->requestJson('GET', 'api/systems');
        $this->assertNotEmpty($data->data);
    }*/

    /** @test */
    public function it_calls_system_indicator_without_token()
    {
        $data = $this->requestJson('GET', 'api/systems/1/indicators/1');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    public function it_calls_with_a_non_owned_system()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard());
        $data = $this->requestJson('GET', 'api/systems/3/indicators/1');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }

    /** @test */
    public function it_calls_system_indicator_series_without_token()
    {
        $data = $this->requestJson('GET', 'api/systems/3/indicators/1/series');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    public function it_calls_series_with_a_non_owned_account()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard());
        $data = $this->requestJson('GET', 'api/systems/3/indicators/1/series');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }

}