<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToFragmentsTable extends Migration
{
    public function up() {
        Schema::table('fragments', function ( Blueprint $table ) {
            $table->foreignId('age_limit_id')->constrained('age_limits')->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::table('fragments', function ( Blueprint $table ) {
            $table->dropConstrainedForeignId('age_limit_id');
        });
    }
}
