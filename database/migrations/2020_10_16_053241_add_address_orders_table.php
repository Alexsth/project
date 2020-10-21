<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('shipping_fullname')->after('delivery_status');
            $table->string('shipping_address')->after('shipping_fullname');
            $table->string('shipping_city')->after('shipping_address');
            $table->string('shipping_state')->after('shipping_city');
            $table->string('shipping_zipcode')->after('shipping_state');
            $table->string('shipping_phone')->after('shipping_zipcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('shipping_fullname');
            $table->dropColumn('shipping_address');
            $table->dropColumn('shipping_city');
            $table->dropColumn('shipping_state');
            $table->dropColumn('shipping_zipcode');
            $table->dropColumn('shipping_phone');
        });
    }
}
