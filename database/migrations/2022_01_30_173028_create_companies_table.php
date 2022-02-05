<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /* *
     * Run the migrations.
     *
     * @return void
     */
    /* public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->string('name');
            $table->string('email');
            $table->string('postcode');
            $table->string('prefecture_id');
            $table->string('city');
            $table->string('local');
            $table->string('street_address');
            $table->string('business_hour');
            $table->string('regular_holiday');
            $table->string('phone');
            $table->string('fax');
            $table->string('url');
            $table->string('license_number');
            $table->string('image');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    } */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /* public function down()
    {
        Schema::dropIfExists('companies');
    } */
}
