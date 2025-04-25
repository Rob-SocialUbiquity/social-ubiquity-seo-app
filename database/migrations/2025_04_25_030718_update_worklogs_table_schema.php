<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('worklogs', function (Blueprint $table) {
            if (!Schema::hasColumn('worklogs', 'client_id')) {
                $table->unsignedBigInteger('client_id')->nullable();
            }

            if (!Schema::hasColumn('worklogs', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable();
            }

            if (!Schema::hasColumn('worklogs', 'action')) {
                $table->string('action');
            }

            if (!Schema::hasColumn('worklogs', 'notes')) {
                $table->text('notes')->nullable();
            }

            if (!Schema::hasColumn('worklogs', 'performed_at')) {
                $table->timestamp('performed_at')->nullable()->useCurrent();
            }
        });
    }

    public function down(): void
    {
        Schema::table('worklogs', function (Blueprint $table) {
            $table->dropColumn(['client_id', 'user_id', 'action', 'notes', 'performed_at']);
        });
    }
};
