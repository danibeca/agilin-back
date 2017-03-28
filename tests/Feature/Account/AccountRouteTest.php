<?php

namespace Tests\Feature\Account;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Tests\APITest;
use Tests\Helper\MockGuard;
use Tests\Helper\MockUser;

class AccountRoutes extends APITest {

    /** @test */
    public function it_calls_account_indicator_without_token()
    {
        $data = $this->requestJson('GET', 'api/accounts/1/indicators/1');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    public function it_calls_with_a_non_owned_account()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard());
        $data = $this->requestJson('GET', 'api/accounts/2/indicators/1');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }


    /** @test */
    public function it_calls_account_indicator_series_without_token()
    {
        $data = $this->requestJson('GET', 'api/accounts/1/indicators/1/series');
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
        $data = $this->requestJson('GET', 'api/accounts/2/indicators/1/series');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }

    /** @test */
    public function it_calls_account_indicator_index_without_token()
    {
        $data = $this->requestJson('GET', 'api/accounts/1/indicators');
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $data->error->statusCode);
        $this->assertEquals('Token not provided', $data->error->message);
    }

    /** @test */
    public function it_calls_account_indicator_index_with_wrong_account()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard());
        $data = $this->requestJson('GET', 'api/accounts/2/indicators');
        $this->assertEquals(Response::HTTP_NOT_FOUND, $data->error->statusCode);
    }

    ////INACTIVATE TEST

    /** @test */
    /*public function it_gets_series()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard(MockUser::getWithAccount(2)));
        $data = $this->requestJson('GET', 'api/accounts/2/indicators/1/series');
        $this->assertNotEmpty('Salud del Codigo', $data->data[0]->date);
    }*/

    /** @test */
    /*public function it_calaculate_indicator()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard(MockUser::getWithAccount(2)));
        $data = $this->requestJson('GET', 'api/accounts/2/indicators/1');
        $this->assertEquals('Salud del Codigo', $data->data->name);
        var_dump(json_encode($data));
    }
    */

    /** @test */
    /*public function it_calaculate_indicator()
    {
        $this->withoutMiddleware();
        Auth::shouldReceive('guard')
            ->once()
            ->with('api')
            ->andReturn(new MockGuard(MockUser::getWithAccount(2)));
        $data = $this->requestJson('GET', 'api/accounts/2/indicators');
        $this->assertEquals('Salud del Codigo', $data->data[0]->name);
        var_dump(json_encode($data));
    }*/
}