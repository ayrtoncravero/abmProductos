<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
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

    public function setDescription(string $description) {
        $this->name = $description;
    }
    public function getDescription(): string{
        return $this->description;
    }

    #Referencia a producto
    public function product() {
        return $this->hasOne(Producto::class);
    }
}
