<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{ asset('css/tableButtons.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


<body>
    <h1 class="text-primary text-center page-header">Alumnos 
    <button onclick="agregar();" class="btn btn-outline-success"><i class="material-icons">add_circle</i> Añadir</button>
    </h1>
    <div class="row text-center">
        <div class="col-12 col-md-12 ">
            {{ Form::model(Request::all(),['route'=>'Alumnos.index','method'=>'GET','class'=> 'form-inline']) }}
                <div class="form-group">
                    {{Form::text('Nombres',null,['class'=> 'form-control','placeholder'=>'Nombres','value'=>'$_SESSION[Nombres]']) }}
                </div>
                <div class="form-group">
                    {{Form::text('Apellido_paterno',null,['class'=> 'form-control','placeholder'=>'Apellido paterno']) }}
                </div>
                <div class="form-group">
                    {{Form::text('Apellido_Materno',null,['class'=> 'form-control','placeholder'=>'Apellido materno']) }}
                </div>
                <div class="form-group">
                    {{Form::text('email',null,['class'=> 'form-control','placeholder'=>'e-mail']) }}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark btn-lg">
                        <i class="material-icons lead">find_in_page</i>
                    </button>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-sm table-striped ">
        <thead class="text-white ">
            <tr>
                <th class="bg-primary"># Inscripción</th>
                <th class="bg-primary">Acciones</th>
                <th class="bg-primary">Nombres</th>
                <th class="bg-primary">Paterno</th>
                <th class="bg-primary">Materno</th>
                <th class="bg-primary">email</th>

            </tr>
        </thead>
        
        <tbody>
        @if(empty($alumnos))
        <tr></tr>
        </tbody>
        </table>
        </div>
        @else
            @foreach($alumnos ?? '' as $alumno)
            <tr>
                <td>{{$alumno->id}}</td>
                <td  width="20%">
                    <div class="row">
                    <div >
                        <!--VIWE-->
                        <button onclick="verAlumno({{$alumno->id}});" class="btn btn-sm btn-outline-success">
                            <i class="material-icons">remove_red_eye</i>
                        </button>
                    </div>    
                    <div >
                        <!--EDIT-->
                        <button onclick="editarAlumno({{$alumno->id}});" class="btn btn-sm btn-outline-warning">
                            <i class="material-icons">edit</i>
                        </button>
                    </div>
                        <!--Delete-->
                    <form id="delete" target="ifrm" method="post" action="{{ url('/Alumnos/'.$alumno->id) }}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('Vas a borrar a {{$alumno->Nombres}} {{$alumno->Apellido_paterno}} {{$alumno->Apellido_materno}} estas seguro?')" class="btn btn-sm btn-outline-danger"><i class="material-icons">delete_outline</i></button>
                    </form>
                    </div>
                </td>
                <td class="small">{{$alumno->Nombres}} </td>
                <td class="small">{{$alumno->Apellido_paterno}}</td>
                <td class="small">{{$alumno->Apellido_Materno}}</td>
                <td class="small">{{$alumno->email}}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
    </div>
    <div class="d-flex justify-content-center">{{ $alumnos->appends(Request::all())->render()}}</div>
    @endif
     
</body>
<iframe src="" id="ifrm" name="ifrm" frameborder="0"></iframe>
<script>
function verAlumno(id){
    //Aqui hay que reemplazar la URL con la que sea necesaria
    url ="http://servescol.test/Alumnos/"
    var ifrm = document.getElementById('ifrm');
    ifrm.src = url.concat(id);
    ifrm.reload();
}
function editarAlumno(id){
    //Aqui hay que reemplazar la URL con la que sea necesaria
    url ="http://servescol.test/Alumnos/"
    var ifrm = document.getElementById('ifrm');
    ifrm.src = url.concat(id,'/edit');
    ifrm.reload();
}
function agregar(){
    var ifrm = document.getElementById('ifrm');
    ifrm.src = "http://servescol.test/Alumnos/create";
}
</script>