<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b58992cc0458RelationshipsToTimeEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_entries', function(Blueprint $table) {
            if (!Schema::hasColumn('time_entries', 'work_type_id')) {
                $table->integer('work_type_id')->unsigned()->nullable();
                $table->foreign('work_type_id', '186312_5b509e607e556')->references('id')->on('time_work_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('time_entries', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '186312_5b509e609b81d')->references('id')->on('time_projects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('time_entries', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '186312_5b50fc726754e')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('time_entries', 'created_by_team_id')) {
                $table->integer('created_by_team_id')->unsigned()->nullable();
                $table->foreign('created_by_team_id', '186312_5b50fc72786bf')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::table('time_entries', function(Blueprint $table) {
            if(Schema::hasColumn('time_entries', 'work_type_id')) {
                $table->dropForeign('186312_5b509e607e556');
                $table->dropIndex('186312_5b509e607e556');
                $table->dropColumn('work_type_id');
            }
            if(Schema::hasColumn('time_entries', 'project_id')) {
                $table->dropForeign('186312_5b509e609b81d');
                $table->dropIndex('186312_5b509e609b81d');
                $table->dropColumn('project_id');
            }
            if(Schema::hasColumn('time_entries', 'created_by_id')) {
                $table->dropForeign('186312_5b50fc726754e');
                $table->dropIndex('186312_5b50fc726754e');
                $table->dropColumn('created_by_id');
            }
            if(Schema::hasColumn('time_entries', 'created_by_team_id')) {
                $table->dropForeign('186312_5b50fc72786bf');
                $table->dropIndex('186312_5b50fc72786bf');
                $table->dropColumn('created_by_team_id');
            }
            
        });
    }
}
