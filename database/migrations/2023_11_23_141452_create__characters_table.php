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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->unsignedSmallInteger('height');
            $table->unsignedSmallInteger('weight');
            $table->text('background');
            $table->string('image');
            $table->string('armour_class',50);
            $table->unsignedTinyInteger('FOR')->default(0);
            $table->unsignedTinyInteger('DES')->default(0);
            $table->unsignedTinyInteger('COS')->default(0);
            $table->unsignedTinyInteger('INT')->default(0);
            $table->unsignedTinyInteger('SAG')->default(0);
            $table->unsignedTinyInteger('CAR')->default(0);
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
        Schema::dropIfExists('characters');
    }
};
