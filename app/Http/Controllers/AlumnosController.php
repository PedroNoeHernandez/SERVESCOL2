<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $Nombres = $request->get('Nombres');
            $Apellido_paterno = $request->get('Apellido_paterno');
            $Apellido_Materno = $request->get('Apellido_Materno');
            $email =$request->get('email');
        if(empty($Nombres) && empty($Apellido_paterno) && empty($Apellido_Materno) && empty($email)){
            return view('alumnos.index');
        }
        else{
            
            $data['alumnos']=Alumnos::orderby('Apellido_paterno')
            ->Nombres($Nombres)
            ->Apellido_paterno($Apellido_paterno)
            ->Apellido_Materno($Apellido_Materno)
            ->email($email)
            ->paginate(20);
            return view('alumnos.index', $data);
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = DB::table('pais')->get();        
        return view('alumnos.create',compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //para validacion
        //para almacenar
        $mensaje = "";
        $error = 1;
        try{
            $datosAlumno=request()->except('_token');
            Alumnos::insert($datosAlumno);
        }catch(\Illuminate\Database\QueryException $e){
            if(strpos($e->getMessage(),'Duplicate entry')){
                $mensaje = "Ya existe un alumno con ese correo registrado";
                return view('mensaje',compact('mensaje','error'));
            }
                $mensaje = "Ha ocurrido un error al insertar al alumno:\n {$e->getMessage()}\n Contacte al administrador";
                return view('mensaje',compact('mensaje','error'));              
            }            
                $error = 0 ;
                $Nombres = $request->get('Nombres');
                $Apellido_paterno = $request->get('Apellido_paterno');
                $Apellido_Materno = $request->get('Apellido_Materno');
                $mensaje ="{$Nombres} {$Apellido_paterno} {$Apellido_Materno} \n Agregado correctamente";
                return view('mensaje',compact('mensaje','error'));


        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumnos::findOrFail($id);
        $nacionalidad = DB::table('pais')->where('id','=',$alumno->fk_Pais_de_origen)->value('Nombre');
        return view('alumnos.show',compact('alumno','nacionalidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumnos::findOrFail($id);
        $paises= DB::table('pais')->get();
        return view('alumnos.edit',compact('alumno','paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $datosAlumno=request()->except(['_token','_method']);
            Alumnos::where('id','=',$id)->update($datosAlumno);
        }catch(\Illuminate\Database\QueryException $e){
            $error = 1 ;
            if(strpos($e->getMessage(),'Duplicate entry')){
                $mensaje = "Ya existe un alumno con ese correo registrado";
                return view('mensaje',compact('mensaje','error'));
            }
                $mensaje = "Ha ocurrido un error al editar al alumno:\n {$e->getMessage()}\n Contacte al administrador";
                return view('mensaje',compact('mensaje','error')); 
        }

        $error = 0 ;
        $Nombres = $request->get('Nombres');
        $Apellido_paterno = $request->get('Apellido_paterno');
        $Apellido_Materno = $request->get('Apellido_Materno');
        $mensaje ="{$Nombres} {$Apellido_paterno} {$Apellido_Materno} \n Editado correctamente";
        return view('mensaje',compact('mensaje','error'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
        Alumnos::destroy($id);
        }catch (\Illuminate\Database\QueryException $e){
            $mensaje = "Ha ocurrido un error al eliminar al alumno:\n {$e->getMessage()}\n Contacte al administrador";            
            $error = 1;
            return view('mensaje',compact('mensaje','error'));         

        }
        $error = 0 ;
        $mensaje = "Alumno eliminado correctamente al realizar una nueva busqueda ya no aparecera en el listado";
        return view('mensaje',compact('mensaje','error'));         
    }
}
