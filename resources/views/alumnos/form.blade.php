<link href="{{asset('intl-tel-input-master/build/css/inintlTelInput.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@if($Modo=='crear')
<form action="{{url('/Alumnos')}}" method="post" enctype="multipart/form-data">

@elseif($Modo=='editar')
<form action="{{url('/Alumnos/'.$alumno->id)}}" method="post" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
@endif
        {{ csrf_field() }}
        
        <!--Nombre Completo-->
        <div class="row small">
            <div class="col-md-4">
                <!--Nombre-->
                <label for="Nombres">{{'Nombre(s)*'}}</label>
                <input value="{{isset($alumno->Nombres)?$alumno->Nombres:''}}"   class="form-control" type="text" name="Nombres" id="Nombres" placeholder="Name" required maxlength="70">
            </div>
            <div class="col-md-4">
                <!--Apellido paterno-->
                <label  for="Apellido_paterno">{{'Apellido Paterno*'}}</label>
                <input value="{{isset($alumno->Apellido_paterno)?$alumno->Apellido_paterno:''}}"  class="form-control" type="text" name="Apellido_paterno" id="Apellido_paterno" placeholder="First Surname" required maxlength="70">
            </div>
            <div class="col-md-4">
                <!--Apellido Materno-->
                <label  for="Apellido_materno">{{'Apellido Materno'}}</label>
                <input value="{{isset($alumno->Apellodo_Materno)?$alumno->Apellodo_Materno:''}}"  class="form-control" type="text" name="Apellido_materno" id="Apellido_materno" placeholder="Second Surname" maxlength="70">
            </div>
        </div>
        <div class="row small">
            <div class="col-md-4">
                <!-- email-->
                <label  for="email">{{'Correo electrónico*'}}</label>
                <input value="{{isset($alumno->email)?$alumno->email:''}}"  class="form-control" type="email" name="email" id="email" required placeholder="sample@mail.com" maxlength="50"> 
            </div>
            <div class="col-md-4">
                <!-- fechade nacimiento -->
                <label  for="Fecha_de_nacimiento">{{'Fecha de nacimiento*'}}</label>
                <input value="{{isset($alumno->Fecha_de_nacimiento)?$alumno->Fecha_de_nacimiento:''}}"  class="form-control" type="date" name="Fecha_de_nacimiento" id="nacimiento" required >
            </div>
            <div class="col-md-4">
                <!-- Sexo -->
                <label  for="sexo">{{'Sexo*'}}</label>
                <select class="form-control" name="sexo" id="sexo" required>
                    @if($Modo=='crear')
                    <option value="" selected>Gender</option>
                    <option value="M">Mujer</option>
                    <option value="H">Hombre</option>
                    @elseif($alumno->Sexo=='H')
                    <option value="M">Mujer</option>
                    <option value="H" selected>Hombre</option>
                    @else
                    <option value="M" selected>Mujer</option>
                    <option value="H">Hombre</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="row small">
            <div class="col-md-4">
                <!-- Telefono -->
                <label  for="Telefono">{{'Telefono*'}}</label>
                <input value="{{isset($alumno->Telefono)?$alumno->Telefono:''}}"  type="tel" class="form-control" name="Telefono" id="Telefono" required pattern="[0-9]{8,12}" placeholder="unicamente digitos (sin guiones o espacios)">
            </div>
            <div class="col-md-4">
                <!-- Telefono2 -->
                <label  for="Telefono2">{{'Segundo Telefono'}}</label>
                <input value="{{isset($alumno->Telefono2)?$alumno->Telefono2:''}}"  type="tel" class="form-control" name="Telefono2" id="Telefono2" pattern="[0-9]{8,12}" placeholder="unicamente digitos (sin guiones o espacios)">
            </div>
            <div class="col-md-4">
                <!-- Telefono Celular -->
                <label  for="Celular">{{'Telefono Celular'}}</label>
                <input value="{{isset($alumno->Celular)?$alumno->Celular:''}}"  type="tel" class="form-control" name="Celular" id="Celular" pattern="[0-9]{8,12}" placeholder="unicamente digitos (sin guiones o espacios)" >
            </div>
        </div>

        <div class="row small">
        <div class="col-md-4">
            <label for="fk_Pais_de_origen">{{'País de origen*'}}</label>
            <select name="fk_Pais_de_origen" id="fk_Pais_de_origen" class="form-control"required>
                @if($Modo=='editar')
                <option value="">Nacionalidad</option>
                    @foreach ($paises ?? '' as $pais)
                        @if($alumno->fk_Pais_de_origen == $pais->id )
                        <option value="{{$pais->id}}" selected>{{$pais->nombre}}</option>
                        @else
                        <option value="{{$pais->id}}">{{$pais->nombre}}</option>                       
                        @endif
                    @endforeach
                @else
                    <option value="" selected>Nacionalidad</option>
                    @foreach ($paises ?? '' as $pais)
                    <option value="{{$pais->id}}">{{$pais->nombre}}</option>                                                                 
                    @endforeach
                @endif
            </select>
        </div>
        <div class="col-md-4" >
            <!-- Direccion -->
            <label  for="Direccion">{{'Direccion*'}}</label>
                <input value="{{isset($alumno->Direccion)?$alumno->Direccion:''}}"  type="tel" class="form-control" name="Direccion" id="Direccion" required placeholder="Calle y numero">
        </div>
        </div>
        <!--Succes-->
        <br>
        @if($Modo=='crear')
        <div >
            <button id="btnAgregarAlumno" type="submit" class="offset-sm-4 col-sm-4 col-12 btn btn-outline-success"> <i class="material-icons">add_circle</i>   Agregar</button>
            <div><br></div>
            <a  href="{{url('Alumnos')}}" onclick="return confirm('Seguro que deseas descartar los cambios?')" class=" offset-sm-4 col-sm-4 col-12 btn btn-outline-danger"><i class="material-icons">cancel</i> Cancelar</a>
        </div>
        @elseif($Modo=='editar')   
        <div >
        <br>
        <button id="btnAgregarAlumno" type="submit" class="btn btn-outline-success offset-sm-4 col-sm-4"> <i class="material-icons">save</i> Guardar</button>
        <div><br></div>
            <a  href="{{url('Alumnos')}}" onclick="return confirm('Seguro que deseas descartar los cambios?')" class=" offset-sm-4 col-sm-4 col-12 btn btn-outline-danger"><i class="material-icons">cancel</i> Cancelar</a>
        </div>
        @endif
        
    </form>