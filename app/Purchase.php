<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function getCode():string {
        return $this->code;
    }
    public function getQuantity():int {
        return $this->quantity;
    }

    public function setCode(string $code) {
        $this->code = $code;
    }
    public function setQuantity(int $quantity) {
        $this->quantity = $quantity;
    }
}
