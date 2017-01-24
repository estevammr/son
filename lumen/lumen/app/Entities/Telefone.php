<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 29/02/2016
 * Time: 00:24
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = ['descricao', 'codpais', 'ddd', 'prefixo', 'sufixo'];

    public function getNumeroAttribute()
    {
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}