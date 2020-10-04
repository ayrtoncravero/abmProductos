<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getId()
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string  $description)
    {
        $this->description = $description;
    }

    public function  getDescription(): string
    {
        return $this->description;
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
