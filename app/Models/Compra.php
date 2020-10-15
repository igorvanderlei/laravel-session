<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'total',
    ];

    public function itemCompras() {
        return $this->hasMany('\App\Models\ItemCompra');
    }
}
