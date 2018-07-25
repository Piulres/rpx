<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b5894dcc162fRelationshipsToClientNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_notes', function(Blueprint $table) {
            if (!Schema::hasColumn('client_notes', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '188483_5b5894a25ce04')->references('id')->on('client_projects')->onDelete('cascade');
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
        Schema::table('client_notes', function(Blueprint $table) {
            if(Schema::hasColumn('client_notes', 'project_id')) {
                $table->dropForeign('188483_5b5894a25ce04');
                $table->dropIndex('188483_5b5894a25ce04');
                $table->dropColumn('project_id');
            }
            
        });
    }
}
