<?php

namespace Tests\Unit\Exception;


use Agilin\Exceptions\Handler;

use Buzz\Exception\RequestException;
use Buzz\Message\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\Flysystem\Exception;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Tests\RequestTest;
use Symfony\Component\HttpKernel\Tests\Exception\ServiceUnavailableHttpExceptionTest;
use Tests\APITest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class HandlerTest extends APITest {

    protected $handler;
    protected $resquest;

    protected function setUp()
    {
        parent::setUp();
        $container = Container::getInstance();
        $this->handler = new Handler($container);
        $this->resquest = new Request('GET', '/testing?true', 'htpp://localhost');
    }

    /** @test */
    public function it_reports()
    {
        $result = $this->handler->report(new \PhpSpec\Exception\Exception());
        $this->assertEquals(null, $result);
    }

    /** @test */
    public function it_reports_an_exceptions_and_renders_model_not_found_exception()
    {
        $exception = new ModelNotFoundException ();
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Resource not found', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_NOT_FOUND, $response->original['error']['statusCode']);

    }

    /** @test */
    public function it_renders_token_expired()
    {
        $message = 'Token has expired';
        $exception = new TokenExpiredException($message);
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals($message, $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_unathorized()
    {
        $message = 'No Authorized Access';
        $exception = new UnauthorizedHttpException(null, $message);
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals($message, $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_token_invalid()
    {
        $message = 'Token is not valid';
        $exception = new TokenInvalidException($message);
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals($message, $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_bad_request()
    {
        $message = 'Bad Request';
        $exception = new BadRequestHttpException($message);
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals($message, $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_JWTException()
    {
        $exception = new JWTException('Request exception');
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Error creating token', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_INTERNAL_SERVER_ERROR, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_MethodNotAllowedHttpException()
    {
        $exception = new MethodNotAllowedHttpException(array(), 'Exception');
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Method Not Allowed', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_METHOD_NOT_ALLOWED, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_NotFoundHttpException()
    {
        $exception = new NotFoundHttpException('Exception');
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Not Found', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_NOT_FOUND, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_ServiceUnavailableHttpException()
    {
        $exception = new ServiceUnavailableHttpException();
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Service unavailable', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_SERVICE_UNAVAILABLE, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_timeout()
    {
        $exception = new RequestException('timeout problem');
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals('Request timeout', $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_REQUEST_TIMEOUT, $response->original['error']['statusCode']);
    }

    /** @test */
    public function it_renders_run_time_service_unavailable()
    {
        $message = 'Server is not responding';
        $exception = new RequestException($message);
        $response = $this->handler->render($this->resquest, $exception);
        $this->assertEquals($message, $response->original['error']['message']);
        $this->assertEquals(Response::HTTP_SERVICE_UNAVAILABLE, $response->original['error']['statusCode']);
    }
}