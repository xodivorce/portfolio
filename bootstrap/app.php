<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware): void {
        //
    })

    ->withExceptions(function (Exceptions $exceptions): void {

        $exceptions->render(function (\Throwable $e, $request) {

            $status = $e instanceof HttpExceptionInterface
                ? $e->getStatusCode()
                : 500;

            return response()->view('errors.error', [
                'code' => $status,
                'message' => match ($status) {

                    // Client errors (4xx)
                    400 => 'Bad Request',
                    401 => 'Unauthorized',
                    402 => 'Payment Required',
                    403 => 'Forbidden',
                    404 => 'Page Not Found',
                    405 => 'Method Not Allowed',
                    408 => 'Request Timeout',
                    409 => 'Conflict',
                    410 => 'Gone',
                    413 => 'Payload Too Large',
                    414 => 'URI Too Long',
                    415 => 'Unsupported Media Type',
                    419 => 'Session Expired',
                    422 => 'Unprocessable Entity',
                    429 => 'Too Many Requests',

                    // Server errors (5xx)
                    500 => 'Server Error',
                    501 => 'Not Implemented',
                    502 => 'Bad Gateway',
                    503 => 'Service Unavailable',
                    504 => 'Gateway Timeout',
                    505 => 'HTTP Version Not Supported',

                    default => 'Something went wrong',
                }
            ], $status);
        });
    })

    ->create();
