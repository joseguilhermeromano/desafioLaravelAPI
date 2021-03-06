<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    protected $fillable = ['id', 'nome', 'vendedor_id', 'preco'];
    protected $dates = ['deleted_at'];
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    public function vendedor()
    {
        return $this->belongsTo('App\Vendedor', 'vendedor_id');
    }
}
