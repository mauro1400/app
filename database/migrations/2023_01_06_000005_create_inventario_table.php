<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'inventario';

    /**
     * Run the migrations.
     * @table inventario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_INVENTARIO');
            $table->date('FECHA')->nullable()->default(null);
            $table->unsignedInteger('COD_P');
            $table->string('ID_PLANTA', 10);
            $table->unsignedInteger('CI_EMPLEADO');
            $table->timestamps();

            $table->index(["COD_P"], 'FK_COD_P_1');

            $table->index(["ID_PLANTA"], 'FK_ID_PLANTA_2');

            $table->index(["CI_EMPLEADO"], 'FK_CI_EMPLEADO_1');


            $table->foreign('CI_EMPLEADO', 'FK_CI_EMPLEADO_1')
                ->references('CI_EMPLEADO')->on('empleado')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('COD_P', 'FK_COD_P_1')
                ->references('COD_P')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID_PLANTA', 'FK_ID_PLANTA_2')
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
