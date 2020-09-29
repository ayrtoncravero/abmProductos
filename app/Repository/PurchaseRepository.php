<?php


namespace App\Repository;

use App\Purchase;

class PurchaseRepository
{
    public function save(Purchase $purchase) {
        $purchase->save();
    }

    public function verifyIfCodeIsExist(int $code) {
        return Purchase::query()->where('code', '=', $code)->count() === 1;
    }
}
