<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Funcionarios;

class Departamentos extends Model
{
    public $timestamps = false;
    protected $table = 'departamentos';

    public static function rules() {
        $rules = array(
            'name' => "max:100|required"
        );

        return $rules;
    }

    public function funcionarios() {
        return $this->belongsToMany(
            Funcionarios::class,
            'func_departs',
            'id_func',
            'id_depart'
        );
    }
}
