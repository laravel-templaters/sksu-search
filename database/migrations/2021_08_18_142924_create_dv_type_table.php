<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dv_id')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        DB::table('dv_type')->insert([['type' => 'Cash Advance'], ['type' => 'Purchase Order'], ['type' => 'Other Payments']]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_type');
    }
}
