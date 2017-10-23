<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkorderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->primary('wk_id');
            $table->integer('product_id')->unsigned();
            $table->date('order_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('workorder_description',255);
            $table->string('product_name',255);
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('total_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
