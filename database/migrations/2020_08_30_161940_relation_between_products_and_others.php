<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationBetweenProductsAndOthers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('productos', function (Blueprint $table){
            $table->dropColumn('providers');
            $table->dropColumn('category');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('provider_id')->references('id')->on('proveedors');
            $table->foreign('category_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
