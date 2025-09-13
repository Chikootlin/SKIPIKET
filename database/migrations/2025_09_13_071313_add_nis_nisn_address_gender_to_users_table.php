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
            if (!Schema::hasColumn('users', 'nis')) {
                $table->string('nis')->nullable()->after('email');     
            }
            if (!Schema::hasColumn('users', 'nisn')) {
                $table->string('nisn')->nullable()->after('nis');      
            }
            if (!Schema::hasColumn('users', 'address')) {
                $table->string('address')->nullable()->after('nisn');  
            }
            if (!Schema::hasColumn('users', 'gender')) {
                $table->enum('gender', ['Laki-Laki', 'Perempuan'])->nullable()->after('address'); // Jenis Kelamin
            }
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'nis')) {
                $table->dropColumn('nis');
            }
            if (Schema::hasColumn('users', 'nisn')) {
                $table->dropColumn('nisn');
            }
            if (Schema::hasColumn('users', 'address')) {
                $table->dropColumn('address');
            }
            if (Schema::hasColumn('users', 'gender')) {
                $table->dropColumn('gender');
            }
        });
    }
};
