<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sname');
            $table->string('sadd');
            $table->string('snumber');
            $table->string('lat');
            $table->string('lng');
           
            $table->string('rname');
            $table->string('radd');
            $table->string('rnumber');
            $table->string('lat2');
            $table->string('lng2');


            $table->string('pheight');
            $table->string('plength');
            $table->string('pwidth');
            $table->string('pweight');

            $table->string('comment');
            $table->string('assigned')->default('null');
            


            // setting up foreign key in pickup address
            // $table->string('pickup_add');
            // $table->foreign('pickup_add')->references('id')->on('pickup');

            // $table->string('drop_add');
            $table->string('sent_by')->default('annomous');
            // $table->string('receiver');
            $table->string('status')->default('To be picked');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcels');
    }
}
