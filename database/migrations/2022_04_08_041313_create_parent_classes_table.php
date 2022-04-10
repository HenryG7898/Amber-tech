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
        Schema::create('parent_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('first_nm');
            $table->string('last_nm');
            $table->string('DOB');
            $table->string('gender');
            $table->string('phone_nbr');
            $table->string('relation');
            $table->string('email')->unique();
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
        Schema::dropIfExists('parent_classes');
    }
};
