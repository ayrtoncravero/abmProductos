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

    public function setProduct(Product $product) {
        $this->product = $product;
    }
    public function setQuantity(int $quantity) {
        $this->quantity = $quantity;
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
