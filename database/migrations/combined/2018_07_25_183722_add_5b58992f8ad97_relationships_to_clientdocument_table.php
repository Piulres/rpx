<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b58992f8ad97RelationshipsToClientDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_documents', function(Blueprint $table) {
            if (!Schema::hasColumn('client_documents', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '188484_5b5894a89a162')->references('id')->on('client_projects')->onDelete('cascade');
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
        Schema::table('client_documents', function(Blueprint $table) {
            if(Schema::hasColumn('client_documents', 'project_id')) {
                $table->dropForeign('188484_5b5894a89a162');
                $table->dropIndex('188484_5b5894a89a162');
                $table->dropColumn('project_id');
            }
            
        });
    }
}
