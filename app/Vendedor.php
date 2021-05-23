<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendedor extends Model
{
    use SoftDeletes;
    protected $fillable = ['id', 'nome', 'cpf'];
    protected $dates = ['deleted_at'];
    protected $table = 'vendedores';
    protected $primaryKey = 'id';

    public function produtos()
    {
        return $this->hasMany('App\Produto');
    }
}
