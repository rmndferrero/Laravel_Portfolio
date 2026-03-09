<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{


    Schema::table('skills', function (Blueprint $table) {
        $table->string('type')->nullable();
        $table->string('description')->nullable();
    });
}

public function down(): void
{
    Schema::table('skills', function (Blueprint $table) {
        $table->dropColumn(['type', 'description']);
        $table->string('proficiency_level')->nullable();
    });
}
};
