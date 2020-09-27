<?php


namespace App\Repository;

use App\Purchase;

class PurchaseRepository
{
    public function save(Purchase $purchase) {
        $purchase->save();
    }
}
