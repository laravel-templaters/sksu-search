<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDvDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document');
            $table->timestamps();
        });
        
        DB::table('dv_documents')
        ->insert([['document' =>'Approved Activity Design'], ['document' => 'Payroll'],
                ['document' => 'Invitation/Memo/Others'], ['document' => 'Travel Order'],
                ['document' => 'PRE/APP/PPMP'], ['document' => 'PR'],
                ['document' => 'RFQ'],['document' => 'ABC'],
                ['document' => 'NOA'], ['document' => 'Contract'],
                ['document' => 'PO'], ['document' => 'NTP (for ABCs exceeding 50,000)'],
                ['document' => 'IAR (upon delivery)'],
                ['document' => 'Reimbursements'], ['document' => 'Remittances'],
                ['document' => 'Salaries, wages and other compensations'],  ['document' => 'Other expenses/disbursements']]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_documents');
    }
}
