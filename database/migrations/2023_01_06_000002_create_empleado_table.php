<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'empleado';

    /**
     * Run the migrations.
     * @table empleado
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('CI_EMPLEADO');
            $table->string('NOMBRE_EMPLEADO', 20)->nullable()->default(null);
            $table->string('APELLIDO_P', 20)->nullable()->default(null);
            $table->string('APELLIDO_M', 20)->nullable()->default(null);
            $table->date('FECHA_NAC')->nullable()->default(null);
            $table->date('FECHA_INICIO')->nullable()->default(null);
            $table->integer('TELEFONO')->nullable()->default(null);
            $table->string('DIRECCION', 200)->nullable()->default(null);
            $table->float('SALARIO')->nullable()->default(null);
            $table->tinyInteger('SEXO')->nullable()->default(null);
            $table->string('ID_PLANTA', 10);

            $table->index(["ID_PLANTA"], 'FK_ID_PLANTA_1');


            $table->foreign('ID_PLANTA', 'FK_ID_PLANTA_1')
                ->references('ID_PLANTA')->on('planta')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
