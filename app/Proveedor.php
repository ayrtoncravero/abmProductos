<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function setCode(string $code) {
        $this->code = $code;
    }
    //public function getCode():


    //public function __construct(string $code, string $name, string $description)
    //{
    //    $this->code = $code;
    //    $this->name = $name;
    //    $this->description = $description;
    //}

    public function getName(): string{
        return $this->name;
    }
}
