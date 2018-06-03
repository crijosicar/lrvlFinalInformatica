<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CitizenRegister;
use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{

    public function __construct()
    {
    }

    public function store(Request $request)
    {
        $messages = [
          'required' => 'El campo :attribute es requerido.',
          'max' => 'La longitud máxima para el campo :attribute es de :max digitos.'
        ];

        $validator = Validator::make($request->all(), [
            'cedula' => 'required|unique:registro_ciudadano',
            'nombres' => 'required',
            'apellidos' => 'required',
            'fechaNacimiento' => 'required',
            'estatura' => 'required|max:4',
            'tipoSangre' => 'required',
            'sexo' => 'required',
            'fechaExpedicion' => 'required',
            'lugarExpedicion' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

      $citizenRegister = new CitizenRegister();
      $citizenRegister->cedula = $request->input('cedula');
      $citizenRegister->nombres = $request->input('nombres');
      $citizenRegister->apellidos = $request->input('apellidos');
      $citizenRegister->fechaNacimiento = $request->input('fechaNacimiento');
      $citizenRegister->estatura = $request->input('estatura');
      $citizenRegister->tipoSangre = $request->input('tipoSangre');
      $citizenRegister->sexo = $request->input('sexo');
      $citizenRegister->fechaExpedicion = $request->input('fechaExpedicion');
      $citizenRegister->lugarExpedicion = $request->input('lugarExpedicion');
      $citizenRegister->huellaIndiceDerecho = $request->input('huellaIndiceDerecho');

      if($citizenRegister->save()){
        return redirect('/')->withInput(["resultado" => "ok"]);
      } else {
        return redirect('/')->withInput(["resultado" => "fail"]);
      }
    }
}
