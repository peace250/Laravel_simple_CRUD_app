<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id('grade_id');
            $table->string('license_exam_category');
            $table->decimal('obtained_marks',4,2);
            $table->enum('decision',['pass','fail']);
            $table->unsignedbiginteger('candidate_id');
            $table->foreign('candidate_id')
            ->references('candidate_id')
            ->on('candidates')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('grades');
    }
}
