<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function setName(string $name) {
        $this->name = $name;
    }
    //...

    //public function __construct(string $name, string $description)
    //{
    //    $this->name = $name;
    //    $this->description = $description;
    //}

    public function getName() :string{
        return $this->name;
    }
}
