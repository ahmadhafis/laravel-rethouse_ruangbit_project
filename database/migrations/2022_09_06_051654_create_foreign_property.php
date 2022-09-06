<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignProperty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property', function (Blueprint $table) {
            $table->integer('city_id');
            $table->foreign('city_id')->references('id')->on('city')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('province_id');
            $table->foreign('province_id')->references('id')->on('province')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('type_property_id');
            $table->foreign('type_property_id')->references('id')->on('type_property')->onUpdate('restrict')->onDelete('restrict');
            $table->integer('ads_id');
            $table->foreign('ads_id')->references('id')->on('ad_lists')->onDelete('NULL');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
            $table->dropColumn('city_id');

            $table->dropForeign(['province_id']);
            $table->dropColumn('province_id');

            $table->dropForeign(['type_property_id']);
            $table->dropColumn('type_property_id');

            $table->dropForeign(['ads_id']);
            $table->dropColumn('ads_id');

            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
