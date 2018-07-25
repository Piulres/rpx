<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b58992da0d47RelationshipsToCrmCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crm_customers', function(Blueprint $table) {
            if (!Schema::hasColumn('crm_customers', 'crm_status_id')) {
                $table->integer('crm_status_id')->unsigned()->nullable();
                $table->foreign('crm_status_id', '188450_5b5891cf51746')->references('id')->on('crm_statuses')->onDelete('cascade');
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
        Schema::table('crm_customers', function(Blueprint $table) {
            if(Schema::hasColumn('crm_customers', 'crm_status_id')) {
                $table->dropForeign('188450_5b5891cf51746');
                $table->dropIndex('188450_5b5891cf51746');
                $table->dropColumn('crm_status_id');
            }
            
        });
    }
}
