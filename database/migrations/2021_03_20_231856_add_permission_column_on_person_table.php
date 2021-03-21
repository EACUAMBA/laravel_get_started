<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPermissionColumnOnPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('person', function (Blueprint $table){
            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id')->references('id')->on('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission', function (Blueprint $table){
            $table->removeColumn('permission');
        });
    }
}
