<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->string('category');
            $table->timestamps();
        });

        DB::table('dv_category')
        ->insert([['type_id' => 1, 'category' => 'Advances for Operating Expenses'],
        ['type_id' => 1, 'category' => 'Advances for Payroll'],
        ['type_id' => 1, 'category' => 'Advances to Officers and Employees'], 
        ['type_id' => 2, 'category' => 'Regular Deliveries (Delivery First)'],
        ['type_id' => 2, 'category' => 'Kaliwaan'],
        ['type_id' => 3, 'category' => 'Utilities']]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_category');
    }
}
