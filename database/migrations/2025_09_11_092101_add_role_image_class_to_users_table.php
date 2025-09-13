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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->unsignedBigInteger('role_id')->default(2)->after('id');
            }

            if (!Schema::hasColumn('users', 'image')) {
                $table->string('image')->nullable()->after('fullname');
            }

            if (!Schema::hasColumn('users', 'class')) {
                $table->string('class')->nullable()->after('image');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'role_id')) {
                $table->dropColumn('role_id');
            }

            if (Schema::hasColumn('users', 'image')) {
                $table->dropColumn('image');
            }

            if (Schema::hasColumn('users', 'class')) {
                $table->dropColumn('class');
            }
        });
    }
};
