<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1532034162TimeEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_entries', function (Blueprint $table) {
            if(Schema::hasColumn('time_entries', 'created_by_id')) {
                $table->dropForeign('fk_186312_user_created_by_id_time_entry');
                $table->dropIndex('fk_186312_user_created_by_id_time_entry');
                $table->dropColumn('created_by_id');
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
        Schema::table('time_entries', function (Blueprint $table) {
                        
        });

    }
}
