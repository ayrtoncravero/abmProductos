<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function getCode():string {
        return $this->code;
    }
    public function getQuantity():int {
        return $this->quantity;
    }
}
