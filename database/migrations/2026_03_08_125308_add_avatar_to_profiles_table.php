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
        Schema::table('profiles', function (Blueprint $table) {
            // Adds a string column. 'nullable()' means it's okay if it's empty.
            // 'after()' places it neatly after your description column.
            $table->string('avatar')->nullable()->after('bio'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            // This allows you to rollback the migration later if you make a mistake
            $table->dropColumn('avatar');
        });
    }
};
