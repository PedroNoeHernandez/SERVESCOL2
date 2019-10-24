<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<br>
<div class="container text-center">
    {{ csrf_field() }}
    <h1>{{$alumno->Nombres}} {{$alumno->Apellido_paterno}} {{$alumno->Apellido_materno}}</h1>
    <div class="row">
        <!--Información Personal-->
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Información personal
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Fecha de nacimiento:</span>
                        </div>
                        <label class="col-12 col-md-6 ">{{$alumno->Fecha_de_nacimiento}}</label>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Sexo:</span>
                        </div>
                        <label class="col-12 col-md-6 ">{{$alumno->Sexo}}</label>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Pais de Origen:</span>  
                        </div>
                        <label class="col-12 col-md-6">{{$nacionalidad}}</label>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Dirección:</span>  
                        </div>
                        <span class="col-12 col-md-6">{{$alumno->Direccion}}</span>
                        
                    </div>
                    
                </div>
            </div>    
        </div>
        <!--Datos de contacto telefonos email-->
        <div class="col-12 col-md-4 ">
            <div class="card">
                <div class="card-header bg-primary text-white">Datos de contacto</div >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <span class="badge bg-primary text-white" >Teléfono:</span>
                            </div>
                            <label class="col-12 col-md-6 ">{{$alumno->Telefono}}</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Teléfono 2:</span>
                            </div>
                            <label class="col-12 col-md-6 ">{{$alumno->Telefono2}}</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">Celular:</span>
                            </div>
                            <label class="col-12 col-md-6 ">{{$alumno->Celular}}</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <span class="badge badge bg-primary text-white">e-mail:</span>
                            </div>
                            <label class="col-12 col-md-6">{{$alumno->email}}</label>
                        </div>
                            
                    </div>
            </div>
        </div>
        <!--Contacto de emergencia-->
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Contacto de emergencia
                </div>
                <div class="card-body">
                    Body
                </div>
            </div>    
        </div>
        <H2 class="col-12">Historial</H2>
            <!--Cursos-->
            <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Curso
                </div>
                <div class="card-body">
                    Body
                </div>
            </div>    
        </div>
    </div>
</div>
