<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->string('name', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('price')->nullable();
            $table->enum('status_property', ['sold','for sell','for rent']);
            $table->string('street', 255);
            $table->integer('city_id');
            $table->integer('province_id');
            $table->longtext('description')->nullable();
            $table->integer('type_property_id');
            $table->integer('ads_id');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('garage');
            $table->string('property_size',255);
            $table->string('area', 255);
            $table->string('image_transaction', 255)->nullable();
            $table->date('start_ads')->nullable();
            $table->date('end_ads')->nullable();
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
        Schema::dropIfExists('property');
    }
}
