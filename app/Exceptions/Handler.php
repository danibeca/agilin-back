<?php

namespace Agilin\Exceptions;

use Buzz\Exception\RequestException;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response as IlluResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Agilin\Utils\Helpers\ResponseHelper;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler {

    use ResponseHelper;

    protected $dontReport = [
        HttpException::class,
        \PhpSpec\Exception\Exception::class
    ];


    public function render($request, Exception $e)
    {
        if ($e instanceof BadRequestHttpException)
        {
            return $this->respondBadRequest($e->getMessage());
        }

        return $this->renderTokenExceptions($request, $e);
    }


    public function renderTokenExceptions($request, Exception $e)
    {
        if ($e instanceof TokenExpiredException)
        {
            return $this->respondUnauthenticated($e->getMessage());
        }

        if ($e instanceof TokenInvalidException)
        {
            return $this->respondBadRequest($e->getMessage());
        }

        return $this->renderJWTExceptions($request, $e);

    }

    public function renderJWTExceptions($request, Exception $e)
    {
        if ($e instanceof JWTException)
        {
            return $this->respondInternalErorr("Error creating token");
        }
        return $this->renderOtherSecurityExceptions($request, $e);
    }

    public function renderOtherSecurityExceptions($request, Exception $e)
    {
        if ($e instanceof UnauthorizedHttpException)
        {
            return $this->respondUnauthenticated($e->getMessage());
        }

        if ($e instanceof MethodNotAllowedHttpException)
        {
            return $this->respondMethodNotAllowed();
        }

        return $this->renderNotFoundExceptions($request, $e);
    }

    public function renderNotFoundExceptions($request, Exception $e)
    {
        if ($e instanceof ModelNotFoundException)
        {
            return $this->respondNotFound('Resource not found');
        }

        if ($e instanceof NotFoundHttpException)
        {
            return $this->respondNotFound();
        }

        return $this->renderExternalServerExceptions($request, $e);
    }

    public function renderExternalServerExceptions($request, Exception $e)
    {
        if ($e instanceof ServiceUnavailableHttpException)
        {
            return $this->setStatusCode(IlluResponse::HTTP_SERVICE_UNAVAILABLE)->respondWithError("Service unavailable");
        }

        if ($e instanceof RequestException)
        {
            $result = null;
            if (str_contains($e->getMessage(), 'timeout'))
            {
                $result = $this->setStatusCode(IlluResponse::HTTP_REQUEST_TIMEOUT)->respondWithError("Request timeout");
            } else
            {
                $result = $this->setStatusCode(IlluResponse::HTTP_SERVICE_UNAVAILABLE)->respondWithError($e->getMessage());
            }
            return $result;
        }
        return parent::render($request, $e);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Auth\AuthenticationException $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->respondUnauthenticated();
    }
}