<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSortNoToQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('questions', function (Blueprint $table) {
            $table->smallInteger('sort_no')->after('answer')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('sort_no');
        });
    }

}
