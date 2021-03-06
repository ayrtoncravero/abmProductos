<?php

namespace App;

use App\Exceptions\InvalidQuantityException;
use Illuminate\Database\Eloquent\Model;
use Money\Currency;
use Money\Money;

class Product extends Model
{
    public function getId()
    {
        return $this->id;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $Description)
    {
        $this->description = $Description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setPrice(Money $price)
    {
        $this->price = $price->getAmount();
    }

    public function getPrice(): Money
    {
        return new Money($this->price, new Currency('ARS'));
    }

    public function setProvider(Provider $provider)
    {
        $this->provider()->associate($provider);
    }

    public function getProvider(): Provider
    {
        return $this->provider;
    }

    public function setCategory(Category $categories)
    {
        $this->category()->associate($categories);
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    private function setStock(int $stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function changeStock(int $quantity)
    {
        if ($this->getStock() < $quantity) {
            throw new InvalidQuantityException();
        }
        $this->setStock($this->getStock() - $quantity);
    }

    public function increaseStock(int $quantity)
    {
        if ($quantity <= 0) {
            throw new InvalidQuantityException();
        }
        $this->setStock($quantity);
    }
}
