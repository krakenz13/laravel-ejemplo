<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{

    protected $table = 'personas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tipo_documento',
        'numero_documento',
        'nombre',
        'edad',
    ];

}
