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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 60)->default('1');
            $table->string('stazione_di_arrivo', 60)->default('1');
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo');
            $table->char('codice_treno', 10)->unique(true);
            $table->tinyInteger('carrozze' );
            $table->boolean('in_orario');
            $table->boolean('cancellato');

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
        Schema::dropIfExists('train');
    }
};
