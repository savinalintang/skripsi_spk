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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternatifs_id');
            $table->unsignedBigInteger('kriterias_id');
            $table->foreign('alternatifs_id')->references('id')->on('alternatifs')->onDelete('cascade');
            $table->foreign('kriterias_id')->references('id')->on('kriterias')->onDelete('cascade');
            $table->float('nilai_awal');
            $table->float('nilai_utility')->nullable();
            $table->float('nilai_akhir')->nullable();
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
        Schema::dropIfExists('nilais');
    }
};
