<?php

namespace Agilin\Exceptions;

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
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler {

    use ResponseHelper;

    protected $dontReport = [
        HttpException::class,
    ];

    public function report(Exception $e)
    {
        return parent::report($e);
    }

    public function render($request, Exception $e)
    {

        if ($e instanceof ModelNotFoundException)
        {
            return $this->respondNotFound('Resource not found');
        }

        if ($e instanceof TokenExpiredException )
        {
            return $this->setStatusCode(IlluResponse::HTTP_UNAUTHORIZED)->respondWithError("Token has expired");
        }
        if ($e instanceof UnauthorizedHttpException)
        {
            return $this->setStatusCode(IlluResponse::HTTP_UNAUTHORIZED)->respondWithError($e->getMessage());
        }

        if ($e instanceof TokenInvalidException || $e instanceof BadRequestHttpException)
        {
            return $this->setStatusCode(IlluResponse::HTTP_BAD_REQUEST)->respondWithError("Token has not been provided");
        }
        if ($e instanceof JWTException)
        {
            return $this->respondInternalErorr("Error creating token");
        }

        if ($e instanceof MethodNotAllowedHttpException)
        {
            return $this->respondMethodNotAllowed();
        }

        if ($e instanceof NotFoundHttpException)
        {
            return $this->respondNotFound();
        }

        return parent::render($request, $e);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->respondUnauthenticated();
    }
}