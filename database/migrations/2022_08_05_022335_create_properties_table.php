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
            $table->id();
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
            $table->bigint('ads_id', 20);
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('garage');
            $table->string('property_size',255);
            $table->string('area', 255);
            $table->string('image_transaction', 255)->nullable();
            $table->date('start_ads')->nullable();
            $table->date('end_ads')->nullable();
            $table->foreign('city_id')->references('id')->on('city')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('province_id')->references('id')->on('province')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('type_property_id')->references('id')->on('type_property')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('ads_id')->references('id')->on('ad_lists')->onDelete('NULL');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
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
