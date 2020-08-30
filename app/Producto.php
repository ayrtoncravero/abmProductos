<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function getId() {
        return $this->id;
    }

    public function setCode(string $code) {
        $this->code = $code;
    }
    public function getCode(): string {
        return $this->code;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }

    public function setDescription(string $Description) {
        $this->description = $Description;
    }
    public function getDescription(): string {
        return $this->description;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }
    public function getPrice(): float {
        return $this->price;
    }

    public function setProvider(string $provider) {
        $this->provider = $provider;
    }
    public function getProvider() {
        return $this->provider;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }
    public function getCategory(): string {
        return $this->category;
    }
}
