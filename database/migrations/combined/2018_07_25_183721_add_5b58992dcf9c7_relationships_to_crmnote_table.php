<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b58992dcf9c7RelationshipsToCrmNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crm_notes', function(Blueprint $table) {
            if (!Schema::hasColumn('crm_notes', 'customer_id')) {
                $table->integer('customer_id')->unsigned()->nullable();
                $table->foreign('customer_id', '188451_5b5891d2db5c5')->references('id')->on('crm_customers')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crm_notes', function(Blueprint $table) {
            if(Schema::hasColumn('crm_notes', 'customer_id')) {
                $table->dropForeign('188451_5b5891d2db5c5');
                $table->dropIndex('188451_5b5891d2db5c5');
                $table->dropColumn('customer_id');
            }
            
        });
    }
}
