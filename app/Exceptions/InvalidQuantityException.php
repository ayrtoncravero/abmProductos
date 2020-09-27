<?php


namespace App\Exceptions;


use \Exception;
use Throwable;

class InvalidQuantityException extends Exception
{
    public function __construct($message = "La cantidad ingresada supera el maximo")
    {
        parent::__construct($message, 422);
    }
}
