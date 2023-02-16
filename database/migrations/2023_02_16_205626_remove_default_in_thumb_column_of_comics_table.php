<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->text('thumb')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $defaultImgPath = 'data:image/png;base64,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';
            $table->text('thumb')->nullable()->default($defaultImgPath)->change();
        });
    }
};