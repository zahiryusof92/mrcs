<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('state', 50)->nullable();
            $table->string('ic_no', 12)->nullable();
            $table->text('address')->nullable();
            $table->string('postcode', 6)->nullable();            
            $table->string('phone_no', 10)->nullable();
            $table->string('race', 50)->nullable();
            $table->string('email')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('age', 50)->nullable(); 
            $table->string('marriage_status', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('applicants');
    }

}
