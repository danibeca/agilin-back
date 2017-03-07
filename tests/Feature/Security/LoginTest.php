<?php

namespace Tests\Unit\Security;

use Symfony\Component\HttpFoundation\Response;
use Tests\APITest;


class LoginTest extends APITest {

    /** @test */
    public function it_calls_authentication_without_credentials()
    {
        $data = $this->requestJson('POST', 'api/login');

        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $data->error->statusCode);
        $this->assertEquals('Invalid Credentials', $data->error->message);
        //$this->assert(Response::HTTP_UNAUTHORIZED);
    }

    /** @test */
    public function it_calls_authentication_with_valid_credentials()
    {
        $data = $this->requestJson('POST', 'api/login', ['email' => 'lloploup@gmail.com', 'password' => 'danibeca']);

        //$this->assertResponseOk();
        $this->assertEquals('1', $data->id);
        $this->assertNotNull($data->token);
    }

    /** @test */
    public function it_calls_authentication_with_invalid_credentials()
    {
        $data = $this->requestJson('POST', 'api/login', ['email' => 'invalidemail@gmail.com', 'password' => 'invalid']);
        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $data->error->statusCode);
        //$this->assertResponseStatus(Response::HTTP_UNAUTHORIZED);
    }
}