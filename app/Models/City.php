<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function companies()
    {
        //Adicionar o nome da tabela que faz o pivo -> company_city
        return $this->belongsToMany(Company::class, 'company_city');
    }
}
