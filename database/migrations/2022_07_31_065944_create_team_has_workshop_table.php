<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamHasWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_has_workshop', function (Blueprint $table) {
            $table->foreignId('team_detail_id');
            $table->foreignId('workshop_id');
            $table->primary(['team_detail_id', 'workshop_id']);

            $table->foreign('team_detail_id')->references('id')->on('team_details')->onDelete('cascade');
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_has_workshop');
    }
}
