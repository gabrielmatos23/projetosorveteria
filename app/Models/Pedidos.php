<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'preco_compra',
        'id_produto',
        'id_cliente',
    ];
}
