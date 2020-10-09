<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCompra extends Model
{
    use HasFactory;
    protected $fillable = ["produto_id", "quantidade", "preco"];

    public function compra() {
        return $this->belongsTo('\App\Models\ItemCompra');
    }
    public function produto() {
        return $this->belongsTo('\App\Models\ItemCompra', 'produto_id');
    }
}
