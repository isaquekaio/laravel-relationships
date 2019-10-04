<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];

    public function cities()
    {
        return $this->belongsToMany(City::class, 'company_city');
    }
}
