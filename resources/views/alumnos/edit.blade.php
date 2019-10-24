<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<body>
<div class="container">
    <h1 class="text-center text-secondary">{{$alumno->id}}: {{$alumno->Nombres}} {{$alumno->Apellido_paterno}} {{$alumno->Apellido_materno}}</h1>
    
    @include('Alumnos.form',['Modo'=>'editar'])
</div>
</body>

