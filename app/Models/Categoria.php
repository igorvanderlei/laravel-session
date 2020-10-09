<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ["nome", "categoria_id"];

    public function categoriaPai() {
        return $this->belongsTo('\App\Models\Categoria', 'categoria_id');
    }

    public function categorias() {
        return $this->hasMany('\App\Models\Categoria');
    }
}
