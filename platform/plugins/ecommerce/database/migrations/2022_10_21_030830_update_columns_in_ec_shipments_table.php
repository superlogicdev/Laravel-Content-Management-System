<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ec_shipments', function (Blueprint $table) {
            $table->text('label_url')->nullable();
            $table->mediumText('transaction')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ec_shipments', function (Blueprint $table) {
            $table->dropColumn(['label_url', 'transaction']);
        });
    }
};