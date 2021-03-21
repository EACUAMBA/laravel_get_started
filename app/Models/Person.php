<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person'; //Nome da tabela
    protected $primaryKey = 'id'; //nome da chave primaria
    public $incrementing = true; //Se increment é true se não false
    protected $keyType = 'integer'; //Se o tipo da chave primaria não for integer devo colocar o tipo de dado como string
    //public $timestamps = true; //Se quiser que as colunas created_at e updated_at sejam manuseiadas pelo eloquente deixe este campo como true caso contrario false
    //protected $dateFormat = 'U'; //Para alterar o formato da data que é armazenada no banco de dados

    const CREATED_AT = 'created_at'; //Se as colunas crated_at e updated_at foram criadas manualmente e tem outor nome, podes difinilo aqui.
    const UPDATED_AT = 'updated_at';

    protected $connection = 'mysql'; //Se esta tabela particular estará em outro banco de dados podes colocar aqui os dados de conection dela

    protected $attributes = [
        'state'=>'1'
    ]; //Se quiseres difinir valores padrao para os teus atributos podes usar esta variavel e difinir um array com os dados padrao;

    protected $fillable = [
        'name',
        'born_date',
        'state',
        'salary',
        'bi',
        'user_id',
        'permission_id'
    ]; //Atributos que podemos preencher. estamos a criar atributos para o modelo.

    protected $hidden =[

    ]; //Atributos que devem ser ocultos em um array.

    protected $casts=[

    ]; //Atributos que devem ser feitos cast para a sou tipo nativo

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function permission()
    {
        $this->belongsTo(Permission::class, 'id', 'permission_id');
    }
}
