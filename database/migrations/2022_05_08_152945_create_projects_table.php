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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_number');
            $table->string('project_name');
            $table->string('description');
            $table->string('location');
            $table->integer('client_id');
            $table->date('project_start');
            $table->date('project_ETA');
            $table->date('project_awarding');
            $table->double('project_budget', 10, 2);
            $table->integer('status');
            $table->integer('admin_id');
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
        Schema::dropIfExists('projects');
    }
};
