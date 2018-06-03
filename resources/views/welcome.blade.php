<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <h2 class="text-center mb-4">Registro de persona</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if( !is_null(old('resultado')) && old('resultado') == "ok")
            <div class="alert alert-success">
              Datos guardados correctamente
            </div>
            @endif

            @if(!is_null(old('resultado'))  && old('resultado') == "fail")
            <div class="alert alert-danger">
              Error al guardar los datos
            </div>
            @endif

            <form id="registerPerson" method="POST" action="{{ action('CustomerController@store') }}">
              {{ csrf_field() }}

                  <div class="form-group">
                    <label for="exampleInputEmail1">Número de cédula</label>
                    <input type="number" name="cedula" class="form-control" value="{{ old('cedula') }}">
                  </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input type="text" name="nombres" class="form-control" value="{{ old('nombres') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" class="form-control" value="{{ old('fechaNacimiento') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Estatura</label>
                <input type="number" name="estatura" class="form-control" value="{{ old('estatura') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tipo de sangre</label>
                <select class="custom-select" name="tipoSangre">
                  @if(is_null(old('tipoSangre')))
                  <option selected>-- seleccione --</option>
                  @else
                  <option>-- seleccione --</option>
                  @endif
                  <option value="A+" {{old("tipoSangre") == "A+" ? 'selected' : ''}}>A+</option>
                  <option value="B+" {{old("tipoSangre") == "B+" ? 'selected': ''}}>B+</option>
                  <option value="O+" {{old("tipoSangre") == "O+" ? 'selected': ''}}>O+</option>
                  <option value="AB+" {{old("tipoSangre") == "AB+" ? 'selected': ''}}>AB+</option>
                  <option value="A-" {{old("tipoSangre") == "A-" ? 'selected': ''}}>A-</option>
                  <option value="B-" {{old("tipoSangre") == "B-" ? 'selected': ''}}>B-</option>
                  <option value="O-" {{old("tipoSangre") == "O-" ? 'selected': ''}}>O-</option>
                  <option value="AB-" {{old("tipoSangre") == "AB-" ? 'selected': ''}}>AB-</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sexo</label>
                <select class="custom-select" name="sexo">
                  @if(is_null(old('sexo')))
                  <option selected>-- seleccione --</option>
                  @else
                  <option>-- seleccione --</option>
                  @endif
                  <option value="M" {{old("sexo") == "M" ? 'selected' : ''}}>Masculino</option>
                  <option value="F" {{old("sexo") == "F" ? 'selected' : ''}}>Femenino</option>
                  <option value="N/A" {{old("sexo") == "N/A" ? 'selected' : ''}}>No definido</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Fecha de expedición</label>
                <input type="date" name="fechaExpedicion" class="form-control" value="{{ old('fechaExpedicion') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Lugar de expedición</label>
                <input type="text" name="lugarExpedicion" class="form-control" value="{{ old('lugarExpedicion') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Huella indice derecho</label>
                <input type="text" name="huellaIndiceDerecho" class="form-control" value="{{ old('huellaIndiceDerecho') }}">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>

        </div>
    </div>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  <!--script src="{{ asset('lib/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script!-->
</body>
</html>
