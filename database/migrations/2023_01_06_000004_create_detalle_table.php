<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'detalle';

    /**
     * Run the migrations.
     * @table detalle
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_DETALLE');
            $table->double('PRECIO_ALMACEN')->nullable()->default(null);
            $table->double('PRECIO_VENTA')->nullable()->default(null);
            $table->unsignedInteger('COD_P');
            $table->string('ID_PLANTA', 10);
            $table->unsignedInteger('CI_EMPLEADO');
            $table->timestamps();

            $table->index(["COD_P"], 'FK_COD_P_2');

            $table->index(["CI_EMPLEADO"], 'FK_CI_EMPLEADO_2');

            $table->index(["ID_PLANTA"], 'FK_ID_PLANTA_4');


            $table->foreign('CI_EMPLEADO', 'FK_CI_EMPLEADO_2')
                ->references('CI_EMPLEADO')->on('empleado')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('COD_P', 'FK_COD_P_2')
                ->references('COD_P')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID_PLANTA', 'FK_ID_PLANTA_4')
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
