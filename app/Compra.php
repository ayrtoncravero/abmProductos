<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function __construct(string $code, int $quantity)
    {
        $this->code = $code;
        $this->quantity = $quantity;
    }

    public function getName():string {
        return $this->code;
    }
    public function getQuantity():int {
        return $this->quantity;
    }
}
