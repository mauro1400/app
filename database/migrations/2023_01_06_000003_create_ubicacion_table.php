<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ubicacion';

    /**
     * Run the migrations.
     * @table ubicacion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_UBICACION');
            $table->string('DESIGNACION', 20)->nullable()->default(null);
            $table->string('TIPO', 20)->nullable()->default(null);
            $table->string('CAPACIDAD', 20)->nullable()->default(null);
            $table->string('ID_PLANTA', 10);

            $table->index(["ID_PLANTA"], 'FK_ID_PLANTA_3');


            $table->foreign('ID_PLANTA', 'FK_ID_PLANTA_3')
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
