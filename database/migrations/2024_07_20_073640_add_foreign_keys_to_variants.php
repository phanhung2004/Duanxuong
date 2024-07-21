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
        Schema::table('variants', function (Blueprint $table) {
            // Kiểm tra xem khóa ngoại đã tồn tại chưa
            if (!Schema::hasColumn('variants', 'color_id')) {
                $table->foreignId('color_id')->constrained()->onDelete('cascade');
            }

            if (!Schema::hasColumn('variants', 'size_id')) {
                $table->foreignId('size_id')->constrained()->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('variants', function (Blueprint $table) {
            $table->dropForeign(['color_id']);
            $table->dropForeign(['size_id']);
        });
    }
};
