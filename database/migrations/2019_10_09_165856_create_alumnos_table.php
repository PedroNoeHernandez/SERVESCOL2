<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Pais')) {
        }else{
            Schema::create('Pais', function (Blueprint $table) {
                $table->bigIncrements('id')->primary();
                $table->string('Pais',70);
            });
        }
        if (Schema::hasTable('alumnos')) {
            
            if (Schema::hasColumn('alumnos', 'fk_Pais_de_origen')) {
                
            }else{
                Schema::table('alumnos', function (Blueprint $table) {
                    $table->integer('fk_Pais_de_origen')->nullable($value=false);
                    $table->foreign('fk_Pais_de_origen')
                    ->references('id')->on('Pais');
                });
            }
           
        }
        else{
            Schema::create('alumnos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('Nombres',70);
                $table->string('Apellido_paterno',70);
                $table->string('Apellido_Materno',70);
                $table->string('email',50);
                $table->char('Sexo',1);
                $table->date('Fecha_de_nacimiento');
                $table->string('Telefono',14);
                $table->string('Telefono2',14);
                $table->string('Celular',14);
                $table->string('Direccion',50);
                $table->integer('fk_Pais_de_origen')->nullable($value=false);
                $table->timestamps();
                //constraints
                $table->unique('email');
                $table->primary('id');
                $table->foreign('fk_Pais_de_origen')
                ->references('id')->on('Pais');
                
            });
        }
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
