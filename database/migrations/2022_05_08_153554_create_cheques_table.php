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
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->string('cheque_number');
            $table->double('amount', 10, 2);
            $table->integer('employee_id');
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
        Schema::dropIfExists('cheques');
    }
};
