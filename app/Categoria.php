<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//TODO: change name to english
class Categoria extends Model
{
    public function getId() {
        $this->id;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }

    public function setDescription(string  $description) {
        $this->description = $description;
    }
    public function  getDescription(): string {
        return $this->description;
    }

    #Referencia a producto
    public function product() {
        return $this->hasOne(Producto::class);
    }
}
