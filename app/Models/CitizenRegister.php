<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idPersona [TYPE=INTEGER, NULLABLE=0, DEFAULT=""]
 * @property string $cedula [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $nombres [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string apellidos [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $estatura [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $tipoSangre [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $sexo [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $huellaIndiceDerecho [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string $lugarExpedicion [TYPE=STRING, NULLABLE=0, DEFAULT=""]
 * @property string fechaNacimiento [TYPE=DATETIME, NULLABLE=1, DEFAULT=""]
 * @property string $fechaExpedicion [TYPE=DATETIME, NULLABLE=1, DEFAULT=""]
 */
class CitizenRegister extends Model
{

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'estatura',
        'tipoSangre',
        'sexo',
        'huellaIndiceDerecho',
        'lugarExpedicion'
    ];

    protected $guarded = ['idPersona'];

    protected $hidden = [
        'idPersona'
    ];

    protected $dates = [
      'fechaNacimiento',
      'fechaExpedicion'
    ];

    protected $table = 'registro_ciudadano';

    public $timestamps = false;

}
