<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'planta';

    /**
     * Run the migrations.
     * @table planta
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('ID_PLANTA', 10)->primary();
            $table->string('NOMBRE_PL', 20)->nullable()->default(null);
            $table->string('DESCIPCION', 20)->nullable()->default(null);
            $table->string('ENCARGADO', 20)->nullable()->default(null);
            $table->string('APELLIDO_ENC', 20)->nullable()->default(null);
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
