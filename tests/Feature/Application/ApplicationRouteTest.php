<?php


namespace Tests\Feature\Application;


use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Tests\APITest;
use Tests\Helper\MockGuard;
use Tests\Helper\MockUser;

class ApplicationRouteTest extends APITest {

    /** @test */
    public function it_call_application_route_without_token()
    {
        $data = $this->requestJson('GET', 'api/applications');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    /*public function it_calls_application_routes()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard(MockUser::getWithAccount(2)));
        $data = $this->requestJson('GET', 'api/applications');
        $this->assertNotEmpty($data->data);
        var_dump($data);
    }*/

    /** @test */
    public function it_calls_application_indicator_without_token()
    {
        $data = $this->requestJson('GET', 'api/applications/1/indicators/1');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    public function it_calls_with_a_non_owned_application()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard());
        $data = $this->requestJson('GET', 'api/applications/3/indicators/1');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }

    /** @test */
    public function it_calls_application_indicator_series_without_token()
    {
        $data = $this->requestJson('GET', 'api/applications/3/indicators/1/series');
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
        $data = $this->requestJson('GET', 'api/applications/2/indicators/1/series');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }
}