<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_compras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->bigInteger('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras');
            $table->decimal('preco', 8,2);
            $table->integer('quantidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_compras');
    }
}
