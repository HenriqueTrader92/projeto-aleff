<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
