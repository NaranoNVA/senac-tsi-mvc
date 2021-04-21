<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'email',
        'telefone'];

    /*
    É possivel mudar a chave primária assim
    protected $primaryKey = 'nome_da_pk';

    Se não quiser que seja auto_increment
    public $increment = false;

    Para definir o tipo
    protected $keyType = 'string';

    Tirar os campos timestamps
    public $timestamps = false;
    */

    protected $table = 'Funcionario';

    public function vendas(){
        return $this->hasMany(Vendas::class, 'funcionario_id');
     }
}
