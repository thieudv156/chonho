<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('cment_title');
            $table->integer('cment_point');
            $table->string('cment_content');
            $table->tinyInteger('cment_status');
            $table->integer('product_id');
            $table->integer('cust_id');
            $table->timestamp('cment_date');
            $table->string('user_cment');
            $table->string('product_cment');
            $table->string('reply_cment');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('cust_id')->references('id')->on('customers');
            
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
        Schema::dropIfExists('comment');
    }
};
