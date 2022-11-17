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
        Schema::create('weather', function (Blueprint $table) {
            $table->id();

            $table->foreignId('city_id')->constrained()->onDelete('cascade');

            $table->string('condition');
            $table->float('temperature')->description('in celcius');
            $table->float('feels_like')->description('in celcius');
            $table->float('humidity');
            $table->float('wind_speed')->description('in Km/hour');
            $table->string('icon');

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
        Schema::dropIfExists('weather');
    }
};
