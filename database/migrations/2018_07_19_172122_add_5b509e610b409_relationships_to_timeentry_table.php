<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b509e610b409RelationshipsToTimeEntryTable extends Migration
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
            
        });
    }
}
