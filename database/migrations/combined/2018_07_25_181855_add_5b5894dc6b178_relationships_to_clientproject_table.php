<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b5894dc6b178RelationshipsToClientProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_projects', function(Blueprint $table) {
            if (!Schema::hasColumn('client_projects', 'client_id')) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', '188482_5b58949acd661')->references('id')->on('clients')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->integer('project_status_id')->unsigned()->nullable();
                $table->foreign('project_status_id', '188482_5b58949ae6f60')->references('id')->on('client_project_statuses')->onDelete('cascade');
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
        Schema::table('client_projects', function(Blueprint $table) {
            if(Schema::hasColumn('client_projects', 'client_id')) {
                $table->dropForeign('188482_5b58949acd661');
                $table->dropIndex('188482_5b58949acd661');
                $table->dropColumn('client_id');
            }
            if(Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->dropForeign('188482_5b58949ae6f60');
                $table->dropIndex('188482_5b58949ae6f60');
                $table->dropColumn('project_status_id');
            }
            
        });
    }
}
