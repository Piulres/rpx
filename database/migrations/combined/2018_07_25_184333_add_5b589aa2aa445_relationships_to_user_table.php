<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b589aa2aa445RelationshipsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            if (!Schema::hasColumn('users', 'team_id')) {
                $table->integer('team_id')->unsigned()->nullable();
                $table->foreign('team_id', '185447_5b4e2b157498f')->references('id')->on('teams')->onDelete('cascade');
                }
                if (!Schema::hasColumn('users', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '185447_5b589271e068d')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('users', function(Blueprint $table) {
            if(Schema::hasColumn('users', 'team_id')) {
                $table->dropForeign('185447_5b4e2b157498f');
                $table->dropIndex('185447_5b4e2b157498f');
                $table->dropColumn('team_id');
            }
            if(Schema::hasColumn('users', 'created_by_id')) {
                $table->dropForeign('185447_5b589271e068d');
                $table->dropIndex('185447_5b589271e068d');
                $table->dropColumn('created_by_id');
            }
            
        });
    }
}
